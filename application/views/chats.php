<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <nav></nav>
    <div class="container">
        <div class="chat-head">
            <img src="/assets/img/ron.jpg" alt="chatbot image">
            <div class="indicator"></div>
            <div class="user-status">
                <h1>roNFrix</h1>
                <span>Active daw</span>
            </div>
        </div>
        <div class="chat-body">
            <p class="user"><span class="user-span">Hi</span> </p>
            <p class="chatbot">
                <img class="chatbot-img" src="/assets/img/ron.jpg" alt="chatbot image">
                <span class="chatbot-span">
                     Hello
                </span> 
            </p>
        </div>
        <div class="chat-footer">
            <form action="/chats/message" method="POST">
                <input type="text" name="message" placeholder="Aa">
            </form>
        </div>
    </div>
</body>
</html>