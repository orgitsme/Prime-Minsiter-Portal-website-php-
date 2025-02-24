<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="images/fa.png">
    <title>Pakistan Citizen's Portal</title>
    
    <style> 
        body {
            background-image: linear-gradient(green, black); 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
        }
        .chat-container { 
            max-width: 1400px; 
            margin: 50px auto; 
            background-image: linear-gradient(green, black);
            border-radius: 8px; 
            overflow: hidden; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
            padding: 20px;
            position: relative;
        } 

        .message-container { 
            display: flex; 
            flex-direction: column; 
        } 

        .message { 
            padding: 10px; 
            margin: 10px; 
            border-radius: 5px; 
            max-width: 70%; 
            word-wrap: break-word; 
            display: flex; 
            align-items: center; 
        } 

        .sender-message { 
            background-color: #e0e0e0; 
            color: #000; 
            align-self: flex-start; 
        } 

        .receiver-message { 
            background-color: #4CAF50; 
            color: #fff; 
            align-self: flex-end; 
        } 

        .avatar { 
            width: 30px; 
            height: 30px; 
            border-radius: 50%; 
            margin-right: 10px; 
        } 

        .message-bar { 
            display: none; 
            position: fixed; 
            bottom: 0; 
            width: 100%; 
            background: white; 
            padding: 10px; 
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1); 
            border-top: 1px solid #ddd; 
        } 

        .message-bar.active { 
            display: block; 
        } 

        .message input { 
            width: calc(100% - 120px); 
            padding: 8px; 
            border: 1px solid #ddd; 
            border-radius: 5px; 
            margin: 10px 10px 10px 0; 
        } 

        .message button { 
            padding: 8px 12px; 
            margin: 10px 0; 
            background-color: #4CAF50; 
            color: #fff; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
        } 

        .chat-button { 
            position: fixed; 
            bottom: 10px; 
            right: 10px; 
            background-color: #4CAF50; 
            color: white; 
            border: none; 
            border-radius: 50%; 
            width: 50px; 
            height: 50px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            cursor: pointer; 
            font-size: 24px;
        }
    </style>
</head> 

<body> 
    <div class="chat-container"> 
        <div class="message-container"> 
            <div class="message sender-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220123013311/gfg.png" alt="Sender Avatar" class="avatar"> 
                Hello there! 
            </div> 
            <div class="message receiver-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210511160813/g4g.jpg" alt="Receiver Avatar" class="avatar"> 
                Hi! How can I help you today? 
            </div> 
            <div class="message sender-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220123013311/gfg.png" alt="Sender Avatar" class="avatar"> 
                How are you? 
            </div> 
            <div class="message receiver-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210511160813/g4g.jpg" alt="Receiver Avatar" class="avatar"> 
                I'm good, thank you! How's your project going? 
            </div> 
            <div class="message sender-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220123013311/gfg.png" alt="Sender Avatar" class="avatar"> 
                It's going well. Did you finish your backend work? 
            </div> 
            <div class="message receiver-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210511160813/g4g.jpg" alt="Receiver Avatar" class="avatar"> 
                Yes, I completed it last week. How about you? 
            </div> 
            <div class="message sender-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220123013311/gfg.png" alt="Sender Avatar" class="avatar"> 
                I'm almost done. I just need to test everything. 
            </div> 
            <div class="message receiver-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210511160813/g4g.jpg" alt="Receiver Avatar" class="avatar"> 
                Great! Let me know if you need any help. 
            </div> 
            <div class="message receiver-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210511160813/g4g.jpg" alt="Receiver Avatar" class="avatar"> 
                Yes, I completed it last week. How about you? 
            </div> 
            <div class="message sender-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220123013311/gfg.png" alt="Sender Avatar" class="avatar"> 
                I'm almost done. I just need to test everything. 
            </div> 
            <div class="message receiver-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210511160813/g4g.jpg" alt="Receiver Avatar" class="avatar"> 
                Great! Let me know if you need any help. 
            </div> 
            <div class="message receiver-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210511160813/g4g.jpg" alt="Receiver Avatar" class="avatar"> 
                Yes, I completed it last week. How about you? 
            </div> 
            <div class="message sender-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20220123013311/gfg.png" alt="Sender Avatar" class="avatar"> 
                I'm almost done. I just need to test everything. 
            </div> 
            <div class="message receiver-message"> 
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20210511160813/g4g.jpg" alt="Receiver Avatar" class="avatar"> 
                Great! Let me know if you need any help. 
            </div> 
        </div> 
    </div> 

    <div class="message-bar" id="messageBar"> 
        <input type="text" placeholder="Type your message..."> 
        <button>Send</button> 
    </div>

    <button class="chat-button" onclick="toggleMessageBar()">💬</button>

    <script>
        function toggleMessageBar() {
            const messageBar = document.getElementById('messageBar');
            messageBar.classList.toggle('active');
        }
    </script>
</body> 
</html>
