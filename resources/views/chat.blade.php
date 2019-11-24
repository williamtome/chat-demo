<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/app.css">
    <title>Document</title>
</head>
<body>
    
    <div id="app">
        <div class="container">
            <h1>Chat</h1>
            <chat-log :messages="messages"></chat-log>
            <chat-composer v-on:messagesent="addMessage"></chat-composer>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>
</html>