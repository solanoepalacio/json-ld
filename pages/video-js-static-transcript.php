<?php
    $viewName = 'Estatico con transcript'
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include '../includes/title.php' ?>
    <?php include '../includes/videojs-sources.php' ?>
</head>
<body>
    <?php include '../includes/header.php' ?>
    <?php include '../includes/menu.php' ?>
    <?php include '../includes/videojs-video.php' ?>

    <script>
        (function insertVideoHtmlTranscript () {
            console.log('Adding Html Transcript');
            const transcript = document.createElement('div');
            transcript.innerHTML = `<?php echo $transcriptHTML; ?>`;
            const body = document.querySelector('body');
            body.insertBefore(transcript, body.lastChild);
        })()
    </script>
</body>
</html>
