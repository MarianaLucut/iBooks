<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Education</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CUSTOM CSS -->
        <link href="<?php echo base_url();?>css/style.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>css/color.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>css/myStyle.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>css/transitions.css" rel="stylesheet" media="screen">
        <!-- BOOTSTRAP -->
        <link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>css/bootstrap-responsive.css" rel="stylesheet" media="screen">
        <!-- BX SLIDER-->
        <link href="<?php echo base_url();?>css/jquery.bxslider.css" rel="stylesheet" media="screen">
        <!-- OWL CAROUSEL -->
        <link href="<?php echo base_url();?>css/owl.carousel.css" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link href="<?php echo base_url();?>css/font-awesome.min.css" rel="stylesheet" media="screen">
        <!-- PRETTY PHOTO BACKGROUNDS -->
        <link href="<?php echo base_url();?>css/prettyPhoto.css" rel="stylesheet" media="screen">
        <!-- PARALLAX BACKGROUNDS -->
        <link href="<?php echo base_url();?>css/parallax.css" rel="stylesheet" type="text/css" />

    </head>
    <body>
<!--WRAPPER START-->
        <div class="wrapper">
            <?php  
                //header section
                include "include/header_view.php"; 
                $this->load->view($content);
                //footer section
                include "include/footer_view.php"; 
            ?>
        </div>
        <!-- Jquery Lib -->
        <script src="<?php echo base_url();?>js/jquery-1.10.2.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>js/jquery.bxslider.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
        <script src="<?php echo base_url();?>js/owl.carousel.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/jquery.easy-pie-chart.js"></script>
        <script src="<?php echo base_url();?>js/jquery.prettyPhoto.js"></script>
        <script src="<?php echo base_url();?>js/modernizr.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>js/skrollr.min.js"></script>
        <script src="<?php echo base_url();?>js/functions.js"></script>   
    </body>    
</html>
       
