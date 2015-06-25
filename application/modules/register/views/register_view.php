<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Login Header files.... All HTML and CSS are imported here. No, Template created -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/logins/style.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/logins/newstyle.css'?>"/>
<link rel="shortcut icon" type="img/x-icon" href="<?php echo base_url(). 'assets/icons/maya_logo.png'?>"/>
<title>Market and Advertise You Africa | Register</title>
</head>


<body>

<div class="hero">
    <div class="header">
        <div class="logo">
            <div class="in_logo">
                <img src="<?php echo base_url(). 'assets/logo/logo_web.png'?>" style="height:50px; width:189px; margin-top:-2px;"/>
            </div>

            <a href="<?php echo base_url('login')?>">
                <input type="submit" class="submit" name="send" value="Sign In" 
                style="float:right; font-weight:bold; background:none; border:none; margin-right:0px; width:100px; margin-top:12.5px;"/>
            </a>

            <a href="<?php echo base_url()?>#;">
                <input type="submit" class="submit" name="send" value="Help" 
                style="float:right; font-weight:bold; background:none; border:none; margin-right:5px; width:100px; margin-top:12.5px;"/> 
            </a>
            <!-- Back to the previous page -->
            <a href="<?php echo base_url('home')?>">
                <input type="submit" class="submit" name="send" value="Home" 
                style="float:right; font-weight:bold; background:none; border:none; margin-right:5px; width:100px; margin-top:12.5px;"/> 
            </a>
                    
        </div>
    </div>

<!-- Changing template Body ... Begin -->
    
    <div class="wrapper">

    <!-- Login welcome message -->
        <div class="log-photo">
            <div class="log-photo-thumb">
                <img src="<?php echo base_url(). 'assets/login_images/log_.png'?>">
            </div>
                <div class="log-photo-strip">
                    <h1>Engage with MAYA</h1>
                </div>
                    <div class="log-photo-details-text">
                        <div class="log-photo-details-in-text">
                            Learn More about MAYA and its Services
                                <br/><br/>
                            MAYA helps you access your account, profile, and connects you to the other startups that you’ve always wanted to meet. Get more from our monthly newsletter. Subscribe to get the notifications
                                <br/><br/>
                            <a href="#">Subscribe to our monthly newsletter</a>
                        </div>
                    </div>
        </div>

    <!-- Login Panel -->
        <div class="reg-panel-box">
            <div class="log-photo-strip" style="text-align:left;">
                    <h1>Register</h1>
            </div>

            <div class="log-box-small-strip">MAYA account <a href="#"> what's this?</a></div>
                <div class="log-boxes">
                    <form method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>register/registration">

                        <input type="text" name="f_name" placeholder="First Name" class="text" required="required" style="margin-top:10px;">
                        <input type="text" name="l_name" placeholder="Last Name" class="text" required="required" style="margin-top:10px;">
                        <input type="text" name="phone" placeholder="Phone Number" class="text" required="required" style="margin-top:10px;">
                        <input type="date" name="date_of_reg" placeholder="Date of Registration" class="text" required="required" style="margin-top:10px;">
                        <input type="email" name="username" placeholder="E-Mail: [someone@example.com]" class="text" required="required" style="margin-top:10px;">
                        <input type="password" name="password" placeholder="Password" class="password" required="required" style="margin-top:10px;">
                        <!-- <input type="password" name="con_password" placeholder="Confirm Password" class="password" required="required" style="margin-top:10px;"> -->
                        
                        <input type="submit" class="submitA" value="Register" style="width:200px; margin-top:15px; font-weight:bold;">

                        <br/>

                    </form>

                </div>
        </div>

        
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