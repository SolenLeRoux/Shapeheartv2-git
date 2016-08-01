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
    <div id="mybox">
        <div id="mybox_aplat">
            <div id="mybox_conteneur">
                <div id="mybox_relative">
                    <div id="mybox_close">
                        <a class="close" > <p><img src="img/icon-back.png" alt="" width="25px"></p> </a>
                    </div>
                    <img id="logo" src="img/logo.png" alt="">
                    <p class="texte">EM<span class="texte-a">A</span>IL</p>
                    <h2 class="texte-promo">
                        <span class="english">Get 20% off your first order <br />no spam we promiss ;-)</span>
                        <span class="francais">Profitez de 20% sur votre première commande<br />Promis pas de spam !</span>
                    </h2>
                    <div id="form">
                        <form method="post" action="traitement.php">
                            <p id="votre_email">
                                <span class="english"><input type="email" name="email" id="email" placeholder="Your email" /></span>
                                <span class="francais"><input type="email" name="email" id="email" placeholder="Votre mail" /></span>
                            </p>
                            <a href="#">
                                <img id="bouton_envoyer" src="img/logo-submit.png" width="50px">
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product : 3 images en 2/3 de page -->

    <!-- Image A -->
    <section id="image-A" class="content-section-2">
        <div id="background-image-A">
            <div class="container">
                <div class="row">
                    <div class="text-section-2" id="text-image-A">
                        <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 col-xs-12">
                            <div class="clearfix"></div>
                            <h2 class="section-heading">
                                <span class="english">HERE YOU CAN SEE A PICTURE OF A BEAUTIFUL GIRL</span>
                                <span class="francais">ICI ON VOIT UNE PHOTO D'UNE JOLIE FILLE</span>
                            </h2>
                            <p class="lead-b">
                                <span class="english">I write a text which is not very interesting because I'm not really inspired. Come on our website ! Cardiac frequency is awesome !</span>
                                <span class="francais">La j'écris un texte qui n'a pas grand intérêt parce que je ne suis pas très inspiré. Venez visiter notre site! La fréquence cardiaque c'est génial !</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image B -->
    <section id="image-B" class="content-section-2">
        <div class="container">
            <div class="row">
                <div class="text-section-2" id="text-image-B">
                    <div class="col-lg-5 col-sm-6 col-xs-12">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">
                            <span class="english">AND HERE A GUY WITH A SMARTPHONE</span>
                            <span class="francais">ET LÀ ON MET UN MEC AVEC UN SMARTPHONE</span>
                        </h2>
                        <p class="lead-b">
                            <span class="english">A special thanks to Death to the Stock Photo for providing the photographs that you see in this template. Visit their website to become a member.</span>
                            <span class="francais">Je n'ai pas d'intérêt à traduire ce texte en français.</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image C -->
    <section id="image-C" class="content-section-2">
        <div class="container">
            <div class="row">
                <div class="text-section-2" id="text-image-C">
                    <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6 col-xs-12">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">
                            <span class="english">HERE YOU CAN SEE A PICTURE OF A BEAUTIFUL GIRL</span>
                            <span class="francais">ICI ON VOIT UNE PHOTO D'UNE JOLIE FILLE</span>
                        </h2>
                        <p class="lead-b">
                            <span class="english">I write a text which is not very interesting because I'm not really inspired. Come on our website ! Cardiac frequency is awesome !</span>
                            <span class="francais">La j'écris un texte qui n'a pas grand intérêt parce que je ne suis pas très inspiré. Venez visiter notre site! La fréquence cardique c'est génial !</span>
                        </p>
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

    <!-- Custom Theme JavaScript -->
    <script>

        


        // la fenêtre pop-in apparaît quand on scroll ou qu'on appuie sur "get yours" et disparaît quand on la ferme
        $(document).ready( function() {

            setTimeout(loadPopupBox, 3000);

            $('.close').click( function() {
                unloadPopupBox();
            });

            $('.pop-in').click(function() {
                loadPopupBox();
            });

            $('#runwith-btn').click(function() {
                loadPopupBox();
            });

            function unloadPopupBox() {    // TO Unload the Popupbox
                $('#mybox').fadeOut(1000);
            }

            function loadPopupBox() {    // To Load the Popupbox
                $('#mybox').fadeIn(1000);
            }
        });



        // JS pour faire un site bilingue
        // pompé sur thesitewizard.com
        var style_cookie_name = "language" ;
        var style_cookie_duration = 30 ;
        var style_domain = "www.shapeheart.com" ;

        // You do not need to customise anything below this line
        function switch_style ( css_title )
        {
            // You may use this script on your site free of charge provided
            // you do not remove this notice or the URL below. Script from
            // http://www.thesitewizard.com/javascripts/change-style-sheets.shtml
            var i, link_tag ;
            for (i = 0, link_tag = document.getElementsByTagName("link") ;
                 i < link_tag.length ; i++ ) {
                if ((link_tag[i].rel.indexOf( "stylesheet" ) != -1) &&
                        link_tag[i].title) {
                    link_tag[i].disabled = true ;
                    if (link_tag[i].title == css_title) {
                        link_tag[i].disabled = false ;
                    }
                }
                set_cookie( style_cookie_name, css_title,
                        style_cookie_duration, style_domain );
            }
        }
        function set_style_from_cookie()
        {
            var css_title = get_cookie( style_cookie_name );
            if (css_title.length) {
                switch_style( css_title );
            }
        }
        function set_cookie ( cookie_name, cookie_value,
                              lifespan_in_days, valid_domain )
        {
            // http://www.thesitewizard.com/javascripts/cookies.shtml
            var domain_string = valid_domain ?
                    ("; domain=" + valid_domain) : '' ;
            document.cookie = cookie_name +
                    "=" + encodeURIComponent( cookie_value ) +
                    "; max-age=" + 60 * 60 *
                    24 * lifespan_in_days +
                    "; path=/" + domain_string ;
        }
        function get_cookie ( cookie_name )
        {
            // http://www.thesitewizard.com/javascripts/cookies.shtml
            var cookie_string = document.cookie ;
            if (cookie_string.length != 0) {
                var cookie_value = cookie_string.match (
                        '(^|;)[\s]*' +
                        cookie_name +
                        '=([^;]*)' );
                return decodeURIComponent ( cookie_value[2] ) ;
            }
            return '' ;
        }

    </script>

</body>

</html>