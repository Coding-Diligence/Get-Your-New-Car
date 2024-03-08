<?php

// UPDATE
if ($_SERVER['REQUEST_METHOD'] === 'POST' ) 
{
    // var_dump($_POST);die();
    $errors = [];

    if (empty($_POST['`name`, `price`, `color`, `kilometrage`, `state`, `image_path`'])) {
        $errors['name'] = 'Un nom est obligatoire';
        
    }
    if (empty($_POST['price'])) {
        $errors['price'] = 'Un prix est obligatoire';
        
    }
    if (empty($_POST['color'])) {
        $errors['color'] = 'Une couleur est obligatoire';
        
    }
    if (empty($_POST['kilometrage'])) {
        $errors['kilometrage'] = 'Le kilometrage est obligatoire';
        
    }
    if (empty($_POST['state'])) {
        $errors['state'] = 'Un emplacement est obligatoire';
        
    }
    if (empty($_POST['image_path'])) {
        $errors['image_path'] = 'Une image est obligatoire';
        
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO  cars (name, price, color, kilometrage, state, image_path) VALUES (:name, :price, :color, :kilometrage, :state, :image_path)";
        $response = $bdd->prepare($query);
        $response->execute([
            ':name' => $_POST['name'],
            ':price' => $_POST['price'],
            ':color' => $_POST['color'],
            ':kilometrage' => $_POST['kilometrage'],
            ':state' => $_POST['state'],
            ':image_path' => $_POST['image_path'],
        ]);

        header('location:index.php');
        exit();
    }
} 
?>





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/interface.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="script.js"></script>
    <title>Get your new car!</title>
</head>
<body>
    <?php include_once "header.php"; ?>
    <div w3-include-html="header.html"></div>
    <form action="" method="POST">
    <div class="block-info">
        <div class="information">
            <div class="name">
                <div class="name-title">Nom du véhicule</div>
                <input id="carName" placeholder="Nom" class="name-input" value="<?= $_POST['name'] ?? '' ?>">
                <?php if (!empty($errors['name'])) {?>
                <br><span class='error'><?= $errors['name'] ?></span>
            <?php } ?>
            </div>
            <div class="name">
                <div class="name-title">Prix du véhicule</div>
                <input id="carPrice" placeholder="Prix" class="name-input" value="<?= $_POST['price'] ?? '' ?>">
                <?php if (!empty($errors['price'])) {?>
                <br><span class='error'><?= $errors['price'] ?></span>
            <?php } ?>
            </div>
            <div class="name">
                <div class="name-title">Couleur du véhicule</div>
                <input id="carColor" placeholder="Couleur" class="name-input" value="<?= $_POST['color'] ?? '' ?>">
                <?php if (!empty($errors['color'])) {?>
                <br><span class='error'><?= $errors['color'] ?></span>
            <?php } ?>
            </div>
            <div class="name">
                <div class="name-title">Nombre de kilomètres</div>
                <input id="carMileage" placeholder="Kilomètres" class="name-input" value="<?= $_POST['kilometrage'] ?? '' ?>">
                <?php if (!empty($errors['kilometrage'])) {?>
                <br><span class='error'><?= $errors['kilometrage'] ?></span>
            <?php } ?>
            </div>
            <!-- <div class="name">
                <div class="name-title">Lieu actuel du véhicule</div>
                <input id="carLocation" placeholder="Lieu" class="name-input">
            </div> -->
            <div class="name">
                <div class="name-title">État du véhicule</div>
                <input id="carCondition" placeholder="État" class="name-input" value="<?= $_POST['state'] ?? '' ?>">
                <?php if (!empty($errors['state'])) {?>
                <br><span class='error'><?= $errors['state'] ?></span>
            <?php } ?>
            </div>
        </div>
        <div class="inp-img">
            <div class="name-title">Ajouter une photo</div>
            <input type="file" name="category_image" id="carImage" accept="image/jpeg, image/png" required value="<?= $_POST['image_path'] ?? '' ?>">
            <?php if (!empty($errors['image_path'])) {?>
                <br><span class='error'><?= $errors['image_path'] ?></span>
            <?php } ?>
        </div>  
    </div>
    <div class="fait">
    <form action="index.php">
        <button type="submit" onclick="addCar()" class="search-submit">Done</button>
    </form>
    </form>
    </div>
    <div id="includedContent"></div>
    <script>includeHTML();</script>
</body>
</html>
