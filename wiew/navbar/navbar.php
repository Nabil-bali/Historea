<style>
.dropdown-menu .dropdown-item {
  padding-top : .3rem;
  padding-bottom : .3rem;
}
</style>
<!-- navbar -->
<nav id="navbar" class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="000">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="http://localhost/historea/?amp;action=home"><i class="fas fa-archway text-primary mr-1"></i><strong>Hist</strong>orea</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <div class="btn-group nav-link">
                <a type="button" class="" href="<?php $_SERVER['PHP_SELF'];?>?action=test">Le quizz</a>
                <a type="button" class="nav-link-dropdown dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="">Antiquité</a>
                  <a class="dropdown-item" href="">Moyen-Age</a>
                  <a class="dropdown-item" href="">Epoque Moderne</a>
                  <a class="dropdown-item" href="<?php $_SERVER['PHP_SELF'];?>?action=test&amp;cat=4">Epoque Contemporaine</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="http://localhost/historea/?action=test">Général</a>
                </div>
              </div>
              </li>
              
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/historea/?action=result">
                <p>Classement</p>
                <i class="fas fa-medal fa-1x text-primary"></i>
              </a>
            </li>

          <?php if (isset($_SESSION['is_connect'])) {?>
          
            <li class="nav-item">
              <div class="dropdown">
                  <a class="nav-link dropdown-toggle text-success" href="http://localhost/historea/?action=login" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-user"></i>
                  </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="http://localhost/historea/?action=profil">Mon profil</a>
                  <a class="dropdown-item" href="#">Réinitiliser mot de passe</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="http://localhost/historea/?deconnexion=1">Déconnexion</a>
                </div>
              </div>
              </li>

          <?php  } else { ?>
            <li class="nav-item">
              <a class="nav-link btn btn-primary btn-round" href="<?php $_SERVER['PHP_SELF'];?>?action=login">
              Se connecter
              </a>
            </li>
          <?php  } ?>
        </ul>
    </div>
  
  </div>
</nav>
