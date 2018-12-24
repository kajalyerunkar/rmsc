<?php 
    
?>

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


<div class="page-content" style="min-height: 535px;">
                    <div class="container">
                            <div style="display:none" id="err" >
                                <lable class="err">error</lable>
                            </div>
                        <!-- BEGIN PAGE BREADCRUMBS -->
                        <ul class="page-breadcrumb breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Layouts</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner">
                            <div class="note note-info">
                                <div class="portlet-body form">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Mobile Expense:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="exp" placeholder="Enter text">
                                                            <!--<span class="help-block"> A block of help text. </span>-->
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Tax:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control " value="12" id="tax" placeholder="Enter text" Disabled>
                                                            <!--<span class="help-inline"> Inline help. </span>-->
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Total:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control " id="tot" placeholder="Enter text" Disabled>
                                                            <!--<span class="help-inline"> Inline help. </span>-->
                                                        </div>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-md-3 control-label">Comments:</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" rows="3" id="cmt"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label"></label>
                                                        <div class="col-md-9">
                                                            <i style="color:black;font-size: 35px;" class="fa fa-plus-square" id="add_extra" aria-hidden="true"></i>
                                                            <i style="color:black;font-size: 35px;display:none" class="fa fa-minus-square" id="del_extra" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                    <div id="extra" style="display:none">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Extra Amount:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" id="ext_amt" placeholder="Enter text">
                                                                <!--<span class="help-block"> A block of help text. </span>-->
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Comments for extra Expenses:</label>
                                                            <div class="col-md-9">
                                                                <textarea class="form-control" rows="3" id="ext_cmt"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Total Amount:</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" placeholder="Enter text" id="tot_amt" disabled>
                                                                <!--<span class="help-block"> A block of help text. </span>-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <input type="button" value="Save" class="btn green" id="add_new">
                                                            <!--<button type="submit" class="btn green">Submit</button>-->
                                                            <button type="button" class="btn default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#add_extra").click(function(){
        $("#extra").css("display","block");
        $("#del_extra").css("display","block");
        $("#add_extra").css("display","none");
    });
});
$(document).ready(function(){
    $("#del_extra").click(function(){
        $("#extra").css("display","none");
        $("#add_extra").css("display","block");
        $("#del_extra").css("display","none");
    });
});
$(document).ready(function(){
    $("#add_new").click(function(){
        var base_url = window.location.origin;
        var exp=$("#exp").val();
        var tax=$("#tax").val();
        var tot=$("#tot").val();
        var cmt=$("#cmt").val();
        var ext_amt=$("#ext_amt").val();
        var ext_cmt=$("#ext_cmt").val();
        var tot_amt=$('#tot_amt').val();
        var data = {
            'exp':exp,
            'tax':tax,
            'tot':tot,
            'cmt':cmt,
            'ext_amt':ext_amt,
            'ext_cmt':ext_cmt,
            'tot_amt':tot_amt
            
        };
       if(exp==' '){
            $('#report_nm').css('border','1px solid red');
            $('#report_nm').focus();
            $('#err').css("display","block");
            $('#err').text("Please Enter Expense Name.");
            $('#err').fadeOut(6000);
       }
       else if(cmt==" "){
            $('#report_nm').css('border','1px solid red');
            $('#report_nm').focus();
            $('#err').css("display","block");
            $('#err').text("Please Enter Comments.");
            $('#err').fadeOut(6000);
       }
      else if(ext_amt==" "){
            $('#report_nm').css('border','1px solid red');
            $('#report_nm').focus();
            $('#err').css("display","block");
            $('#err').text("Please Enter Comments.");
            $('#err').fadeOut(6000);
       }
        //alert(base_url+'/rms/index.php/ExpenseClaim/add_expense_report');
        $.ajax({                            
            type : 'post',
            datatype : 'html',
            data : data,
            url : base_url+'/rms/index.php/ExpenseClaim/add_expense_report',
            success : function(data)
            {
              alert(data);
            }
        });
    });
});
</script> 
  