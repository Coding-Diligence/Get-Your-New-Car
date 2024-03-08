<?php var_dump($_SESSION) ?>
<nav>
  <div class="navbar">
    <div class="joe">
      <img src="assets/logo.png" class="logo">
      <a class="title" href="index.php">Cardiction</a>
    </div>
    <div>
      <?php if(isset($_SESSION['connexion']) && $_SESSION['connexion'] == 'connected'):?>
        <button class="search-submit">
          <a class="fin" href="interface.php">Add Car</a>
        </button>
        <button class="search-submit">
          <a class="fin" href="message.php">Messagerie</a>
        </button>
        <button class="search-submit">
          <a class="fin" href="./controllers/logout_controller.php">deconnexion</a>          
        </button>
        <?php else : ?>
          <button class="search-submit">
            <a class="fin" href="register.php">inscription</a>
          </button>
          <button class="search-submit">
            <a class="fin" href="login.php">Connexion</a>
          </button>
      <?php endif; ?>

    </div>
  </div>
</nav>