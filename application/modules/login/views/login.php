<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Login Header files.... All HTML and CSS are imported here. No, Template created -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/logins/style.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/logins/newstyle.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/logins/admin_login_page.css'?>"/>
<!-- admin style -->
<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/logins/admin-login-style.css'?>"/>
<!-- loading jQuery libraries -->
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/jquery-1.10.2.js'?>"></script>
<link rel="shortcut icon" type="img/x-icon" href="<?php echo base_url(). 'assets/icons/maya_logo.png'?>"/>
<title>Market and Advertise You Africa | Sign In | Register</title>
</head>

<body>

<div class="admin-hero">
	<div class="header">
    	<div class="logo">
        	<div class="in_logo">
            	<img src="<?php echo base_url().'assets/logo/logo_web.png'?>" style="height:50px; width:189px; margin-top:-2px;"/>
            </div>
            <!-- Back to homepage -->
            <a href="<?php echo base_url()?>home">
                <input type="submit" class="submit" name="send" value="HOME" 
                style="float:right; font-weight:bold; background:none; border:none; width:100px; margin-top:12.5px;"/> 
            </a>
        </div>
    </div>

<!-- Changing template Body ... Begin -->
    
    <div class="admin-login-wrapper">


    <!-- Loggin Section -->
            <div class="login_">
                <div class="in_login">
                <font style="font-size:23px; line-height:35px;">Monitor your personal account and<br/>
                 Business trends through<font color="blue"> MAYA</font></font>
                <p>Enter your details below to get started</p>
                
                    <div class="inlogin_2">
                        <form enctype="multipart" method="POST" >
                            <input type="email" class="text" name="username" required="required" placeholder="someone@example.com"
                            style=" height:30px; width:348px; float:left; margin-left:0px;"/>
                            
                            <input type="password" class="password" name="password" required="required" placeholder="password"
                            style=" height:30px; width:348px; margin-top:15px; float:left; margin-left:0px;"/>

                            <input type="hidden" class="text" name="error" required="required"
                            style=" height:30px; margin-top:5px; width:348px; float:left; margin-left:0px; text-align:center; color:#"/>
                            
                            <div class="ruler">
                                <center>
                                    <input type="submit" class="submitA_" name="send" value="Sign In" 
                                    style="width:300px; margin-top:-20px;"/>
                                </center>
                            </div>
                         
                        </form>    
                    </div>
                    
                </div>
                    
            </div>
    <!-- End of Loggin portal -->

    <!-- side-login-panel = advert -->

            <div class="side-login">
                <div class="in-register">
                    <div class="top-strip">
                        <font style="font-size:23px; line-height:35px;"><font color="blue"> REGISTER</font> with MAYA to get started with your Business Plan</font>                  
                    </div>

                    <div class="register-body">
                        <form method="POST" enctype="multipart/form-data" action=" ">
                            <input type="text" class="text" name="f_name" required="required" placeholder="First Name"
                                style=" height:30px; width:290px; float:left; margin-left:0px;"/>
                                
                            <input type="text" class="text" name="l_name" required="required" placeholder="Last Name"
                            style=" height:30px; width:290px; float:left; margin-left:10px;"/>

                            <input type="text" class="text" name="phone" required="required" placeholder="Phone Number"
                                style=" height:30px; width:290px; margin-top:15px; float:left; margin-left:0px;"/>
                                
                            <input type="text" class="text" name="date_of_reg" id="example" required="required" placeholder="Date of Registration"
                            style=" height:30px; width:290px; margin-top:15px; float:left; margin-left:10px;"/>

                            <input type="text" class="text" name="username" required="required" placeholder="someone@example.com"
                                style=" height:30px; width:290px;margin-top:15px; float:left; margin-left:0px;"/>
                                
                            <input type="password" class="password" name="password" required="required" placeholder="Password"
                            style=" height:30px; width:290px; margin-top:15px; float:left; margin-left:10px;"/>

                            <center><input type="submit" class="submitA_" name="send" value="Register" 
                                    style="width:400px; margin-top:20px;"/></center>
                        </form>
                    </div>

                    <div class="error-div"></div>
                </div>    
            </div>

    <!-- End of login panel -->

 
    </div>

<!-- Changing template Body ... End -->
    
    <div class="footer">
            
    		<input type="submit" class="submit" name="send" value="Terms of Service" 
            style="float:left; font-weight:bold; background:none; border:none; margin-left:0px; width:130px; margin-top:7px; border-right:thin #FFF dotted;"/> 
            
            <input type="submit" class="submit" name="send" value="Privacy Policy" 
            style="float:left; font-weight:bold; background:none; border:none; margin-left:0px; width:120px; margin-top:7px;"/>  
            <br />
	<font style="float:right; margin-right:10px;">&copy; <?php echo date("Y")?>. All Rights Reserved. MAYA&trade;</font>
</div>
    
</div>




</body>
</html>