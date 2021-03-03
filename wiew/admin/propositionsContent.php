<?php
$title = "Historea | admin : gestion des question non validées";
ob_start();


?>
<div class="panel-header panel-header-sm">
</div>
<div class="content" id="propositions">
  <div class="row">
    <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="title">Gestion des questions en attente de validation</h5>
                    <p class="category">page admin de l'application - Historea
                    </p>
                  </div>

                  <div class="card-body">

                  <div class="alert alert-warning" role="alert">
                  Pouvoir lire une question en détail (avec les différentes réponses, options...) avant de valider</br>
                  Ajouter un modal 'Souahitez confirmer l'ajout de cette question ?''</br>
                  Le message de succès doit s'afficher seulement si la validation à été réalisée
                  </div>

                    <?php if (isset($_GET['idconfirm'])) { echo $successfulValidation; }
                     if (isset($_GET['iddelete'])) { echo $successfulDelete; }
                     if (isset($_GET['idupdate'])) { echo $form; } ?>
                  
                    <h4>Liste des questions en attente de validation :</h4>
                    <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-primary">
                      <th style="width:5%;">
                        Id
                      </th>
                      <th style="width:55%;">
                        Questions :
                      </th>
                      <th style="width:10%;">
                        Réponse
                      </th>
                      <th style="width:10%;">
                        Epoque
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                    
                    <?php
                    while($ligne = $allAsks->fetch())
                    {
                      
                      ?>
                      <tr>
                        <td style="width:5%;">
                        <?= $ligne['id']?>
                        </td>
                        <td style="width:55%;">
                          <?= $ligne['question']?>
                        </td>
                        <td style="width:10%;">
                          <?= $ligne['solution'] ?>
                        </td>
                        <td style="width:10%;">
                          <?= $ligne['epoque'] ?>
                        </td>
                        <td class="text-right">
                        <button type="button" rel="tooltip" title="" class="btn btn-info btn-sm btn-icon" data-original-title="confirm">
                          <a href="http://localhost/historea/?action=admin&admin=propositions&idconfirm=<?= $ligne['id'] ?>"><i class="now-ui-icons text-white ui-1_check"></i></a>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-sm btn-icon" data-original-title="Edit Task">
                          <a href="http://localhost/historea/?action=admin&admin=propositions&idupdate=<?= $ligne['id'] ?>"><i class="now-ui-icons text-white ui-2_settings-90"></i></a>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-sm btn-icon" data-original-title="Remove">
                            <a href="http://localhost/historea/?action=admin&admin=propositions&iddelete=<?= $ligne['id'] ?>"> <i class="now-ui-icons text-white ui-1_simple-remove"></i></a>
                          </button>
                        </td>
                      </tr>
                      
                    <?php
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
<?php
$adminContent = ob_get_clean();
require 'header/adminFrame.php';
?>