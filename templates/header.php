<?php 
    include_once("helpers/url.php");
    include_once("data/posts.php");
    include_once("data/categories.php");
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <!-- Estilo -->
    <link rel="stylesheet" href=" <?= $BASE_URL ?>css/styles.css">
    <!-- Fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,200;1,300;1,400&family=Roboto:ital,wght@1,100;1,300&display=swap" rel="stylesheet">
</head>
<body>
    
<header>
    <a href="<?= $BASE_URL ?>" id="logo">
    <img src="<?= $BASE_URL ?>/img/logo.svg" alt="Blog codar">
</a>

  <nav>
    <ul id="navbar">
        <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
        <li><a href="#" class="nav-link">Categorias</a></li>
        <li><a href="#"class="nav-link">Sobre</a></li>
        <li><a href="<?= $BASE_URL ?>contact.php" class="nav-link">Contato</a></li>
    </ul>
  </nav>
</header>