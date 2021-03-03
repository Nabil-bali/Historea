<?php
$title = 'Page du test';
ob_start();
?>

<body>

<?php $navbar = require 'navbar/navbar.php';

if (isset($_POST['historeaTest']))
{
?>

    <div class="page-header">
        <div class="page-header-image" data-parallax="true">
        </div>
        <div class="content-center">
            <div class="container">
                <div class="row">
                        <div class="card text-dark" >
                        <div class="alert alert--<?=$y['color']?>" role="alert">
                        Résultats du quizz : <?php if (isset($_GET['cat'])) { echo $c['categorie']; } else { echo "Histoire générale"; } ?>
                        </div>
                            <div class="card-body">
                                <h4 class="card-title mt-0"><?=$y['message']?></h4>
                                <p class="card-text">Vous avez obtenu un score de :</p>
                                <h2><strong class="text-<?=$y['color']?>"><?=$x?></strong></h2>
                                <h4>/100.</h4>
                                <a href="<?php $_SERVER['PHP_SELF'];?>?action=test" class="btn btn-round btn-outline-primary">Rejouer</a>
                                <a href="<?php $_SERVER['PHP_SELF'];?>?action=result" class="btn btn-round btn-primary">Voir le classement</a>
                            </div>
                </div>
            </div>
        </div>
    </div>




<?php
}
else
{
?>
<div id="b-score">
    <!-- --------------------------------  CONSIGNES DU QUIZZ   --------------------------------- -->

    <div  id="startQuizz" class="page-header">
    <div class="content-center">
      <div class="container">
        <div class="row">
          <div id="quizz-panel" class="card mt-3 mb-3 p-3">
            <div class="card-body">
              <h3 class="card-title text-dark">
                Pour commencer le test cliquez sur Démarrer
              </h3>
                <ul id="consignes" class="text-dark list-unstyled">
                  <li class="p-1"><span class="text-primary">1.</span> Le test est composé de 10 questions</li>
                  <li class="p-1"><span class="text-primary">2.</span> Il n'y a qu'une seule bonne réponse par question</li>
                  <li class="p-1"><span class="text-primary">3.</span> Une fois avoir répondu à toute les questions, cliquez sur Envoyer</li>
                </ul>
              <a id="btnStart" class="btn btn-danger btn-round btn-lg">Démarrer le test</a>
            </div>
        </div>
         </div>
      </div>
    </div>
  </div>

    <!-- --------------------------------  QUIZZ APP   --------------------------------- --> 


    








    <div id="quizzContent" class="container vh-100 pb-4"  style="padding-top:80px;"> 
      <form action="" method="post">
        <div class="row same-height-content">
            <div class="col-md-3 same-height-item align-content-stretch">
              <div class="card card-quizz-one h-100">
                <div class="card-body">
                <div class="alert alert-quizz alert-dark text-white">
                    Quizz : <?php if (isset($_GET['cat'])) { echo $c['categorie']; } else { echo "Histoire générale"; } ?>
                </div>
               <div class="d-none d-sm-block">
                    <p>score moyen :</p>
                    <h1 <?php if (isset($scoreMoyen)) { echo 'class="text-primary"'; } ?>>40</h1>
                    <div >
                        <p>/100</p>
                    </div>
                </div>
                </div>
              </div>
                
            </div>

            <div class="col-md-9 same-height-item align-content-stretch">
              <div class="card card-quizz-two h-100">
                <div class="card-body">

                    <?php 
                        foreach($test as $key => $question)
                        {
                    ?>

                    <div class="question<?php echo $key + 1; ?> d-none">
                        <div class="alert alert-quizz text-primary text-right">
                        Question <?php echo $key + 1; ?> sur 10
                        </div>
                        <div class="row mt-3 mb-3">
                                <div class="col-12 col-sm-12">
                                    <blockquote class="mt-2 text-dark card-question">
                                        <h6 class=""><span><?=$test[$key]['question']?></span></h6>
                                        <input type="hidden" name="id<?=$key;?>" value="<?=$test[$key]['id']?>">
                                    </blockquote>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="<?=$key;?>" id="a" value="a" >
                                            <span class="form-check-sign"></span>
                                            <?=$test[$key]['a']?>
                                        </label>
                                    </div>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="<?=$key;?>" id="b" value="b">
                                            <span class="form-check-sign"></span>
                                            <?=$test[$key]['b']?>
                                        </label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-check form-check-radio">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="radio" name="<?=$key;?>" id="c" value="c">
                                        <span class="form-check-sign"></span>
                                        <?=$test[$key]['c']?>
                                    </label>
                                    </div>
                                    <div class="form-check form-check-radio">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="radio" name="<?=$key;?>" id="d" value="d">
                                            <span class="form-check-sign"></span>
                                            <?=$test[$key]['d']?>
                                        </label>
                                    </div>
                                </div>
                        </div>
                    </div>
                    

                    <?php
                    ;}
                    ?>

                    <div class="row card-quizz-pagination">
                            <div class="col align-self-end">
                                <nav aria-label="Page navigation">
                                <ul class="pagination align-items-center d-flex">
                                    <li class="page-item"><a class="page-link" id="Prev">Précedent</a></li>
                                    <li class="page-item"><a class="page-link" id="Next">Suivant</a></li>
                                    <input type="submit" id="submit" name="historeaTest" class="btn btn-primary btn-round btn-submit ml-auto" value="Envoyer">
                                </ul>
                            </nav>
                     </div>
                    </div>

                </div>
              </div>
            </div>
        </div>
     </form>
    </div>












<?php
}
?>

<script src="public/js/quizz.js" type="text/javascript"></script>

</body>

<?php
$content = ob_get_clean();
require 'header/header.php';
?>