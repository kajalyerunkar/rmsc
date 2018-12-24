<!DOCTYPE html>

        <html lang="en">
   

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/layouts/layout3/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/layouts/layout3/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php  echo base_url();?>themes/metronic/theme_rtl/assets/layouts/layout3/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> 
        
        </head>
    <!-- END HEAD -->
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
    <body class="page-container-bg-solid">

        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <!-- BEGIN PAGE HEAD-->
                <div class="page-head">
                                 <div style="display:none" id="err" >
                                    <lable class="err">error</lable>
                                 </div>
                    <div class="container">
                        <!-- BEGIN PAGE TITLE -->
                        <div class="page-title">
                            <h1>Dashboard 
                                <!--<small>dashboard & statistics</small>-->
                            </h1>
                        </div>
                        <!-- END PAGE TITLE -->
                        
                    </div>
                </div>
                <!-- END PAGE HEAD-->
                <!-- BEGIN PAGE CONTENT BODY -->
                <div class="page-content">
                    <div class="container">
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Dashboard</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="row">
                                <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a href="http://kritvainvestments.com/reimbursement/index.php/ExpenseClaim">-->
                                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 new_expense"><a  id="new_exp" href="#">
                                    <div class="dashboard-stat2 " style="height: 190PX;">
                                        <div class="display">
                                            <div class="number">
                                          <!--<a href="<?php echo base_url();?>index.php/ExpenseClaim">-->
                                          <a href="#">
                                              <small style="color:black;padding-left: 39px;">CREATE NEW EXPENSES</small>
                                            </div>
                                        </div>
                                         <div class="icon">
                                            <i style="color:black;font-size: 35px;align-content:  center;text-align:  center;border-left-width: 141px;padding-left: 91px;margin-top: 33px;" class="fa fa-plus-square" aria-hidden="true"></i>
                                            </div>
                                    </div></a>
                                </div>
                            <?php //print_r($Expense_report_data);
                            
                             if(isset($Expense_report_data) && count($Expense_report_data)!=0){
                             for($i=0;$i<count($Expense_report_data);$i++){
                             ?>
                                <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a class="exp" id="exp-<?php echo $Expense_report_data[$i]['report_id']; ?>" href="<?php echo base_url();?>/index.php/ExpenseClaim/edit/<?php echo $Expense_report_data[$i]['report_id']  ?>">-->
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><a class="exp" id="exp-<?php echo $Expense_report_data[$i]['report_id']; ?>" href="#">
                                    <div class="dashboard-stat2 ">
                                        <div class="display">
                                            <div><small><?php
                                                 if($Expense_report_data[$i]['emp_status']=='Not_submitted'){ ?> 
                                                 <label style="color:red"><b>Not Submitted</b></label>
                                                 <?php }
                                                 else if($Expense_report_data[$i]['emp_status']=='Submitted'){ ?>
                                                    <label style="color:green"> <b>Submitted</b></label>
                                                 <?php }
                                                 ?></small></div>
                                            <hr style="margin-top:20px;margin-bottom: 0px;">
                                            <div class="number">
                                                <h4 class="font-blue-sharp">
                                                    <span data-counter="counterup" data-value="1349"><b>Expenses For :&nbsp; <?php echo $Expense_report_data[$i]['report_name']; ?></b></span>
                                                </h4>
                                                <?php echo $Expense_report_data[$i]['report_date']; ?>
                                            </div>
                                            
                                        </div>
                                        <div class="progress-info" style="font-size:18px">
                                           <b>
                                           <?php 
                                           
                                           $query = "where report_id = ? AND Year=?";
		$year=date("Y");
		$data['Expense_data'] = $this->common_model->fetch_data('Report',$query,array('report_id'=>$Expense_report_data[$i]['report_id'],'Year'=>$year));
	
		
		$query = "where report_id = ?";
		$curr=$this->common_model->get_all_data_distinct_query('Report',$query, $Expense_report_data[$i]['report_id'],'currency');

		for($j=0;$j<count($curr);$j++){
		    	 $amt=0; 
		    for($k=0;$k<count($data['Expense_data']);$k++){
		      
		       
    		    if($data['Expense_data'][$k]['currency']==$curr[$j]['currency']){
    		        
    		        if($amt==0){
    		         
    		            $amt=$data['Expense_data'][$k]['amount'];
    		        
    		        }
    		        else{
    		            $amt=$amt+$data['Expense_data'][$k]['amount'];
    		         
    		        }
    		    }
		    }
		    
		      $str[$j]=$amt. "   ".$curr[$j]['currency'];
		     
		}
		    if(isset($str)) {
		     echo implode(",",$str); 
                                         }  ?></b> 
                                        </div>
                                    </div>
                                </div></a>
<?php } } ?>
        </div>
        
        
        
                                    <div class="portlet box blue">
                                        
                                        <div class="portlet-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered add">
                                                    <thead style="background-color:#3598dc;color:#fff">
                                                        <tr>
                                                            <th><input class= "check_all" id='check_all' type="checkbox" value="checkall" name="selectall"> Check All
                                                            </th>
                                                            <th>Sr No </th>
                                                            <th>Expense Name</th>
                                                            <th>Date </th>
                                                            <th>Amount </th>
                                                            <th>Attachment</th>
                                                            <th>Status</th>
                                                            <th> Check</th>
                                                            </tr>
                                                    </thead>
                                                 
                                                    <tbody>
                                                        <tr>
                                                            <td><!--<input type="checkbox" class= "check" value="1" name="select-exp">--></td>
                                                            <td>1</td>
                                                            <td>Mobile Expenses</td>
                                                            <td>24-09-2018</td>
                                                            <td>1200 Rs.</td>
                                                            <td><a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/kr.xls" download="">kr.xls</a></td>
                                                            <td><label style="color:red">Pending</label></td>
                                                            <td><a class="btn-group-xs"  href="/"><button type="button" class="btn default blue-stripe" style="width:52px;padding-top: 2px;">Edit</button></a>
                                                            <button type="button" id="del-1" class="btn default red-stripe del btn-xs"  style="min-width:52px"  >Delete</button></td>
                                                        </tr>
                                                        <tr>
                                                            <td><!--<input type="checkbox" class= "check" value="1" name="select-exp">--></td>
                                                            <!--<td><input type="checkbox" class= "check" value="1" name="select-exp"></td>-->
                                                            <td>2</td>
                                                            <td>Mobile Number</td>
                                                            <td>16-10-2018</td>
                                                            <td>900 Rs.</td>
                                                            <td><a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/kr.xls" download="">kr.xls</a></td>
                                                            <td><label style="color:green">Approved</label></td>
                                                            <td><a class="btn-group-xs"  href="/"><button type="button" class="btn default blue-stripe" style="width:52px;padding-top: 2px;">View</button></a>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td><input type="checkbox" class= "check" value="1" name="select-exp"></td>
                                                            <td>3</td>
                                                            <td>Mobile Number</td>
                                                            <td>26-10-2018</td>
                                                            <td>1000 Rs.</td>
                                                            <td><a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/images.jpeg" download="">images.jpeg</a></td>
                                                            <td><label style="color:blue">Submitted</label></td>
                                                            <td><a class="btn-group-xs"  href="/"><button type="button" class="btn default blue-stripe" style="width:52px;padding-top: 2px;">Edit</button></a>
                                                            <button type="button" id="del-1" class="btn default red-stripe del btn-xs"  style="min-width:52px"  >Delete</button></td>
                                                         </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                          
                                        </div>
                                    </div>
                          
                        </div>
                        <button type="button" class="btn blue-hoki sub_selected" id="sub_selected" style="float:right;">Submit Expenses</button>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
        <!-- END CONTAINER -->
      
        <!-- BEGIN CORE PLUGINS -->
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
        <!-- END THEME LAYOUT SCRIPTS -->
    </body>

