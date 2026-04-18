<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio - ANASS LAHMAR</title>

<style>
:root{
  --bg1:#0f2027;
  --bg2:#203a43;
  --bg3:#2c5364;
  --card:rgba(255,255,255,0.08);
  --text:white;
  --accent:#00c6ff;
}

body.light{
  --bg1:#e8f0ff;
  --bg2:#dbe7ff;
  --bg3:#cfe0ff;
  --card:rgba(0,0,0,0.08);
  --text:#111;
  --accent:#0072ff;
}

body{
  margin:0;
  font-family:system-ui, Arial, sans-serif;
  background:linear-gradient(135deg,var(--bg1),var(--bg2),var(--bg3));
  color:var(--text);
  overflow-x:hidden;
  transition:0.4s;
}

/* NAV */
nav{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:20px 30px;
  background:rgba(255,255,255,0.05);
  backdrop-filter:blur(15px);
}

.nav-center{
  text-align:center;
  flex:1;
}

h1{
  margin:0;
  font-size:28px;
  letter-spacing:2px;
}

/* BUTTON THEME */
.theme-btn{
  padding:8px 12px;
  border:none;
  border-radius:8px;
  cursor:pointer;
  background:var(--accent);
  color:white;
  transition:0.3s;
}

.theme-btn:hover{
  transform:scale(1.05);
}

/* GRID */
.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  gap:20px;
  padding:30px;
}

.atelier{
  background:var(--card);
  padding:20px;
  border-radius:15px;
  text-align:center;
  cursor:pointer;
  backdrop-filter:blur(12px);
  transition:0.3s;
  border:1px solid rgba(255,255,255,0.1);
}

.atelier:hover{
  transform:translateY(-8px);
  box-shadow:0 15px 30px rgba(0,0,0,0.3);
}

/* EXERCICE */
.exercice{
  background:var(--card);
  margin:10px 0;
  padding:12px;
  border-radius:10px;
  cursor:pointer;
  transition:0.3s;
}

.exercice:hover{
  transform:translateX(6px);
  background:rgba(255,255,255,0.2);
}

/* MODAL */
#modal{
  display:none;
  position:fixed;
  top:0;left:0;
  width:100%;height:100%;
  background:rgba(0,0,0,0.75);
}

.modal-content{
  background:var(--card);
  backdrop-filter:blur(20px);
  width:90%;
  max-width:450px;
  margin:100px auto;
  padding:20px;
  border-radius:15px;
  color:var(--text);
}

/* INPUTS */
input{
  width:100%;
  padding:10px;
  margin:8px 0;
  border:none;
  border-radius:8px;
}

/* BUTTONS */
button{
  padding:10px 12px;
  border:none;
  border-radius:8px;
  background:var(--accent);
  color:white;
  cursor:pointer;
  transition:0.3s;
  margin:4px;
}

button:hover{
  transform:scale(1.05);
}

/* ANIMATION */
.atelier,.exercice{
  opacity:0;
  transform:translateY(30px);
  transition:0.5s ease;
}

.show{
  opacity:1;
  transform:translateY(0);
}
</style>
</head>

<body>

<nav>
  <button class="theme-btn" onclick="toggleTheme()">🌗 Mode</button>

  <div class="nav-center">
    <h1>ANASS LAHMAR</h1>
    <span>Portfolio TPs & Rapports</span>
  </div>

  <div style="width:80px;"></div>
</nav>

<div class="container">
  <div class="atelier" onclick="openAtelier('Atelier 1')">Atelier 1</div>
  <div class="atelier" onclick="openAtelier('Atelier 2')">Atelier 2</div>
  <div class="atelier" onclick="openAtelier('Atelier 3')">Atelier 3</div>
  <div class="atelier" onclick="openAtelier('Atelier 4')">Atelier 4</div>
  <div class="atelier" onclick="openAtelier('Atelier 5')">Atelier 5</div>
  <div class="atelier" onclick="openAtelier('Atelier 6')">Atelier 6</div>
  <div class="atelier" onclick="openAtelier('Atelier 7')">Atelier 7</div>
  <div class="atelier" onclick="openAtelier('Atelier 8')">Atelier 8</div>
  <div class="atelier" onclick="openAtelier('Atelier 9')">Atelier 9</div>
  <div class="atelier" onclick="openAtelier('Atelier 10')">Atelier 10</div>
  <div class="atelier" onclick="openAtelier('Atelier 11')">Atelier 11</div>
  <div class="atelier" onclick="openAtelier('Atelier 12')">Atelier 12</div>
</div>

<div id="exercices"></div>

<!-- MODAL -->
<div id="modal" onclick="outsideClick(event)">
  <div class="modal-content">

    <h3 id="title"></h3>

    <h4>🔵 TP</h4>
    <input id="tpLink" placeholder="Lien TP">
    <button onclick="openLink('tp')">Ouvrir TP</button>

    <h4>🟢 Rapport</h4>
    <input id="rapportLink" placeholder="Lien Rapport">
    <button onclick="openLink('rapport')">Ouvrir Rapport</button>

    <br><br>

    <button onclick="saveData()">Save</button>
    <button onclick="deleteData()">Delete</button>
    <button onclick="closeModal()">Close</button>

  </div>
</div>

<script>
const data={
"Atelier 1":["Ex 1","Ex 2","Ex 3"],
"Atelier 2":["Ex 1","Ex 2","Ex 3"],
"Atelier 3":["Ex 1","Ex 2","Ex 3"],
"Atelier 4":["Ex 1","Ex 2","Ex 3"],
"Atelier 5":["Ex 1","Ex 2","Ex 3"],
"Atelier 6":["Ex 1","Ex 2","Ex 3"],
"Atelier 7":["Ex 1","Ex 2","Ex 3"],
"Atelier 8":["Ex 1","Ex 2","Ex 3"],
"Atelier 9":["Ex 1","Ex 2","Ex 3"],
"Atelier 10":["Ex 1","Ex 2","Ex 3"],
"Atelier 11":["Ex 1","Ex 2","Ex 3"],
"Atelier 12":["Ex 1","Ex 2","Ex 3"]
};

let current="";

function openAtelier(a){
let box=document.getElementById("exercices");
box.innerHTML="<h3>"+a+"</h3>";

data[a].forEach(e=>{
let d=document.createElement("div");
d.className="exercice";
d.innerText=e;
d.onclick=()=>openEx(a,e);
box.appendChild(d);
});

observe();
}

function openEx(a,e){
current=a+"_"+e;
modal.style.display="block";
title.innerText=current;
tpLink.value=localStorage.getItem(current+"_tp")||"";
rapportLink.value=localStorage.getItem(current+"_rapport")||"";
}

function saveData(){
localStorage.setItem(current+"_tp",tpLink.value);
localStorage.setItem(current+"_rapport",rapportLink.value);
}

function deleteData(){
localStorage.removeItem(current+"_tp");
localStorage.removeItem(current+"_rapport");
}

function openLink(t){
let l=localStorage.getItem(current+"_"+t);
if(l) window.open(l);
}

function closeModal(){modal.style.display="none";}
function outsideClick(e){if(e.target.id==="modal")closeModal();}

function toggleTheme(){
document.body.classList.toggle("light");
}

const obs=new IntersectionObserver(e=>{
e.forEach(x=>x.isIntersecting&&x.target.classList.add("show"));
});

function observe(){
document.querySelectorAll(".atelier,.exercice").forEach(x=>obs.observe(x));
}

window.onload=observe;
</script>

</body>
</html>