<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Portfolio - Anass Lahmar</title>

<style>
body{
  margin:0;
  font-family:Arial, sans-serif;
  background:linear-gradient(135deg,#0a0f1f,#111827,#020617);
  color:#e5e7eb;
}

/* NAV */
nav{
  display:flex;
  justify-content:center;
  align-items:center;
  padding:20px;
  background:rgba(0,0,0,0.5);
  backdrop-filter:blur(10px);
}

nav h1{
  color:#38bdf8;
  font-size:24px;
  font-weight:600;
}

/* HEADER */
header{
  text-align:center;
  padding:40px;
}

header h2{
  font-size:34px;
  background:linear-gradient(90deg,#38bdf8,#6366f1);
  -webkit-background-clip:text;
  -webkit-text-fill-color:transparent;
}

/* ATELIERS */
.container{
  display:grid;
  grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
  gap:20px;
  padding:20px;
}

.atelier{
  padding:20px;
  background:rgba(255,255,255,0.05);
  border-radius:12px;
  text-align:center;
  cursor:pointer;
  border:1px solid rgba(255,255,255,0.05);
  transition:0.3s;
}

.atelier:hover{
  transform:translateY(-5px);
  background:rgba(99,102,241,0.15);
}

/* MODAL */
#modal{
  display:none;
  position:fixed;
  top:0; left:0;
  width:100%; height:100%;
  background:rgba(0,0,0,0.8);
}

.modal-content{
  background:#020617;
  width:500px;
  margin:80px auto;
  padding:20px;
  border-radius:12px;
}

.section{
  margin-top:15px;
}

textarea{
  width:100%;
  height:120px;
  background:#0f172a;
  color:white;
  border:none;
  padding:10px;
  border-radius:8px;
}
button{
  margin-top:10px;
  padding:10px;
  background:#ef4444;
  border:none;
  color:white;
  cursor:pointer;
  border-radius:6px;
}
</style>
</head>

<body>

<nav>
  <h1>Anass Lahmar</h1>
</nav>

<header>
  <h2>Portfolio Professionnel</h2>
</header>

<div class="container">

  <div class="atelier" onclick="openAtelier('Atelier 1')">Atelier 1</div>
  <div class="atelier" onclick="openAtelier('Atelier 2')">Atelier 2</div>
  <div class="atelier" onclick="openAtelier('Atelier 3')">Atelier 3</div>
  <div class="atelier" onclick="openAtelier('Atelier 4')">Atelier 4</div>

</div>

<!-- EXERCICES SIMPLE DEMO -->
<div id="exercices"></div>

<!-- MODAL -->
<div id="modal">
  <div class="modal-content">

    <h3 id="title"></h3>

    <div class="section">
      <strong>📄 Rapport</strong>
      <textarea id="rapport"></textarea>
    </div>

    <div class="section">
      <strong>💻 TP</strong>
      <textarea id="tp"></textarea>
    </div>

    <button onclick="closeModal()">Fermer</button>

  </div>
</div>

<script>
const data = {
  "Atelier 1": ["Exercice 1","Exercice 2","Exercice 3","Exercice 4","Exercice 5","Exercice 6","Exercice 7","Exercice 8"],
  "Atelier 2": ["Ex1","Ex2","Ex3","Ex4","Ex5","Ex6","Ex7","Ex8"],
  "Atelier 3": ["A","B","C","D","E","F","G","H"],
  "Atelier 4": ["X1","X2","X3","X4","X5","X6","X7","X8"]
};

function openAtelier(name){
  let container = document.getElementById("exercices");
  container.innerHTML = "<h3 style='text-align:center'>"+name+"</h3>";

  data[name].forEach(ex=>{
    let div = document.createElement("div");
    div.className = "atelier";
    div.innerText = ex;
    div.onclick = ()=>openExercise(ex);
    container.appendChild(div);
  });
}

function openExercise(name){
  document.getElementById("modal").style.display="block";
  document.getElementById("title").innerText=name;
  document.getElementById("rapport").value="";
  document.getElementById("tp").value="";
}

function closeModal(){
  document.getElementById("modal").style.display="none";
}
</script>

</body>
</html>