</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
	//	$("#myModal").modal('show');
		//alert("hiiiiii");
	});
</script>
     <div id="Expense_modal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Add Expense Head</h4>
                    </div>
                    <div class="modal-body">
                       
                       
                       
                       
                       <div class="portlet light " style="padding-bottom: 0px; margin-bottom: 0px;">
                                        <div class="portlet-title">
                                              <div class="form-group">
                                                        <label class="col-md-3 control-label " >Select Expense</label>
                                                        <div class="col-md-9" style=" padding-left: 7px;">
                                                            <select class="form-control input-sm input-small">
                                                                <option>Select</option>
                                                                <option>Mobile</option>
                                                                
                                                            </select>
                                                        </div>
                                                </div>
                                            
                                        </div>
                                        <div class="portlet-body form">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Month</label>
                                                        <div class="col-md-9">
                                                            <select id="months" class="form-control input-sm input-small">
                                                                <option value="">Select</option>
                                                                <option value="0">January</option>
                                                                <option value="1">February</option>
                                                                <option value="2" >March</option>
                                                                <option value="3">April</option>
                                                                <option value="4">May</option>
                                                                <option value="5">June</option>
                                                                <option value="6">July</option>
                                                                <option value="7">August</option>
                                                                <option value="8">September</option>
                                                                <option value="9">October</option>
                                                                <option value="10">November</option>
                                                                <option value="11">Decembe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Period</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="f_date" class="form-control input-inline input-sm " placeholder="From Date">
                                                            <label>- </label>
                                                            <input type="text" id="l_date" class="form-control input-inline input-sm " placeholder="To Date">
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label">Eligibility</label>
                                                        <div class="col-md-6">
                                                            <label  >Edit</label> <input id="edit_amt" type="checkbox" style="margin-left:10px">
                                                          
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" id="fix_amt"  placeholder="Amount" disabled>
                                                        </div>
                                                   </div>
                                                    
                                                    
                                                   <div class="form-group">
                                                        <label class="col-md-3 control-label">Local</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " id="local_remark" placeholder="Remark">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="local_amt" placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">STD</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm "  id="std_remark" placeholder="Remark">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="std_amt"  placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">ISD</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " id="isd_remark" placeholder="Remark">
                                                        </div>
                                                        
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="isd_amt" placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">International Roaming</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " id="int_remark" placeholder="Remark">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="int_amt" placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Messaging</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " id="msg_remark" placeholder="Remark">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="msg_amt" placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <label class="col-md-6 control-label"><b>Total</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="tot" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <label class="col-md-6 control-label"><b>GST @ 18%</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="with_tax" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <label class="col-md-6 control-label"><b>Total including GST</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="all_tot" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                    
                                                    <!--<div class="form-group">-->
                                                    <!--    <label class="col-md-3 control-label">Textarea</label>-->
                                                    <!--    <div class="col-md-9">-->
                                                    <!--        <textarea class="form-control" rows="3"></textarea>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <div class="form-group">
                                                        <label for="exampleInputFile" class="col-md-3 control-label">File input</label>
                                                        <div class="col-md-9">
                                                            <input type="file" id="exampleInputFile">
                                                          
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                <!--<div class="form-actions">-->
                                                <!--    <div class="row">-->
                                                <!--        <div class="col-md-offset-3 col-md-9">-->
                                                <!--            <button type="submit" class="btn green">Submit</button>-->
                                                <!--            <button type="button" class="btn default">Cancel</button>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                            </form>
                                        </div>
                                    </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn red" style="float:left">Cancel</button>
                        <input type="button" value="Clear" class="btn default" style="float:left">
                        
                        <input type="button" class="btn blue" value="Save" id="continue_del11">
                         <div id="show_spin1" style="display:none"><i class="fa fa-spinner fa-spin" style="font-size:24px;float: left;"></i></div>
                    </div>
                </div>
            </div>
        </div>
        
        

     <div id="static1" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Add Expense Head</h4>
                    </div>
                    <div class="modal-body">
                       
                       
                       
                       
                       <div class="portlet light " style="padding-bottom: 0px; margin-bottom: 0px;">
                                        <div class="portlet-title">
                                              <div class="form-group">
                                                        <label class="col-md-3 control-label " >Select Expense</label>
                                                        <div class="col-md-9" style=" padding-left: 7px;">
                                                            <select class="form-control input-sm input-small">
                                                                <option>Select</option>
                                                                <option>Mobile</option>
                                                                
                                                            </select>
                                                        </div>
                                                    </div>
                                            
                                        </div>
                                        <div class="portlet-body form">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Month</label>
                                                        <div class="col-md-9">
                                                            <select id="months" class="form-control input-sm input-small">
                                                                <option value="">Select</option>
                                                                <option value="0">January</option>
                                                                <option value="1">February</option>
                                                                <option value="2" >March</option>
                                                                <option value="3">April</option>
                                                                <option value="4">May</option>
                                                                <option value="5">June</option>
                                                                <option value="6">July</option>
                                                                <option value="7">August</option>
                                                                <option value="8">September</option>
                                                                <option value="9">October</option>
                                                                <option value="10">November</option>
                                                                <option value="11">Decembe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Period</label>
                                                        <div class="col-md-9">
                                                            <input type="text" id="f_date" class="form-control input-inline input-sm " placeholder="From Date">
                                                            <label>- </label>
                                                            <input type="text" id="l_date" class="form-control input-inline input-sm " placeholder="To Date">
                                                            
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label">Eligibility</label>
                                                        <div class="col-md-6">
                                                            <label  >Edit</label> <input id="edit_amt" type="checkbox" style="margin-left:10px">
                                                          
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm" id="fix_amt"  placeholder="Amount" disabled>
                                                        </div>
                                                   </div>
                                                    
                                                    
                                                   <div class="form-group">
                                                        <label class="col-md-3 control-label">Local</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " id="local_remark" placeholder="Remark">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="local_amt" placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">STD</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm "  id="std_remark" placeholder="Remark">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="std_amt"  placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">ISD</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " id="isd_remark" placeholder="Remark">
                                                        </div>
                                                        
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="isd_amt" placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">International Roaming</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " id="int_remark" placeholder="Remark">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="int_amt" placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Messaging</label>
                                                        <div class="col-md-6">
                                                            <input type="text" class="form-control input-sm " id="msg_remark" placeholder="Remark">
                                                        </div>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="msg_amt" placeholder="Amount">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <label class="col-md-6 control-label"><b>Total</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="tot" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <label class="col-md-6 control-label"><b>GST @ 18%</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="with_tax" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <label class="col-md-6 control-label"><b>Total including GST</b></label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control input-sm " id="all_tot" placeholder="Amount" disabled>
                                                        </div>
                                                    </div>
                                                    
                                                    <!--<div class="form-group">-->
                                                    <!--    <label class="col-md-3 control-label">Textarea</label>-->
                                                    <!--    <div class="col-md-9">-->
                                                    <!--        <textarea class="form-control" rows="3"></textarea>-->
                                                    <!--    </div>-->
                                                    <!--</div>-->
                                                    <div class="form-group">
                                                        <label for="exampleInputFile" class="col-md-3 control-label">File input</label>
                                                        <div class="col-md-9">
                                                            <input type="file" id="exampleInputFile">
                                                          
                                                        </div>
                                                    </div>
                                                   
                                                   
                                                <!--<div class="form-actions">-->
                                                <!--    <div class="row">-->
                                                <!--        <div class="col-md-offset-3 col-md-9">-->
                                                <!--            <button type="submit" class="btn green">Submit</button>-->
                                                <!--            <button type="button" class="btn default">Cancel</button>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                            </form>
                                        </div>
                                    </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" class="btn red" style="float:left">Cancel</button>
                        <input type="button" value="Clear" class="btn default" style="float:left">
                        
                        <input type="button" class="btn blue" value="Save" id="continue_del11">
                         <div id="show_spin1" style="display:none"><i class="fa fa-spinner fa-spin" style="font-size:24px;float: left;"></i></div>
                    </div>
                </div>
            </div>
        </div>
        
