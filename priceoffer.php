<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/priceoffer.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
  <script src="script.js"></script>
</head>
<body>
<?php include_once "header.php"; ?>
  <div w3-include-html="header.html"></div>
  <div class="d-flex justify-content-around mx-auto p-2 main">
    <div class="card paul-card" style="width: 30rem;">
      <div class="card-body">
        <img src="assets/voiture1.jpg" class="car-img">
        <h6 class="text-body-secondary mx-auto p-2">Subaru</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <div class="car-location">ORLÉANS</div>
        <div class="car-price">9.000$</div>
        <div class="modif_suppr">
          <form action="interface.php">
          <button type="submit" class="search-submit delete">modifier</button>
          </form>
          <form action="#">
            <button type="submit" class="search-submit delete">Supprimé</button>
          </form>
        </div>
      </div>
      </div>
      <div class="card paul-card" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title .text-bg-primary "><img src="https://cdn.pixabay.com/photo/2020/11/22/04/58/child-5765632_1280.png" class="img-thumbnail rounded-circle paul"/> PAUL MOTORS</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Peugeot JSP</h6>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci, sint? Mollitia, fugit ducimus? Eum porro provident obcaecati nesciunt inventore quis magnam recusandae quidem rem, explicabo quia? Autem at tenetur cum.</p>
          <form><button type='submit' class="offer-submit">Payer</button></form><br>
          <form class="get-offer"><button type='submit' class="offer-submit">FAIRE UNE OFFRE</button></form>
        </div>
      </div>
      </div>      
  </div>
</body>
<script>includeHTML();</script>
<script src="./price-offer.js"></script>
</html>


