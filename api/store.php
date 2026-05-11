<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
    exit();
}

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

if (isset($_POST['add_to_cart'])) {
    $produit = [
        'nom' => $_POST['nom'],
        'prix' => $_POST['prix'],
        'image' => $_POST['image']
    ];
    $_SESSION['panier'][] = $produit;
    
    header('Location: panier.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Fruits & Légumes - Marché Frais</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f0f7e8; color: #2d4a22; }
        header { background-color: #2e7d32; padding: 1rem 5%; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 5px rgba(0,0,0,0.1); position: sticky; top: 0; color: white; }
        nav a { margin: 0 15px; text-decoration: none; color: white; font-weight: bold; }
        .logo { font-size: 1.5rem; font-weight: bold; }
        .product-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; padding: 2rem 5%; }
        .card { background: white; padding: 15px; text-align: center; border-radius: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); transition: transform 0.2s; }
        .card:hover { transform: translateY(-5px); }
        .card img { max-width: 100%; height: 200px; object-fit: cover; border-radius: 10px; }
        .card h3 { color: #2e7d32; margin: 10px 0; }
        .card p { font-size: 1.2rem; font-weight: bold; color: #f57c00; }
        .card button { background-color: #4caf50; color: white; border: none; padding: 10px 15px; border-radius: 25px; cursor: pointer; width: 100%; font-size: 1rem; }
        .card button:hover { background-color: #2e7d32; }
        .category-title { text-align: center; color: #2e7d32; margin: 20px 0 0; font-size: 2rem; }
        hr { width: 100px; height: 3px; background: #f57c00; border: none; margin: 10px auto; }
    </style>
</head>
<body>
    <header>
        <div class="logo">🍎 MARCHÉ FRAIS 🥬</div>
        <nav>
            <a href="#">Accueil</a>
            <a href="#products">Produits</a>
            <a href="panier.php">🛒 Panier (<span><?= count($_SESSION['panier']) ?></span>)</a>
            <a href="index.php">🚪 Déconnexion</a>
        </nav>
    </header>

    <main id="products">
        <h2 class="category-title">🍇 Fruits Frais</h2>
        <hr>
        <div class="product-grid">
            <div class="card">
                <img src="images/pommes.jpg" alt="Pommes">
                <h3>🍎 Pommes Rouges</h3>
                <p>12 DHS / kg</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Pommes Rouges">
                    <input type="hidden" name="prix" value="12">
                    <input type="hidden" name="image" value="images/pommes.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>

            <div class="card">
                <img src="images/bananes.jpg" alt="Bananes">
                <h3>🍌 Bananes</h3>
                <p>10 DHS / kg</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Bananes">
                    <input type="hidden" name="prix" value="10">
                    <input type="hidden" name="image" value="images/bananes.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>

            <div class="card">
                <img src="images/oranges.jpg" alt="Oranges">
                <h3>🍊 Oranges</h3>
                <p>8 DHS / kg</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Oranges">
                    <input type="hidden" name="prix" value="8">
                    <input type="hidden" name="image" value="images/oranges.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>

            <div class="card">
                <img src="images/fraises.jpg" alt="Fraises">
                <h3>🍓 Fraises</h3>
                <p>25 DHS / barquette</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Fraises">
                    <input type="hidden" name="prix" value="25">
                    <input type="hidden" name="image" value="images/fraises.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>
        </div>

        <h2 class="category-title">🥦 Légumes Frais</h2>
        <hr>
        <div class="product-grid">
            <div class="card">
                <img src="images/tomates.jpg" alt="Tomates">
                <h3>🍅 Tomates</h3>
                <p>6 DHS / kg</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Tomates">
                    <input type="hidden" name="prix" value="6">
                    <input type="hidden" name="image" value="images/tomates.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>

            <div class="card">
                <img src="images/carottes.jpg" alt="Carottes">
                <h3>🥕 Carottes</h3>
                <p>5 DHS / kg</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Carottes">
                    <input type="hidden" name="prix" value="5">
                    <input type="hidden" name="image" value="images/carottes.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>

            <div class="card">
                <img src="images/courgettes.jpg" alt="Courgettes">
                <h3>🥒 Courgettes</h3>
                <p>7 DHS / kg</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Courgettes">
                    <input type="hidden" name="prix" value="7">
                    <input type="hidden" name="image" value="images/courgettes.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>

            <div class="card">
                <img src="images/patates.jpg" alt="Pommes de terre">
                <h3>🥔 Pommes de terre</h3>
                <p>4 DHS / kg</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Pommes de terre">
                    <input type="hidden" name="prix" value="4">
                    <input type="hidden" name="image" value="images/patates.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>

            <div class="card">
                <img src="images/oignons.jpg" alt="Oignons">
                <h3>🧅 Oignons</h3>
                <p>5 DHS / kg</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Oignons">
                    <input type="hidden" name="prix" value="5">
                    <input type="hidden" name="image" value="images/oignons.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>

            <div class="card">
                <img src="images/laitue.jpg" alt="Laitue">
                <h3>🥬 Laitue</h3>
                <p>3 DHS / pièce</p>
                <form method="POST">
                    <input type="hidden" name="nom" value="Laitue">
                    <input type="hidden" name="prix" value="3">
                    <input type="hidden" name="image" value="images/laitue.jpg">
                    <button type="submit" name="add_to_cart">➕ Ajouter au panier</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>