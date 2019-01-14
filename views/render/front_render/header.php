<!DOCTYPE html>
<!--[if IE 8]> <html lang="pt-br" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="pt-br" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="pt-br">
<!--<![endif]-->

<head>
    <title>
        <?php echo APP_NAME; ?>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Felideo Desittale Paravimnce">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Covered+By+Your+Grace' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="<?php echo URL; ?>public/front_end/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link href="<?php echo URL; ?>public/front_end/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="<?php echo URL; ?>public/bootstrap/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="<?php echo URL; ?>public/front_end/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" href="<?php echo URL; ?>public/front_end/plugins/animate-css/animate.min.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="<?php echo URL; ?>public/front_end/css/styles.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Javascript -->
    <script src="<?php echo URL; ?>public/bootstrap/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/isMobile/isMobile.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/jquery-inview/jquery.inview.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/FitVids/jquery.fitvids.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/jquery-placeholder/jquery.placeholder.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/plugins/jquery-match-height/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/js/main.js"></script>
    <!--[if !IE]>-->
    <script type="text/javascript" src="<?php echo URL; ?>public/front_end/js/animations.js"></script>
    <!--<![endif]-->
    <!-- Fine Uploader  -->
    <link href="<?php echo URL; ?>public/fineuploader/fine-uploader-new.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?php echo URL; ?>public/fineuploader/fine-uploader.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="<?php echo URL; ?>public/bootstrap/bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <!-- Sweet Alert -->
        <script src="<?php echo URL; ?>public/sweetalert-master/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/sweetalert-master/dist/sweetalert.css">
        <!-- Mascaras -->
        <script src="<?php echo URL; ?>public/js/jquery.mask.js"></script>
        <script src="<?php echo URL; ?>public/js/mascaras.js"></script>
        <script src="<?php echo URL; ?>public/js/validacoes.js"></script>
        <script src="<?php echo URL; ?>public/js/custom.js"></script>

        <!-- Date Time Picker -->
        <script type="text/javascript" src="<?php echo URL; ?>public/bower_components/moment/min/moment.min.js"></script>
        <script type="text/javascript" src="<?php echo URL; ?>public/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
        <link rel="stylesheet" href="<?php echo URL; ?>public/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />
        <!-- Autosize -->
        <script type="text/javascript" src="<?php echo URL; ?>public/autosize-master/dist/autosize.js"></script>
        <!-- Select2 3.  -->
        <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/select2_gj/select2.css">
        <script src="<?php echo URL; ?>public/select2_gj/select2.js"></script>
        <!-- <link rel="stylesheet" type="text/css" href="<?php echo URL; ?>public/css/style.css"> -->
        <script type="text/javascript">
        function carregar_loader(tipo) {
            if (tipo == 'show') {
                swal({
                    title: "Aguarde",
                    allowEscapeKey: false,
                    showConfirmButton: false,
                    showCancelButton: false,
                    imageUrl: '<?php echo URL; ?>public/images/ajax-loader-2.gif',
                    animation: false
                });
            }

            if (tipo == 'hide') {
                swal.close();
            }
        }
        </script>
        <?php
        if(isset($this->js)) {
            foreach($this->js as $js) {
                echo '<script type="text/javascript" src="'.URL.'views'.$js.'"></script>';
            }
        }
    ?>
            <link href="<?php echo URL; ?>public/css/default.css" rel="stylesheet">
            <link href="<?php echo URL; ?>public/css/custom_layout.css" rel="stylesheet">
</head>

<body data-spy="scroll">
    <?php \Libs\Session::init(); ?>

        <!-- ******HEADER****** -->
        <header id="top" class="header navbar-static-top">
            <div class="container">
                <h1 class="logo pull-left">
                <a class="scrollto" href="#promo">
                <i class="fa fa-leaf" style="color: #56bc94;"></i>
                    <span class="logo-title">Leaf Live DB</span>
                </a>
            </h1>
                <!--//logo-->
                <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--//nav-toggle-->
                    </div>
                    <!--//navbar-header-->
                    <div class="navbar-collapse collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active nav-item sr-only"><a class="scrollto" href="#promo">Home</a></li>
                            <li class="nav-item"><a class="scrollto" href="#features">Acessar</a></li>
                            <li class="nav-item"><a class="scrollto" href="#how">Cadastrar</a></li>
                            <li class="nav-item"><a class="scrollto" href="#faq">Buscar</a></li>
                            <li class="nav-item"><a class="scrollto" href="#story">Cadastrar Ser Vivo</a></li>
                            <li class="nav-item"><a class="scrollto" href="#pricing">FAQ</a></li>
                            <li class="nav-item last"><a class="scrollto" href="#contact">Contato</a></li>
                        </ul>
                        <!--//nav-->
                    </div>
                    <!--//navabr-collapse-->
                </nav>
                <!--//main-nav-->
            </div>
        </header>
        <!--//header-->
