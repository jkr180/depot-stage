<!-- Lien pour le CSS Boostrap 4.4.1 -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php for ($i = 0; $i < count($articles); $i++) { ?> <!-- ont boucle les slide du carousel en fonction du nombre d'article qu'il dans la boucle-->
      <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo ($i + 1); ?>" <?php if ($i == 0) { ?> class="active" <?php } ?>></li>
    <?php
    }
    ?>
  </ol>


  <div class="carousel-inner">

    <?php for ($i = 0; $i < count($articles); $i++) { 
    //  ont boucle $articles la fonction count permettra de compter le nombre d'élement 
      $article = $articles[$i]; //ont sotck les résultats
      $images = $article["medias"];//ont choisit media dans le tableau
      $picture = $images[0]; // ont stock le résultat ont met [0] pour partir de la première ligne
      $photo = $picture["med_files"]; // ont stock le fichier 
      $format = $picture["med_format"];// ont stock le format 
    ?>


      <div class="carousel-item<?= ($i == 0) ? ' active' : ''; ?>">
        <img src="<?php echo base_url("asset/image/$photo.$format") ?>" class="d-block w-30" alt="...">
        <h5><?php echo $article["actu_text"] ?></h5>
        <!-- pour afficher la description des media ont utilisera $article["actu_texte"] cela permettra de retourner les informations du tableau -->
      </div>
    <!-- base_url("asset/image/$photo.$format") pour charger les images ont utilise $photo et $format pour le format  -->
    <?php
    }
    ?>
  </div>

  <a class="carousel-control-prev" href="#carouselrevue" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
    </a>
    <a class="carousel-control-next" href="#carouselrevue" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>

<form>
  <div class="form-group">
    <label for="exampleFormControlFile1"></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>

<!-- Bundled -->


<!-- Script boostrap 4.4.1 -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>