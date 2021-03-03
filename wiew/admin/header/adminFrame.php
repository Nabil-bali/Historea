<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title><?= $title ?></title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/15d9d525a0.js" crossorigin="anonymous"></script>

    <!--      CSS link     -->
    <link href="public/now-ui-dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/now-ui-dashboard/assets/css/now-ui-dashboard.css" rel="stylesheet" />

    </head>

        <body>
            <div class="wrapper">
                <div class="sidebar" data-color="blue">
            <!--
                Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
            -->
                <div class="logo">
                    <a href="http://localhost/historea/?action=admin&admin=home" class="simple-text logo-mini">
                        <i class="fas fa-archway"></i>
                    </a>

                    <a href="http://localhost/historea/?action=admin&admin=home" class="simple-text logo-normal">
                    <strong>Historea</strong>
                    </a>
                </div>

                <div class="sidebar-wrapper" id="sidebar-wrapper">
                    <ul class="nav">        
                    <li class="active ">
                        <a href="http://localhost/historea/?action=admin&admin=home">
                                <i class="now-ui-icons design_app"></i>
                            <p>Accueil</p>
                        </a>
                    </li>

                    <li>
                        <a href="http://localhost/historea/?action=admin&admin=users">
                        <i class="now-ui-icons users_single-02"></i>
                            <p>Utilisateurs</p>
                        </a>
                    </li>

                    <li>
                        <a href="http://localhost/historea/?action=admin&admin=asks">
                                <i class="now-ui-icons text_caps-small"></i>
                            <p>Questions</p>
                        </a>
                    </li>

                    <li>
                        <a href="http://localhost/historea/?action=admin&admin=propositions">
                                <i class="now-ui-icons text_caps-small"></i>
                            <p>Propositions</p>
                        </a>
                    </li>

                    <li>
                        <a href="http://localhost/historea/?action=admin&admin=scores">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                            <p>Scores</p>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>

                <div class="main-panel" >
                    <!-- Navbar -->
                    <?php require 'navbar.php'; ?>
                    <!-- End Navbar -->

                        <?= $adminContent ?>
                    
                    <!-- footer -->
                    <?php require 'footer.php'; ?>
                    <!-- End footer -->
                </div>
            </div>
        </body>
        

        <!--   Core JS Files   -->
        <script src="public/now-ui-dashboard/assets/js/core/jquery.min.js" type="text/javascript"></script>
        <script src="public/now-ui-dashboard/assets/js/core/popper.min.js" type="text/javascript"></script>
        <script src="public/now-ui-dashboard/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/now-ui-dashboard/assets/js/plugins/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>

        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="public/now-ui-dashboard/assets/js/now-ui-dashboard.js" type="text/javascript"></script>

        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="js/jqueryFunctions.js"></script>
    </html>


