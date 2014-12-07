<!DOCTYPE html>
<html>
<head>
  <title>Erudite online quiz</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/vendors.css" />
  <link rel="stylesheet" href="./assets/app.css" />
</head>
<body>

  <div id="app"></div>

  <script src="./assets/vendors.js"></script>
  <script src="./assets/app.js"></script>
  <script type="text/javascript">
    // TEST

    function init() {
      var serverBaseUrl = document.domain+":8080";

      var socket = io.connect(serverBaseUrl);

      var sessionId = '';

      socket.on('connect', function () {
        sessionId = socket.io.engine.id;
        console.log('Connected ' + sessionId);
      });
      
      socket.on('news', function (data) {
          console.log(data);
          socket.emit('scorechanged', { my: 'data' });
      });
    }

    //$(document).on('ready', init);

  </script>
</body>
</html>
