<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Education</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CUSTOM CSS -->

        <link href="<?php echo base_url();?>thema_orig/HTML/css/style.css" rel="stylesheet" media="screen">

                <link href="<?php echo base_url();?>include/css/myStyle.css" rel="stylesheet" media="screen">

        <link href="<?php echo base_url();?>thema_orig/HTML/css/color.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>thema_orig/HTML/css/transitions.css" rel="stylesheet" media="screen">
        <!-- BOOTSTRAP -->
        <link href="<?php echo base_url();?>thema_orig/HTML/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>thema_orig/HTML/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <!-- BX SLIDER-->
        <link href="<?php echo base_url();?>thema_orig/HTML/css/jquery.bxslider.css" rel="stylesheet" media="screen">
        <!-- OWL CAROUSEL -->
        <link href="<?php echo base_url();?>thema_orig/HTML/css/owl.carousel.css" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link href="<?php echo base_url();?>thema_orig/HTML/css/font-awesome.min.css" rel="stylesheet" media="screen">
        <!-- PRETTY PHOTO BACKGROUNDS -->
        <link href="<?php echo base_url();?>thema_orig/HTML/css/prettyPhoto.css" rel="stylesheet" media="screen">
        <!-- PARALLAX BACKGROUNDS -->
        <link href="<?php echo base_url();?>thema_orig/HTML/css/parallax.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>include/css/login.css" rel="stylesheet" type="text/css" />
    </head>
    <body>


<!--WRAPPER START-->
        <div class="wrapper">
            <?php  
                //header section
                include "include/header_view.php"; 
                $this->load->view($content);
//                echo validation_errors();
                //footer section
                include "include/footer_view.php"; 
                
            ?>
        </div>
        <!-- Jquery Lib -->
        <script src="<?php echo base_url();?>thema_orig/HTML/js/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>thema_orig/HTML/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>thema_orig/HTML/js/jquery.bxslider.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="<?php echo base_url();?>thema_orig/HTML/js/owl.carousel.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>thema_orig/HTML/js/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url();?>thema_orig/HTML/js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url();?>thema_orig/HTML/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>thema_orig/HTML/js/skrollr.min.js"></script>
        <script src="<?php echo base_url();?>thema_orig/HTML/js/functions.js"></script>   
         <script src="<?php echo base_url();?>include/external/jquery.validate.min.js"></script>   
        <script src="<?php echo base_url();?>include/js/validationRules.js"></script>  
    </body>    
</html>
       
