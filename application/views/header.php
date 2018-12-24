<?php //print_r($this->session->userdata['user']['user_name']);

$mgr_flg=$this->session->userdata['user']['mgr'];


//echo $mgr_flg;die();


 ?>
<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Reimbursements</title>
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
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
   $('#logout1').click(function(){
       var base_url = window.location.origin;
  var url1= base_url+'/rms/index.php/Login/logout';
  window.location = url1;
  });
});
</script>
    <body class="page-container-bg-solid">
        <!-- BEGIN HEADER -->
        <div class="page-header">
            <!-- BEGIN HEADER TOP -->
            <div class="page-header-top">
                <div class="container">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                         <a href="<?php echo base_url();?>index.php/User_dashboard">
                            <!--<img src="<?php echo base_url(); ?>themes/logo.png" style="height: 40px;margin-top: 10px;" alt="logo" class="logo-default">-->
                        </a>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler"></a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                          
                           <li class="droddown dropdown-separator" style="padding-top: 17px;">
                              Hi  , <?php   print_r($this->session->userdata['user']['fname']); ?>
                            </li>
                           
                            <li class="droddown dropdown-separator">
                                <span class="separator"></span>
                            </li>
                              <!-- BEGIN QUICK SIDEBAR TOGGLER -->
                            <li class="dropdown dropdown-extended quick-sidebar-toggler">
                                <span class="sr-only">Toggle Quick Sidebar</span>
                                <i class="icon-logout"></i><span id='logout1'><b>Logout</b></span>
                            </li>
                            <!-- END QUICK SIDEBAR TOGGLER -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
            </div>
            <!-- END HEADER TOP -->
            <!-- BEGIN HEADER MENU -->
            <div class="page-header-menu">
                <div class="container">

                    <!-- BEGIN MEGA MENU -->
                         <div class="hor-menu  ">
                        <ul class="nav navbar-nav">
                            <li class="menu-dropdown classic-menu-dropdown active">
                                <a href="<?php echo base_url();?>index.php/User_dashboard"> Dashboard
                                    <span class="arrow"></span>
                                </a>
                              
                            </li>
                            
                         
                            <li class="menu-dropdown classic-menu-dropdown "  <?php

if($mgr_flg==0){
?> 
style="display:none"
<?php 
}
?>>
                                <a href="<?php echo base_url();?>index.php/Expense_approve/" class="nav-link  "> Approvals
                                    
                                </a>
                                
                            </li>
                           
                                   
                        </ul>
                    </div>
                    <!-- END MEGA MENU -->
                </div>
            </div>
            <!-- END HEADER MENU -->
        </div>
        <!-- END HEADER -->


