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
                    <!-- END PAGE BAR -->
                    
<!-- BEGIN PAGE TITLE-->
                    
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="note note-info">
                     
           
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet box green" id="obj_report" >

                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>Objectives Report
                                    </div>
                                    
                                </div>
                                <div class="portlet-body">
                                    <div style="display:none" id="err" >
                                        <lable class="err">error</lable>
                                    </div>
                                    <div class="portlet-body form">
                                            <form class="form-horizontal" role="form">
                                                <div class="form-body">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Category:</label>
                                                        <div class="col-md-9">
                                                            <input type="text" class="form-control" id="exp_nm" placeholder="Enter text">
                                                            <!--<span class="help-block"> A block of help text. </span>-->
                                                        </div>
                                                    </div>
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Inline Help</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <input type="text" class="form-control" placeholder="Enter text">-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Input Group</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="input-inline ">-->
                                                <!--                <div class="input-group">-->
                                                                   
                                                <!--                    <input type="email" class="form-control" placeholder="Email Address"> </div>-->
                                                <!--            </div>-->
                                                <!--            <span class="help-inline"> Inline help. </span>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Email Address</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="input-group">-->
                                                <!--                <span class="input-group-addon">-->
                                                <!--                    <i class="fa fa-envelope"></i>-->
                                                <!--                </span>-->
                                                <!--                <input type="email" class="form-control" placeholder="Email Address"> </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Password</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="input-group">-->
                                                <!--                <input type="password" class="form-control" placeholder="Password">-->
                                                <!--                <span class="input-group-addon">-->
                                                <!--                    <i class="fa fa-user"></i>-->
                                                <!--                </span>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Left Icon</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="input-icon">-->
                                                <!--                <i class="fa fa-bell-o"></i>-->
                                                <!--                <input type="text" class="form-control" placeholder="Left icon"> </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Right Icon</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="input-icon right">-->
                                                <!--                <i class="fa fa-microphone"></i>-->
                                                <!--                <input type="text" class="form-control" placeholder="Right icon"> </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Icon Input in Group Input</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="input-group">-->
                                                <!--                <div class="input-icon">-->
                                                <!--                    <i class="fa fa-lock fa-fw"></i>-->
                                                <!--                    <input id="newpassword" class="form-control" type="text" name="password" placeholder="password" /> </div>-->
                                                <!--                <span class="input-group-btn">-->
                                                <!--                    <button id="genpassword" class="btn btn-success" type="button">-->
                                                <!--                        <i class="fa fa-arrow-left fa-fw" /></i> Random</button>-->
                                                <!--                </span>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Input With Spinner</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <input type="password" class="form-control spinner" placeholder="Password"> </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Static Control</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <p class="form-control-static"> email@example.com </p>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Disabled</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <input type="password" class="form-control" placeholder="Disabled" disabled> </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Readonly</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <input type="password" class="form-control" placeholder="Readonly" readonly> </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Dropdown</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <select class="form-control">-->
                                                <!--                <option>Option 1</option>-->
                                                <!--                <option>Option 2</option>-->
                                                <!--                <option>Option 3</option>-->
                                                <!--                <option>Option 4</option>-->
                                                <!--                <option>Option 5</option>-->
                                                <!--            </select>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Multiple Select</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <select multiple class="form-control">-->
                                                <!--                <option>Option 1</option>-->
                                                <!--                <option>Option 2</option>-->
                                                <!--                <option>Option 3</option>-->
                                                <!--                <option>Option 4</option>-->
                                                <!--                <option>Option 5</option>-->
                                                <!--            </select>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Textarea</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <textarea class="form-control" rows="3"></textarea>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label for="exampleInputFile" class="col-md-3 control-label">File input</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <input type="file" id="exampleInputFile">-->
                                                <!--            <p class="help-block"> some help text here. </p>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Checkboxes</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="mt-checkbox-list">-->
                                                <!--                <label class="mt-checkbox">-->
                                                <!--                    <input type="checkbox"> Checkbox 1-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-checkbox">-->
                                                <!--                    <input type="checkbox"> Checkbox 1-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-checkbox">-->
                                                <!--                    <input type="checkbox" disabled> Disabled-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Outline Checkboxes</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="mt-checkbox-list">-->
                                                <!--                <label class="mt-checkbox mt-checkbox-outline">-->
                                                <!--                    <input type="checkbox"> Checkbox 1-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-checkbox mt-checkbox-outline">-->
                                                <!--                    <input type="checkbox"> Checkbox 1-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-checkbox mt-checkbox-outline">-->
                                                <!--                    <input type="checkbox" disabled> Disabled-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Inline Checkboxes</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="mt-checkbox-inline">-->
                                                <!--                <label class="mt-checkbox">-->
                                                <!--                    <input type="checkbox" id="inlineCheckbox21" value="option1"> Checkbox 1-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-checkbox">-->
                                                <!--                    <input type="checkbox" id="inlineCheckbox22" value="option2"> Checkbox 2-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-checkbox">-->
                                                <!--                    <input type="checkbox" id="inlineCheckbox23" value="option3" disabled> Disabled-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Radios</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="mt-radio-list">-->
                                                <!--                <label class="mt-radio">-->
                                                <!--                    <input type="radio" name="optionsRadios" id="optionsRadios22" value="option1" checked> Option 1-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-radio">-->
                                                <!--                    <input type="radio" name="optionsRadios" id="optionsRadios23" value="option2" checked> Option 2-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-radio">-->
                                                <!--                    <input type="radio" name="optionsRadios" id="optionsRadios24" value="option2" disabled> Disabled-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Outline Radios</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="mt-radio-list">-->
                                                <!--                <label class="mt-radio mt-radio-line">-->
                                                <!--                    <input type="radio" name="optionsRadios" id="optionsRadios22" value="option1" checked> Option 1-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-radio mt-radio-line">-->
                                                <!--                    <input type="radio" name="optionsRadios" id="optionsRadios23" value="option2" checked> Option 2-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-radio mt-radio-line">-->
                                                <!--                    <input type="radio" name="optionsRadios" id="optionsRadios24" value="option2" disabled> Disabled-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--    <div class="form-group">-->
                                                <!--        <label class="col-md-3 control-label">Inline Radio</label>-->
                                                <!--        <div class="col-md-9">-->
                                                <!--            <div class="mt-radio-inline">-->
                                                <!--                <label class="mt-radio">-->
                                                <!--                    <input type="radio" name="optionsRadios" id="optionsRadios25" value="option1" checked> Option 1-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-radio">-->
                                                <!--                    <input type="radio" name="optionsRadios" id="optionsRadios26" value="option2" checked> Option 2-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--                <label class="mt-radio">-->
                                                <!--                    <input type="radio" name="optionsRadios" id="optionsRadios27" value="option3" disabled> Disabled-->
                                                <!--                    <span></span>-->
                                                <!--                </label>-->
                                                <!--            </div>-->
                                                <!--        </div>-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <div class="form-actions">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                            <!--<button type="submit" class="btn green save_exp " id="save_exp" >Save</button>-->
                                                            <input type="button" value="Save" class="btn green save_exp "id="save_exp" >
                                                            <button type="button" class="btn default">Cancel</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            
                                            
                                            <table class="table table-bordered add">
                                                    <thead style="background-color:#3598dc;color:#fff">
                                                        <tr>
                                                            <th>Sr No </th>
                                                            <th> Expense Category </th>
                                                            <th> Check</th>
                                                            </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php 
                                                        if(isset($Expense_data) && count($Expense_data) > 0 ){
                                                        
                                                        for($i=0;$i<count($Expense_data);$i++){ ?>
                                                        <tr>
                                                            <td><?php echo $i+1; ?></td>
                                                            <td><?php echo $Expense_data[$i]['Expense_nm']; ?></td>
                                                            <td>
                                                                <button type="button" id="del-<?php echo $Expense_data[$i]['exp_id']; ?> " class="btn default btn-xs red-stripe del"  style="min-width:52px;">Delete</button>
                                                                <a class="btn-group-xs"  href="<?php echo base_url(); ?>index.php/Expense_master/view/<?php echo $Expense_data[$i]['exp_id']; ?>"><button type="button" class="btn default btn-xs blue-stripe" style="width:52px;padding-top: 2px;">Edit</button></a>
                                                                
                                                            </td>
                                                       </tr>
                                                        <?php }
                                                        }
                                                        else { ?>
                                                            <tr>
                                                                    <td colspan=3 >No records Found</td>
                                                            </tr>
                                                        <?php }
                                                        ?>
                                                        
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                                    
                                 </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET--> 

                </div>
               
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
    var exp_id1=$(this).attr('id');
    //alert(exp_id1);
    var exp=exp_id1.split("-");
    var exp_id=exp['1'];
    $("#static").modal('toggle');
    
    $('#show_spin1').css('display','block');
    $('#continue_del').click(function(){
        
    
        var data={
            'exp_id':exp_id
        }
        var base_url = window.location.origin;   
        $.ajax({                            
            type : 'post',
            datatype : 'html',
            data : data,
            url : base_url+'/rms/index.php/Expense_master/del_emp',
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
                      location.reload();
                }
                
            }
        
    });
    });
});
$('#save_exp').click(function(){
    var exp_nm=$('#exp_nm').val();
    //alert(exp_nm);
    var data={
            'exp_nm':exp_nm
    }
    if(exp_nm==''){
        $('#err').css('display','block');
        $('#err').css('background-color','red');
        $("#err").fadeOut(6000);
        $("#err").text("Please enter Expense Category.");
        $('#exp_nm').css('border','1px solid red');
        $('#exp_nm').focusin();
    }
    else{
        $('#exp_nm').css('border','');
    var base_url = window.location.origin;   
        $.ajax({                            
            type : 'post',
            datatype : 'html',
            data : data,
            url : base_url+'/rms/index.php/Expense_master/add_exp',
            success : function(data)
            {
                //alert(data);
                data=data.trim();      
               
              
            }
        
    });
    }
});
</script>
