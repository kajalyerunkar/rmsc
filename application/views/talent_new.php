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
                                        <i class="fa fa-globe"></i>Talent Discussion Decisions</div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">
                                    <div class="title"></div> 
                                    <div class="title1" style="margin-top: 10px;padding: 10px;color: white;background: #32c5d2;">
                                    	<h4><b>Facilitate Talent Decision<label style="float:right">Employee Id : <?php  if(isset($Employee_data)){ echo $Employee_data['0']['Employee_id'];}?>  / Employee Name : <?php  if(isset($Employee_data)){ echo $Employee_data['0']['emp_fname']." ".$Employee_data['0']['emp_lname'];}?></label></b></h4>
                                    </div> 
                                    <div class="title" style="padding: 15px 0px;">
                                    	<h5 style="font-weight: 700;text-transform: uppercase;">Talent decision decide how we grow and reward people and are determined during the talent discussion</h5>
                                    </div> 
                                  	<div class="questions">
                                  <form method="post" style="font-size:16px;margin:10px 0px;">
                                  <label id="emp_id"  ><?php  if(isset($Employee_data)){ echo $Employee_data['0']['Employee_id'];}?></label>
                                  		<h5 style="font-weight:bold">What is Next for <?php  if(isset($Employee_data)){ echo $Employee_data['0']['emp_fname']." ".$Employee_data['0']['emp_lname'];}?></h5>
  										  	                 <input type="checkbox"  class="option" name="frst" value="Continue to grow and learn" 
  										  	                 <?php
  										  	                 if(isset($Talent_data_edit) && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['ans1']=="Continue to grow and learn"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?>
  										  	                 > Continue to grow and learn<span  style="display:none">
                                         <label ><input type="text" id="ansf"
                                         value="<?php
                                         if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0){
                                             echo $Talent_data_edit['0']['ans1'];
                                         } ?>"
                                         ></label></span><br>
                    							<input type="checkbox"  class="option" name="frst" value="Improve Performance" <?php
  										  	                    if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0 && $Talent_data_edit['0']['ans1']=="Improve Performance"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?> > Improve Performance<br>
                    										  		<ul style="list-style-type: none;">
                    													  <li><input type="radio" name="opt1" class="opt1" value="change a role (within a carrer level)" <?php
                                              if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0 && $Talent_data_edit['0']['opt_ans1']=="change a role (within a carrer level)"){ ?>
                                                  checked
                                           <?php }
                                           ?>>change a role (within a carrer level)</li>
                    													  <li><input type="radio" name="opt1" class="opt1" value="Create a performance plan"
                                                  <?php
                                              if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0 && $Talent_data_edit['0']['opt_ans1']=="Create a performance plan"){ ?>
                                                  checked
                                           <?php }
                                           ?>>Create a performance plan</li>
                    													  <li><input type="radio" name="opt1" class="opt1" value="Transaction"
                                                  <?php
                                              if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0 && $Talent_data_edit['0']['opt_ans1']=="Transaction"){ ?>
                                                  checked
                                           <?php }
                                           ?>>Transaction</li>
                    												</ul>  
                    										 	<input type="checkbox" name="frst" class="option" value="promote"
                    										 <?php	if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0 && $Talent_data_edit['0']['ans1']=="promote"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?>
                    										 	> Promote<br><br>
                  								
                  										    <h5 style="font-weight:bold">Anything else</h5>

                                                                    <input type="checkbox" class="chk1" name="cjk" id="cjk" value="Recognise DTE Talent Priority"
                                                                    <?php
  										  	                    if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['ans2']=="Recognise DTE Talent Priority"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?> 
                                                                    > Recognise DTE Talent Priority<span style="display:none"><label><input type="text" id="anss"
                                                                    value="<?php
                                         if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0){
                                             echo $Talent_data_edit['0']['ans2'];
                                             
                                         }
                                        
                                         ?>"
                                                                    ></label></span><br>
                                                                    <input type="checkbox" class="chk1" name="cjk" id="cjk" value="Recognize distinctive achievement"
                                                                    <?php
  										  	                    if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['ans2']=="Recognize distinctive achievement"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?> 
                                                                    > Recognize distinctive achievement<br>
                                                                    <input type="checkbox" class="chk1" name="cjk" id="cjk" value="Identity for leadership programs"
                                                                    <?php
  										  	                    if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['ans2']=="Identity for leadership programs"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?> 
                                                                    > Identity for leadership programs<br>
                                                                    <input type="checkbox" class="chk1" name="cjk" id="cjk" value="Identity for Cross-skilling programs"
                                                                    <?php
  										  	                    if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['ans2']=="Identity for Cross-skilling programs"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?> 
                                                                    > Identity for Cross-skilling programs<br>
                                                                    <input type="checkbox" class="chk1" name="cjk" id="cjk" value="Future Promotions"
                                                                    <?php
  										  	                    if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['ans2']=="Future Promotions"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?>> Future Promotions<br>
                                                                    <ul style="list-style-type: none;">
                  													   <li><input type="radio" name="opt2" class="opt2" value="Ready now" <?php
                                              if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['opt_ans2']=="Ready now"){ ?>
                                                  checked
                                           <?php }
                                           ?>>Ready now</li>
                  													   <li><input type="radio" name="opt2" class="opt2" value="Review within 12 months" <?php
                                              if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['opt_ans2']=="Review within 12 months"){ ?>
                                                  checked
                                           <?php }
                                           ?>>Review within 12 months</li>
                                               <label id="opt2_ans"></label>
                  												   </ul>
                  										  	   <input type="checkbox" class="chk1" name="cjk" id="cjk"  value="Move to new Role" class="optionbox"
                  										  	   <?php
  										  	                    if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['ans2']=="Move to new Role"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?> > Move to new Role<br>
                    					
                    										 	   <input type="checkbox" class="chk1" name="cjk" id="cjk"  value="Add role(MDs Only)" class="optionbox"
                    										 	 <?php
  										  	                    if(isset($Talent_data_edit)  && count($Talent_data_edit) > 0  && $Talent_data_edit['0']['ans2']=="Add role(MDs Only)"){ ?>
  										  	                        checked
  										  	                 <?php }
  										  	                 ?>   
                    										 	   
                    										 	   > Add role(MDs Only)<br>
                                          <br><br>
                                          <?php if(!(isset($Talent_data_edit)) || count($Talent_data_edit) ==0 ){ ?> 
                                          <button type="button"  class="btn green save_exp col-md-offset-5 col-xs-offset-5" id="submit">Save</button><?php } else{?>
                                          <button type="button"  class="btn green save_exp col-md-offset-5 col-xs-offset-5"  id="edit">Update</button><?php } ?>
                                          
                                          </form>    
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
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<!--checkbox  -->
     <script>
   $(".chk1").change(function () {
           if ($(this).is(":checked")) {
               $(".chk1").not($(this)).each(function () {
                     $(this).removeAttr("checked");

                     
                      })
                  }
             });

        $(".option").change(function (){
           if ($(this).is(":checked")) {
               $(".option").not($(this)).each(function () {
                     $(this).removeAttr("checked");
                     //alert($(this).val());
                      })
                  }
             });
                
