<?php include('cookies.php') ; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('head.php'); ?>
</head>

<body>

    <!-- Navbar transparente sur le Header puis rouge ailleurs -->
    <?php include('navbar.php') ?>

    <!-- Header -->
    <header id="top" class="header">
        <video autoplay="true" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="img/background_video.png" id="background_video">
            <source src="video/video.mov" type="video/mp4">
            <span class="english">Your browser does not support the video tag. I suggest you upgrade your browser.</span>
            <span class="francais">Votre navigateur ne supporte pas la lecture de cette video.</span>
        </video>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-vertical-center intro-message">
                        <div class="text-shapeheart">
                            <h1>SH<span class="text-shapeheart-a">A</span>PE</h1>
                            <h1>HE<span class="text-shapeheart-a">A</span>RT</h1>
                        </div>
                        <h2 class="text-value-proposition">
                            <span class="english">The first connected running armband to track your heart rate</span>
                            <span class="francais">Le premier brassard de running qui mesure ta fréquence cardiaque</span>
                        </h2>
                        <hr class="intro-divider">
                        <a class="btn btn-white btn-lg btn-suscribe">
                            <p class="pop-in">
                                <span class="english">Get yours</span>
                                <span class="francais">Demandez le vôtre</span>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- La fenêtre pop-in qui apparait quand on clique sur get yours-->
    <?php include("pop-up-window.php"); ?>

    <!-- Product : 3 images en 2/3 de page -->

    <!-- Image A -->
    <section id="image-A" class="content-section-2">
        <div id="background-image-A">
            <div class="container">
                <div class="row">
                    <div class="col-sm-push-6 col-sm-6 col-xs-12">
                        <div class="bloc-text-section2 text-section-2 container-section-2" id="text-image-A">
                            <h2 class="section-heading">
                                <span class="english">Heart rate tracking</span>
                                <span class="francais">Suivi de la fréquence cardiaque</span>
                            </h2>
                            <p class="lead-b">
                                <span class="english">Our sensor positioned on the arm enables a precise and rigorous
                                    measure of your heart rate, which is then sent via Bluetooth to your running app.</span>
                                <span class="francais">La position au niveau du bras assure une mesure précise de la
                                    fréquence cardiaque, qui est ensuite envoyée par bluetooth à votre app de running.</span>
                            </p>
                            <a href="blog.php" class="btn-transparent">
                                <span class="english">Why is it more reliable ?</span>
                                <span class="francais">Pourquoi est-ce plus précis ?</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image B -->
    <section id="image-B" class="content-section-2">
        <div id="background-image-B">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="bloc-text-section2 text-section-2 container-section-2" id="text-image-B">
                            <h2 class="section-heading">
                                <span class="english">Compatible with running apps</span>
                                <span class="francais">Compatible avec les applications de running</span>
                            </h2>
                            <p class="lead-b">
                                <span class="english">Our sensor is compatible with almost all the running apps (Nike+,
                                    Runtastic, Runkeeper, Strava, Endomondo…). Take full advantage of our improved user
                                    experience thanks to heart rate monitoring, wether you’re training for a marathon or
                                    wish to optimize your weight-loss.</span>
                                <span class="francais">Notre capteur est compatible avec presque toutes les applications
                                    de running (Nike+, Runtastic, Runkeeper, Strava, Endomondo,). Profitez pleinement de
                                    l’expérience utilisateur améliorée grâce au cardio, que vous prépariez un marathon ou
                                    souhaitiez optimiser votre perte de poids.</span>
                            </p>
                            <a href="blog.php" class="btn-transparent">
                                <span class="english">More info<span class="grand-ecran"> on our blog</span></span>
                                <span class="francais">Plus d'informations<span class="grand-ecran"> sur notre blog</span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image C -->
    <section id="image-C" class="content-section-2">
        <div id="background-image-C">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 col-xs-12">
                        <div class="bloc-text-section2 text-section-2 container-section-2" id="text-image-C">
                            <h2 class="section-heading">
                                <span class="english">A swift access to your smartphone</span>
                                <span class="francais">Votre smartphone accessible facilement</span>
                            </h2>
                            <p class="lead-b">
                                <span class="english">Want to have access to your smartphone without bedding yourself or
                                    stopping your effort? We have designed a innovative system enabling runners to have
                                    a quick and intuitive access to their smartphone during their effort.</span>
                                <span class="francais">Envie d’avoir accès à votre téléphone ? Nous avons designé un
                                    système permettant  aux coureurs d’avoir un accès rapide et intuitif à leur
                                    smartphone pendant l’effort.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- La section où on présente le produit-->
    <section id="presentation" class="content-produit">
        <div class="pres-container">
            <div class="texte-produit-container">
                <h2 id="text-running" class="section-heading">
                    <span class="english">READY TO START RUNNING ?</span>
                    <span class="francais">PRÊT À REJOINDRE LE MOUVEMENT ?</span>
                </h2>
            </div>
            <div class="photo-produit">
                <img src="img/product-black-woshadow.png" id="black" class="produit-img">
                <img src="img/product-red-woshadow.png" id="red" class="produit-img">
                <img src="img/product-green-woshadow.png" id="green" class="produit-img">
            </div>
            <img src="img/product-shadow.png" id="shadow" class="produit-img">
            <div class="color-select">
                <div class="select-black">
                    <a id="chose-black" href="#" onclick="document.getElementById('black').style.display= 'inline'; document.getElementById('red').style.display= 'none'; document.getElementById('green').style.display= 'none'; return false;"><img src="img/point-noir.png" class="point"></a>
                </div>
                <div class="select-red">
                    <a id="chose-red" href="#" onclick="document.getElementById('red').style.display= 'inline'; document.getElementById('black').style.display= 'none'; document.getElementById('green').style.display= 'none'; return false;"><img src="img/point-rouge.png" class="point"></a>
                </div>
                <div class="select-green">
                    <a id="chose-green" href="#" onclick="document.getElementById('green').style.display= 'inline'; document.getElementById('black').style.display= 'none'; document.getElementById('red').style.display= 'none'; return false;"><img src="img/point-vert.png" class="point"></a>
                </div>
            </div>
            <a class="btn btn-suscribe btn-red">
                <p class="pop-in">
                    <span class="english">Pre-order</span>
                    <span class="francais">Pre-commander</span>
                </p>
            </a>
        </div>
    </section>

    <!-- Section Partenaires -->
    <section id="partenaires" class="partenaires">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 partenaire-tableau">
                    <table>
                        <tr>
                            <td class="partenaire-colonne"><img class="logo-partenaire" src="img/logo-essec.png"></td>
                            <td class="partenaire-colonne"><img class="logo-partenaire" src="img/logo-hardware-club.png"></td>
                            <td class="partenaire-colonne"><img class="logo-partenaire" src="img/logo-intel.png"></td>
                        </tr>
                        <tr>
                            <td class="partenaire-colonne"><img class="logo-partenaire" src="img/logo-bnp.png"></td>
                            <td class="partenaire-colonne"><img class="logo-partenaire" src="img/logo-schoollab.png"></td>
                            <td class="partenaire-colonne"><img class="logo-partenaire" src="img/logo-peips.png"></td>
                        </tr>
                        <tr>
                            <td class="partenaire-colonne"><img class="logo-partenaire" src="img/logo-cea.png"></td>
                            <td class="partenaire-colonne"><img class="logo-partenaire" src="img/logo-runningheros.png"></td>
                            <td class="partenaire-colonne"><img class="logo-partenaire" src="img/logo-centralesupelec.png"></td>
                        </tr>
                    </table>
                </div>
                <div class="col-lg-6">
                    <div class="text-partenaire">
                        <p>
                            <span class="english">Shapeheart is the winner of FNAC-Intel challenge 2016, our armband will be available by spring 2017. We’ve partnered with the best to give you the most performant technology for heart rate monitoring in an armband well designed for runners. Don’t forget to like our facebook page !</span>
                            <span class="francais">Que ça soit au niveau du prototypage, de l’électronique ou de l’industrialisation, concevoir un tel brassard de running a demandé beaucoup de travail et d’itérations avec vous, les coureurs. Nous avons noué beaucoup de partenariats pour vous proposer un outil de monitoring simple, bien pensé et à prix raisonnable. Pour restez en contact, vous pouvez liker notre page facebook ci dessous !</span>
                        </p>
                        </br>
                        <a href="blog.php" class="btn-transparent">
                            <span class="english">Read more</span>
                            <span class="francais">En savoir plus</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Presse -->
    <section id="presse" class="presse">
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-presse">
                    <a target="_blank" href="http://www.maddyness.com/accompagnement/2016/02/23/iot-fnac-intel-startups">
                        <img class="presse-logo" src="img/logo-maddyness.png">
                    </a>
                </div>
                <div class="col-xs-4 col-presse">
                    <a target="_blank" href="http://www.lefigaro.fr/secteur/high-tech/start-up/2016/05/27/32004-20160527ARTFIG00086-le-prix-start-up-fnac-met-la-musique-et-le-sport-connectes-a-l-honneur.php">
                        <img class="presse-logo" src="img/logo-figaro.png">
                    </a>
                </div>
                <div class="col-xs-4 col-presse">
                    <a target="_blank" href="http://www.numerama.com/business/148088-internet-des-objets-les-startups-finalistesdu-prix-startup-fnac.html">
                        <img class="presse-logo" src="img/logo-numerama.png">
                    </a>
                </div>
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
    <script src="customJS/intro-divider-animation.js"></script>
    <script src="customJS/produit-animation-apple.js"></script>
    <script src="customJS/pop-up-window.js"></script>
    <script src="customJS/pop-up-contactus.js"></script>

    <?php
    if (!ISSET($_COOKIE["popup"])) { ?>
        <script src="customJS/pop-up-window-spontaneous.js"></script>
    <?php } ?>

    <?php
    if (isset($_GET["bool"])) {
        $bool = htmlspecialchars($_GET["bool"]);
        if ($bool == 1) { ?>
            <script src="customJS/pop-up-contactus-true.js"></script>
        <?php }
        if ($bool == 0) { ?>
            <script src="customJS/pop-up-contactus-false.js"></script>
        <?php }
    };
    ?>

</body>

</html>