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
                    <h5 class="title">Gestion des scores</h5>
                    <p class="category">page admin de l'application - Historea
                    </p>
                  </div>

                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Pseudo
                      </th>
                      <th>
                        Score
                      </th>
                      <th>
                        Catégorie
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                    
                    <?php
                    while($ligne = $allScores->fetch())
                    {
                      
                      ?>
                      <tr>
                        <td>
                        <?= $ligne['id']?> [Pseudo]
                        </td>
                        <td>
                          <?= $ligne['score']?> / 100
                        </td>
                        <td>
                          Histoire générale
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-sm btn-icon" data-original-title="Remove">
                            <a href="http://localhost/historea/?action=admin&admin=scores&iddelete=<?= $ligne['id'] ?>"> <i class="now-ui-icons text-white ui-1_simple-remove"></i></a>
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