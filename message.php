<?php
include_once "database.php"; // Include the file to connect to the database

// Fetch messages from the database
$sql = "SELECT * FROM messages";
$stmt = $bdLink->prepare($sql);
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

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
    <?php include_once "header.php"; ?>
    <section class="chat p-5 h-5" id="conversations-section"></section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function renderMessage(message) {
                return (`
                <ul class="list-unstyled ${message.sender === 'user' ? 'user_msg' : 'bot_msg'}">
                    <li class="d-flex justify-content-between mb-4">
                        ${message.sender === 'user' ? 
                            `<div class="card">
                                <div class="card-header d-flex justify-content-between p-3">
                                    <p class="fw-bold mb-0">Me</p>
                                    <p class="text-muted small mb-0">
                                        <i class="far fa-clock"></i> ${message.time}
                                    </p>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">${message.text}</p>
                                </div>
                            </div>` 
                            : 
                            `<div class="card">
                                <div class="card-header d-flex justify-content-between p-3">
                                    <p class="fw-bold mb-0">${message.sender}</p>
                                    <p class="text-muted small mb-0">
                                        <i class="far fa-clock"></i> ${message.time}
                                    </p>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">${message.text}</p>
                                </div>
                            </div>`
                        }
                        <img src="${message.profileImage}" alt="avatar" 
                            class="rounded-circle d-flex align-self-start ${message.sender === 'user' ? 'ms-3' : 'me-3'} shadow-1-strong" width="60">
                    </li>
                </ul>
                `);
            }

            function renderConversations(messages) {
                let conversationHTML = '';
                messages.forEach((message) => {
                    conversationHTML += renderMessage(message);
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
                const messages = <?php echo json_encode($messages); ?>;
                const conversationsSection = renderConversations(messages);

                document.getElementById('conversations-section').innerHTML = conversationsSection;
            }

            render();
        });
    </script>
</body>
</html>
