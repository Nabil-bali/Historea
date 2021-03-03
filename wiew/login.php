<?php
$title = 'Login';
ob_start();
?>

<body class="login-page">
<?php
$navbar = require 'navbar/navbar.php';
?>
<div class="page-header clear-filter" filter-color="">
      
        <div class="content-login">
            <div class="container">
                <div class="col-md-6 m-auto">
                    <div class="card card-plain pt-3 pb-3">
                        <form class="form" action="" method="post">
                            <div class="card-header">
                                <h3 class="card-title pt-3 pb-3 text-dark">Me connecter :</h3>
                            </div>
    
                            <div class="card-body">
                                <div class="input-group no-border">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                    </div>
                                    <input type="email" name="mail" class="form-control" placeholder="Email">
                                </div>
                                <div class="input-group no-border">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-unlock-alt"></i></span>
                                    </div>
                                    <input type="password" name="password" class="form-control" placeholder="Mot de passe">
                                </div>
                            </div>
    
                            <div clas="card-footer">
                                <div class="p-2">
                                   <a href="">Mot de passe oublié ?</a>
                                </div>
                                <?php
                                if (isset($_GET['error']))
                                {
                                    echo '
                                    <div class="alert alert-warning" role="alert">
                                    '. $_GET['error'] . '
                                    </div>
                                    ';
                                }
                                ?>
                                 
                                <input type="submit" name="connexion" value="Me connecter" class="btn btn-primary btn-block btn-round btn-lg">
                                <div class="pull-left">
                                    <h6>
                                        <a href="http://localhost/historea/?action=signIn" class="link">Créer un compte</a>
                                    </h6>
                                </div>
                                <div class="pull-right">
                                    <h6>
                                    <a href="http://localhost/historea/?action=home" class="link">page d'accueil</a>
                                    </h6>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>


</body>

<?php

$content = ob_get_clean();

require 'header/header.php';
?>