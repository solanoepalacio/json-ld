<?php
    $viewName = 'JSON-LD loaded over network (no-transcript)';
    $transcriptHTML = file_get_contents('includes/transcript.html');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include 'includes/title.php' ?>
</head>
<body>
    <?php include 'includes/header.php' ?>
    <?php include 'includes/menu.php' ?>
    <?php include 'includes/video.php' ?>

    <script>

        fetch('./json-ld-data')
            .then((response) => response.text())
            .then((data) => {
                console.log('data', data);
                const scriptElement = document.createElement('script');
                scriptElement.setAttribute('type', 'application/ld+json');
                scriptElement.innerHTML = data;

                console.info('JSON ld appended succesfully')
            });

            // function insertVideoHtmlTranscript () {
            //   console.log('Adding Html Transcript');
            //   const transcript = document.createElement('div');
            //   transcript.innerHTML = `<?php echo $transcriptHTML; ?>`;
            //   const body = document.querySelector('body');
            //   body.insertBefore(transcript, body.lastChild);
            // }

            // window.addEventListener('DOMContentLoaded', (event) => {
            //     console.log('the content has been loaded');
            //     console.log('adding JSON-ld');
            //     const scriptElement = document.createElement('script')
            //     scriptElement.setAttribute('type', 'application/ld+json');
            //     scriptElement.innerHTML = JSON.stringify(structuredData);

            //     document.querySelector('head').append(scriptElement);
            //     insertVideoHtmlTranscript();

            //     console.log('Script element appended');
            // });
        </script>
</body>
</html>
