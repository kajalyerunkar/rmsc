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
                                <a href="#">Employee Master</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            
                        </ul>
                        
                    </div>
                    <!-- END PAGE BAR -->
                    
<!-- BEGIN PAGE TITLE-->
                    
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="note note-info">                
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green" id="obj_report" >
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>Objectives Report</div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    
                                    <a class="btn-group-xs"  href="<?php echo base_url(); ?>index.php/Employee_master/NewEmp"><button type="button" id="new_employee" class="btn default blue"  style="min-width:52px;padding-bottom: 2px;"  >New Employee</button></a>
                                                                        
                                    <table class="table table-striped table-bordered table-hover" id="sample_2">
                                        <thead>
                                            <tr>
                                                <th> Employee Id </th>
                                                <th> Employee Name </th>
                                                <th> Reporting Manager Name </th>
                                                <th> Department</th>
                                                <th> Designation</th>
                                                <th> Action </th>
                                                  
                                                
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php for($i=0; $i<count($Employee_data);$i++){ ?>  
                                            <tr>
                                                <td><?php echo $Employee_data[$i]['Employee_id'] ;?></td>
                                                <td><?php echo $Employee_data[$i]['emp_fname']." ".$Employee_data[$i]['emp_lname']; ?></td>
                                                <td><?php echo $Employee_data[$i]['ReportingEmpName'] ;?></td>
                                                
                                                <td><?php echo $Employee_data[$i]['department'] ;?></td>
                                                <td><?php echo $Employee_data[$i]['designation'] ;?></td>
                                                <td style="min-width:160px"><div class="btn-group btn-group-xs btn-group-solid">
                                                        <a class="btn-group-xs"  href="<?php echo base_url(); ?>index.php/Employee_master/view/<?php echo $Employee_data[$i]['Employee_id']; ?>"><button type="button" class="btn default blue-stripe" style="width:52px;padding-top: 2px;">Edit</button></a>
                                                        <!--<a class="btn-group-xs"  href="<?php echo base_url(); ?>index.php/Employee_master/view_deatails/<?php echo $Employee_data[$i]['Employee_id']; ?>"><button type="button" class="btn default green-stripe" style="width:52px;padding-top: 2px;">View</button></a>-->
                                                       
                                                        <button type="button" id="del-<?php echo $Employee_data[$i]['Employee_id']; ?> " class="btn default red-stripe del"  style="min-width:52px;padding-bottom: 2px;"  >Delete</button>
                                                      </div></td>
                                                
                                                
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
        <div id="static" class="modal " tabindex="-1" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden=""></button>
                        <h4 class="modal-title">Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p> Are you sure you want to delete this Employee? </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn red">Cancel</button>
                        <button type="button" class="btn border-blue-soft" id="continue_del">OK</button>
                         <div id="show_spin1" style="display:none"><i class="fa fa-spinner fa-spin" style="font-size:24px;float: left;"></i></div>
                    </div>
                </div>
            </div>
        </div>
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
$(".del").click(function(){
    var emp_id1=$(this).attr('id');
    var emp=emp_id1.split("-");
    var emp_id=emp['1'];
    $("#static").modal('toggle');
    $("#continue_del").click(function(){
$('#show_spin1').css('display','block');
        var data={
            'emp_id':emp_id
        }
        var base_url = window.location.origin;   
        $.ajax({                            
            type : 'post',
            datatype : 'html',
            data : data,
            url : base_url+'/rms/index.php/Employee_master/del_emp',
            success : function(data)
            {
                data=data.trim();      
              //alert(data);
               if(data== 'delete'){
                        $('#err').css('display','block');
                        $('#err').css('background-color','red');
                        $("#err").fadeOut(6000);
                        $("#err").text("Employee details got deleted");
                       $('#show_spin1').css('display','none');
                }
                location.reload();
            }
        });
    });
});
</script>
