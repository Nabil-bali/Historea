<?php
$title = 'Historea - Le classement des experts';
ob_start();
?>

<body class="landing-page">

<?php
$navbar = require 'navbar/navbar.php';
?>


<div class="section">
          <div class="container pt-2">
            <div class="row">
              <div class="col-md-9">
                  <div class="card">

                  <?php 
                  // var_dump($_SESSION);
                  
                  // var_dump($miId);
                  ?>

                    <div class="card-header pt-2 pl-4">
                      <div class="row justify-content-between">
                        <div class="col-sm-6">
                        <h5 class="title">Classement</h5>
                        <p class="">Résulat du Quizz :<span class="text-primary">
                          <?php if (isset($_SESSION['cat'])) 
                          { 
                            if ($_SESSION['cat'] == 0)
                            {
                                echo "Histoire générale";
                            }
                            else
                            {
                                 echo $c['categorie'];
                            }   
                          } 
                        ?>
                          </span>
                          </p>
                      </div>
                      <div class="col-sm-6 align-self-end">
                      <form action="" method="post" class="form form-inline form-inline-grp">
                        <div class="form-group">
                                      <label for="hall" class="sr-only"></label>
                                      <div class="form-group">
                                      <select name="cat" class="form-control" id="selectCategorie" value="choisir" onchange="isSelect()">
                                        <option selected hidden>choisir une autre catégorie </option>
                                        <option value="1">Antiquité</option>
                                        <option value="2">Moyen-age</option>
                                        <option value="3">Moderne</option>
                                        <option value="4">Contemporain</option>
                                        <option value="0">Histoire générale</option>
                                      </select>
                                    </div>
                        </div>
                        <input id="btnSelectCategorie" type="submit" class="btn btn-primary btn-demi" value="Voir" disabled>
                      </form>
                       </div>
                      </div>
                    </div>



                    <div class="card-body">
                      <div class="table-responsive">
                                <table class="table table-dark">
                                <thead class=" text-warning">
                        <th>
                          Pseudo
                        </th>
                        <th>
                          Score
                        </th>
                        <th>
                          Date
                        </th>
                      </thead>
                      <tbody>
                      
                      <?php
                      if (isset( $myScore))
                      {
                        $my = $myScore->fetch();
                      }
                      
                      $inTable = 0;
                      $underTable = 0;
                      while($ligne = $allScores->fetch())
                      {
                        if (isset($my) && $my['id'] == $ligne['id'])
                        {
                            $inTable = 1;
                            $underTable = 1;
                        }
                        else
                        {
                            $inTable = 0;
                        } 
                                               ?>
                        <tr <?php if ($inTable == 1) { echo "class=\"bg-success text-white\"";}?>>
                          <td>
                          <?php if ($inTable == 1) { echo "Vous";} else { echo $ligne['userId'];}?>
                          </td>
                          <td>
                            <?= $ligne['score']?> / 100
                          </td>
                          <td>
                          <?= $ligne['date_crea']?> 
                          </td>
                        </tr>
                        
                    <?php
                    }
                    if (isset($my) && $underTable == 0)
                    {
                    echo "
                    <tr class=\"bg-light\">
                          <td>
                          ------
                          </td>
                          <td>
                            --
                          </td>
                          <td>
                          0000-00-00
                          </td>
                        </tr>
                    <tr class=\"bg-info text-white\">
                          <td>
                          Vous
                          </td>
                          <td>
                            ".$my['score']." / 100
                          </td>
                          <td>
                          ".$my['date_crea']."
                          </td>
                        </tr>";
                    } 
                    ?>
                     </tbody>
                          </table>
                          <?=$p['link'];?>
                          <?=$p['text'];?>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>

