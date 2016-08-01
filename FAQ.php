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

    <!-- Custom Theme JavaScript -->
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
        // Scrolls to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });

        // #navbar appears with an animation
        // Pour modifier la vitesse :
        // jouer avec la valeur du setInterval et celle du Npos = Npos+x
        // Pour modifier la hauteur de laquelle ça bouge :
        // jouer avec le if (Npos== x) et le navbar.css
        var navbar = $('.overlay-nav');
        var Npos = 0;
        var Nopacity = 0;
        var Nrun = setInterval(animation, 80);
        function animation() {
            if (Npos == 60) {
                clearInterval(Nrun);
            }
            else {
                Npos = Npos+6;
                Nopacity = Nopacity + 0.1;
                navbar.css('top',-60+Npos+'px');
                navbar.css('opacity',Nopacity);
            }
        }

        // #navbar's opacity changes after scrolling
        var header = $('#header-FAQ'),
                headerHeight = header.height();

        var RondLanguage = $('.rond-language');

        var fadeStart=headerHeight/3 // 10px scroll or less will equiv to 0 opacity
                ,fadeUntil=headerHeight // 200px scroll or more will equiv to 1 opacity
                ,fading = $('#fading');

        $(window).bind('scroll', function(){
            var offset = $(document).scrollTop(),
                    opacity = 1,
                    langue = 1;
            if( offset<=fadeStart ){
                opacity = 0,
                        langue = 1;
            }
            else if( offset<=fadeUntil ){
                opacity = offset/fadeUntil;
                langue = 0;
            }
            else if (offset > fadeUntil) {
                opacity = 1;
                langue = 0;
            }
            fading.css('background','rgba(41,55,69,'+opacity+')')
            RondLanguage.css('background', 'rgba(252,15,38,' + langue + ')');
        });

        // Coeur change de taille quand on scroll, et toute la navbar remonte

        var fadeStartHeart=headerHeight/3, // 10px scroll or less will equiv to 100 height
                fadeUntilHeart=headerHeight/3, // 200px scroll or more will equiv to 1 opacity
                Heart = $('#heart'),
                HeartHeight = Heart.height();

        var MainNavRow = $('#main-nav-row');

        $(window).bind('scroll', function(){
            var offset = $(document).scrollTop(),
                    taille = HeartHeight;
            if(offset <= fadeStartHeart){
                taille = HeartHeight;
            }
            else if( offset>=fadeUntilHeart ){
                taille = 40;
            }
            Heart.css('height', taille + 'px');
            MainNavRow.css('margin-top', (taille-40) + 'px');
        });

        // #to-top button appears after scrolling
        var fixed = false;
        $(document).scroll(function() {
            if ($(this).scrollTop() > 250) {
                if (!fixed) {
                    fixed = true;
                    // $('#to-top').css({position:'fixed', display:'block'});
                    $('#to-top').show("slow", function() {
                        $('#to-top').css({
                            display: 'block'
                        });
                    });
                }
            } else {
                if (fixed) {
                    fixed = false;
                    $('#to-top').hide("slow", function() {
                        $('#to-top').css({
                            display: 'none'
                        });
                    });
                }
            }
        });


        // la fenêtre pop-in apparaît quand on scroll ou qu'on appuie sur "get yours" et disparaît quand on la ferme
        $(document).ready( function() {

            setTimeout(loadPopupBox, 3000);

            $('.close').click( function() {
                unloadPopupBox();
            });

            $('#pop-in').click(function() {
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