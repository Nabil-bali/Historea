<?php
$title = "Historea | admin : gestion des utilisateurs";
ob_start();
?>
<div class="panel-header panel-header-sm">
</div>
<div class="content">
  <div class="row">
    <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h5 class="title">Gestion des questions</h5>
                    <p class="category">page admin de l'application - Historea</p>
                  </div>

                  <div class="card-body">
                  
                  <?php if (isset($successfulUpdate)) { echo $successfulUpdate; }?>
                  <?php if (isset($_GET['idupdate'])) { echo $form; } ?>

                  <form action="" method="post" class="mt-4 mb-4">
                    <legend>Ajouter une nouvelle categorie de questions :</legend>
                      <div class="row align-items-center">
                        <div class="col-md-8">
                          <div class="form-group">
                            <input type="text" name="categorie" class="form-control" placeholder="" value="Histoire ancienne..">
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <input type="submit" value="envoyer" name="newCategorie" class="btn btn-primary btn-round">
                          </div>
                        </div>
                      </div>
                    </form>
                   
                    <h4>Liste des questions sur la base de données :</h4>
                    <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-primary">
                      <th style="width:5%;">
                        Id
                      </th>
                      <th style="width:55%;">
                        Questions
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
                        <td class="td-actions text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-warning btn-icon btn-sm" data-original-title="Edit Task">
                          <a href="http://localhost/historea/?action=admin&admin=asks&idupdate=<?= $ligne['id'] ?>"><i class="now-ui-icons text-white ui-2_settings-90"></i></a>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-icon btn-sm" data-original-title="Remove">
                            <a href="http://localhost/historea/?action=admin&admin=asks&iddelete=<?= $ligne['id'] ?>"> <i class="now-ui-icons text-white ui-1_simple-remove"></i></a>
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