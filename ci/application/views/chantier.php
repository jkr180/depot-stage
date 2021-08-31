<!--<style>

    h3, p {
        color: white;
    }

    body {
        padding-top: 1em;
    }

    .carousel-control-prev-icon, .carousel-control-next-icon {
        height: 100px;
        width: 100px;
        outline: black;
        background-color: rgba(0, 0, 0, 0.3);
        background-size: 100%, 100%;
        border-radius: 50%;
        border: 1px solid black;
    }
</style>-->

<?php foreach ($articles as $article) : ?>
    <div class="card w-75 ml-auto mr-auto mt-5 mb-5">
        <h5 class="card-header"><?= $article["actu_title"]; ?></h5>
        <div class="card-body row">

            <div id="carouselaction" class="carousel slide col-5" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php for ($i = 0; $i < count($article["medias"]); $i++) { ?>
                        <li data-target="#carouselaction"
                            data-slide-to="<?php echo($i + 1); ?>" <?php if ($i === 0) { ?> class="active" <?php } ?>></li>
                    <?php } ?>
                </ol>

                <div class="carousel-inner">
                    <?php for ($i = 0; $i < count($article["medias"]); $i++) {
                        $photo = $article["medias"][$i]["med_files"];
                        $format = $article["medias"][$i]["med_format"];
                        ?>
                        <div class="carousel-item<?= ($i === 0) ? ' active' : ''; ?> text-center">
                            <img src="<?php echo base_url("asset/image/$photo.$format") ?>" class="img-fluid"
                                 alt="<?= $article["actu_title"] ?>">
                        </div>

                    <?php } ?>
                </div>

                <a class="carousel-control-prev" href="#carouselaction" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Précédent</span>
                </a>
                <a class="carousel-control-next" href="#carouselaction" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Suivant</span>
                </a>
            </div>


            <!--<h5 class="card-title">Special title treatment</h5>-->
            <p class="card-text col-7"><?= $article["actu_text"]; ?></p>
            <!--<a href="#" class="btn btn-primary">Voir la suite</a>-->
        </div>
    </div>

<?php endforeach; ?>

    <!-- les differents lien du carousel  -->

    <!--<div id="myCarousel" class="carousel slide bg-inverse w-50 ms-auto me-auto" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="3"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="4"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="5"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="6"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="7"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="8"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="9"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="10"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="11"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="12"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="13"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="14"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="15"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="16"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="17"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="18"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="19"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="20"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="21"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="22"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="23"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="24"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="25"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="26"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="27"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="28"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="29"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="30"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="31"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="32"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="33"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="34"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="35"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="36"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="37"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="38"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="39"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="40"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="41"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="42"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="43"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="44"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="45"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="46"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="47"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="48"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="49"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="50"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="51"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="52"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="53"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="54"></li>
        </ol>


        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./chantier/chantier1.png" alt="">
                <div class="carousel-caption">
                    <h3>Chantier en cours</h3>
                    <p>Fort Manoir</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier2.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier3.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier4.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier5.png" alt="">
                <div class="carousel-caption">
                    <h3>Mairie d'Aubigny </h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier6.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier7.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier8.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier9.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier11.png" alt="">
                <div class="carousel-caption">
                    <h3>Commune de Démuin</h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier12.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier13.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier14.png" alt="">
                <div class="carousel-caption">
                    <h3>Espace verts</h3>
                    <p>1ère intervention dans le domaine</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier15.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier18.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier19.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier20.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier21.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier22.png" alt="">
                <div class="carousel-caption">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./chantier/chantier23.png" alt="">
                <div class="carousel-caption">
                    <h3>Réalisation d'une rampe d'accès à l'école communale</h3>
                    <p></p>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="./chantier/chantier24.png" alt="">
                    <div class="carousel-caption">
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="./chantier/chantier25.png" alt="">
                        <div class="carousel-caption">
                            <h3></h3>
                            <p></p>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="./chantier/chantier26.png" alt="">
                            <div class="carousel-caption">
                                <h3></h3>
                                <p></p>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="./chantier/chantier27.png" alt="">
                                <div class="carousel-caption">
                                    <h3></h3>
                                    <p></p>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./chantier/chantier28.png" alt="">
                                    <div class="carousel-caption">
                                        <h3>Aménagement de la future salle polyvalente du Hamel</h3>
                                        <p></p>
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="./chantier/chantier30.png" alt="">
                                        <div class="carousel-caption">
                                            <h3></h3>
                                            <p></p>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier31.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier32.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier33.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier34.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier35.png" alt="">
                                            <div class="carousel-caption">
                                                <h3>Transformation de l'ancien bureau de poste en Mairie</h3>
                                                <p>Commune du Hamel</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier36.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier37.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier38.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier39.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier40.png" alt="">
                                            <div class="carousel-caption">
                                                <h3>Pose de l'ensemble d'une fenêtre </h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier41.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier42.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier43.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier44.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier45.png" alt="">
                                            <div class="carousel-caption">
                                                <h3>Rénovation monument aux morts commune de Baizieux</h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier46.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="./chantier/chantier47.png" alt="">
                                            <div class="carousel-caption">
                                                <h3></h3>
                                                <p></p>
                                            </div>
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="./chantier/chantier50.png" alt="">
                                                <div class="carousel-caption">
                                                    <h3></h3>
                                                    <p></p>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="d-block w-100" src="./chantier/chantier51.png" alt="">
                                                    <div class="carousel-caption">
                                                        <h3>Intervention d'urgence de l'équipe de la Maisonnée suite à
                                                            la coulée de boue liée aux intempéries dans la commune de
                                                            Bresle</h3>
                                                        <p></p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block w-100" src="./chantier/chantier52.png"
                                                             alt="">
                                                        <div class="carousel-caption">
                                                            <h3></h3>
                                                            <p></p>
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="./chantier/chantier53.png"
                                                                 alt="">
                                                            <div class="carousel-caption">
                                                                <h3></h3>
                                                                <p></p>
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100"
                                                                     src="./chantier/chantier54.png" alt="">
                                                                <div class="carousel-caption">
                                                                    <h3></h3>
                                                                    <p></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#myCarousel"
                                                           role="button" data-bs-slide="prev">
                                                            <span class="carousel-control-prev-icon"
                                                                  aria-hidden="true"></span>
                                                            <span class="visually-hidden">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#myCarousel"
                                                           role="button" data-bs-slide="next">
                                                            <span class="carousel-control-next-icon"
                                                                  aria-hidden="true"></span>
                                                            <span class="visually-hidden">Next</span>
                                                        </a>
                                                    </div>

                                                </div>
