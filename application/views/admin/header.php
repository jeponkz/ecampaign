<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>E-Governance - %TITLE%</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600,700' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo base_url('css/normalize.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/reset.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('plugins/jqueryui/jquery-ui.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('plugins/jqueryui/jquery-ui.structure.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('plugins/jqueryui/jquery-ui.theme.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('plugins/chosen/chosen.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">    
        <link rel="stylesheet" href="<?php echo base_url('css/tooltipster.css');?>">    
        <link rel="stylesheet" href="<?php echo base_url('css/style2.css');?>">    
        <link rel="stylesheet" href="<?php echo base_url('css/mediaquery.css');?>">    

        <!--[if IE]>
            <link href="<?php echo base_url('css/style-ie.css');?>" rel="stylesheet" type="text/css" />
            <script src="<?php echo base_url('js/html5.js');?>"></script>
        <![endif]--> 
        
        <!--[if lt IE 8]>
            <script src="<?php echo base_url('js/pseudo.js');?>"></script>
        <![endif]-->

        <!-- Scripts -->
        <script src="<?php echo base_url('js/vendor/modernizr-2.6.2-respond-1.1.0.min.js');?>"></script>
        <script src="<?php echo base_url('js/vendor/jquery-1.9.1.min.js')?>"></script>

        
    </head>

    <body class="eg-toolbar">
        <div class="egwrap">
            <div id="egadminbar" role="navigation" class="cleaerfix">
                <div id="eglogo"><h1 class="cwhite">eGovernance</h1></div>
                <ul id="adminbar-secondary">
                    <li><?php echo anchor('admin/dashboard', '<i class="fa fa-user fa-lg"></i>Admin Chief');?></li>
                    <li><?php echo anchor('admin/user/logout', '<i class="fa fa-sign-out fa-lg"></i>Logout');?></li>
                </ul>
            </div>
            <div id="adminmenuback"></div>
            <div id="adminmenuwrap">
                <ul id="adminmenu" role="navigation">
                    <li class="current-menu">
                        <?php echo anchor('admin/dashboard', '<i class="fa fa-dashboard fa-lg dash-icon" ></i><span class="egmenuname">Dashboard</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('admin/barangays', '<i class="fa fa-bank fa-lg dash-icon"></i><span class="egmenuname">Barangays</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('admin/officials', '<i class="fa fa-bookmark fa-lg dash-icon"></i><span class="egmenuname">Officials</span>');?>
                    </li>
                    <li>
                        <?php echo anchor('admin/voters', '<i class="fa fa-user fa-lg dash-icon"></i><span class="egmenuname">Voters</span>');?>
                    </li>
                </ul>
            </div>

            <div id="egcontent">
                <div id="egbody">
                    <div class="wrap clearfix">
