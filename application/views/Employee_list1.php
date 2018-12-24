<!-- BEGIN PAGE CONTENT BODY -->
<?php  //print_r($emp_sub_obj); ?>
<style>
    #err{
        position: fixed;
        top: 0;
        right: 20;
        z-index: 1110;
        width: 367px;
        height: 60px;
        border: 1px solid #4C9ED9;
        text-align: center;
        padding-top: 10px;
        right: 45%;
        background-color: #EA1919;
        color: #FFF;
        font-weight: bold;
    }
</style>
<div class="page-content">

                    <div class="container">
                        <div class=" display-hide" id="err" style="display: none;">
     <lable class="err" ></lable>
     </div>
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <div class="row">
                        <div class="col-md-6">
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Employee List</span>
                            </li>
                        </ul>
                        </div>
                        <div class="col-md-6">
                        <!--<span>Employee Id: <label id="emp_id"><?php print_r($this->session->userdata['user']['user_name']); ?></label></span>-->
                        </div></div>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="portlet box blue ">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                         Approvals List </div>
                                                    
                                                    </div>
                                                   
                                 <!--                   <div class="portlet-body">-->
                                 <!--           <div class="table-scrollable">-->
                                 <!--               <table class="table table-striped table-bordered table-hover">-->
                                 <!--                   <thead>-->
                                 <!--                       <tr>-->
                                 <!--                           <th scope="col" > Employee Id </th>-->
                                 <!--                           <th scope="col"> Employee Name </th>-->
                                 <!--                           <th scope="col"> Department </th>-->
                                 <!--                           <th scope="col"> Designation </th>-->
                                                           
                                 <!--                           <th scope="col"> Action </th>-->
                                                            
                                 <!--                       </tr>-->
                                 <!--                   </thead>-->
                                 <!--                   <tbody>-->
                                                        
                                 <!--                       <tr>-->
                                 <!--                           <td> 123456</td>-->
                                 <!--                           <td> Shubhangi Pawar </td>-->
                                 <!--                           <td>IT </td>-->
                                 <!--                           <td> Developer </td>-->
                                 <!--<td> <a class="btn-group-xs" href="<?php echo base_url(); ?>index.php/Expense_approve/view/1"><button type="button" class="btn blue">Check </button></a> </td>-->
                                                            
                                 <!--                       </tr>-->
                                                      
                                 <!--                   </tbody>-->
                                 <!--               </table>-->
                                            
                                 <!--       </div>-->
                                 <!--   </div>-->
                                 <div class="portlet-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered add">
                                                    <thead style="background-color:#3598dc;color:#fff">
                                                        <tr>
                                                            <th><input class= "check_all" id='check_all' type="checkbox" value="checkall" name="selectall"> Check All
                                                            </th>
                                                            <th>Employee Name </th>
                                                            <th>Expense Name</th>
                                                            <th>Month</th>
                                                            <th>Date </th>
                                                            <th>Amount </th>
                                                            <th>Attachment</th>
                                                            <th>Status</th>
                                                            <th> Check</th>
                                                            </tr>
                                                    </thead>
                                                 
                                                    <tbody>
                                                        <tr>
                                                            <td><input type="checkbox" class= "check" value="1" name="select-exp"></td>
                                                            <td>Shubhangi Pawar</td>
                                                            <td>Mobile Expenses</td>
                                                            <td>September</td>
                                                            <td>24-09-2018</td>
                                                            <td>1200 Rs.</td>
                                                            <td><a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/kr.xls" download="">kr.xls</a></td>
                                                            <td><label style="color:red">Submited By Employee</label></td>
                                                            <td><a class="btn-group-xs"  href="#"><button type="button" class="btn default edit  blue-stripe" style="width:52px;padding-top: 2px;">Edit</button></a>
                                                            <!--<button type="button" id="del-1" class="btn default red-stripe del btn-xs"  style="min-width:52px"  >Delete</button></td>-->
                                                        </tr>
                                                        <tr>
                                                            <td><!--<input type="checkbox" class= "check" value="1" name="select-exp">--></td>
                                                            <!--<td><input type="checkbox" class= "check" value="1" name="select-exp"></td>-->
                                                            <td>Manish Gudekar</td>
                                                            <td>Mobile Expenses</td>
                                                            <td>October</td>
                                                            <td>16-10-2018</td>
                                                            <td>900 Rs.</td>
                                                            <td><a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/kr.xls" download="">kr.xls</a></td>
                                                            <td><label style="color:green">Approved</label></td>
                                                            <td><a class="btn-group-xs"  href="#"><button type="button" class="btn default blue-stripe edit" style="width:52px;padding-top: 2px;">View</button></a>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td><input type="checkbox" class= "check" value="1" name="select-exp"></td>
                                                            <td>Shubhangi Pawar</td>
                                                            <td>Mobile Expenses</td>
                                                            <td>October</td>
                                                            <td>26-10-2018</td>
                                                            <td>1000 Rs.</td>
                                                            <td><a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/images.jpeg" download="">images.jpeg</a></td>
                                                            <td><label style="color:red">Submited By Employee</label></td>
                                                            <td><a class="btn-group-xs"  href="#"><button type="button" class="btn default edit blue-stripe" style="width:52px;padding-top: 2px;">Edit</button></a>
                                                            <!--<button type="button" id="del-1" class="btn default red-stripe del btn-xs"  style="min-width:52px"  >Delete</button></td>-->
                                                         </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                          
                                        
                                                    </div>
                                                    
                                                    
                                                    </div><button type="button" class="btn blue-hoki sub_selected" id="sub_selected" style="float:right;">Approve Expenses</button>
                <!-- END PAGE CONTENT BODY -->
               


            </div>
            <!-- END CONTENT -->
            
            
     <div id="Expense_modal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Approve Expense </h4>
                    </div>
                    <div class="modal-body">
                       
                       
                       
                       
                       <div class="portlet light " style="padding-bottom: 0px; margin-bottom: 0px;">
                                        <div class="portlet-title">
                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Expense Name</label>
                                                                    <div class="col-md-3">
                                                                     <input type="text" placeholder="" value="Mobile Bill"  class="form-control title" id="title" disabled>
                                                                     </div>
                                                    </div>
                                            
                                        </div>
                                        <div class="portlet-body form">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-body">
                                                    
                                                  
                                                    <div class="form-group">
                                                                    <label class="control-label col-md-3">Month</label>
                                                                    <div class="col-md-3">
                                                                        <input type="text" placeholder="" value="October"  class="form-control description" id="description" disabled>
                                                                    </div>
                                                                </div>
                                                    <div class="form-group">
                                                                    <label class="control-label col-md-3">Period</label>
                                                                   <div class="col-md-9">
                                                                        <input type="text" id="f_date" value="01-10-2018"  class="form-control input-inline input-sm " placeholder="From Date" disabled>
                                                                        <label>- </label>
                                                                        <input type="text" id="l_date" value="31-10-2018" class="form-control input-inline input-sm " placeholder="To Date" disabled>
                                                            
                                                                    </div>
                                                                </div>
                                                    
                                                    
                                                     <div class="form-group">
                                                                    <label class="control-label col-md-3" target="">Eligibility </label>
                                                                    <div class="col-md-9">
                                                                            <div class="col-md-3">
                                                                               
                                                                                <label style="color:blue">Actual:1000</label>
                                                            
                                                                            </div>
                                                                            <div class="col-md-9">
                                                                                <div class="col-md-6">
                                                                              
                                                                                    <label style="color:red">Edited:</label>
                                                            
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <input type="text" value="1200" class="form-control input-sm" id="fix_amt"  placeholder="Amount" disabled>
                                                                                 </div>

                                                                            </div>
                                                                </div>
                                                             </div>
                                                    
                                                   <div class="form-group">
                                                                <label class="col-md-3 control-label">Local</label>
                                                                <div class="col-md-6">
                                                                    <input type="text" class="form-control input-sm " value="Did Local calls for sales." id="local_remark" placeholder="Remark" disabled>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <input type="text" class="form-control input-sm " value="100" id="local_amt" placeholder="Amount" disabled>
                                                                </div>
                                                   </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label">STD</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " value="Did STD calls for sales."  id="std_remark" placeholder="Remark" disabled>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " value="250" id="std_amt"  placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">ISD</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " value="Did ISD calls for sales."  id="isd_remark" placeholder="Remark" disabled>
                                                        </div>
                                                        
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " value="350" id="isd_amt" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">International Roaming</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " value="Did International calls." id="int_remark" placeholder="Remark" disabled>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm "value="400" id="int_amt" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Messaging</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm "  value="Did some promotional messages" id="msg_remark" placeholder="Remark" disabled>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " value="100"  id="msg_amt" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <label class="col-md-6 control-label"><b>Total</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " value="1200" id="tot" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <label class="col-md-6 control-label"><b>GST @ 18%</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " value="216" id="with_tax" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <label class="col-md-6 control-label"><b>Total including GST</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " value="1416" id="all_tot" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                        <div class="form-group">
                                                                    <label class="control-label col-md-3">Attachments</label>
                                                                    <div class="col-md-3" style="padding-top: 7px;">
                                                                        <a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/kr.xls" download="">kr.xls</a>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Manager's Remark:</label>
                                                                    <div class="col-md-9">
                                                                        <textarea class="form-control emp_cmt" maxlength="1000" id="emp_cmt" rows="3"></textarea>
                                                                                                                                        
                                                                    </div>
                                                                </div>
                                                    
                                                   
                                            </form>
                                        </div>
                                    </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn red" style="float:left">Cancel</button>
                        
                        
                        <input type="button" class="btn blue" value="Approve" id="continue_del11">
                         <div id="show_spin1" style="display:none"><i class="fa fa-spinner fa-spin" style="font-size:24px;float: left;"></i></div>
                    </div>
                </div>
            </div>
        </div>
           
            
            
            
            
            
            
            
            
            <script src="../themes/metronic/theme_rtl/assets/pages/scripts/form-samples.min.js" type="text/javascript"></script>


             <!-- BEGIN GLOBAL MANDATORY STYLES -->
       
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="../themes/metronic/theme_rtl/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../themes/metronic/theme_rtl/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link href="../themes/metronic/theme_rtl/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../themes/metronic/theme_rtl/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="../themes/metronic/theme_rtl/assets/global/plugins/clockface/css/clockface.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
       



		<script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/moment.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/morris/morris.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/morris/raphael-min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/amcharts/serial.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/amcharts/pie.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/amcharts/radar.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/amcharts/themes/light.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/amcharts/themes/patterns.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/amcharts/themes/chalk.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/ammap/ammap.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/amcharts/amstockcharts/amstock.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/flot/jquery.flot.resize.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/flot/jquery.flot.categories.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/pages/scripts/dashboard.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/layouts/layout3/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/layouts/layout3/scripts/demo.min.js" type="text/javascript"></script>
        <script src="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
    $(".edit").click(function(){
       // alert("hiiii");
      //  $("#expenses").css("display","block");
       $("#Expense_modal").modal('show');
    });
});
</script>
<script>
$('.check_all').change(function() {
    if(document.getElementById('check_all').checked) {
        $('input[name=select-exp]').prop('checked', true);
        $('#sub_selected').css('display','block');
    } 
    else {
        $('input[name=select-exp]').prop('checked', false);
        $('#sub_selected').css('display','block');
    }
    var cnt_chk = $('input[type=checkbox].check:checked').length;

});
</script>
<script type="text/javascript">
    $('#sub_selected').ready(function() {
        $("#sub_selected").click(function(){
            var favorite = [];
            $.each($("input[name='select-exp']:checked"), function(){            
                favorite.push("'"+$(this).val()+"'");
            });
             var appr_exp=favorite.join(",");
           // alert(appr_exp);

             var data={
            'appr_exp':appr_exp,
            
        }
var cnt_chk=$('input[type=checkbox].check:checked').length;
if(cnt_chk==0){
$('#err').css('display','block');
            $('#err').css('background-color','red');
            $("#err").fadeOut(6000);
            $("#err").text("Please select atleast 1 Expense");
            
}   
//alert(cnt_chk);
else{
        
       
            $('#err').css('display','block');
            $('#err').css('background-color','#32c5d2');
            $("#err").fadeOut(6000);
            $("#err").text("Successfully Approved "+cnt_chk+" Expense");
           // location.reload();
          
        
}
        });
    });
    
    
    $('.new_expense').click(function(){
        $("#Expense_modal").modal('show');
    });
</script>




