<?php
include(__DIR__. "./header.php");



if($this->movieList != null)
{
    foreach($this->movieList as $movie ){
        ?>
    
            <div class="card mt-2" style="width: 18rem;">
                <div class="card-body ">
                    <div class="d-flex justify-content-center text-center">
                        <h5 class="card-title"><?php echo$movie['name'];?></h5>
                    </div>
                    <img src="<?php echo$movie['image'];?>" alt="" width=200px height=200px>
                    <div class=" justify-content-center text-center">
                        <p><?php echo$movie['release_year'];?></p>
                        <a href="?page=ad&id=<?= $movie['id']?>" class="btn btn-primary">voir les détails du film</a>
                    </div>
                </div>
            </div>
    
            <?php
        }
    
} else{
    ?>
        <div class="alert alert-warning" role="alert">
        Aucun film pour le moment
        </div>
<?php
}




include(__DIR__. "./footer.php");