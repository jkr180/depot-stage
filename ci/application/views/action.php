<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


<?php

//var_dump($media);                       //= tableau d'articles

foreach ($articles as $article) {
  //var_dump($article);                   //= 1 article
  var_dump($article["actu_title"]);     //= 1 info de l'article
  //var_dump($article["medias"]);         //= tous les médias de l'article

  foreach ($article["medias"] as $media) {
    //var_dump($media);                     //= 1 media de l'article
    var_dump($media["med_files"]);        //= 1 info du media
    var_dump($media["med_format"]);        //= 1 info du media
  }
}

?>

<!--Carousel Wrapper-->
<div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">

  <div class="col">
    <!-- Classe CSS pour le 1er article -->
    <div class="card-1">
      <!-- Mise en place de la classe carousel en boostrap -->
      <div class="carousel-item active">
        <!-- Mise en responsive avec la classe img-fluid de boostrap, et la class img pour redimensionner les photos des qu'il sont insérer dans la le dossier -->
        <div class="img img-fluid">
          <!-- Classe card du caroussel boostrap -->
          <div class="card">
            <!-- Ouverture de la balise PHP avec une boucle while qui vient rechercher la balise result pour la variable row -->
            <?php

            ?>
            <!-- Envoie de l'image dans le dossier uploads et ensuite recherche en fonction de l'ID, et du numéro du fichier
                                        pour faire apparaitre l'image -->
            <img src="">
            <!-- Card body pour le placement du titre avec un appel de la variable row qui récuper le med titre -->
            <!-- Si l'appel et vide l'envoi sera stopper -->
            <div class="card-body">
              <h5 class="card-title">
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>