<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio - ANASS LAHMAR</title>

<style>
body{
  margin:0;
  font-family:system-ui, Arial, sans-serif;
  background:linear-gradient(135deg,#0f2027,#203a43,#2c5364);
  color:white;
  overflow-x:hidden;
}

/* NAV */
nav{
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:20px 40px;
  background:rgba(255,255,255,0.05);
  backdrop-filter:blur(15px);
}

/* PROFILE */
.profile{
  display:flex;
  align-items:center;
  gap:15px;
}

.profile img{
  width:55px;
  height:55px;
  border-radius:50%;
  object-fit:cover;
  border:2px solid #00c6ff;
  box-shadow:0 0 15px rgba(0,198,255,0.5);
}

.profile strong{
  font-size:18px;
}

.profile span{
  font-size:12px;
  opacity:0.7;
}

/* GRID */
.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
  gap:25px;
  padding:30px;
}

.atelier{
  background:rgba(255,255,255,0.08);
  padding:25px;
  border-radius:20px;
  text-align:center;
  cursor:pointer;
  backdrop-filter:blur(12px);
  transition:0.4s;
}

.atelier:hover{
  transform:translateY(-10px) scale(1.05);
  box-shadow:0 20px 40px rgba(0,0,0,0.5);
}

.exercice{
  background:rgba(255,255,255,0.08);
  margin:12px 0;
  padding:14px;
  border-radius:10px;
  cursor:pointer;
  display:flex;
  justify-content:space-between;
  align-items:center;
  transition:0.3s;
}

.exercice:hover{
  transform:translateX(8px);
  background:rgba(255,255,255,0.2);
}

/* MODAL */
#modal{
  display:none;
  position:fixed;
  top:0;left:0;
  width:100%;height:100%;
  background:rgba(0,0,0,0.8);
  backdrop-filter:blur(6px);
}

.modal-content{
  background:rgba(255,255,255,0.1);
  width:90%;
  max-width:500px;
  margin:100px auto;
  padding:25px;
  border-radius:15px;
  backdrop-filter:blur(20px);
}

input{
  width:100%;
  padding:10px;
  margin:10px 0;
  border:none;
  border-radius:8px;
}

button{
  padding:10px 15px;
  border:none;
  border-radius:8px;
  background:#00c6ff;
  color:white;
  cursor:pointer;
  transition:0.3s;
  margin:5px;
}

button:hover{
  transform:scale(1.05);
  background:#0072ff;
}
</style>
</head>

<body>

<nav>
  <div class="profile">
    <!-- 👇 دير صورتك هنا -->
    <img src="https://via.placeholder.com/150" alt="profile">
    <div>
      <strong>ANASS LAHMAR</strong><br>
      <span>Web Developer Portfolio</span>
    </div>
  </div>
</nav>

<div class="container">
  <div class="atelier" onclick="openAtelier('Atelier 1')">Atelier 1</div>
  <div class="atelier" onclick="openAtelier('Atelier 2')">Atelier 2</div>
  <div class="atelier" onclick="openAtelier('Atelier 3')">Atelier 3</div>
  <div class="atelier" onclick="openAtelier('Atelier 4')">Atelier 4</div>
  <div class="atelier" onclick="openAtelier('Atelier 5')">Atelier 5</div>
  <div class="atelier" onclick="openAtelier('Atelier 6')">Atelier 6</div>
</div>

<div id="exercices"></div>

<div id="modal" onclick="outsideClick(event)">
  <div class="modal-content">
    <h3 id="title"></h3>

    <label>Lien TP</label>
    <input type="text" id="tpLink">

    <label>Lien Rapport</label>
    <input type="text" id="rapportLink">

    <button onclick="saveData()">💾 Sauvegarder</button>
    <button onclick="deleteData()">🗑 Supprimer</button>
    <button onclick="closeModal()">Fermer</button>
  </div>
</div>

<script>
const data = {
"Atelier 1":["Exercice 1","Exercice 2","Exercice 3","Exercice 4"],
"Atelier 2":["Exercice 1","Exercice 2","Exercice 3","Exercice 4"],
"Atelier 3":["Exercice 1","Exercice 2","Exercice 3","Exercice 4"],
"Atelier 4":["Exercice 1","Exercice 2","Exercice 3","Exercice 4"],
"Atelier 5":["Exercice 1","Exercice 2","Exercice 3","Exercice 4"],
"Atelier 6":["Exercice 1","Exercice 2","Exercice 3","Exercice 4"]
};

let currentKey="";

function openAtelier(name){
let box=document.getElementById("exercices");
box.innerHTML="<h3>"+name+"</h3>";

data[name].forEach(ex=>{
let key=name+"_"+ex;

let tp=localStorage.getItem(key+"_tp");
let rp=localStorage.getItem(key+"_rapport");

let status="🔴";
if(tp && rp) status="🟢";
else if(tp || rp) status="🟡";

let div=document.createElement("div");
div.className="exercice";

div.innerHTML=`<span>${status} ${ex}</span>`;

div.onclick=()=>openExercise(name,ex);
box.appendChild(div);
});
}

function openExercise(a,ex){
currentKey=a+"_"+ex;
document.getElementById("modal").style.display="block";

document.getElementById("tpLink").value=
localStorage.getItem(currentKey+"_tp")||"";

document.getElementById("rapportLink").value=
localStorage.getItem(currentKey+"_rapport")||"";

document.getElementById("title").innerText=currentKey;
}

function saveData(){
localStorage.setItem(currentKey+"_tp",document.getElementById("tpLink").value);
localStorage.setItem(currentKey+"_rapport",document.getElementById("rapportLink").value);
}

function deleteData(){
localStorage.removeItem(currentKey+"_tp");
localStorage.removeItem(currentKey+"_rapport");
document.getElementById("tpLink").value="";
document.getElementById("rapportLink").value="";
}

function closeModal(){
document.getElementById("modal").style.display="none";
}

function outsideClick(e){
if(e.target.id==="modal") closeModal();
}
</script>

</body>
</html>