        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/datatables/datatables.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url(); ?>themes/metronic/theme_rtl/assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
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
        .button-pdf 
        {
            color: black;
            border: 1px solid black;
        }
        #mob_table .table tbody td input{
                border:none;
        }
        .info:hover{
            color:red;
        }





        </style>
                <ul class="page-breadcrumb">
                        <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                        </li>
                        <li>
                                <a href="#">Eligibility</a>
                                <i class="fa fa-circle"></i>
                        </li>    
                </ul>  
        </div>      
                          
<!-- BEGIN PAGE TITLE-->
                    
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="note note-info">   
                        <div class="portlet box green" id="obj_report" >
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-globe"></i>Eligibility
                                    </div>
                                    <div class="tools"> </div>
                                </div>
                                <div class="portlet-body">

                                <div class="form-group" style="padding-bottom:40px;">
                                        <label class="col-md-3 control-label " >Select Expense</label>
                                        <div class="col-md-9" style=" padding-left: 7px;">
                                            
                                                <select id="exp_type">
                                                    <option value="select">Select</option>
                                                     <option value="mobile">Mobile</option>                                                     
                                                </select>
                                        </div> 
                                </div>
                                <div class="form-group" style="padding-bottom:40px;">
                                        <label class="col-md-3 control-label " >Category</label>
                                        <div class="col-md-9" style=" padding-left: 7px;">
                                                <select id="catg">
                                                        
                                                        <option value="select">select</option>
                                                        <option value="Department">Department</option>
                                                        <option value="Designation">Designation</option>
                                                        <option value="Emp_fname">Employee</option>
                                                        <option value="Cadre">Grade</option>
                                                        
                                                </select>
                                        </div> 
                                        <button type="button" class="btn submit_btn" >GO</button>
                                </div>
                                <div id="mob_table" style="display: none";>
                                        <div class="table-responsive">
                                                <table class="table table-bordered" id="eligi">
                                                        <thead style="background-color:#3598dc;color:#fff">
                                                       
                                                        
                                                        <tr>
                                                                <th>GRADE</th>
                                                                <th>TOTAL ELIGIBILITY</th>
                                                                <?php
                                                                    //print_r($expense_heads);
                                                                if(isset($expense_heads) && count($expense_heads!==0)){
                                                                    print_r($expense_heads);
                                                                    for($i=0; $i<count($expense_heads); $i++){
                                                                ?>
                                                                        
                                                                        <th><?php echo $expense_heads[$i]['Expense']?></th>
                                                                        
                                                                <?php

                                                                        } }
                                                                ?>
                                                        </tr> 
                                                        </thead>
                                                        <tbody>
                                                                <?php
                                                                  //print_r($expense_heads);
                                                                if(isset($data_catg_wise) && count($data_catg_wise!==0)){
                                                                    //print_r($data_catg_wise);
                                                                   
                                                                    for($j=0; $j<count($data_catg_wise); $j++){
                                                                ?>
                                                                <tr>
                                                                    
                                                                    <td><?php echo $data_catg_wise[$j][$col]?></td>
                                                                    <td>10000</td>
                                                                    <td><input type="text" value="200"></td>
                                                                    <td><input type="text" value="100"></td>
                                                                    <td><input type="text" value="300"></td>
                                                                    <td><input type="text" value="200"></td>
                                                                    <td><input type="text" value="200"></td>
                                                                    <td><a class="btn-group-xs"  href="#"><button type="button" class="btn default blue-stripe" style="width:52px;padding-top: 2px;">OK</button></a></td>
                                                                    <td><i class="fa fa-question-circle info" style="align:center">
                                                                    <div class="popupMenu">press here</div></i></td>
                                                                </tr>
                                                                <?php

                                                                        } }
                                                                ?>
                                                               
                                                            </tbody>
                                                </table>
                                        </div>
                                </div>
                                </div>
                          </div>
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

        $(".submit_btn").click(function(){
            //alert(22);

           var exp = $('#exp_type :selected').val();
           //alert(exp);

           var cat= $('#catg :selected').val();
           //alert(cat);
            
             if(exp == 'select')
            {
                alert("please select expense type1111");
            }
            else if(cat == 'select')
            {
                alert("please select expense type2222");
            }
            else{
                
                alert("yes");
                var base_url = window.location.origin;
                var data = {
                            'exp':exp,
                            'cat': cat,

                            } 
                $("#mob_table").show();
             
             $.ajax({
                                                
                            type : 'post',
                            data :data,
                            url : base_url+'/rms/index.php/Eligibility/exp_type',
                            success : function(data)
                            {
                               //alert(data);
                                     
                            }
                    });
            }

        });
       
    });
</script>
<script>
$(function(){

    $(".popupMenu").hide();

    $(".info").mouseenter(function(){
        $(this).children(".popupMenu").fadeIn(500);

    })
    $(".info").mouseleave(function(){
        $(this).children(".popupMenu").fadeOut(500);

    })
                   
});
</script>