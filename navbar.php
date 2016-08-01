<!-- Customisation de la navbar pour chaque page -->

<?php $currentpage = $_SERVER['REQUEST_URI']; // trouve la page actuelle
    $currentpage = substr($currentpage, 18); // supprime les 18 premiers caractères (/shapeheartv2-git/)
    $homepages = array('blog.php', 'FAQ.php'); // liste des pages sur lesquelles 'home' doit apparaître
    $FAQpages = array('article_1.php', 'article_2.php', 'blog.php', 'home.php'); // idem pour 'FAQ'
    $blogpages = array('article_1.php', 'article_2.php', 'FAQ.php', 'home.php'); // idem pour 'blog'
?>

<!-- Navbar elle-même -->

<div class="nav-container">
    <nav id="fading" class="overlay-nav">
        <div id="main-nav-row">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-1">
                        <a href="home.php">
                            <img class="nav-logo" src="img/logo-white.png" id="heart">
                        </a>
                    </div>
                    <div class="col-xs-4">
                    </div>
                    <?php if (in_array($currentpage, $homepages)) { ?>
                    <div class="col-md-3 col-xs-6 align-right">
                        <a href="home.php" class="nav-text text-menu slide-underline">
                            Home
                        </a>
                    </div>
                    <?php } ?>
                    <?php if (in_array($currentpage, $FAQpages)) { ?>
                    <div class="col-md-3 col-xs-6 align-right">
                        <a href="FAQ.php" class="nav-text text-menu slide-underline">
                            FAQ
                        </a>
                    </div>
                    <?php } ?>
                    <?php if (in_array($currentpage, $blogpages)) { ?>
                    <div class="col-md-2 col-xs-4 align-right">
                        <a href="blog.php" class="nav-text text-menu slide-underline">
                            Blog
                        </a>
                    </div>
                    <?php } ?>
                    <div class="col-md-1 col-xs-2 align-right">
                        <form class="nav-text text-menu">
                            <input class="nav-text language-text english rond-language" type="submit" onclick="switch_style('francais');return false;" name="language" value="Fr" id="btn-fr">
                            <input class="nav-text language-text francais rond-language" type="submit" onclick="switch_style('english');return false;" name="language" value="En" id="btn-en">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
