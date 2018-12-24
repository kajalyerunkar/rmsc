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
        <title>User Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
               <!-- BEGIN GLOBAL MANDATORY STYLES -->       
 <!-- localhost/rms/themes/metronic/theme_rtl/assets/global/plugins/font-awesome/css/font-awesome.min.css -->
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
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/pages/css/login-2.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
    <style>
    #err{

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
            <label id='username' style="display:none"><?php print_r($id); ?></label>
            <img src="<?php echo base_url(); ?>themes/logo.png" style="height: 75px;margin-top: 10px;" alt="logo" class="logo-default"> </a>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN LOGIN -->
        <div class="content">
      
            <!-- BEGIN LOGIN FORM -->
            <form class="login-form"  method="post">
            <div  >
 <label id='err'></label>
</div>
                            <div class="alert alert-danger display-hide">
                    <button class="close" data-close="alert"></button>
                    <span> Enter any username and password. </span>
                </div>
                <div class="form-group">
                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                    <label class="control-label visible-ie8 visible-ie9">New Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="New Password" id="new_pass" name="username" /> </div>
                <div class="form-group">
                    <label class="control-label visible-ie8 visible-ie9">Re-enter Password</label>
                    <input class="form-control form-control-solid placeholder-no-fix" type="password" autocomplete="off" placeholder="Confirm Password" id="conf_pass" name="password" /> </div>
                <div class="form-actions">
                    <button type="button" class="btn red btn-block uppercase" id="reset_pass">Reset</button>
                </div>
               
            </form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#reset_pass").click(function(){
    // alert("hi");
      var new_pass=$('#new_pass').val();  
      var conf_pass=$('#conf_pass').val(); 

      if(new_pass==''){
                $("#err").text(' Please Enter New Password');
		$("#err").css('display','block');
                $("#err").fadeOut(6000);
			
      } 
      else if(conf_pass==''){
                $("#err").text(' Please Enter Confirm Password');
		$("#err").css('display','block');
                $("#err").fadeOut(6000);
			
      } 
      else if($('#new_pass').val().length<8){
                $("#err").text('Minimum 8 characters required');
		$("#err").css('display','block');
                $("#err").fadeOut(6000);
			
      }
      else if(new_pass != conf_pass){
                $("#err").text('Password mismatch');
		$("#err").css('display','block');
                $("#err").fadeOut(6000);
			
      } 
      else{
             $("#err").text('');
	     $("#err").css('display','none');
             var data = {
                                        'username' : $("#username").text(),
					'password' : new_pass,
                                         
				};

				console.log(data);
				 var base_url = window.location.origin;
				$.ajax({
				type : 'POST',
				data : data,
				url : base_url+'/rms/index.php/Reset_password/reset_password',
				success : function(data)
				{
					//alert(data);
					if(data == 'updated')
					{						
						window.location.href = base_url+"/rms/index.php/Login";
					}
					else if(data == 'error')
					{
                                                $("#err").text(' Error occured');
				                 $("#err").css('display','block');
                                                $("#err").fadeOut(6000);
						
					}
					
				}
			});  		
     }
});
});
</script>

            