</script>
<script>
    $("#opt1") // select the radio by its id
    .change(function(){ // bind a function to the change event
        // if( $(this).is(":checked") ){ // check if the radio is checked
    var val = $(this).val(); // retrieve the value
        // }
        alert(val);
    });
</script>
<script>
 $("#ansf").click(function(){
    // alert($(this).val());
 });
  $("#submit").click(function(){
     // alert("hello");
    var opt1= $('input[name=opt1]:checked').val();//frst question cha radio btn
    var opt2= $('input[name=opt2]:checked').val();//scnd question cha radio btn
    
    var ansf = $("#ansf").val();
    var anss = $("#anss").val();
    var emp_id = $("#emp_id").text();

     if ($(".option").is(":checked")==true)
     {  //alert(ansf);
              if(ansf == "Improve Performance" && $(".opt1").is(":checked")==false)
              {
                 alert("please answer appropriate");
                
              }
              else if(ansf !== "Improve Performance" && $(".opt1").is(":checked")==true){
                 alert("please answer appropriate");
              }
              else(ansf! == "Improve Performance")
              {       
                      alert(111);
                      if($(".chk1").is(":checked")==true){


                          if(anss == "Future Promotions" && $(".opt2").is(":checked")==false)
                            {
                               alert("please answer appropriate");
                              
                            }
                            else if(anss !== "Future Promotions" && $(".opt2").is(":checked")==true){
                               alert("please answer appropriate");
                            }
                            else{   
                                  //alert(11);                                    
                                    var data = {

                                                'ansf' :ansf,
                                                'anss':anss,
                                                'emp_id':emp_id,
                                                'opt1':opt1,
                                                'opt2':opt2
                                              };                         
                                    var base_url = window.location.origin;   
                                    console.log(data);
                                    $.ajax({
                                                              
                                            type : "post",
                                            data:data,
                                            url : base_url+"/rms/index.php/Talent/talent_review",
                                            success : function(data){
                                            alert(data);
                                            $("#err").text('Talent Review Submitted Successfully.');
                                            $('#err').css('background-color','#32c5d2');
                                            $("#err").css('display','block');
                                            $("#err").fadeOut(6000);}
                                          }); 
                                  }          
                                  
                            }
                             
                        else{
                               $("#err").text(' Please answer all questions.');
                               $('#err').css('background-color','red');
                               $("#err").css('display','block');
                               $("#err").fadeOut(6000);       
                            }
                }       
      }
      else
      {
               $("#err").text(' Please answer all questions.');
               $('#err').css('background-color','red');
               $("#err").css('display','block');
               $("#err").fadeOut(6000);
      }  
           

          
    });
