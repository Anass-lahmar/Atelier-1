<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Anass Lahmar</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
    body {
      background: linear-gradient(135deg, #0a0f1f, #111827, #020617);
      color: #e5e7eb;
    }: #e5nav {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 25px;
      background: rgba(0,0,0,0.5);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255,255,255,0.05);
    }-contnav h1 {
      color: #38bdf8;
      font-size: 26px;
      letter-spacing: 1px;
      font-weight: 600;
    }tems:header {
      text-align: center;
      padding: 70px 20px 40px;
    }ba(0,0,0,0.5);
      backdrop-filter: blur(12px);
      border-bottom: 1px solid rgba(255,255,255,0.05)
    nav h1 ader { text-align: center; padding: 60.atelier {
      padding: 25px;
      border-radius: 15px;
      background: rgba(255,255,255,0.04);
      cursor: pointer;
      text-align: center;
      transition: 0.3s;
      border: 1px solid rgba(255,255,255,0.05);
    } { pa.atelier:hover {
      background: rgba(99,102,241,0.15);
      transform: translateY(-6px) sca55,255,255,0.05); cursor: pointer; text-align: center; }
    .atelier:hover { background: rgba(56,189,248,0.2); }

    .details { display: none; margin-top: 30px; }

    .exercice { margin: 10px 0; padding: 12px; background: rgba(255,255,255,0.08); border-radius: 8px; cursor: pointer; }

    .modal { position: fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.8); display:none; justify-content:center; align-items:center; }

    .modal-content {
      background:#020617;
      padding:25px;
      border-radius:12px;
      width:500px;
      max-height:80vh;
      overflow-y:auto;
    }

    .section { margin-top:10px; padding:10px; background: rgba(255,255,255,0.05); border-radius:8px; }

    .close { margin-top:15px; padding:8px 12px; background:#38bdf8; border:none; border-radius:6px; cursor:pointer; }
  </style>
</head>
<body>

<nav><h1>Anass Lahmar</h1></nav>
<header><h2>Mes Ateliers</h2></header>

<div class="container">

<div class="grid">
  <div class="atelier" onclick="showAtelier(1)">Atelier 1</div>
  <div class="atelier" onclick="showAtelier(2)">Atelier 2</div>
  <div class="atelier" onclick="showAtelier(3)">Atelier 3</div>
  <div class="atelier" onclick="showAtelier(4)">Atelier 4</div>
  <div class="atelier" onclick="showAtelier(5)">Atelier 5</div>
  <div class="atelier" onclick="showAtelier(6)">Atelier 6</div>
  <div class="atelier" onclick="showAtelier(7)">Atelier 7</div>
  <div class="atelier" onclick="showAtelier(8)">Atelier 8</div>
</div>

<div id="details" class="details"></div>

</div>

<div id="modal" class="modal">
  <div class="modal-content">
    <h3 id="title"></h3>
    <div class="section">
      <strong>📄 Rapport</strong>
      <textarea id="rapport" placeholder="كتب هنا rapport ديالك..." style="width:100%;height:100px;margin-top:8px;background:#0f172a;color:white;border:none;padding:10px;border-radius:8px;"></textarea>
    </div>
    <div class="section">
      <strong>💻 TP</strong>
      <textarea id="tp" placeholder="حط هنا TP ديالك (code / شرح)..." style="width:100%;height:120px;margin-top:8px;background:#0f172a;color:white;border:none;padding:10px;border-radius:8px;"></textarea>
    </div>
    <button class="close" onclick="closeModal()">Fermer</button>
  </div>
</div>

<script>
// DATA UNIQUE POUR CHAQUE ATELIER
const data = {
  1: ["HTML Structure","CSS Design","Flexbox","Grid","Responsive","Forms","Animation","Project Page"],
  2: ["Variables JS","Conditions","Loops","Functions","DOM","Events","Fetch API","Mini App"],
  3: ["Node Setup","Routing","Controllers","Middleware","API","Auth","CRUD","Project API"],
  4: ["SQL Basics","Tables","Insert","Select","Update","Delete","Relations","Mini DB"],
  5: ["Git Init","Commit","Branch","Merge","Remote","Pull","Push","Workflow"],
  6: ["UI Design","Colors","Typography","UX","Wireframe","Prototype","Figma","Design System"],
  7: ["Security Basics","Hash","Auth","JWT","XSS","CSRF","Validation","Secure App"],
  8: ["Deploy","Vercel","Netlify","Env","Build","CI/CD","Domain","Final Project"]
};

function showAtelier(id) {
  const container = document.getElementById('details');
  container.style.display = 'block';
  container.innerHTML = `<h3>Atelier ${id}</h3>`;

  data[id].forEach((ex, i) => {
    container.innerHTML += `<div class="exercice" onclick="openModal(${id}, ${i+1})">${ex}</div>`;
  });
}

function openModal(a, e) {
  document.getElementById('modal').style.display = 'flex';
  document.getElementById('title').innerText = `Atelier ${a} - ${data[a][e-1]}`;
  document.getElementById('rapport').value = `Rapport détaillé de ${data[a][e-1]}`;
  document.getElementById('tp').value = `TP de ${data[a][e-1]} (code + résultat)`;
}

function closeModal() {
  document.getElementById('modal').style.display = 'none';
}
</script>

</body>
</html>
