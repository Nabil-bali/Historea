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
                    <h5 class="title">Gestion des utilisateurs</h5>
                    <p class="category">page admin de l'application - Historea
                    </p>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                    <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Id
                      </th>
                      <th>
                        Pseudo
                      </th>
                      <th>
                        Email
                      </th>
                      <th>
                        Password
                      </th>
                      <th class="text-right">
                        Action
                      </th>
                    </thead>
                    <tbody>
                    
                    <?php
                    while($ligne = $allUsers->fetch())
                    {
                      
                      ?>
                      <tr>
                        <td>
                        <?= $ligne['id']?>
                        </td>
                        <td>
                          <?= $ligne['pseudo']?>
                        </td>
                        <td>
                          <?= $ligne['email'] ?>
                        </td>
                        <td>
                          <?= $ligne['password'] ?>
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-info btn-sm btn-icon" data-original-title="Edit Task">
                          <a href="http://localhost/historea/?action=admin&admin=users&idupdate=<?= $ligne['id'] ?>"><i class="now-ui-icons text-white ui-2_settings-90"></i></a>
                          </button>
                          <button type="button" rel="tooltip" title="" class="btn btn-danger btn-sm btn-icon" data-original-title="Remove">
                            <a href="http://localhost/historea/?action=admin&admin=users&iddelete=<?= $ligne['id'] ?>"> <i class="now-ui-icons text-white ui-1_simple-remove"></i></a>
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