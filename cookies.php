<?php
if (ISSET($_COOKIE["language"])) {
    $language = htmlspecialchars($_COOKIE["language"]);
}
elseif (ISSET($_POST["language"])) {
    $language = htmlspecialchars($_POST["language"]);
}
else {
    $language = 'english';
}
setcookie("language", $language, time() + 365*24*3600, null, null, false, true); ?>

<?php echo $_COOKIE["language"]; ?>
