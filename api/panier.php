<?php
session_start();
if (!isset($_SESSION['logged_in'])) {
    header("Location: index.php");
    exit();
}

if (isset($_GET['del'])) {
    $index = $_GET['del'];
    unset($_SESSION['panier'][$index]);
    $_SESSION['panier'] = array_values($_SESSION['panier']);
    header('Location: panier.php');
    exit;
}
 
$total = 0;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mon Panier - Marché Frais</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f0f7e8; }
        h1 { color: #2e7d32; }
        table { width: 100%; border-collapse: collapse; background: white; margin-top: 20px; border-radius: 10px; overflow: hidden; }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: center; }
        th { background: #2e7d32; color: white; }
        td img { width: 80px; height: 80px; object-fit: cover; border-radius: 10px; }
        .delete { background: #f44336; color: white; padding: 6px 12px; text-decoration: none; border-radius: 20px; }
        .delete:hover { background: #d32f2f; }
        .total { font-size: 24px; font-weight: bold; margin-top: 20px; text-align: right; color: #f57c00; }
        .back { background: #4caf50; color: white; padding: 10px 20px; text-decoration: none; border-radius: 25px; display: inline-block; margin-bottom: 20px; }
        .back:hover { background: #2e7d32; }
        .empty-cart { text-align: center; padding: 50px; background: white; border-radius: 15px; }
    </style>
</head>
<body>
    <h1>🛒 Mon Panier</h1>
    <a href="store.php" class="back">← Continuer mes achats</a>

    <?php if (empty($_SESSION['panier'])): ?>
        <div class="empty-cart">
            <p>🛍️ Votre panier est vide</p>
            <a href="store.php" class="back">Découvrir nos produits</a>
        </div>
    <?php else: ?>
        <table>
            <tr>
                <th>Image</th>
                <th>Produit</th>
                <th>Prix</th>
                <th>Supprimer</th>
            </tr>
            <?php foreach ($_SESSION['panier'] as $index => $item): 
                $total += $item['prix'];
            ?>
            <tr>
                <td><img src="<?= $item['image'] ?>" alt="<?= $item['nom'] ?>"></td>
                <td><?= $item['nom'] ?></td>
                <td><?= $item['prix'] ?> DHS</td>
                <td><a href="panier.php?del=<?= $index ?>" class="delete">🗑️ Supprimer</a></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <div class="total">💰 Total: <?= $total ?> DHS</div>
    <?php endif; ?>
</body>
</html>