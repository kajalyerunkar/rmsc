<script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<div class="page-bar">
<style>

.button-pdf {
    color: black;
    border: 1px solid black;
}
</style>
  <style>
    #err{

        position: fixed;
        top: 85px;
        right: 20;
        z-index: 10;
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
                    <div class=" " id="err" style="display:none">
     <lable class="err" ></lable>
     </div>
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green" id="obj_report" >
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>Employee Details</div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    
                                                                        
                                    <table class="table table-striped table-bordered table-hover" id="emp">
                                        <tbody>
                                            <tr>
                                                <td class="col-md-3"><b>Employee Id:</b>  </td>
                                                <td><input type="text" class="form-control title" id="emp_id" placeholder="Employee id" value="<?php if(isset($Employee_data['0']['Employee_id']) && $Employee_data['0']['Employee_id']!=''){
                                                echo $Employee_data['0']['Employee_id'];} ?>" <?php if(isset($Employee_data['0']['Employee_id']) && $Employee_data['0']['Employee_id']!=''){ echo "disabled";}?> /></td>
                                            </tr> 
                                            <tr>
                                                <td class="col-md-3"><b>Employee First Name:</b> </td>
                                                <td><input type="text" placeholder="Employee Middle Name" value="<?php if(isset($Employee_data['0']['emp_fname']) && $Employee_data['0']['emp_fname']!=''){
                                                echo $Employee_data['0']['emp_fname'];} ?>" class="form-control title" id="emp_fname" /></td>
                                            </tr>    
                                            <tr>
                                                <td class="col-md-3"><b>Employee Middle Name:</b> </td>
                                                <td><input type="text" placeholder="Employee Middle Name" value="<?php if(isset($Employee_data['0']['emp_mname']) && $Employee_data['0']['emp_mname']!=''){
                                                echo $Employee_data['0']['emp_mname'];} ?>" class="form-control title" id="emp_mname" /></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-3"><b>Employee Last Name:</b> </td>
                                                <td><input type="text" placeholder="Employee Last Name" value="<?php if(isset($Employee_data['0']['emp_lname']) && $Employee_data['0']['emp_lname']!=''){
                                                echo $Employee_data['0']['emp_lname'];} ?>" class="form-control title" id="emp_lname" /></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-3"><b>Email id:</b> </td>
                                                <td><input type="text" placeholder="Employee email id" value="<?php if(isset($Employee_data['0']['email_id']) && $Employee_data['0']['email_id']!=''){
                                                echo $Employee_data['0']['email_id'];} ?>" class="form-control title" id="email_id" /></td>         
                                            </tr>
                                            <tr>
                                                <td class="col-md-3"> <b>Date of Joining:</b> </td>
                                                <td><input type="text" placeholder="Date of Joining" value="<?php if(isset($Employee_data['0']['doj']) && $Employee_data['0']['doj']!=''){
                                                echo $Employee_data['0']['doj'];} ?>" class="form-control title" id="doj" /></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-3"> <b>Date of Exit:</b> </td>
                                                <td><input type="text" placeholder="Date of Exit" value="<?php if(isset($Employee_data['0']['date_of_ext']) && $Employee_data['0']['date_of_ext']!=''){
                                                echo $Employee_data['0']['date_of_ext'];} ?>" class="form-control title" id="doe" /></td>
                                            </tr>
                                            <tr>
                                               <td class="col-md-3"><b>Department:</b></td>
                                               <td><input type="text" placeholder="Department" value="<?php if(isset($Employee_data['0']['department']) && $Employee_data['0']['department']!=''){
                                                echo $Employee_data['0']['department'];} ?>" class="form-control title" id="department" /></td>
                                            </tr> 
                                            <tr>
                                               <td class="col-md-3"> <b>Designation:</b> </td>
                                               <td><input type="text" placeholder="Designation" value="<?php if(isset($Employee_data['0']['designation']) && $Employee_data['0']['designation']!=''){
                                                echo $Employee_data['0']['designation'];} ?>" class="form-control title" id="designation" /></td>
                                            </tr> 
                                            <tr>
                                               <td class="col-md-3"> <b>Cadre:</b> </td>
                                               <td><input type="text" placeholder="Cadre" value="<?php if(isset($Employee_data['0']['cader']) && $Employee_data['0']['cader']!=''){
                                                echo $Employee_data['0']['cader'];} ?>" class="form-control title" id="cader" />
                                                </td>
                                            </tr> 
                                            
                                            <tr>
                                               <td class="col-md-3"> <b>Grade:</b> </td>
                                               <td><input type="text" placeholder="grade" value="<?php if(isset($Employee_data['0']['grade']) && $Employee_data['0']['grade']!=''){
                                                echo $Employee_data['0']['grade'];} ?>" class="form-control title" id="grade" />
                                                </td>
                                            </tr> 
                                            <tr>
                                                <td class="col-md-3" colspan=2  style="font-size:16px"> <b>Reporting Details</b> </td>
                                                
                                            </tr>   
                                            <tr>
                                                <td class="col-md-3"> <b>Reporting ID:</b> </td>
                                                <td><input type="text" placeholder="Reporting id" value="<?php if(isset($Employee_data['0']['ReportingEmpCode']) && $Employee_data['0']['ReportingEmpCode']!=''){
                                                echo $Employee_data['0']['ReportingEmpCode'];} ?>" class="form-control title" id="reporting_id"  onkeyup="keyupFunction()" />
                                                <label id="rept" style="color:red;display:none">Reporting manager does not exist.</label>
                                                <div class="col-md-9" style="padding-left:0px">
                                                    <select multiple="" class="form-control" id="rept_op" style="display:none">
                                                        <?php if(isset($rept_data) && count($rept_data)>0){
                                                              for($i=0;$i<count($rept_data);$i++){?>
                                                                   <option class="r_nm">Option 1</option>
                                                            <?php  }
                                                        
                                                        }?>
                                                      
                                                    </select>
                                                </div>
                                                </td>
                                            </tr>   
                                            <tr>
                                                <td class="col-md-3"><b>Reporting Manager Name:</b> </td>
                                                <td><input type="text" placeholder="Reporting Manager Name" value="<?php if(isset($Employee_data['0']['ReportingEmpName']) && $Employee_data['0']['ReportingEmpName']!=''){
                                                echo $Employee_data['0']['ReportingEmpName'];} ?>" class="form-control title" id="reprt_nm" disabled/></td>
                                            </tr> 
                                            <tr>
                                                <td class="col-md-3"><b>Reporting email id:</b> </td>
                                                <td><input type="text" placeholder="Reporting email id" value="<?php if(isset($Employee_data['0']['reporting_mgr1_id']) && $Employee_data['0']['reporting_mgr1_id']!=''){
                                                echo $Employee_data['0']['reporting_mgr1_id'];} ?>" class="form-control title" id="report_email" disabled/></td>
                                            </tr> 
                                            <tr>
                                                <td class="col-md-3" colspan=2  style="font-size:16px"> <b>Reimbursement Details</b> </td>
                                                
                                            </tr> 
                                             
                                            <tr>
                                                <td class="col-md-3"><b>Limits For Employee: </b> </td>
                                                <td><input type="text" placeholder="Limits For Employee" value="<?php if(isset($Employee_data['0']['amt_limit']) && $Employee_data['0']['amt_limit']!=''){
                                                echo $Employee_data['0']['amt_limit'];} ?>" class="form-control title" id="emp_limit" /></td>
                                            </tr>   
                                            <tr>
                                                <td class="col-md-3"><b>Deviation For Employee </b> </td>
                                                <td><input type="text" placeholder="Deviation For Employee" value="<?php if(isset($Employee_data['0']['deviation']) && $Employee_data['0']['deviation']!=''){
                                                echo $Employee_data['0']['deviation'];} ?>" class="form-control title" id="dev" /></td>
                                            </tr>   
                                            
                                         
                                     </tbody>
                                    </table>
                                    <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                    <?php if(isset($Employee_data) && count($Employee_data)>0){ ?>
                                           <button style="width:151px;background-color:#777b7F;border:1px solid #777b7F" type="button" id='save_emp' class="btn green">
                                           Update</button> 
                                    <?php }else{ ?>
                                        <button  type="button" style="width:151px;background-color:#777b7F;border:1px solid #777b7F" id='save_emp' class="btn green">
                                           Save</button> 
                                    <?php } ?>
                                        <button  type="button" style="width:151px;" id='discard' class="btn red">
                                           Cancel</button> 
                                      
                                    </div>
                                </div>
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
        
        
         <div id="static" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title">Confirmation</h4>
                    </div>
                    <div class="modal-body">
                        <p> Are you sure you want to discard all the changes? </p>
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
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


 <script>
  $( function() {
     // $("#static").modal('toggle');
    $( "#doj" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
   $( function() {
    $( "#doe" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>        
         <script src="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/jquery.min.js" type="text/javascript"></script> 
         <script>

function keyupFunction() {
    //alert("hii");
var rept_id=$('#reporting_id').val();
$('#rept_op').empty();
$('#rept_op').css('display','block');
var data = {
              'rept_id':rept_id,
          
        };
        var base_url = window.location.origin;
        $.ajax({                            
            type : 'post',
            datatype : 'html',
            data : data,
            url : base_url+'/rms/index.php/Employee_master/autosearch',
            success : function(data)
            {
    var str = data;
   
    alert(data); 
$.each(str.split('-'), function(key, value) {
  $('#rept_op').append('<option class="r_nm" value="' + value + '">' + (value == '-1' ? 'select' : value) + '</option>');
});
            }
          });
}
</script>

<script>
$("#save_emp").click(function(){

  var emp_id= $('#emp_id').val();
  var emp_fname= $('#emp_fname').val();
  var emp_mname= $('#emp_mname').val();
  var emp_lname= $('#emp_lname').val();
  var reporting_id=  $('#reporting_id').val();
  var reprt_nm=  $('#reprt_nm').val();
  var report_email=  $('#report_email').val();
  var email_id=$('#email_id').val();
  var doj=$('#doj').val();
  var doe='';
  var department=$('#department').val();
  var designation=$('#designation').val();
  if(emp_id==''){
   
        error="Please enter employee id.";
        $('#emp_id').css('border','1px solid red');
        $('#emp_id').focus();
       
  }
  else if(emp_fname==''){
        error="Please enter employee first name.";
        $('#emp_fname').css('border','1px solid red');
        $('#emp_id').css('border','');
        $('#emp_fname').focus();
  }
  else if(emp_lname==''){
        error="Please enter employee last name.";
        $('#emp_lname').css('border','1px solid red');
        $('#emp_fname').css('border','');
        $('#emp_lname').focus();
  }
  else if(email_id==''){
        error="Please enter employee email id.";
        $('#email_id').css('border','1px solid red');
        $('#emp_lname').css('border','');
        $('#email_id').focus();
  }
  else if(reporting_id==''){
        error="Please enter employee reporting manager id.";
        $('#reporting_id').css('border','1px solid red');
        $('#email_id').css('border','');
        $('#reporting_id').focus();
  }
  else if(reprt_nm==''){
        error="Please enter reporting manager name.";
        $('#reprt_nm').css('border','1px solid red');
        $('#reporting_id').css('border','');
        $('#reprt_nm').focus();
  }
  else if(report_email==''){
        error="Please enter reporting manager email.";
        $('#report_email').css('border','1px solid red');
        $('#reprt_nm').css('border','');
        $('#report_email').focus();
  }
  else{
      error='';
      $('#err').css('display','none');
     
  }
  if(error !=''){
     
      $('#err').text(error);
      $('#err').css('display','block');
      $("#err").fadeOut(6000);
  }
  else{
      
      
       var data = {
          'emp_id' : emp_id,
          'emp_fname':emp_fname,
          'emp_mname' : emp_mname,
          'emp_lname':emp_lname,
          'reporting_id':reporting_id,
          'reprt_nm':reprt_nm,
          'report_email':report_email,
          'email_id':email_id,
          'department':department,
          'designation':designation,
          'doj':doj,
          'doe':'',
        };
        var base_url = window.location.origin;
        //alert(base_url);
        $.ajax({                            
            type : 'post',
            datatype : 'html',
            data : data,
            url : base_url+'/rms/index.php/Employee_master/AddEmp',
            success : function(data)
            {
                 data=data.trim();      
                if(data== 'updated'){
                        
                        $('#err').css('display','block');
                        $('#err').css('background-color','#32c5d2');
                        $("#err").fadeOut(6000);
                        $("#err").text("Updation done successfully");
                        window.location.href = base_url+'/rms/index.php/Employee_master';
  
                }
                else if(data== 'added'){
                        $('#err').css('display','block');
                        $("#err").fadeOut(6000);
                        $('#err').css('background-color','#32c5d2');
                        $("#err").text("Employee get saved");
                        //document.getElementById('frm_obj').reset();
                        window.location.href = base_url+'/rms/index.php/Employee_master';

                }
               
            }
          });
   
   
   
  }
});
</script>    
        
     <script>
     
         $("#discard").click(function(){
             $("#static").modal('toggle');
              $("#continue_del").click(function(){
                    $('#show_spin1').css('display','block');
                    var base_url = window.location.origin;
                    window.location.href = base_url+'/rms/index.php/Employee_master';
              });    
         });
     </script>   
        
        
<!-- BEGIN CORE PLUGINS -->

    </body>

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
        
</html>

 
<script>
 $('#reporting_id').focusout(function(){
       //alert("hello");
       $('#rept_op').css('display','none');
        var rep_id=$('#reporting_id').val();
       //alert(rep_id);
        var rep_mgr_data={
            rep_id:rep_id,
        };
        var base_url = window.location.origin;
        //alert(rep_mgr_data);
        $.ajax({
                'type' : 'post',
                'datatype' : 'html',
                'data' : rep_mgr_data,
                url : base_url+'/rms/index.php/Employee_master/ReptDetails',
                success : function(data)
                {
                    //alert(data);
                    if(data=='error'){
                        
                        $('#rept').css('display','block');
                        $("#reprt_nm").val('');
                        $("#report_email").val('');
                    }
                    else{
                    var report=data.split('-');
                    $("#reprt_nm").val(report['0']);
                    $("#report_email").val(report['1']);
                    $('#rept').css('display','none');
                    }
                }
            });
    });   
    
   
    
</script>
<script>
var $j = jQuery.noConflict();
    $j(document).ready(function(){
    $j(".r_nm").click(function(){
        alert($(this).val());
    });
});
</script>