<!-- ----- Liens pour rejouer un quizz ------------ -->
<div class="section section-categories bg-light">
          <div class="container">
              <h2 class="title">Sélectionnez un quizz :<h2>
              <div class="row">
                  <div class="col-md-3">
                      <a href="#">
                          <div class="card">
                              <img class="card-img-top" src="public/now-ui-kit/antiquite-1.jpg" alt="antiquité">
                              <div class="card-img-overlay">
                                <span class="badge badge-warning ">Nouveau</span>
                              </div>
                              <div class="card-body">
                                <p class="text-warning">Antiquité</p>
                                  <div class="row">
                                    <div class="col">
                                       <small class="text-muted pull-left"><i class="fas fa-clipboard-list"></i> 10 questions</small>
                                    </div>
                                    <div class="col">
                                       <small class="text-muted pull-right"><i class="fas fa-clock"></i>5 minutes</small>
                                    </div>
                                  </div>
                                  <small class="text-dark text-justify">Ces ressources ont été conçues pour aider les enseignants à s'approprier les différents thèmes du programme d'histoire et géographie du cycle 4.</small> 
                                
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="#">
                          <div class="card">
                              <img filter-color="green" class="card-img-top" src="public/now-ui-kit/moyen-1.jpg" alt="Moyen-Age">
                              <div class="card-img-overlay">
                                <span class="badge badge-success">Nouveau</span>
                              </div>
                              <div class="card-body">
                                <p class="text-success">Moyen-age</p>
                                  <div class="row">
                                    <div class="col">
                                       <small class="text-muted pull-left"><i class="fas fa-clipboard-list"></i> 10 questions</small>
                                    </div>
                                    <div class="col">
                                       <small class="text-muted pull-right"><i class="fas fa-clock"></i>5 minutes</small>
                                    </div>
                                  </div>
                                  <small class="text-dark text-justify">Ces ressources ont été conçues pour aider les enseignants à s'approprier les différents thèmes du programme d'histoire et géographie du cycle 4.</small> 
                                
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="#">
                          <div class="card">
                              <img class="card-img-top" src="public/now-ui-kit/moderne-1.jpg" alt="Moderne">
                              <div class="card-img-overlay">
                                <span class="badge badge-danger">Nouveau</span>
                              </div>
                              <div class="card-body">
                                <p class="text-danger">Moderne</p>
                                  <div class="row">
                                    <div class="col">
                                       <small class="text-muted pull-left"><i class="fas fa-clipboard-list"></i> 10 questions</small>
                                    </div>
                                    <div class="col">
                                       <small class="text-muted pull-right"><i class="fas fa-clock"></i>5 minutes</small>
                                    </div>
                                  </div>
                                  <small class="text-dark text-justify">Ces ressources ont été conçues pour aider les enseignants à s'approprier les différents thèmes du programme d'histoire et géographie du cycle 4.</small> 
                                
                              </div>
                          </div>
                      </a>
                  </div>
                  <div class="col-md-3">
                      <a href="<?php $_SERVER['PHP_SELF'];?>?action=test&amp;cat=4">
                          <div class="card">
                              <img class="card-img-top" src="public/now-ui-kit/contemp-1.jpg" alt="Contemporain">
                              <div class="card-img-overlay">
                                <span class="badge badge-info">Nouveau</span>
                              </div>
                              <div class="card-body">
                                <p class="text-info">Contemporain</p>
                                  <div class="row">
                                    <div class="col">
                                       <small class="text-muted pull-left"><i class="fas fa-clipboard-list"></i> 10 questions</small>
                                    </div>
                                    <div class="col">
                                       <small class="text-muted pull-right"><i class="fas fa-clock"></i>5 minutes</small>
                                    </div>
                                  </div>
                                  <small class="text-dark text-justify">Ces ressources ont été conçues pour aider les enseignants à s'approprier les différents thèmes du programme d'histoire et géographie du cycle 4.</small> 
                                
                              </div>
                          </div>
                      </a>
              </div>
          </div>
      </div>
    </div>

<?php
$navbar = require 'navbar/footer.php';
?>

</body>

<?php
$content = ob_get_clean();
require 'header/header.php';
?>