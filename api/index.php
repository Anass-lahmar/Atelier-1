<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Marché Fruits & Légumes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #f0f7e8 0%, #e8f5e9 100%);
            color: #333;
        }
        header {
            background-color: #2e7d32;
            padding: 1rem 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            color: white;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        .section {
            padding: 4rem 5%;
            text-align: center;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .auth-container {
            background: white;
            max-width: 400px;
            margin: auto;
            padding: 30px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        .auth-container h2 {
            color: #2e7d32;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            text-align: left;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #2d4a22;
        }
        input {
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-size: 1rem;
        }
        .submit-btn {
            background: #4caf50;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: background 0.2s;
        }
        .submit-btn:hover {
            background: #2e7d32;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">🍎 MARCHÉ FRAIS 🥬</div>
        <nav>
            <a href="#">Accueil</a>
            <a href="#">Connexion</a>
        </nav>
    </header>

    <section id="login" class="section">
        <div class="auth-container">
            <h2>🔐 Connexion Marché</h2>
            <form method="POST" action="check.php">
                <label>Identifiant</label>
                <input type="text" placeholder="Identifiant" required name="id">
                
                <label>Mot de passe</label>
                <input type="password" placeholder="Mot de passe" required name="password">
                
                <button type="submit" class="submit-btn">Se connecter</button>
            </form>
        </div>
    </section>
</body>
</html>