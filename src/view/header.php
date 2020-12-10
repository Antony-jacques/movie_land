<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Land ECF</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="./src/Public/JS/script.js"></script>

</head>
<body>

<header>
    <nav>
        <div class="menu"><a href="?page=home">Home</a></div>
        <div class="menu"><a href="?page=newMovie">Ajouter un film</a></div>
        <div class="menu"><a href="?page=movies">Consulter mes films</a></div>
        <div class="menu"><a href="?page=search">Rechercher un film</a></div>
    </nav>
</header>

<div class="container">



<h1><?php echo $this->title;?></h1>
    
<?php ?>
