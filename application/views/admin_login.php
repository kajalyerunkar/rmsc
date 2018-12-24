<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 4.5.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>rms | Admin Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/pages/css/login-3.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
   <style>
    #err,#err1{

        position: fixed;
        top: 0;
        right: 20;
        z-index: 10;
       
        border: 1px solid #4C9ED9;
        text-align: center;
        padding-top: 10px;
        right: 45%;
        background-color: #EA1919;
        color: #FFF;
        font-weight: bold;
    }
      </style>
    <body class=" login">
        <!-- BEGIN LOGO -->
        <div class="logo">
           
               <!--<img src="<?php echo base_url(); ?>themes/logo.png" style="height: 75px;margin-top: 10px;" alt="logo" class="logo-default"> -->
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
            <!-- BEGIN LOGIN FORM -->
            <label id='err'></label>
 <label id='err1'></label>

                <h3 class="form-title">Login to your account</h3>
                <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                    <div class="input-icon">
                        <i class="fa fa-user"></i>
                        <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" id="username"   /> </div>
                </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                    <div class="input-icon">
                        <i class="fa fa-lock"></i>
                        <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" id="password" /> </div>
                </div>
                <div class="form-actions">
                    
                    <button type="submit" class="btn green pull-right" id="Login"> Login </button>
                </div>
                
        </div>
        <!-- END LOGIN -->
        <!--[if lt IE 9]>
<script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/respond.min.js"></script>
<script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){

    $("#Login").click(function(){
        //alert($("#username").val());
			if($("#username").val()=='' || $("#password").val()=='')
			{
				//$("#err").show();
				$("#err").text(' Please Enter Login Credential.');
				$("#err").css('display','block');
                $("#err").fadeOut(6000);
			}
			else
			{
				var data = {
					'username' : $("#username").val(),
					'password' : $("#password").val(),
				};
				console.log(data);
				var base_url = window.location.origin;
				$.ajax({
				type : 'POST',
				data : data,
				url : base_url+'/rms/index.php/Admin_login/validate_login',
				success : function(data)
				{
					 //alert(data.length);
                       data=data.trim();                 
					if(data == 'exist')
					{						
						 window.location.href = base_url+"/rms/index.php/Expense_master";
					}
					else if(data == 'error')
					{
                $("#err").text(' Invalid username and password.');
				$("#err").css('display','block');
                $("#err").fadeOut(6000);
						
					}
                                        else {
                                                var id=data;
                                                window.location.href = base_url+"/rms/index.php/Reset_password/reset/"+data;
                                        }
					
				}
			});
			}
		});
});

$("#reset_login").click(function(){

                var email_string = /^[a-zA-Z0-9.]+@[a-z0-9A-Z.]+\.[a-z]{2,3}$/;

                if (email_string.test($('.email_reset').val())) 
                {
                     var base_url = window.location.origin;
                    var data = {
                                  'email_id_reset' : $('.email_reset').val()
                       };
                   $.ajax({
                        type : 'post',
                        datatype : 'html',
                        data : data,
                        url : base_url+'/rms/index.php/Login/reset_password',
                        success : function(data)
                        { 
                       alert(data);
                            if (data == "Notification Send")
                            {
                                $("#err1").css('display','block');
				$("#err1").fadeOut(5000);
				$("#err1").text("Reset Password Link set to you on your email please check.");
                            }
                            
                        }
                    });       
                              
                }
                else
                {
                      $("#err1").text(' Please Enter valid email id.');
				$("#err1").css('display','block');
                $("#err1").fadeOut(6000);
                }
            });
</script>


        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/pages/scripts/login.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>