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
                                <span>Layouts</span>
                            </li>
                        </ul>
                        <!-- END PAGE BREADCRUMBS -->
                        <!-- BEGIN PAGE CONTENT INNER -->
                        <div class="page-content-inner ">
                            <div class="note note-info">
                               <div class="portlet box blue " id="expenses"  style="display:none">
                                                    <div class="portlet-title">
                                                        <div class="caption">
                                                         Expenses </div>
                                                    
                                                    </div>
                                                    <div class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                                                        <form action="#" id="frm_obj" class="form-horizontal frm_obj form-bordered form-row-stripped">
                                                            <div class="form-body">
                                                            <label id="kra_id" style="display:none"></label>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Expense Name</label>
                                                                    <div class="col-md-3">
                                                                     <input type="text" placeholder="" value="Mobile Bill"  class="form-control title" id="title" disabled>
                                                                     </div>
                                                                </div>
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
                                                                            <div class="col-md-6">
                                                                               
                                                                                <label style="color:blue">Actual:1000</label>
                                                            
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="col-md-6">
                                                                              
                                                                                    <label style="color:red">Edited By Employee:</label>
                                                            
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
                                                                    <div class="col-md-3">
                                                                        <a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/kr.xls" download="">kr.xls</a>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-md-3">Manager's Remark:
</label>
                                                                    <div class="col-md-9">
                                                                        <textarea class="form-control emp_cmt" maxlength="1000" id="emp_cmt" rows="3"></textarea>
                                                                                                                                        
                                                                    </div>
                                                                </div>
                                                               
                                                            <div class="form-actions">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                    <div id="show_spi" style="display:none"><i class="fa fa-spinner fa-spin" style="font-size:24px;float: left;"></i></div>
                                                                        <button style="width:151px;background-color:#777b7F;border:1px solid #777b7F" type="button" id="save_obj" class="btn dark">
                                                                           Save</button> 

                                                                                                                                            
                                                                    <button type="button" id="sub_emp" class="btn red">
                                                                           Clear </button> 

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- END FORM-->
                                                    </div>  </div>
                            </div>
                        </div>
                        <!-- END PAGE CONTENT INNER -->
                        
                        
                        
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
                                                            <td><input type="checkbox" class= "check" value="1" name="select-exp"></td>
                                                            <td>1</td>
                                                            <td>Mobile Expenses</td>
                                                            <td>24-09-2018</td>
                                                            <td>1200 Rs.</td>
                                                            <td><a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/kr.xls" download="">kr.xls</a></td>
                                                            <td><label style="color:red">Submited By Employee</label></td>
                                                            <td><a class="btn-group-xs"  href="#"><button type="button" class="btn default edit  blue-stripe" style="width:52px;padding-top: 2px;">Edit</button></a>
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
                                                            <td><a class="btn-group-xs"  href="#"><button type="button" class="btn default blue-stripe edit" style="width:52px;padding-top: 2px;">View</button></a>
                                                        </tr>
                                                         <tr>
                                                            
                                                            <td><input type="checkbox" class= "check" value="1" name="select-exp"></td>
                                                            <td>3</td>
                                                            <td>Mobile Number</td>
                                                            <td>26-10-2018</td>
                                                            <td>1000 Rs.</td>
                                                            <td><a target="_blank" href="http://kritvainvestments.com/reimbursement/uploads/images.jpeg" download="">images.jpeg</a></td>
                                                            <td><label style="color:red">Submited By Employee</label></td>
                                                            <td><a class="btn-group-xs"  href="#"><button type="button" class="btn default edit blue-stripe" style="width:52px;padding-top: 2px;">Edit</button></a>
                                                            <button type="button" id="del-1" class="btn default red-stripe del btn-xs"  style="min-width:52px"  >Delete</button></td>
                                                         </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                          
                                        </div>
                                    </div>
                          
                        </div>
                        <button type="button" class="btn blue-hoki sub_selected" id="sub_selected" style="float:right;">Approve Expenses</button>
                        <!-- END PAGE CONTENT INNER -->
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                <!-- END CONTENT BODY -->
            </div>
                    </div>
                </div>
                <!-- END PAGE CONTENT BODY -->
                
                
                
                
                
                
                
                
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $(".edit").click(function(){
        $("#expenses").css("display","block");
    });
});
</script>