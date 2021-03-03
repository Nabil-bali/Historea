<?php
$title = 'Page profil - Historea';
ob_start();
?>

<body class="min-vh-100">

<?php
$navbar = require 'navbar/navbar.php';
?>

<div id="profil-page" class="container-fluid">
  <div class="row">
    <div id="sidebar" class="col-md-3 bg-light sidebar">
      <div class="p-3">
         <img src="public/sphynx.jpg" height="50" width="58" class="rounded-circle" alt="...">
          <h3 class="title"><?=$_SESSION['pseudo'];?></h3>
          <p class="category">Niveau 1</p>
      </div>
    </div>
    <div id="main" class="col-md-9 p-3">
        <div class="card h-100 bg-light">
          <div class="card-body">
            <!-- breadcrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Profil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Accueil</li>
              </ol>
            </nav>
            <div class="row">
              <div id="profilTabContent" class="col-md-8 mt-4">
                <p>Bienvenue sur votre espace personnel</p>

                <div class="tab-content mt-4" id="nav-tabContent">
                  <!-- changer de mot de passe -->
                  <div class="tab-pane fade" id="list-change-password" role="tabpanel" aria-labelledby="list-home-list">
                    <form action="" method="post" id="changePasswordForm">
                      <div class="form-group">
                        <label for="oldPassword">Ancien mot de passe</label>
                        <input type="password" class="form-control" name="oldPassword" id="oldPassword" aria-describedby="emailHelp" placeholder="ancien mot de passe">
                      </div>
                      <div class="form-group">
                        <label for="newpassword">Nouveau mot de passe</label>
                        <input type="password" class="form-control" name="newPassword" id="newPassword" placeholder="mot de passe">
                      </div>
                      <div class="form-group">
                        <label for="confirmPassword">Confirmation nouveau mot de passe</label>
                        <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="mot de passe">
                      </div>

                      <?php
                      if (isset($_POST['changePassword']))
                      {
                        ?>
                          <div id="alert-form" class="alert alert-<?=$messageChangePassword['color']?>" role="alert">
                          <?=$messageChangePassword['message']?>
                          </div>
                      <?php
                      }
                      ?>

                      <button name="changePassword" id="changePassword" type="submit" class="btn btn-primary">Enregistrer</button>
                    </form>
                  </div>

                  <!-- Mes scores ----------------------- -->
                  <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">  
                    <?php 
                    $numberScores = $myScoresContent->rowCount();

                    if ($numberScores > 0)
                    {
                      ?>
                      <table class="table">
                      <thead>
                          <tr>
                              <th class="text-center">#</th>
                              <th>Score</th>
                              <th>Catégorie</th>
                              <th>Date</th>
                          </tr>
                      </thead>
                      <tbody>
                        <?php 
                        $position = 1;
                        while ($ligne = $myScoresContent->fetch())
                       {
                         if (empty($ligne['categorieId']))
                         {
                          $ligne['categorieId'] = "Histoire générale";
                         }
                        ?>
                          <tr>
                              <td class="text-center"><?=$position?></td>
                              <td><?=$ligne['score']?>/100</td>
                              <td><?=$ligne['categorieId']?></td>
                              <td><?=$ligne['date_crea']?></td>
                          </tr>
                          <?php 
                          $position++;
                          }
                          ?>
                      </tbody>
                    </table><?php
                    }
                    else 
                    {
                      echo "<div class=\"alert alert-info\" role=\"alert\">
                            <p>Vous n'avez pas de score enregistrer. Jouer une partie afin d'enregistrer votre score </p>
                          </div>";
                    }
                    ?>
                  </div>

                  <!-- jouer quizz ----------------------- -->
                  <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                    <div class="card text-center">
                      <div class="card-body">
                        <h4 class="card-title">Jouer maintenant</h4>
                        <p class="card-text">Testez vos connaissances en histoire à travers des quizz, puis comparer votre score autres joueurs</p>
                        <a href="<?php $_SERVER['PHP_SELF'];?>?action=home" class="btn btn-primary">Les quizz</a>
                      </div>
                    </div>
                  </div>

                  <!-- proposer des questions ----------------------- -->
                  <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                    <div class="card text-center">
                      <div class="card-body">
                        <h4 class="card-title">Proposer vos questions</h4>
                        <p class="card-text">Participez à l'aventure Historea en contribuant à l'élaboration des quizz. Vous aussi avez votre mot à dire !</p>
                        <a href="<?php $_SERVER['PHP_SELF'];?>?action=questionForm" class="btn btn-primary">Je participe</a>
                      </div>
                    </div>
                  </div>
                </div>
                
              </div>

              <div id="side-right-profil" class="col-md-4 mt-4 ">
                <h6 class="mt-2 mb-4">Que souhaitez-vous faire ?</h6>   

                <div class="list-group" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-change-password" role="tab" aria-controls="home">Modifier mon mot de passe</a>
                  <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Voir mes scores</a>
                  <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Jouer un quizz</a>
                  <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Proposer des questions</a>
                </div>
              </div>
              
            </div>
          </div>
        </div>    
      </div>
  </div>
</div>

<?php
// $navbar = require 'navbar/footer.php';

if (isset($_POST['changePassword']))
{
  ?>
  <script>
    changePasswordForm()
  </script>
  <?php
}
?>

<script>
profilPageStyle();
</script>
</body>

<?php
$content = ob_get_clean();
require 'header/header.php';
?>