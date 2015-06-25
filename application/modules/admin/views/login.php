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
                        <form enctype="multipart" method="POST" >
                            <input type="email" class="text" name="username" required="required" placeholder="username"
                            style=" height:30px; width:348px; float:left; margin-left:0px;"/>
                            
                            <input type="password" class="password" name="password" required="required" placeholder="password"
                            style=" height:30px; width:348px; margin-top:15px; float:left; margin-left:0px;"/>

                            <input type="hidden" class="text" name="error" required="required" placeholder="username"
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
                <div class="social-media">
                    <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/mayakenya777" data-chrome="noheader" data-widget-id="613658178836955136">Tweets by @mayakenya777</a>
                     <script src="<?php echo base_url() .'assets/js/social_media/twitter.js'?>"></script>
                </div>


                <div class="social-media">
                    <!-- start feedwind code --><script type="text/javascript">document.write('\x3Cscript type="text/javascript" src="' + ('https:' == document.location.protocol ? 'https://' : 'http://') + 'feed.mikle.com/js/rssmikle.js">\x3C/script>');</script><script type="text/javascript">(function() {var params = {rssmikle_url: "http://www.blog.maya.co.ke/rss",rssmikle_frame_width: "100%",rssmikle_frame_height: "360",frame_height_by_article: "",rssmikle_target: "_blank",rssmikle_font: "Arial, Helvetica, sans-serif",rssmikle_font_size: "12",rssmikle_border: "off",responsive: "off",rssmikle_css_url: "",text_align: "left",text_align2: "left",corner: "off",scrollbar: "off",autoscroll: "on",scrolldirection: "up",scrollstep: "4",mcspeed: "20",sort: "New",rssmikle_title: "on",rssmikle_title_sentence: "",rssmikle_title_link: "",rssmikle_title_bgcolor: "#0066FF",rssmikle_title_color: "#FFFFFF",rssmikle_title_bgimage: "",rssmikle_item_bgcolor: "#FFFFFF",rssmikle_item_bgimage: "",rssmikle_item_title_length: "55",rssmikle_item_title_color: "#0066FF",rssmikle_item_border_bottom: "on",rssmikle_item_description: "on",item_link: "off",rssmikle_item_description_length: "250",rssmikle_item_description_color: "#666666",rssmikle_item_date: "gl1",rssmikle_timezone: "Etc/GMT",datetime_format: "%b %e, %Y %l:%M:%S %p",item_description_style: "text",item_thumbnail: "full",article_num: "15",rssmikle_item_podcast: "off",keyword_inc: "",keyword_exc: ""};feedwind_show_widget_iframe(params);})();</script><div style="font-size:10px; text-align:center; width:auto;"><!--Please display the above link in your web page according to Terms of Service.--></div><!-- end feedwind code -->

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