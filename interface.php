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
    <div w3-include-html="header.html"></div>
    <div class="block-info">
        <div class="information">
            <div class="name">
                <div class="name-title">Nom du véhicule</div>
                <input id="carName" placeholder="Nom" class="name-input">
            </div>
            <!-- <div class="name">
                <div class="name-title">Nom de marque</div>
                <input id="carBrand" placeholder="Marque" class="name-input">
            </div> -->
            <div class="name">
                <div class="name-title">Prix du véhicule</div>
                <input id="carPrice" placeholder="Prix" class="name-input">
            </div>
            <div class="name">
                <div class="name-title">Couleur du véhicule</div>
                <input id="carColor" placeholder="Couleur" class="name-input">
            </div>
            <!-- <div class="name">
                <div class="name-title">Nombre de kilomètres</div>
                <input id="carMileage" placeholder="Kilomètres" class="name-input">
            </div>
            <div class="name">
                <div class="name-title">Lieu actuel du véhicule</div>
                <input id="carLocation" placeholder="Lieu" class="name-input">
            </div>
            <div class="name">
                <div class="name-title">État du véhicule</div>
                <input id="carCondition" placeholder="État" class="name-input">
            </div> -->
        </div>
        <div class="inp-img">
            <div class="name-title">Ajouter une photo</div>
            <input type="file" name="category_image" id="carImage" accept="image/jpeg, image/png" required>
        </div>  
    </div>
    <div class="fait">
        <button onclick="addCar()" class="search-submit"><a href="C:\wamp64\www\Get-Your-New-Car\index.php">Done</a></button>
    </div>
    <div id="includedContent"></div>
    <script>includeHTML();</script>
</body>
</html>
