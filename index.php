<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Forum Chat</title>
</head>
<body>
<h1>Forum Chat</h1>

<div id="chat-box">
<?php
include('chat.php');
?>
</div>

<form action="send_message.php" method="post">
<input type="text" name="message" placeholder="Type your message here">
<button type="submit">Send</button>
</form>

</body>
</html>
