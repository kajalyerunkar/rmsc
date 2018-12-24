 <?php //print_r($Employee_data);die();?>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />      
<div class="page-bar">
<style>

.button-pdf {
    color: black;
    border: 1px solid black;
}
</style>
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Admin Dashboard</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            
                        </ul>
                        
                    </div>
                    <!-- END PAGE BAR -->
                    
<!-- BEGIN PAGE TITLE-->
                    
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="note note-info">
                    <div class="row widget-row">
                        <div class="col-md-6">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h5 class="widget-thumb-heading" ><a href="javascript:;" style="color:blue" class="show_obj">Objective Details</a></h5>
                                <div class="widget-thumb-wrap">
                                    <a href="javascript:;" class="show_obj"><i class="widget-thumb-icon bg-green icon-bulb"></i></a>
                                    <div class="widget-thumb-body">
                                        <a href="javascript:;" class="show_obj"><span class="widget-thumb-subtitle">Total Employees Submitted Objectives</span></a>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo count($emp_sub_obj);?>"><?php echo count($emp_sub_obj);?></span>
                                    </div>
                                </div>
                            </div>
                           
                            <!-- END WIDGET THUMB -->
                        </div>
                        <div class="col-md-6">
                            <!-- BEGIN WIDGET THUMB -->
                            <div class="widget-thumb widget-bg-color-white text-uppercase margin-bottom-20 bordered">
                                <h4 class="widget-thumb-heading"  ><a href="javascript:;" style="color:#1a91f7" class="show_pdp">PDP Details</a></h4>
                                <div class="widget-thumb-wrap">
                                    <a href="javascript:;" class="show_pdp"><i class="widget-thumb-icon  fa fa-graduation-cap" style="background-color: #1a91f7;" aria-hidden="true"></i></a>
                                    <div class="widget-thumb-body">
                                        <a href="javascript:;" class="show_pdp"><span class="widget-thumb-subtitle">Total Employees Submitted PDP</span></a>
                                        <span class="widget-thumb-body-stat" data-counter="counterup" data-value="<?php echo count($emp_sub_pdp);?>"><?php echo count($emp_sub_pdp);?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- END WIDGET THUMB -->
                        </div>
                       
                        
                    </div>





                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green" id="obj_report" style="display:none">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>Objectives Report</div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th colspan=3 style="text-align:  center;" > Employee Details </th>
                                                
                                                <th colspan=2 style="text-align:  center;"> Not Activated</th>
                                                
                                                <th colspan=2 style="text-align:  center;"> Approvals </th>
                                                
                                                <th colspan=2 style="text-align:  center;"> Pending For Action </th>
                                                  
                                                <th style="text-align:  center;">Total</th>  
                                                <th style="text-align:  center;">Action</th>  
                                          </tr>
                                            <tr>
                                                <th> Employee Id </th>
                                                <th> Employee Name </th>
                                                <th> Reporting Manager Name </th>
                                                
                                               
                                                
                                                <th> Saved by Employee</th>
                                                <th> Saved by Manager</th>
                                                
                                                <th>Approved</th>
                                                <th>Accepted</th>  
                                                
                                                 <th> Submitted</th>
                                                <th> Assigned </th>
                                                
                                                <th> Total Objectives </th>
                                                <th>Action</th>  
                                                
                                          </tr>
                                        </thead>
                                        <tbody>
                                           <?php for($i=0;$i<count($emp_sub_obj);$i++){?>
                                            <tr>
                                                <td><?php echo $emp_sub_obj[$i]['Employee_id'];?></td>
                                                <td><?php echo $Employee_data[$i]['0']['emp_fname']." ".$Employee_data[$i]['0']['emp_lname'] ;?></td>
                                                <td><?php echo $Employee_data[$i]['0']['ReportingEmpName'] ;?></td>
                                                
                                                <td> <?php echo count($Save_by_emp[$i]);?></td>
                                                <td><?php echo count($save_by_mgr[$i]);?>  </td>
                                                
                                                <td><?php echo count($emp_tot_obj_Appr_mgr[$i]);?></td>
                                                <td><?php echo count($emp_tot_obj_accept[$i]);?></td>
                                                
                                                <td> <?php echo count($emp_sub_mgr[$i]);?> </td>
                                                <td> <?php echo count($mgr_sub_emp[$i]);?></td>
                                                
                                                <td> <?php echo count($tot_obj[$i]);?> </td>
                                                <td><a class="btn-group-xs" href="<?php echo base_url(); ?>index.php/Admin_dashboard/view/<?php echo $emp_sub_obj[$i]['Employee_id'];?>"><button type="button" class="btn default blue" style="width:52px;padding-top: 2px;">Check</button></a></td>
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->


                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green" style="border:1px solid #1a91f7;display:none" id="pdp_report" >
                                <div class="portlet-title" style="background-color:#1a91f7;">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>PDP Report</div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                             <tr>
                                                <th colspan=3 style="text-align:  center;" > Employee Deatils </th>
                                                
                                                <th colspan=2 style="text-align:  center;"> Not Activated</th>
                                                
                                                <th colspan=2 style="text-align:  center;"> Approvals </th>
                                                <th colspan=2 style="text-align:  center;"> Pending For Action </th>
                                                <th style="text-align:  center;">Total</th>  
                                                <th>Action</th>  
                                          </tr>
                                           <tr>
                                                <th> Employee Id </th>
                                                <th> Employee Name </th>
                                                <th> Reporting Manager Name </th>
                                                
                                               
                                                
                                                <th> Saved by Employee</th>
                                                <th> Saved by Manager</th>
                                                
                                                <th>Approved</th>
                                                <th>Accepted</th>  
                                                
                                                 <th>Submitted</th>
                                                <th> Assigned </th>
                                                
                                                <th> Total Objectives </th>
                                                <th>Action</th>  
                                          </tr>
                                        </thead>
                                        <tbody>
                                           <?php for($i=0;$i<count($emp_sub_pdp);$i++){?>
                                            <tr>
                                                <td><?php echo $emp_sub_pdp[$i]['Employee_id'];?></td>
                                                <td><?php echo $Employee_data_pdp[$i]['0']['emp_fname']." ".$Employee_data_pdp[$i]['0']['emp_lname'] ;?></td>
                                                <td><?php echo $Employee_data_pdp[$i]['0']['ReportingEmpName'] ;?></td>
                                                
                                               
                                                <td> <?php echo count($Save_by_emp_pdp[$i]);?></td>
                                                <td><?php echo count($save_by_mgr_pdp[$i]);?>  </td>
                                                
                                                <td><?php echo count($emp_tot_pdp_Appr_mgr_pdp[$i]);?></td>
                                                <td><?php echo count($emp_tot_pdp_accept_pdp[$i]);?></td>
                                                
                                                <td> <?php echo count($emp_sub_mgr_pdp[$i]);?> </td>
                                                <td> <?php echo count($mgr_sub_emp_pdp[$i]);?></td>
                                                
                                                
                                                <td> <?php echo count($tot_pdp[$i]);?> </td>
                                                <td><a class="btn-group-xs" href="<?php echo base_url(); ?>index.php/Admin_dashboard/pdp_view/<?php echo $emp_sub_pdp[$i]['Employee_id'];?>"><button type="button" class="btn default blue" style="width:52px;padding-top: 2px;">Check</button></a></td>
                                            
                                            </tr>
                                           <?php } ?> 
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->













                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner"> 2018 &copy; Kritva Technologies Pvt. Ltd.
                
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
<!-- BEGIN CORE PLUGINS -->
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/scripts/datatable.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/datatables/datatables.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/pages/scripts/table-datatables-buttons.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        
    </body>

</html>


<script>
$(document).ready(function(){
    $(".show_obj").click(function(){
        $('#obj_report').css('display','block');
        $('#pdp_report').css('display','none');
    });
    $(".show_pdp").click(function(){
        $('#pdp_report').css('display','block');
        $('#obj_report').css('display','none');
    });
});
</script>
<script>
function (xlsx) {
    var sheet = xlsx.xl.worksheets['sheet1.xml'];
    var col = $('col', sheet);
    col.each(function () {
          $(this).attr('width', 80);
   });
};
</script>