<style>

.button-pdf {
    color: black;
    border: 1px solid black;
}
</style>
 <style>
    #err{

        position: fixed;
        top: 70px;
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

<div class="page-bar">

    <ul class="page-breadcrumb">
        <li>
            <a href="index.html">Home</a>
            <i class="fa fa-circle"></i>
        </li>
        <li>
            <a href="#">Expense Master</a>
            <i class="fa fa-circle"></i>
        </li>
        
    </ul>
    
</div>
<div class="note note-info">
     <div class="portlet-body form portlet light">
        <!-- BEGIN FORM-->
        <form action="#" class="form-horizontal">
        
            <div class="form-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Expense Category</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="Enter text" 
                       value=" <?php
                        if(isset($Expense_data) && count($Expense_data) > 0){
                            echo $Expense_data['0']['Expense_nm'];
                        }
                        ?>"
                        
                        disabled>
                        
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-offset-3 col-md-9">
                         <input type="button" value="Add new Expense Type" class="btn blue" id="add_new">
                    </div>
                </div>
            
        </form>
        <!-- END FORM-->
    </div>
</div>



                                            <div id="Exp_types" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                                            <h4 class="modal-title">Confirmation</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="portlet-body form">
                                                        <!-- BEGIN FORM-->
                                                        <form action="#" class="form-horizontal">
                                                            <div class="form-body">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Sub-type:</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="Enter text">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Basis:</label>
                                                                    <div class="col-md-9">
                                                                        
                                                                            <select class="form-control input-sm " id="basis">
                                                                                <option class="client_nm">Select</option>
                                                                                <option class="client_nm">Fixed</option>
                                                                                <option class="client_nm">Unit</option>
                                                                                <option class="client_nm">Distance</option>
                                                                                
                                                                            </select>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Time Scheduled:</label>
                                                                    <div class="col-md-9">
                                                                        
                                                                            <select class="form-control input-sm " id="scheduled">
                                                                                <option class="client_nm">Select</option>
                                                                                <option class="client_nm">Monthly</option>
                                                                                <option class="client_nm">Quaterly</option>
                                                                                <option class="client_nm">Annual</option>
                                                                                
                                                                            </select>
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Limits:</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="Enter text">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Deviations:</label>
                                                                    <div class="col-md-9">
                                                                        <input type="text" class="form-control" placeholder="Enter text">
                                                                        
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Apllicable To:</label>
                                                                    <div class="col-md-9">
                                                                            <select class="form-control input-sm " id="scheduled">
                                                                                <option class="client_nm">Select</option>
                                                                                <option class="client_nm">All</option>
                                                                                <option class="client_nm">Grade Wise</option>
                                                                                <option class="client_nm">Designation Wise</option>
                                                                            </select>
                                                                            
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Select Grade:</label>
                                                                    <div class="col-md-9">
                                                                            <select class="form-control input-sm " id="scheduled">
                                                                                <option class="client_nm">Select</option>
                                                                                <option class="client_nm">JMC</option>
                                                                                <option class="client_nm">MMC</option>
                                                                                <option class="client_nm">SMC</option>
                                                                                
                                                                            </select>
                                                                        
                                                                    </div>
                                                                </div>
                                                            <div class="form-actions">
                                                                <div class="row">
                                                                    <div class="col-md-offset-3 col-md-9">
                                                                        <button type="submit" class="btn green">Submit</button>
                                                                        <button type="button" class="btn default">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <!-- END FORM-->
                                                    </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" data-dismiss="modal" class="btn dark btn-outline">Cancel</button>
                                                            <button type="button" data-dismiss="modal" class="btn green">Continue Task</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            
                                            
                <!-- END PAGE CONTENT BODY -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                <script>
                    $("#add_new").click(function(){
                        $("#Exp_types").modal('toggle');
                        //$('#Exp_types').modal('toggel');
                      //  alert("hiiiiii");
                    });
                    
                </script>