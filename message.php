<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/message.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Messagerie</title>
    <script src="script.js"></script>
</head>
<body>
  <div w3-include-html="header.html"></div>

    <section class="chat p-5 h-5" id="conversations-section"></section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function renderChatUser(message, time, profileImage) {
                return `
                <ul class="list-unstyled user_msg">
                    <li class="d-flex justify-content-between mb-4">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">Me</p>
                                <p class="text-muted small mb-0">
                                    <i class="far fa-clock"></i> ${time}
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    ${message}
                                </p>
                            </div>
                        </div>
                        <img src="${profileImage}" alt="avatar" 
                            class="rounded-circle d-flex align-self-start ms-3 shadow-1-strong" width="60">
                    </li>
                </ul>
                `;
            }
            function renderBotMessage(sender, message, time, profileImage) {
                return (`
                <ul class="list-unstyled bot_msg">
                    <li class="d-flex justify-content-between mb-4">
                        <img src="${profileImage}" alt="avatar" 
                            class="rounded-circle d-flex align-self-start me-3 shadow-1-strong" width="60">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between p-3">
                                <p class="fw-bold mb-0">${sender}</p>
                                <p class="text-muted small mb-0">
                                    <i class="far fa-clock"></i> ${time}
                                </p>
                            </div>
                            <div class="card-body">
                                <p class="mb-0">
                                    ${message}
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
                `);
            }

            function renderConversations(messages) {
                let conversationHTML = '';
                messages.forEach((message) => {
                    if (message.sender === 'user') {
                        conversationHTML += renderChatUser(
                            message.text,
                            message.time,
                            message.profileImage
                        );
                    } else {
                        conversationHTML += renderBotMessage(
                            message.sender,
                            message.text,
                            message.time,
                            message.profileImage
                        );
                    }
                });

                return (`
                <div class="chat_parent">
                    ${conversationHTML}
                </div>
                <div class="btn_parent">
                    <div class="input-group sticky-md-bottom mb-3">
                        <input type="text" class="form-control" placeholder="Type your text" aria-label="Type your text" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">Send</button>
                    </div>
                </div>
                `);
            }

            function render() {
                const messages = [
                    { sender: 'Bot', text: 'Comment puis-je vous aider?', time: '12 mins ago', profileImage: 'assets/1.jpg' },
                    { sender: 'user', text: 'coucou', time: '12 mins ago', profileImage: 'assets/2.jpg' }
                ];
                const conversationsSection = renderConversations(messages);

                document.getElementById('conversations-section').innerHTML = conversationsSection;
            }

            render();
        });
        includeHTML();
    </script>
</body>
</html>
