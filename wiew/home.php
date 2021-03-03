<?php
$title = 'Historea - tester vos connaissances en Histoire';
ob_start();
?>

<body>

<?php
$navbar = require 'navbar/navbar.php';
?>


<div class="page-header">
    <div class="content-center">
        <div class="container">
            <h1 class="title text-black">
                Testez vos connaissances en Histoire
            </h1>
            <a href="http://localhost/historea/?action=test" class="btn btn-primary btn-lg btn-round">Démarrer</a>
            <a href="http://localhost/historea/?action=signIn" class="btn btn-neutral btn-lg btn-round">M'inscrire</a>
            <h6 class="text-black">Pour soumettre une question <a href="http://localhost/historea/?action=questionForm">cliquez ici</a></h6>
        </div>
    </div>
</div>

<div class="section section-categories">
    <div class="container">
        <h2 class="title">Sélectionnez un quizz :<h2>
        <div class="row">
            <div class="col-md-3">
                <a href="#">
                    <div class="card">
                        <img class="card-img-top card-image" src="public/now-ui-kit/antiquite-1.jpg" alt="antiquité">
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
                        <img filter-color="green" class="card-img-top card-image" src="public/now-ui-kit/moyen-1.jpg" alt="Moyen-Age">
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
                        <img class="card-img-top card-image" src="public/now-ui-kit/moderne-1.jpg" alt="Moderne">
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
                <a href="#">
                    <div class="card">
                        <img class="card-img-top card-image" src="public/now-ui-kit/contemp-1.jpg" alt="Contemporain">
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