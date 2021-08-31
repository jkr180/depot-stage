
<style>
    h3,
    p {
        color: black;
    }

    body {
        padding-top: 1em;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        height: 100px;
        width: 100px;
        outline: black;
        background-color: rgba(0, 0, 0, 0.3);
        background-size: 100%, 100%;
        border-radius: 50%;
        border: 1px solid black;
    }
</style>

<div id="carouselrevue" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php for ($i = 0; $i < count($articles); $i++) { ?>
            <li data-target="#carouselrevue"
                data-slide-to="<?php echo($i + 1); ?>" <?php if ($i === 0) { ?> class="active" <?php } ?>></li>
            <?php
        }
        ?>
    </ol>


    <div class="carousel-inner">
        <?php for ($i = 0; $i < count($articles); $i++) {

            $article = $articles[$i];
            $images = $article["medias"];
            $picture = $images[0];
            $photo = $picture["med_files"];
            $format = $picture["med_format"];
            ?>


            <div class="carousel-item<?= ($i === 0) ? ' active' : ''; ?> text-center">
                <img src="<?php echo base_url("asset/image/$photo.$format") ?>" class="img-fluid" alt="<?= $article["actu_text"] ?>">
                <h5><?= $article["actu_text"] ?></h5>
            </div>

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


<!--<form>
  <div class="form-group">
    <label for="exampleFormControlFile1"></label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</form>-->