</script>
<script>
  
  $("#edit").click(function(){
    var opt1= $('input[name=opt1]:checked').val();
    var opt2= $('input[name=opt2]:checked').val();
    var  ansf = $("#ansf").val();
    var anss = $("#anss").val();
    var emp_id = $("#emp_id").text();
    //alert(opt1);
      if ($(".option").is(":checked")==true) {

        if(ansf == "Improve Performance" && $(".opt1").is(":checked")==false)
              {
                 alert("please answer appropriate");
                
              }
              else if(ansf !== "Improve Performance" && $(".opt1").is(":checked")==true){
                 alert("please answer appropriate");
              }
              else 
              { 
                  if(ansf=="Continue to grow and learn" || anss == "Promote")
                      {
                        $(".opt1").is(":checked")==false;
                      }

                    if($(".chk1").is(":checked")==true)
                    {

                      if(anss == "Future Promotions" && $(".opt2").is(":checked")==false)
                      {
                              alert("please answer appropriate");
                                    
                      }
                      else if(anss !== "Future Promotions" && $(".opt2").is(":checked")==true){
                              alert("please answer appropriate");
                      }
                      else{  

                          $("#err").text('Talent Review Updated Successfully.');
                          $('#err').css('background-color','#32c5d2');
                          $("#err").css('display','block');
                          $("#err").fadeOut(6000);

                                    
                                 var data = {

                                            'ansf' :ansf,
                                            'anss':anss,
                                            'emp_id':emp_id,
                                            'opt1':opt1,
                                            'opt2':opt2
                                          };       
                                        var base_url = window.location.origin;   

                                       //console.log(data);
                                        $.ajax({
                                          
                                                    
                                                    type : "post",
                                                   data:data,
                                                    url : base_url+"/rms/index.php/Talent/update",
                                                    success : function(data){
                                                        alert(data);
                                                    }
                                              })   

                                        } 
                    }
                    else{
                            $("#err").text(' Please answer all questions.');
                            $('#err').css('background-color','red');
                            $("#err").css('display','block');
                            $("#err").fadeOut(6000);       
                        }


                }
          }  
      else{
               $("#err").text(' Please answer all questions.');
               $('#err').css('background-color','red');
               $("#err").css('display','block');
               $("#err").fadeOut(6000);
          }        

          
    })

</script> 
<script>
var checked, checkedValues = new Array();
$(document).on("change", ".option", function(e) {
    //alert("hii");
    checked = $("input[type=checkbox]:checked");
    //checkedValues = checked.map(function(i) { return $(this).val() }).get();
    checkedValues = $(this).val();
    //    simply shows whats been tagged in output HTML area
    $(".aaa").html(checked.length + " are checked");
    if (checked.length) {
        var str = checkedValues;
        //$(".aaa").append($("<p />", { text: "Values: " + str }));
        console.log(str);
        document.getElementById("ansf").value = str;
    }
    else {
        $(".aaa").append($("<p />", { text: "No Values" }));
    }
});
</script>
<script>
var checked, checkedValues = new Array();
$(document).on("change", ".chk1", function(e) {
    //alert("hello");
    checked = $("input[type=checkbox]:checked");
    //checkedValues = checked.map(function(i) { return $(this).val() }).get();
    checkedValues = $(this).val();
    //console.log(checkedValues);
       //simply shows whats been tagged in output HTML area
    $(".aaa").html(checked.length + " are checked");
    if (checked.length) {
        var str1 = checkedValues;
        //$(".aaa").append($("<p />", { text: "Values: " + str }));
        console.log(str1);
        document.getElementById("anss").value = str1;
    }
    else {
        $(".aaa").append($("<p />", { text: "No Values" }));
    }
});

</script>
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
   
  //  alert(data); 
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