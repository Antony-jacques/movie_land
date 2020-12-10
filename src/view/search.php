<?php
include(__DIR__. "./header.php");
?>
<img src="pEoqbqtLc4CcwDUDqxmEDSWpWTZ.jpg" alt="">
<div class="form-group">
            <label for="name">Nom du film</label>
            <input type="text" name="name" class="form-control" id="name"
                   placeholder="Rechercher un film..." required>
        </div>
        <button class="btn btn-primary" id="btn_search">Rechercher</button>

<div class=" justify-content-end" id="search-result"></div>
<?php

include(__DIR__. "./footer.php");