<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>E-Governance</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width">
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>

        <!-- Styles -->
        <link rel="stylesheet" href="<?php echo base_url('css/normalize.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/reset.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.min.css');?>">
        <link rel="stylesheet" href="<?php echo base_url('css/style.css');?>">    
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
    <body class="body-login">
        <!-- Start Header -->
        <div style="background-color:#232323; height:5px;"></div>
        <header id="header" class="header-area clearfix">
            <div class="clearfix">
                <div class="top-left">
                    <a class="logo" href="<?php echo site_url();?>" title="eGvoernance"><img src="<?php echo base_url('images/logo.jpg')?>" alt=""></a>
                    <span class="tagline">Tagline</span>
                </div>
                <div class="top-right">
                    <a href="#">Help</a>
                </div>
            </div>
        </header>
         <!-- End Header -->

        <!-- Start Content -->
        <section id="content" class="content-area clearfix">
            <div class="inner-login">
                <?php echo form_open('', array('class'=>'form-login'));?>
                   <div class="form-header">
                        <!-- <h1>eGovernance</h1> -->
                        <img src="<?php echo base_url('images/login-logo.png')?>" alt="">
                        <span style="font-weight:100; font-size:18px;">Tagline Here<span>
                        <!-- <h4>Tagline Here</h4> -->
                    </div>
                    <div class="form-body">
                        <?php echo validation_errors(); ?>
                        <?php
                            if ($this->session->flashdata('error') != ''): 
                                echo '<div class="message error">'.$this->session->flashdata('error').'</div>'; 
                            endif;
                        ?>
                        <div>
                            <label for="username"><i class="fa fa-user fa-lg"></i></label>
                            <input type="text" name="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
                        </div>
                        <div>
                            <label for="password"><i class="fa fa-asterisk fa-lg"></i></label>
                            <input type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
                        </div>
                        <div>
                            <input type="submit" value="Login" class="button">
                        </div>
                    </div>
                <?php echo form_close();?>
            </div>
        </section>
        <!-- End Content -->

        <!-- Start Footer -->
        <footer id="footer" class="footer-area clearfix">
            <div class="clearfix">
                <div class="fl">
                    <p><strong>System Requirements:</strong></p>
                    <p>FireFox 3.6, Internet Explorer 9.0, Safari 3.0, Google Chrome 10.0 or higher</p>
                </div>
                <div class="fr">
                    <p>&copy; Copyright 2014 eGovernance. All Rights Reserved.</p>
                </div>
            </div>
        </footer>
        <!-- End Footer -->
        
        <!--Scripts-->
        <script src="<?php echo base_url('js/scripts.js');?>"></script>

    </body>
</html>