<script>
    
    $('#update_emp').click(function(){
        var cost_center=$('select[name=cost_center]').val();
        var mob_no=$('#mob_no').val();
        var rept_id=$('#rept').text();
        var desg=$('#desg').val();
        var data = {
          'cost_center' : cost_center,
          'mob_no':mob_no,
          'desg' : desg,
          'rept_id':rept_id
        };
        var base_url = window.location.origin;   
        $.ajax({                            
            type : 'post',
            datatype : 'html',
            data : data,
            url : base_url+'/reimbursement/index.php/Reimbursement_dashboard/update_cost_center',
            success : function(data)
            {
            alert(data);
             data=data.trim();
             if(data== "updated"){
                window.location.href = href=base_url+'/reimbursement/index.php/ExpenseClaim/edit/'+rept_id;
             }
            }
        });
    });
</script>

<script>
     $('.exp').click(function(){
        var myId = $(this).attr('id');
        //alert( myId );
        var expId = myId.split("-");
        var exp_Id = expId['1'];
        
        var data={
            'exp_Id': exp_Id
        };
        
        var base_url = window.location.origin;   
        //alert(base_url);
        $.ajax({                            
            type : 'post',
            datatype : 'html',
            data : data,
            url : base_url+'/reimbursement/index.php/ExpenseDashboard/update_exp_cost_center',
            success : function(data)
            {
                 //alert(data);
                 var cst_snt=data.split("@");
                 $("#cost_center").html(cst_snt['0']);
                 $("#rept").text(cst_snt['1'])
                 $('#update_emp_new').css('display','none');
                 $('#update_emp').css('display','inline');
                 $("#myModal").modal('show');
            }
        });
        
     });
     
     
     
    //  $('#new_exp').click(function(){
    //      $('#update_emp_new').css('display','inline');
    //      $('#update_emp').css('display','none');
    //      $("#myModal").modal('show');
         
    //  });
     
    //  $('#new_exp').click(function(){
    //      $('#update_emp_new').css('display','inline');
    //      $('#update_emp').css('display','none');
    //      $("#myModal").modal('show');
         
    //  });
     
      $('#update_emp_new').click(function(){
        var cost_center=$('select[name=cost_center]').val();
        var mob_no=$('#mob_no').val();
        var rept_id=$('#rept').text();
        var desg=$('#desg').val();
        var data = {
          'cost_center' : cost_center,
          'mob_no':mob_no,
          'desg' : desg,
          'rept_id':rept_id
        };
        var base_url = window.location.origin;   
        $.ajax({                            
            type : 'post',
            datatype : 'html',
            data : data,
            url : base_url+'/reimbursement/index.php/Reimbursement_dashboard/update_cost_center',
            success : function(data)
            {
            alert(data);
             data=data.trim();
             if(data== "updated"){
                window.location.href = href=base_url+'/reimbursement/index.php/ExpenseClaim';
             }
            }
        });
    });
