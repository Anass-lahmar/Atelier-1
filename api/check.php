<?php 
session_start();
    
$id_ = 'mystore';
$password_ = '2026';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $password = $_POST['password'];
    
    if ($id_ === $id && $password_ === $password) {
       
        $_SESSION['user'] = $id;          
        $_SESSION['logged_in'] = true;     
        
        header("Location: store.php");
        exit();
    }
    else {
        echo '<div style="text-align:center; padding:50px; font-family:Arial;">';
        echo '<h2 style="color:red;">❌ ID ou MOT DE PASSE incorrect!!</h2>';
        echo '<br><a href="index.php" style="background:#4caf50; color:white; padding:10px 20px; text-decoration:none; border-radius:5px;">Réessayer</a>';
        echo '</div>';
    }
}
?>