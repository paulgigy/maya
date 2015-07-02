<div class="header">
	<div class="logo_cover">
    	<div class="logo">
        	<div class="real_logo">
        		<a href="<?php echo base_url()?>home"><img src="<?php echo base_url() .'assets/logo/logo_web.png'?>" style="height:50px; width:189px; margin-top:2px;"/></a>
            </div>
            <div class="search_box">
	            <form>
	           		<input type="text" class="top_text" placeholder="Search"/>
	            </form>
            </div>
        </div>
    </div>
              
    <div class="after_head">
    	<div class="main_column">
<!-- Menu items contained here -->
        	<div class="menu_column">
            	<ul>
        			<li>
        				<a href="<?php echo base_url()?>home" <?php if ( $_SERVER['REQUEST_URI'] == '/maya/home' ):?> id="active"<?php endif; ?>>Home</a>
        			</li>
        			<li>
        				<a href="<?php echo base_url()?>news" <?php if ( $_SERVER['REQUEST_URI'] == '/maya/news' ):?> id="active"<?php endif; ?>>News and Events</a>
        			</li>
        			<li>
        				<a href="<?php echo base_url()?>profiles" <?php if ( $_SERVER['REQUEST_URI'] == '/maya/profiles' ):?> id="active"<?php endif; ?>>Profile</a>
        			</li>
        			<!-- Look up for the Blog page -->
        			<li>
        				<a href="http://www.blog.maya.co.ke/" target="_blank">Blog</a>
        			</li>
        			<!-- End of the Look up page -->
        			<li>
        				<a href="<?php echo base_url()?>about" <?php if ( $_SERVER['REQUEST_URI'] == '/maya/about' ):?> id="active"<?php endif; ?>>About Us</a>
        			</li>
        			<li>
        				<a href="<?php echo base_url()?>contact" <?php if ( $_SERVER['REQUEST_URI'] == '/maya/contact' ):?> id="active"<?php endif; ?>>Contact Us</a>
        			</li>
		       </ul>
            </div>
<!-- End of the menu column -->

<!-- Beggining of the login section|class -->
        	<div class="after_column">

            	<a href="<?php echo base_url('login')?>">
                    <input type="submit" class="submit_top" style="float:right;width:80px; height:35px; margin-top:7.5px;" value="Register"/>
               	</a>

                <a href="<?php echo base_url('login')?>">    
                    <input type="submit" class="submit_top" style="float:right; width:80px; height:35px; margin-right:10px;
                     margin-top:7.5px;" value="Sign In"/>
                </a>
            </div>
<!-- End of the loggin section|class -->
        </div>
    </div>
        
</div>