</script>

<!--<script>-->
<!--$(".del").click(function(){-->
  
    
<!--    $("#static1").modal('show');-->
<!--    $("#continue_del11").click(function(){-->
          
<!--    $('#show_spin1').css('display','block');-->
<!--            var data={-->
<!--                'exp_id':exp_id-->
<!--            }-->
            
    
<!--        var base_url = window.location.origin;   -->
        
<!--        $.ajax({                            -->
<!--            type : 'post',-->
<!--            datatype : 'html',-->
<!--            data : data,-->
<!--            url : base_url+'/reimbursement/index.php/ExpenseDashboard/del_exp',-->
<!--            success : function(data)-->
<!--            {-->
<!--                data=data.trim();-->
<!--                if(data== 'delete'){-->
<!--                     $('#err').css('display','block');-->
<!--                      $('#err').css('background-color','red');-->
<!--                        $("#err").fadeOut(6000);-->
<!--                        $("#err").text("Expense-head got deleted");-->
<!--                      $('#show_spin1').css('display','none');-->
<!--                }-->
               // setTimeout(function(){ window.location.href = base_url+'/reimbursement/index.php/ExpenseDashboard'; },1000);

<!--            }-->
<!--        });-->
        
 
<!--    });-->
<!--});-->
<!--</script>-->
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
            $("#err").text("Successfully submitted "+cnt_chk+" objectives");
        
    
}
        });
    });
    
    
    $('.new_expense').click(function(){
        $("#Expense_modal").modal('show');
    });
