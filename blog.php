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
        <div id="header-blog">
            <div id="background-header-blog">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 text-vertical-center intro-message">
                            <div class=" text-header text-shapeheart">
                                <h1>BLOG</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Articles -->

    <section id="articles">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="article_container">

                        <div id="article-1">
                            <p class="titre-article">
                                <span class="english">Why run with a heart rate monitor ?</span>
                                <span class="francais">Pourquoi courir au cardio ?</span>
                            </p>
                            <p class="date-article">
                                25/06/2016
                            </p>
                            <img class="article_picture" src="img/bras_am.jpg">
                            <p id="debut-article-1" class="article-1 article" >
                                <span class="english">When heart rate monitoring devices emerged, I said to myself “What’s the use to know whether my heart is bumping at 70% or 90% of my maximum heart rate? In any case, I’ll end up breathless and my legs will beg me to stop.</span>
                                <span class="francais">Quand les cardios sont arrivés, je me disais « Quel intérêt de savoir si mon cœur est à 70 ou 90 de la fréquence cardiaque maximum (FCM)? Dans tous les cas, je suis essoufflé et mes jambes me supplient d’arrêter</span>
                                <br/>
                            </p>
                            <a class="article-btn-suite article" href="article_1.php"> <!-- onclick="document.getElementById('article-1').style.display= ''; this.style.display= 'none'; return false;">-->
                                <span class="english">Read More ...</span>
                                <span class="francais">Afficher la suite ...</span>
                            </a>
                            <div class="share-container">
                                <div class="share">
                                    <span class="english">Share</span>
                                    <span class="francais">Partager</span>
                                </div>
                                <div class="share_separator"></div>
                                <div class="share_logos">
                                    <div class="share_logo_block">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://www.shapeheart.com/article/1">
                                            <img class="share_logo" src="img/Facebook.png">
                                        </a>
                                        <a href="https://www.linkedin.com/cws/share?url=http://www.shapeheart.com/article/1">
                                            <img class="share_logo" src="img/Linked_in.png">
                                        </a>
                                        <a href="https://twitter.com/share?url=http://www.shapeheart.com/article/1">
                                            <img class="share_logo" src="img/Twitter.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="article-2">
                            <p id="titre-article-2">
                                <p class="titre-article">
                                    <span class="english">Why we shouldnt talk about calories</span>
                                    <span class="francais">Pourquoi on ne doit plus parler de calories</span>
                                </p>
                            </p>
                            <p class="date-article">
                                20/06/2016
                            </p>
                            <img class="article_picture" src="img/background_video.png">
                            <p id="debut-article-2" class="article-2 article">
                                <span class="english">When it comes to sports, we often talk about calories, but do when really know what it is? Physically, it corresponds to an energy measurement. This measurement is truly specific and amounts to the energy necessary to increase by one degree a single gram of water. Thus said, when we burn 1 000 calories, this equals to increase by one degree 1000 grams of water, of 1 liter. But where does this energy come from ? Where is she drawn in our body ?</span>
                                <span class="francais">Lorsqu’on parle de sport, on parle souvent de calories, mais qu’est ce qu’une calorie ? Physiquement, cela correspond à une mesure d’énergie. Cette mesure est très concrète et équivaut à l’énergie nécessaire pour faire augmenter d’un degré un gramme d’eau. Quand on brûle 1000 calories cela équivaudrait donc à faire augmenter d’un degré 1000 grammes d’eau, soit 1 litre. Mais d’où vient cette énergie ? Où est elle puisée dans notre corps ?</span>
                                <br/>
                            </p>
                            <a class="article-btn-suite article" href="article_2.php"><!-- onclick="document.getElementById('article-2').style.display= ''; this.style.display= 'none'; return false;">-->
                                <span class="english">Read more ...</span>
                                <span class="francais">Afficher la suite ...</span>
                            </a>
                            <div class="share-container">
                                <div class="share">
                                    <span class="english">Share</span>
                                    <span class="francais">Partager</span>
                                </div>
                                <div class="share_separator"></div>
                                <div class="share_logos">
                                    <div class="share_logo_block">
                                        <a href="#">
                                            <img class="share_logo" src="img/Facebook.png">
                                        </a>
                                        <a href="#">
                                            <img class="share_logo" src="img/Linked_in.png">
                                        </a>
                                        <a href="#">
                                            <img class="share_logo" src="img/Twitter.png">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Menu social media -->
                <div class="col-md-4">
                    <div id="menu-social-media">
                        <div id="menu-suscribe" class="widget">
                            <h1 class="widget-title">
                                <span class="english">Newsletter</span>
                                <span class="francais">Newsletter</span>
                            </h1>
                            <p>
                                <span class="english">Suscribe to our newsletter</span>
                                <span class="francais">Inscrivez-vous à notre newsletter</span>
                            </p>
                            <div id="enter-email">
                                <form method="post" action="signup.php">
                                    <p id="votre_email-socialmedia">
                                        <span class="english"><input type="email" name="email" id="email" placeholder="Your email" /></span>
                                        <span class="francais"><input type="email" name="email" id="email" placeholder="Votre mail" /></span>
                                    </p>
                                    <input type="submit" value="" id="bouton_envoyer-socialmedia" \>
                                </form>
                            </div>
                        </div>
                        <div id="menu-follow" class="widget">
                            <h1 class="widget-title">
                                <span class="english">Follow</span>
                                <span class="francais">Nous suivre</span>
                            </h1>
                            <a href="https://www.facebook.com/Shapeheart-915761331864592/" target="_blank">
                                <i class="fa fa-facebook btn-follow"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/10779438?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A10779438%2Cidx%3A1-1-1%2CtarId%3A1464628713433%2Ctas%3Ashapeheart" target="_blank">
                                <i class="fa fa-linkedin btn-follow"></i>
                            </a>
                            <a href="https://twitter.com/Shapeheart_" target="_blank">
                                <i class="fa fa-twitter btn-follow"></i>
                            </a>
                        </div>
                        <div id="menu-facebook" class="widget">
                            <h1 class="widget-title">
                                Facebook
                            </h1>
                            <div class="iframe-facebook-container">
                                <img class="iframe-facebook-ratio" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAAALAAAAAAQAAkAAAIKhI+py+0Po5yUFQA7"/>
                                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FShapeheart-915761331864592%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="500" height="800" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">
                                </iframe>
                            </div>
                        </div>
                        <div id="menu-twitter" class="widget">
                            <h1 class="widget-title">
                                Twitter
                            </h1>
                            <a class="twitter-timeline" data-height="800" href="https://twitter.com/Shapeheart_">Tweets by Shapeheart_</a>
                            <script async src="https:/platform.twitter.com/widgets.js" charset="utf-8"></script>
                        </div>
                    </div>
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
    <script src="customJS/site-bilingue.js"></script>

</body>