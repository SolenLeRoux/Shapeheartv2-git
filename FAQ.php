<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
</head>

<body>
    <!-- Navbar transparente sur le Header puis rouge ailleurs -->
    <?php include('navbar.php') ?>

    <!-- Header -->
    <header id="top">
        <div id="header-FAQ">
            <div id="background-header-FAQ">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-vertical-center intro-message">
                            <div class=" text-header text-shapeheart">
                                <h1>FAQ</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Questions -->
    <section id="section-FAQ">
        <div class="container-FAQ">
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">Is it reliable ?</span>
                    <span class="francais">Est ce fiable ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">Yes.</span>
                    <span class="francais">La technologie que nous utilisons est cliniquement prouvée sur le bras, elle est même plus précise que sur le poignet car il y a moins d'artefacts de mouvement</span>
                </p>
            </div>
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">How do I use it during winter ?</span>
                    <span class="francais">Comment l'utiliser en hiver ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">Easily.</span>
                    <span class="francais">L'électronique peut être retirée facilement du brassard et placée dans notre winter kit. Ce dernier vient disparaitre en dessous du brassard.</span>
                </p>
            </div>
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">Does my phone fit ?</span>
                    <span class="francais">Quelle taille de téléphone ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">Yes.</span>
                    <span class="francais">Nous utilisons une pochette en tissu élastique qui permet de s'adapter à 80% des téléphones du marché, Samsung Galaxy, Iphone 5, 6...</span>
                </p>
            </div>
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">Is it compatible with my running app ?</span>
                    <span class="francais">Avec quelle appli est ce compatible ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">Yes.</span>
                    <span class="francais">Notre capteur est relié en bluetooth à votre téléphone et est compatible avec 90% des apps de running : Straa, Endomondo, Runtastic, Runkeeper...</span>
                </p>
            </div>
            <div class="FAQ-block">
                <p class="question-FAQ">
                    <span class="english">Do the magnet damage the phone ?</span>
                    <span class="francais">Les aimants abiment ils le téléphone ?</span>
                </p>
                <p class="reponse-FAQ">
                    <span class="english">No.</span>
                    <span class="francais">On a tendance à penser que les aimants sont dangereux pour l'électronique, c'était le cas pour les vieux disques dur, le type de stockage dans les téléphones actuels est électrostatique et ne subit aucune altération des aimants.</span>
                </p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include ("footer.php") ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom JS -->
    <script src="customJS/navbar-animation.js"></script>
    <script src="customJS/navbar-scroll-fade.js"></script>
    <script src="customJS/navbar-scroll-height.js"></script>
    <script src="customJS/to-top-button-scroll.js"></script>
    <script src="customJS/site-bilingue.js"></script>

</body>