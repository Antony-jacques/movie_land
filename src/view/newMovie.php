<?php
include(__DIR__. "./header.php");

?>
    <form action="?page=newMovie" method="post">
    <div class="form-group">
        <label for="name">Titre du film</label>
        <input type="text" name="name" class="form-control" id="name"  required>
    </div>

    <div class="form-group">
        <label for="image">Affiche du film </label>
        <input type="text" name="image" class="form-control" id="img"   >
    </div>

    <div class="form-group">
        <label for="release_date">Date de sortie</label>
        <input type="text" name="release_year" class="form-control" id="date"   >
    </div>




    <button type="submit" class="btn btn-primary">Ajouter Ce film</button>
    </form>

<?php

if(!empty($_POST)){
    if($_POST['name']==='' OR $_POST['image']==='' OR $_POST['release_year']==='' ){
        ?>
 
        <div class="alert alert-danger" role="alert">
        Veuillez remplir tous les champs!
        </div>
        <?php
    } else{
        ?>
        <div class="alert alert-success" role="alert">
            Votre film a bien été ajouté!
        </div>
        <?php
    }
}

include(__DIR__. "./footer.php");