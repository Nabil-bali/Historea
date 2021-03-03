<?php
$title = "Historea | admin home page";
ob_start();
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Que souhaitez-vous faire ?</h5>
                <p class="category">page admin de l'application - Historea
                </p>
              </div>
              <div class="card-body all-icons">
                <div class="row">
                  <div class="col">
                  <div class="alert alert-warning" role="alert">
                    Refonte graphique du site
                  </div>
                  </div>
                </div>
                <div class="row">
                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <a href="http://localhost/historea/?action=admin&admin=users" class="link">
                            <div class="font-icon-detail">
                            <i class="now-ui-icons users_circle-08"></i>
                            <p>Utilisateurs</p>
                            </div>
                        </a>
                    </div>
                    
                    
                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                        <a href="http://localhost/historea/?action=admin&admin=asks">
                            <div class="font-icon-detail">
                            <i class="now-ui-icons files_single-copy-04"></i>
                            <p>Questions</p>
                            </div>
                        </a>
                    </div>

                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                        <a href="http://localhost/historea/?action=admin&admin=propositions">
                            <div class="font-icon-detail">
                            <i class="now-ui-icons files_single-copy-04"></i>
                            <p>Propositions</p>
                            </div>
                        </a>
                    </div>
                    
                    <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                        <a href="http://localhost/historea/?action=admin&admin=scores">
                            <div class="font-icon-detail">
                            <i class="now-ui-icons sport_trophy"></i>
                            <p>Scores</p>
                            </div>
                        </a>
                    </div>
                    
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons loader_gear"></i>
                      <p>Réglages</p>
                    </div>
                  </div>

                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons ui-1_simple-add"></i>
                      <p></p>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons ui-1_simple-add"></i>
                      <p></p>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons ui-1_simple-add"></i>
                      <p></p>
                    </div>
                  </div>
                  <div class="font-icon-list col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">
                    <div class="font-icon-detail">
                      <i class="now-ui-icons ui-1_simple-add"></i>
                      <p></p>
                    </div>
                  </div>
                 
                </div>
                </div>
           </div>
        </div>
  </div>
</div>
  
<?php
$adminContent = ob_get_clean();
require 'header/adminFrame.php';
?>