</script>

<script>
 $("#months").change(function(){
     var month = $( "#months option:selected" ).val(); 
     var mon= parseInt(month);
     var currentTime = new Date();
     var year = currentTime.getFullYear();
     var cur_year=parseInt(year);
     var d = new Date(cur_year, mon + 1, 0 );
     var lat_day=convert(d);
     var f_day = lat_day.split('-');
     var first_date='01-'+f_day['1']+'-'+f_day['2'];
     $('#f_date').val(first_date);
     $('#l_date').val(lat_day);
});
$(document).ready(function(){


var month1 = 3; // January
var d1 = new Date(2018, month1 + 1, 0);
//alert(d);

var day1= convert(d1);
//alert(day1);
});

 function getLastDateOfMonth(Year,Month){
        return(new Date((new Date(Year, Month+1,1))-1));
   }
   
   function convert(str) {
    var date = new Date(str),
        mnth = ("0" + (date.getMonth()+1)).slice(-2),
        day  = ("0" + date.getDate()).slice(-2);
    return [day, mnth,date.getFullYear() ].join("-");
}


</script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $("#f_date").datepicker({
      dateFormat: 'dd-mm-yy',
      changeMonth: true,
      changeYear: true
    });
    
    $("#l_date").datepicker({
      dateFormat: 'dd-mm-yy',
      changeMonth: true,
      changeYear: true
    });
    
  } );
  $("#edit_amt").change(function() {
    if(this.checked) {
     //   alert("hiiiiiii");
      $('#fix_amt').prop('disabled', false);
    }
    else{
      $('#fix_amt').prop('disabled', true);
    }
    
});
  </script>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script>
                    $(".del").click(function(){
                        $("#static1").modal('toggle');
                        //$('#Exp_types').modal('toggel');
                      //  alert("hiiiiii");
                    });
                    
                </script>