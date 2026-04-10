<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - Anass Lahmar</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #0f172a, #1e293b, #0f2027);
      color: #e2e8f0;
    }

    nav {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px 50px;
      background: rgba(0,0,0,0.3);
      backdrop-filter: blur(10px);
      position: sticky;
      top: 0;
    }

    nav h1 {
      font-size: 20px;
      color: #38bdf8;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav ul li {
      cursor: pointer;
      transition: 0.3s;
    }

    nav ul li:hover {
      color: #38bdf8;
    }

    header {
      text-align: center;
      padding: 80px 20px;
    }

    header h2 {
      font-size: 40px;
      margin-bottom: 10px;
    }

    header p {
      opacity: 0.7;
    }

    .container {
      width: 85%;
      margin: auto;
    }

    .atelier {
      margin: 40px 0;
      padding: 25px;
      border-radius: 20px;
      background: rgba(255,255,255,0.05);
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
      transition: transform 0.3s;
    }

    .atelier:hover {
      transform: translateY(-5px);
    }

    .atelier h2 {
      margin-bottom: 20px;
      color: #38bdf8;
    }

    .exercice {
      margin: 15px 0;
      padding: 15px;
      border-radius: 12px;
      background: rgba(255,255,255,0.08);
      transition: 0.3s;
    }

    .exercice:hover {
      background: rgba(255,255,255,0.15);
    }

    .exercice h3 {
      color: #facc15;
    }

    .rapport {
      margin-top: 10px;
      padding: 12px;
      background: rgba(0,0,0,0.4);
      border-radius: 10px;
      font-size: 14px;
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
  <ul>
    <li>Accueil</li>
    <li>Ateliers</li>
    <li>Contact</li>
  </ul>
</nav>

<header>
  <h2>Portfolio Professionnel</h2>
  <p>Développement Digital | Projets & Ateliers</p>
</header>

<div class="container">

  <!-- Atelier 1 -->
  <div class="atelier">
    <h2>Atelier 1 - HTML / CSS</h2>

    <div class="exercice">
      <h3>Exercice 1 - Page Web</h3>
      <p>Création d'une page web responsive.</p>
      <div class="rapport">Rapport : Structure HTML5 + mise en page CSS moderne.</div>
      <a href="#" class="btn">Voir Rapport</a>
    </div>

    <div class="exercice">
      <h3>Exercice 2 - Flexbox</h3>
      <p>Utilisation de Flexbox pour layout.</p>
      <div class="rapport">Rapport : Alignement et distribution des éléments.</div>
      <a href="#" class="btn">Voir Rapport</a>
    </div>

  </div>

  <!-- Atelier 2 -->
  <div class="atelier">
    <h2>Atelier 2 - JavaScript</h2>

    <div class="exercice">
      <h3>Exercice 1 - DOM</h3>
      <p>Manipulation dynamique des éléments.</p>
      <div class="rapport">Rapport : Interaction utilisateur avec JS.</div>
      <a href="#" class="btn">Voir Rapport</a>
    </div>

    <div class="exercice">
      <h3>Exercice 2 - Events</h3>
      <p>Gestion des événements.</p>
      <div class="rapport">Rapport : Click, hover, input events.</div>
      <a href="#" class="btn">Voir Rapport</a>
    </div>

  </div>

  <!-- Atelier 3 -->
  <div class="atelier">
    <h2>Atelier 3 - Backend</h2>

    <div class="exercice">
      <h3>Exercice 1 - API REST</h3>
      <p>Création d'une API avec Node.js.</p>
      <div class="rapport">Rapport : Routes + Controllers + JSON.</div>
      <a href="#" class="btn">Voir Rapport</a>
    </div>

    <div class="exercice">
      <h3>Exercice 2 - Database</h3>
      <p>Connexion MongoDB.</p>
      <div class="rapport">Rapport : CRUD operations.</div>
      <a href="#" class="btn">Voir Rapport</a>
    </div>

  </div>

</div>

<footer>
  © 2026 - Anass Lahmar | Portfolio Professionnel
</footer>

</body>
</html>
