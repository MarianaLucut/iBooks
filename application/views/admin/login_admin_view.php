<!Doctype html>
<html>
<head>   
	<meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>iBooks</title>
   
     	<link href="<?php echo base_url();?>thema_orig/HTML/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>thema_orig/HTML/css/bootstrap-responsive.css" rel="stylesheet" media="screen">
      	<link href="<?php echo base_url();?>thema_orig/HTML/css/style.css" rel="stylesheet" media="screen">
		<link href="<?php echo base_url();?>thema_orig/HTML/css/color.css" rel="stylesheet" media="screen">
        <link href="<?php echo base_url();?>include/admin/css/login_admin.css" rel="stylesheet" type="text/css" />
        
        <script src="<?php echo base_url();?>thema_orig/HTML/js/jquery-1.10.1.min.js"></script>
        <script src="<?php echo base_url();?>include/external/jquery.validate.min.js"></script>
    	<script src="<?php echo base_url();?>thema_orig/HTML/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>include/admin/js/login_admin.js"></script>
           
</head>
<body> 
<div class="wrapper">
  <div class="contant">
    	<div class="container">
            <div class="row">
            	<div class="span4 offset4">
                    <div class="form-box  ">
                        <form id = "admin-form" method = "post">
                            <div class="form-body">
                                <fieldset>
                                    <legend>Login</legend>
                                    <div class="usr-pass">
                                    	<label>Email Address</label>
                                    	<div class="email-pass"><input type="text" id="email" name="email" placeholder="Enter your E-mail ID" >
                                    	</div>
                                    </div>
                                    <div class="usr-pass">
                                    	<label>Password</label>
                                    	<div class="email-pass"><input type="password" id="password" name="password" placeholder="Enter Password" >
                                    	</div>
                                    </div>   
                                    <button type="submit" class="btn-style ">Sign In</button>
                                </fieldset>
                            </div>
						</form>
                    </div>
                </div>     
            </div>
        </div>
    </div>
</div>
</body>
</html>