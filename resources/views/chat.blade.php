<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">﻿
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Chatroom</title>
</head>
<body>

    

    <div class="container bg-info text-black shadow p-3 mb-5 bg-#0084ff rounded" id="app">
    
    <h1 class="title">QuickyText</h1>
    <hr>

    <chat-log :messages="messages"></chat-log>
    
    <chat-composer v-on:messagesent="addMessage"></chat-composer>

    </div>



    <script src="js/app.js" charset="utf-8"></script>

</body>
</html>