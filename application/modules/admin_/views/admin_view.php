<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- Login Header files.... All HTML and CSS are imported here. No, Template created -->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/logins/style.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/logins/newstyle.css'?>"/>
<link rel="stylesheet" href="<?php echo base_url(). 'assets/css/logins/admin_login_page.css'?>"/>
<!-- loading jQuery libraries -->
<script type="text/javascript" src="<?php echo base_url(). 'assets/js/jquery-1.10.2.js'?>"></script>
<!-- Loading Highcharts Libraries -->
<script type="text/javascript" src="<?php echo base_url(). 'assets/plugins/Highcharts/js/highcharts.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url(). 'assets/plugins/Highcharts/js/modules/exporting.js'?>"></script>
<!-- End of Highcharts Libraries -->
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
                style="float:right; font-weight:bold; background:none; border:none; margin-right:15px; width:100px; margin-top:12.5px;"/> 
            </a>
        </div>
    </div>

<!-- Changing template Body ... Begin -->
    
    <div class="admin-wrapper">

    <!-- Loggin Section -->
    <div class="admin-strip-login">
        <form>
            <input type="email" class="text_" required="required" placeholder="someone@example.com" name="username"/>
            <input type="password" class="password_" placeholder="password" name="password"/>
            <input type="submit" class="submitA_" required="required" value="sign in" name="sign_in"/>
        </form>
    </div>
    <!-- End of Loggin portal -->

        <div class="admin-strip">Total Subscriber Trends For The year <?php echo date('Y');?></div>
        
            <div class="admin-chart">
                
                <script type="text/javascript">
                    $(function () {
                        $('#container').highcharts({
                            title: {
                                text: 'Subscriber Trends'
                            },
                            xAxis: {
                                categories: ['January', 'February', 'March', 'April', 'May','June', 'July','August','September','October','November','December']
                            },
                            labels: {
                                items: [{
                                    html: 'Total Subscriber Trends',
                                    style: {
                                        left: '50px',
                                        top: '18px',
                                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'black'
                                    }
                                }]
                            },
                            series: [{
                                type: 'column',
                                name: 'Monthly Newsletter',
                                data: [3, 2, 1, 3, 4,3, 2, 1, 3, 4, 6, 6.5]
                            }, {
                                type: 'column',
                                name: 'Full Members',
                                data: [2, 3, 5, 7, 6,3, 2, 1.9, 3, 4, 6, 6.5]
                            }, {
                                type: 'column',
                                name: 'Partial Members',
                                data: [4, 3, 3, 9, 0.5,3, 2.1, 1, 3, 4.5, 7.4, 6.5]
                            }, {
                                type: 'spline',
                                name: 'Average',
                                data: [3, 2.67, 3, 6.33, 3.33,3, 2.45, 1, 3, 4, 6.8, 6.5],
                                marker: {
                                    lineWidth: 2,
                                    lineColor: Highcharts.getOptions().colors[3],
                                    fillColor: 'white'
                                }
                            }, {
                                type: 'pie',
                                name: 'Total Subscribers',
                                data: [{
                                    name: 'Monthly Newsletter',
                                    y: 13,
                                    color: Highcharts.getOptions().colors[0] 
                                }, {
                                    name: 'Full Members',
                                    y: 23,
                                    color: Highcharts.getOptions().colors[1] 
                                }, {
                                    name: 'Partial Members',
                                    y: 19,
                                    color: Highcharts.getOptions().colors[2] 
                                }],
                                center: [100, 80],
                                size: 100,
                                showInLegend: false,
                                dataLabels: {
                                    enabled: false
                                }
                            }]
                        });
                    });

                </script>
                <div id="container" style="min-width: 310px; height: auto; margin: 0 auto"></div>

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