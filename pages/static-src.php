<?php
    $viewName = '[Youtube] - Load using an html script tag';
    $transcriptHTML = file_get_contents('../assets/transcript.html');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include '../includes/title.php' ?>
    <script src="/assets/json-ld.jsonld" type="application/ld+json"></script>
</head>
<body>
    <?php include '../includes/header.php' ?>
    <?php include '../includes/menu.php' ?>
    <?php include '../includes/youtube-video.php' ?>
</body>
</html>
