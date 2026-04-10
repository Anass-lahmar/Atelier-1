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

    .container {
      width: 85%;
      margin: auto;
    }

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
      transition: 0.3s;
      text-align: center;
      font-weight: 600;
      font-size: 18px;
    }

    .atelier:hover {
      transform: translateY(-5px) scale(1.02);
      background: rgba(56,189,248,0.2);
    }

    .details {
      display: none;
      margin-top: 30px;
      padding: 20px;
      border-radius: 15px;
      background: rgba(255,255,255,0.05);
    }

    .exercice {
      margin: 15px 0;
      padding: 15px;
      border-radius: 12px;
      background: rgba(255,255,255,0.08);
    }

    .rapport {
      margin-top: 8px;
      font-size: 13px;
      opacity: 0.8;
    }

    .btn {
      display: inline-block;
      margin-top: 10px;
      padding: 8px 15px;
      background: linear-gradient(45deg, #38bdf8, #0ea5e9);
      border-radius: 8px;
      color: white;
      text-decoration: none;
      font-size: 13px;
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

  <!-- TEMPLATE FUNCTION REPEATED -->

  <script>
    function exercicesHTML() {
      let html = '';
      for(let i=1;i<=8;i++){
        html += `
        <div class="exercice">
          <p>Exercice ${i}</p>
          <div class="rapport">Rapport : description de l'exercice ${i}</div>
          <a href="https://github.com/" target="_blank" class="btn">Voir sur GitHub</a>
        </div>`;
      }
      return html;
    }
  </script>

  <!-- DETAILS -->

  <div id="atelier1" class="details"><h3>Exercices Atelier 1</h3></div>
  <div id="atelier2" class="details"><h3>Exercices Atelier 2</h3></div>
  <div id="atelier3" class="details"><h3>Exercices Atelier 3</h3></div>
  <div id="atelier4" class="details"><h3>Exercices Atelier 4</h3></div>

</div>

<footer>
  © 2026 - Anass Lahmar
</footer>

<script>
  function showAtelier(id) {
    document.querySelectorAll('.details').forEach(el => {
      el.style.display = 'none';
      el.innerHTML = '<h3>Exercices Atelier ' + el.id.replace('atelier','') + '</h3>';
    });

    let section = document.getElementById('atelier' + id);
    section.style.display = 'block';
    section.innerHTML += exercicesHTML();
  }
</script>

</body>
</html>
