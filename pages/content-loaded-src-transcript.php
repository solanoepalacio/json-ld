<?php
    $viewName = '[Youtube] - Load using an html script tag after dom-content-loaded event - with transcript'
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

  <script >
    window.addEventListener('DOMContentLoaded', (event) => {
      console.log('the content has been loaded');

      const scriptElement = document.createElement('script')
      scriptElement.setAttribute('type', 'application/ld+json');
      scriptElement.setAttribute('src', 'assets/json-ld');

      insertVideoHtmlTranscript();

      document.querySelector('head').append(scriptElement);
      console.log('Script element appended');
    });

    function insertVideoHtmlTranscript () {
      console.log('Adding Html Transcript');
      const transcript = document.createElement('div');
      transcript.innerHTML = `<?php echo $transcriptHTML; ?>`;
      const body = document.querySelector('body');
      body.insertBefore(transcript, body.lastChild);
    }
  </script>
</body>
</html>
