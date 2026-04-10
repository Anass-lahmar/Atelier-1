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
      background: linear-gradient(135deg, #0f172a, #1e293b, #020617);
      color: #e2e8f0;
    }

    nav {
      display: flex;
      justify-content: space-between;
      padding: 20px 50px;
      background: rgba(0,0,0,0.4);
      backdrop-filter: blur(10px);
    }

    nav h1 { color: #38bdf8; }

    header {
      text-align: center;
      padding: 60px 20px;
    }

    header h2 { font-size: 36px; }

    .container { width: 85%; margin: auto; }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .atelier {
      padding: 30px;
      border-radius: 20px;
      background: rgba(255,255,255,0.05);
      cursor: pointer;
      text-align: center;
      transition: 0.3s;
    }

    .atelier:hover {
      transform: translateY(-5px);
      background: rgba(56,189,248,0.2);
    }

    .details {
      display: none;
      margin-top: 30px;
    }

    .exercice {
      margin: 10px 0;
      padding: 15px;
      border-radius: 10px;
      background: rgba(255,255,255,0.08);
      cursor: pointer;
    }

    .modal {
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0,0,0,0.7);
      display: none;
      justify-content: center;
      align-items: center;
    }

    .modal-content {
      background: #0f172a;
      padding: 25px;
      border-radius: 15px;
      width: 400px;
      text-align: center;
      animation: fadeIn 0.3s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.9); }
      to { opacity: 1; transform: scale(1); }
    }

    .close {
      margin-top: 15px;
      padding: 8px 15px;
      background: #38bdf8;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      color: white;
    }

    footer {
      text-align: center;
      padding: 30px;
      margin-top: 50px;
      opacity: 0.6;
    }

  </style>
</head>
<body>

<nav>
  <h1>Anass Lahmar</h1>
</nav>

<header>
  <h2>Mes Ateliers</h2>
</header>

<div class="container">

  <div class="grid">
    <div class="atelier" onclick="showAtelier(1)">Atelier 1</div>
    <div class="atelier" onclick="showAtelier(2)">Atelier 2</div>
    <div class="atelier" onclick="showAtelier(3)">Atelier 3</div>
    <div class="atelier" onclick="showAtelier(4)">Atelier 4</div>
  </div>

  <div id="atelier1" class="details"></div>
  <div id="atelier2" class="details"></div>
  <div id="atelier3" class="details"></div>
  <div id="atelier4" class="details"></div>

</div>

<!-- MODAL -->
<div id="modal" class="modal">
  <div class="modal-content">
    <h3 id="modalTitle"></h3>
    <p id="modalText"></p>
    <button class="close" onclick="closeModal()">Fermer</button>
  </div>
</div>

<footer>
  © 2026 - Anass Lahmar
</footer>

<script>
  function generateExercices(id) {
    let html = '';
    for (let i = 1; i <= 8; i++) {
      html += `<div class="exercice" onclick="openModal(${id}, ${i})">Exercice ${i}</div>`;
    }
    return html;
  }

  function showAtelier(id) {
    document.querySelectorAll('.details').forEach(el => {
      el.style.display = 'none';
      el.innerHTML = '';
    });

    let section = document.getElementById('atelier' + id);
    section.style.display = 'block';
    section.innerHTML = generateExercices(id);
  }

  function openModal(atelier, exercice) {
    document.getElementById('modal').style.display = 'flex';
    document.getElementById('modalTitle').innerText = `Atelier ${atelier} - Exercice ${exercice}`;
    document.getElementById('modalText').innerText = `Rapport détaillé de l'exercice ${exercice}.`;
  }

  function closeModal() {
    document.getElementById('modal').style.display = 'none';
  }
</script>

</body>
</html>