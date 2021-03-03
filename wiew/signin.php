<?php
$title = 'Sign In';
ob_start();
?>

<body class="signup-page">
<?php
$navbar = require 'navbar/navbar.php';
?>
<div class="page-header signin-content" filter-color="violet">
        <div class="container">
            <div class="row">
              <div class="col-md-4 mr-auto">
                <div class="card card-signup" data-background-color="orange">
                    <form class="form" action="" method="post">
                        <div class="card-header">
                            <h3 class="card-title title-up">S'inscrire :</h3>
                        </div>
                        <div class="card-body">
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user-circle"></i></span>
                                </div>
                                <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
                            </div>
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="far fa-envelope"></i></span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
                            </div>
                            <div class="input-group no-border">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                </div>
                                <input type="password" class="form-control" name="confirmation" placeholder="Mot de passe (confirmation)">
                            </div>
                        </div>
                        <div class="card-footer">
                          <?php
                            if (isset($_GET['error']))
                            {
                                echo '<div class="alert alert-warning" role="alert">'
                                . $_GET['error'] . '</div>';
                            }
                         ?>
                          <input type="submit" name="signInForm" value="M'inscrire" class="btn btn-neutral btn-round btn-lg">
                          <div>
                                
                                   <a href="http://localhost/historea/" class="link">Page d'accueil</a>
                                
                             </div>
                        </div>
                    </form>
                </div>
              </div>
              <div class="col-md-6 sign-up-category m-auto mt-4">
                <div class="info info-horizontal">
                    <div class="icon">
                      <i class="fas fa-2x fa-chalkboard-teacher text-primary"></i>
                    </div>
                    <div class="description">
                        <h5 class="info-title">Enrichissant</h5>
                        <p class="description">
                          De l'Egypte antique à aux batailles de la seconde mondiale, en passant par la cour de Chine et les invasions mongoles, nos quizz sont conçus sur des sujets captivants pour tout amateur d'Histoire.
                        </p>
                    </div>
                </div>

                <div class="info info-horizontal">
                    <div class="icon">
                      <i class="fas fa-2x fa-shapes text-primary"></i>
                    </div>
                    <div class="description">
                        <h5 class="info-title">Pédagogique</h5>
                        <p class="description">
                            Consolidez des connaissances sur des périodes de l'historie ou des lieux précis. Nous nous engageons à proposer aux internautes une solution d'apprentissage par le jeu.
                        </p>
                    </div>
                </div>

                <div class="info info-horizontal">
                    <div class="icon">
                      <i class="fas fa-2x fa-gamepad text-primary"></i>
                    </div>
                    <div class="description">
                        <h5 class="info-title">Divertissant</h5>
                        <p class="description">
                          Obtenez le meilleurs score possible, comparez vous à vos amis, et enregistrez vos scores en vous inscrivant gratuitement sur le site.
                        </p>
                    </div>
                </div>
              </div>
          </div>
    </div>

</body>

<?php

$content = ob_get_clean();

require 'header/header.php';
?>