<?php 
require './controllers/register_controller.php'
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>Get your new car!</title>
</head>
<body>
<?php include_once "header.php"; ?>
    <main>
        <container>
            <div class="display-log">
                <div class="register-log">
                    <div class="register-txt">
                        Vous avez déjà un compte ?
                    </div>
                    <a href="login.php" class="register-button">se connecter -></a>
                </div>
                <form action="" method="post" enctype="multipart/form-data" class="register-display">
                    <div class="register-disp">
                        <label for="nom" class="login-label">Nom</label>
                        <input type="text" placeholder="Nom" name="nom" class="register-input">
                    </div>
                    <div class="register-disp">
                        <label for="prenom" class="register-label">Prénom</label>
                        <input type="text" placeholder="Prénom" name="prenom" class="register-input">
                    </div>
                    <div class="register-disp">
                        <label for="email" class="register-label">E-mail</label>
                        <input type="email" placeholder="E-mail" name="email" class="register-input">
                    </div>
                    <div class="register-disp">
                        <label for="mdp" class="register-label">Mot de passe</label>
                        <input type="password" placeholder="Mot de passe" name="password" class="register-input">
                    </div>
                    <div class="register-disp">
                        <input type="submit" class="register-submit" value ="S'enregistrer">
                    </div>
                </form>
            </div>
        </container>
    </main>
</body>