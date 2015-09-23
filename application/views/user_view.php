<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Education</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- CUSTOM CSS -->
        <link href="<?php echo base_url();?>css/style.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>css/color.css" rel="stylesheet" media="screen">
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
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

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
         <script src="<?php echo base_url();?>js/jquery.validate.js"></script>   
        <script src="<?php echo base_url();?>js/validationRules.js"></script>   
 <script>
$(document).ready(function(){
      
    $("#registerForm").validate(
    {
        rules: { 
          firstname: "required",
          lastname: "required",
          username: {
              required: true,
              minlength: 2
          },
          password: {
              required: true,
              minlength: 5
          },
          confirm_password: {
              required: true,
              minlength: 5,
              equalTo : "#password"

          },
          email: {
              required: true,
              email: true
          }
        },
        messages: {
           firstname: "Please enter your firstname",
           lastname: "Please enter your lastname ",
           username: {
               required: "Please enter a username",
               minlength:"Your username must be at least 2 characters "
           },
           password: {
               required: "Please enter a password",
               minlength:"Your password must be at least 5 characters "
           },
           confirm_password: {
               required: "Please enter a password",
               minlength:"Your password must be at least 5 characters "
           },
        }
    });
});
 </script>

    </body>    
</html>
       
