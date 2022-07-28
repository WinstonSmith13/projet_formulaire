<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>SIMPLON - POST</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Fira+Sans+Condensed:wght@100;300;500&family=Roboto+Condensed&display=swap">
    <link rel="stylesheet" href="Css/normalize.min.css">
    <link rel="stylesheet" href="Css/mystyles.min.css">
</head>
<body>
<?php
$content = '<h1>Données envoyées :</h1>';
if (isset($_POST) && !empty($_POST)) {
    $content .= '<h3>_POST</h3>';
    $content .= '<pre>';
    $content .= print_r($_POST, true);
    $content .= '</pre>';
}

if (isset($_GET) && !empty($_GET)) {
    $content .= '<h3>_GET</h3>';
    $content .= '<pre>';
    $content .= print_r($_GET, true);
    $content .= '</pre>';
}

if (isset($_FILES) && !empty($_FILES)) {
    $content .= '<h3>_FILES</h3>';
    $content .= '<pre>';
    $content .= print_r($_FILES, true);
    $content .= '</pre>';
}

echo $content;

?>

<a href="/" class="back">Retourner à l'accueil</a>

</body>
</html>

