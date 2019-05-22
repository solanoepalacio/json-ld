<?php
    $viewName = '[Youtube] - Load over a network request - with transcript';
    $transcriptHTML = file_get_contents('../includes/transcript.html');
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
    <?php include '../includes/video.php' ?>

    <script>
        function insertVideoHtmlTranscript () {
            console.log('Adding Html Transcript');
            const transcript = document.createElement('div');
            transcript.innerHTML = `<?php echo $transcriptHTML; ?>`;
            const body = document.querySelector('body');
            body.insertBefore(transcript, body.lastChild);
        }

        fetch('/assets/json-ld')
            .then((response) => response.text())
            .then((data) => {
                console.log('data', data);
                const script = document.createElement('script');
                script.setAttribute('type', 'application/ld+json');
                script.innerHTML = data;

                insertVideoHtmlTranscript();

                document.querySelector('head').appendChild(script);
                console.info('JSON ld appended succesfully');
            });
        </script>
</body>
</html>
