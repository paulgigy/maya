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
<title>Market and Advertise You Africa | Sign In</title>
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
                <font style="font-size:23px; line-height:35px;">Monitor your subscribers and<br/>
                 Business Partners through<font color="#37a5ff"> MAYA</font></font>
                <p>Enter your details below to get started</p>
                
                    <div class="inlogin_2">
                    <form>
                        <input type="email" class="text" name="username" required="required" placeholder="username"
                        style=" height:30px; width:348px; float:left; margin-left:0px;"/>
                        
                        <input type="password" class="password" name="password" required="required" placeholder="password"
                        style=" height:30px; width:348px; margin-top:20px; float:left; margin-left:0px;"/>
                        
                        <div class="ruler">
                        <input type="submit" class="submitA_" name="send" value="Sign In" 
                        style="float:right; width:170px; margin-top:-10px; margin-right:2px;"/>
                        </div>
                     
                    </form>    
                    </div>
                    
                </div>
                    
            </div>
    <!-- End of Loggin portal -->

    <!-- side-login-panel = advert -->

            <div class="side-login">
                
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