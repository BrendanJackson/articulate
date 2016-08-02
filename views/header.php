<?php
$assetfolder = "/themes/articulate/assets/";
$logo = "/assets/files/id/" . \config::site_logo;
$logo_alternate = "/assets/files/id/" . \config::site_logo_alternative;
$modules = \sa\application\app::get()->getModules();
$module_list = array_column($modules, 'module');
$search = in_array('search', $module_list);
$catalog = in_array('catalog', $module_list);
$member = in_array('member', $module_list);

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?=!empty($page_name) ? $page_name : \config::site_name ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.1.0.min.js" integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?=$assetfolder?>css/bootstrap.min.css">
    <!-- Fonts from Font Awsome -->
    <link rel="stylesheet" href="<?=$assetfolder?>css/font-awesome.min.css">
    <!-- Magnific popup -->
    <link rel="stylesheet" href="<?=$assetfolder?>css/magnific-popup.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="<?=$assetfolder?>css/main.css">

    <!-- Color styles -->
    <link rel="stylesheet" href="<?=$assetfolder?>css/colors/blue.css">
    <!-- <link rel="stylesheet" href="<?=$assetfolder?>css/colors/yellow.css">-->
    <!-- <link rel="stylesheet" href="<?=$assetfolder?>css/colors/red.css">-->
    <!--  <link rel="stylesheet" href="<?=$assetfolder?>css/colors/purple.css">-->
    <!--  <link rel="stylesheet" href="<?=$assetfolder?>css/colors/orange.css">-->
    <!--  <link rel="stylesheet" href="<?=$assetfolder?>css/colors/green.css">-->

    <!-- Feature detection -->
    <script src="<?=$assetfolder?>js/modernizr-2.6.2.min.js"></script>
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?=$assetfolder?>js/plugins/html5shiv.js"></script>
    <script src="<?=$assetfolder?>js/plugins/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav" id="main-menu">
                <?php
                if(!empty($catalog)) {
                    $minicart_data = \sa\application\modRequest::request('site.minicart', array('disable_minicart' => $disable_minicart, 'html' => ''), '');
                    echo "<li class=' vertically-center cart btn btn-xs' >" . $minicart_data['html'] . "</li>";
                }?>
                <?php
                if(!empty($search)){
                    echo
                    "<li>
                       <a href='/search'>Search</a>
                    </li>";
                }?>
                <?php if(!empty($member)){
                    echo "<li>
                            <a href='/member/login'>Login</a>
                         </li>";
                }?>
                <?php
                $navigation = \sa\application\modRequest::request('site.navigation', $data = array('level' => 2));
                foreach ($navigation['navigation']['page_editor'] as $menuItem){
                    ?>

                    <li class="dropdown  <?= ($menuItem['has_sub_pages'] == 1) ? 'has-children' : '' ?>">
                        <a  href="<?=($menuItem['route'] != '/') ? '/'.$menuItem['route']:'/'?>" class="dropdown-toggle" data-toggle="dropdown">
                            <span><?= $menuItem['title'] ?></span>
                            <?= ($menuItem['has_sub_pages'] == 1) ? '<span class="sf-sub-indicator"><i class="fa fa-angle-down"></i></span>' : '' ;?>
                        </a>

                        <?php if($menuItem['has_sub_pages'] == 1){
                            echo '<ul class="dropdown-menu">';

                            foreach ($menuItem['sub_pages'] as $pages) {
                                echo "<li class=''><a href='" . $pages['title'] . " '> ". $pages['title'] . "</a></li>" ;
                            }
                            echo "</ul>" ;
                        } ?>
                    </li>
                    <?php
                } ?>
                <!-- TODO: ADD SEARCH AND CART? -->
                <?php/*
                if(!empty($search)){
                    echo
                    "<li class='dropdown'>
                        <form role='search' class='search-box' method='GET' action='/search'>
                            <i class='search fa fa-search search-btn'></i> <input type='text' class='' placeholder='Search' name='q'>
                            <button class='btn-u' type='button'>Go</button>
                        </form>
                    </li>";
                }*/?>

            </ul>

        </div><!--/.nav-collapse -->
    </div>
</div>
