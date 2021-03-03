<?php

?>
<!DOCTYPE html>

<html>
    <head>
    
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/archway.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Home Historea</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/15d9d525a0.js" crossorigin="anonymous"></script>

    <!--      CSS link     -->
    <link href="public/now-ui-kit/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="public/now-ui-kit/assets/css/now-ui-kit.css?v=1.2.0" rel="stylesheet" />
    <link href="public/style.css" rel="stylesheet" />


    <!--   Core JS Files   -->
    <script src="public/now-ui-kit/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="public/now-ui-kit/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="public/now-ui-kit/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/functions.js" type="text/javascript"></script>
    </head>
    
    <?= $content ?>
    
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
        <script src="public/now-ui-kit/assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="public/now-ui-kit/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="public/now-ui-kit/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="public/now-ui-kit/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
    <script>
    $(document).ready(function() {
        // the body of this function is in assets/js/now-ui-kit.js
        nowuiKit.initSliders();
    });

    function scrollToDownload() {

        if ($('.section-download').length != 0) {
        $("html, body").animate({
            scrollTop: $('.section-download').offset().top
        }, 1000);
        }
    }
    </script>
    
</html>
