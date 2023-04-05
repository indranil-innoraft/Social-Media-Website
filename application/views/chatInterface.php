<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,
    user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Chat Room</title>
  <meta name="theme-color" content="#9F2B00">
  <link href="style.ee53b4cd773cd6772237.css" rel="stylesheet">
</head>
<link rel="stylesheet" href="/public/assets/css/chat.css">

<body>
  <section class="msger">
    <header class="msger-header">
      <div class="msger-header-title">
        <i class="fas fa-comment-alt"></i> Chat Room for <?php echo $_SESSION['user']['firstName']; ?>
      </div>
      <div class="msger-header-options">
        <span><i class="fas fa-cog"></i></span>
      </div>
    </header>

    <main class="msger-chat" id="chatDisplay">
      </div>
    </main>

    <div class="msger-inputarea">
      <input id="message" type="text" class="msger-input" placeholder="Enter your message...">
      <button id="sendBtn" type="button" class="msger-send-btn">Send</button>
</div>
  </section>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="/public/assets/js/chat.js"></script>
</body>
</html>
<script>
    var conn = new WebSocket('ws://localhost:8080');
conn.onopen = function(e) {
    console.log("Connection established!");
};

    conn.onmessage = function(e) {
    var getData = jQuery.parseJSON(e.data);
    // var html = "<b>" + getData.name + "</b>: " + getData.message + "<br>";
    var html = "<b style='color:red'>" + getData.userName + " " + getData.sentTime + ": " + "</b><i>" + getData.sendMessage + "</i><br>";
    jQuery('#chatDisplay').append(html);
    };

    $('#sendBtn').click(function() {
    var msg = $('#message').val();
    var userDiv = document.getElementById("userName");
    var chatDisplay = document.getElementById("chatDisplay");
    var setTime = document.getElementById("time");

    var date = new Date();
    var ampm = date.getHours() >= 12 ? 'PM' : 'AM';
    var time = date.getHours() + " : " + date.getMinutes() + " " + ampm;

    var userName = "<?php echo $_SESSION['user']['firstName']; ?>";
    var content = {
      userName : userName,
      sendMessage : msg,
      sentTime : time
    };

    conn.send(JSON.stringify(content));
    var html = "<b style='color:blue'>" + "<?php echo $_SESSION['user']['firstName']; ?>" + " " + time + ": " + "</b><i>" + msg + "</i><br>";

    jQuery('#chatDisplay').append(html);
    $('#message').val("");
    })
  </script>

