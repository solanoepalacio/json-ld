<?php
    $viewName = 'Load the vwrap as is + JSON-LD'
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include '../includes/title.php' ?>
</head>
<body>
    <?php include '../includes/header.php' ?>
    <?php include '../includes/menu.php' ?>
    <section>
        <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/GlOETXrU-wQ"
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
        ></iframe>
        <script
            src="https://vwrap.cielo24.com/vwrap.js"
            data-job-id="76bace73fb844a82bf5d04065abe8378"
            data-provider="youtube"
            data-video-id="GlOETXrU-wQ"
            data-mdps-version="3"
            data-share-enabled="true"
            data-print-enabled="true"
            data-download-enabled="true"
        ></script>
    </section>

</body>
</html>
