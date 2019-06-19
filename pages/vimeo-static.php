<?php
    $viewName = '[VIMEO] - Load statically';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'includes/title.php' ?>
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "VideoObject",
          "name": "Walter",
          "description": "Walter is an animated short-film ramdomly picked by hand by solano for the purpose of this test",
          "contentUrl": "https://player.vimeo.com/video/335248138",
          "thumbnailUrl": "http://i3.ytimg.com/vi/WAbMnu55lys/hqdefault.jpg",
          "interactionCount": "7751"
        }
    </script>
</head>
<body>
    <?php include '../includes/header.php' ?>
    <?php include '../includes/menu.php' ?>
    <?php include '../includes/vimeo-video.php' ?>
</body>
</html>
