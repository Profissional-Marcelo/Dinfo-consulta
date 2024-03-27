<?php 
    session_start();
    if (isset($_SESSION['logado'])) {
       
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Assets/css/home.css">
    <link rel="stylesheet" href="../../Assets/css/homeMQ.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <?php require_once("filtro.js"); ?>
    <section class="sistema">
        <input type="number" name="patrimonio" id="patrimonio" placeholder="Consulta patrimonio">
        <a href="cadastro.php">Cadastrar no sistema <span class="material-symbols-outlined">add</span></a>
        <a href="filtro.php" class="lista">Lista personalizada <span class="material-symbols-outlined">menu</span></a>
    </section>
    <script src="../../Assets/js/filtro.js"></script>
</body>
</html>

<?php
    } else {
        header('Location: ../../App/View/login.php');
    }
?>