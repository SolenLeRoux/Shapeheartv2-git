<!-- Cookie contenant la langue de l'utilisateur -->

<?php
// Regarde si un des boutons langue vient d'être actionné
if (ISSET($_POST["language"])) {
    $language = htmlspecialchars($_POST["language"]);
}
// Sinon, regarde s'il y avait déjà un cookie
elseif (ISSET($_COOKIE["language"])) {
    $language = htmlspecialchars($_COOKIE["language"]);
}
// Sinon, la langue par défaut sera l'anglais
else {
    $language = 'english';
}
// Actualise le cookie avec la langue choisie (doit apparaître sur chaque page)
setcookie("language", $language, time() + 365*24*3600, null, null, false, true); ?>


<!-- Cookie pour que le popup ne réapparaisse pas avant un certain temps (ici, une heure, soit 3600s) -->
<?php setcookie("popup", "no", time() + 10, null, null, false, true); ?>


<!-- Actualise la page -->
<?php $currentpage = $_SERVER['REQUEST_URI']; // trouve la page actuelle
$currentpage = substr($currentpage, 18); // supprime les 18 premiers caractères
if ($currentpage == "cookies.php") {
    header ("Location: $_SERVER[HTTP_REFERER]" );
} ?>