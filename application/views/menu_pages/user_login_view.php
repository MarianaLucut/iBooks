<?php echo validation_errors(); ?>   
<!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>Sign In</h2>
        </div>
    </div>
    <!--BANNER END-->

  <div class="contant">
    	<div class="container">
<!--            <div class="buttons">
            	<button class="btn1 login-btn"><i class="fa fa-facebook"></i>Login with Facebook</button>
                
                <button class="btn2 login-btn"><i class="fa fa-google-plus"></i>Login with Google</button>
                
                <button class="btn3 login-btn"><i class="fa fa-yahoo"></i>Login with Yahoo</button>
                
                <button class="btn4 login-btn"><i class="fa fa-linkedin"></i>Login with Linkein</button>
                
                <button class="btn5 login-btn"><i class="fa fa-windows"></i>Login with Window Live</button>
               
            </div>-->
            <div class="row">
            	<div class="span5">
                    <div class="form-box">
                        <form id = "user-form" method = "post">
                            <div class="form-body span5">
                                <fieldset>
                                    <legend>Login</legend>
                                    <label>Email Address or Username</label>
                                    <input type="text" placeholder="Enter your E-mail ID or Username" class="input-block-level" maxlength="45" name = "username">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter Password" class="input-block-level" maxlength="20" name = "password">   
                                    <label>Login as</label>
                                    <select class="form-control" required>
                                        <option>Teacher</option>
                                        <option>Parent</option>
                                    </select>
                                    
                                    <button type="submit" class="btn-style submit-user">Submit</button>
                                    <button type="button" class="btn-style green-button"> <a href = "<?php echo base_url();?>register">Create Account</a></button>
                                    
                                </fieldset>
                            </div>
<!--                            <div class="footer">
                                <ul>
                                    <li><a href="#">I Forgot My Password</a></li>
                                    <li><a href="#">Re-send Confirmation Email</a></li>
                                    <li><a href="#">Sign up Today for Free!</a></li>
                                    <li><a href="#">Terms of Use</a></li>
                                </ul>
                                <button class="btn-style">Register</button>
                            </div>-->
                        </form>
                    </div>
                </div>     
            </div>
        </div>
    </div>
