<?php
session_start();


if (!isset($_SESSION['loggedin']))
    header('Location: login.php');
?>
<!DOCTYPE html>
<html>
    <head>





        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Welcome</title>

        <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/plugins/dropzone/basic.css" rel="stylesheet">
        <link href="css/plugins/dropzone/dropzone.css" rel="stylesheet">
        <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
        <link href="css/plugins/codemirror/codemirror.css" rel="stylesheet">
        <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
        <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    </head>
    <body >
        <div id="wrapper">

            <!-- Side bar menu -->
            <?php
            $pageNum = 20;
            include 'templates/sideBar.php'
            ?>


            <div id="page-wrapper" class="gray-bg dashbard-1">
                <?php
                $trackerPageName = "Rent a property";
                include 'templates/navigationTrack.php'
                ?>


                <div id="ibox1" class='ibox'>
                    <!-- Add property form -->
                    <div class="ibox-content">
                        <div class="sk-spinner sk-spinner-double-bounce">
                            <div class="sk-double-bounce1"></div>
                            <div class="sk-double-bounce2"></div>
                        </div>
                        <form id="myform" method="post" action="api/rentProperty.php" enctype="multipart/form-data"  class="form-horizontal ">

                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Choose a property you want to rent</label>
                                <div class="col-sm-10">
                                    <select id="properties" required="" class="form-control m-b" name="property_reference">

                                    </select>
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>




                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Enter building number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="building_number" required placeholder="213" class="form-control">
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>


                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Choose the renter profile</label>
                                <div class="col-sm-10">
                                    <select id="renters" required="" class="form-control m-b" name="renter_id">

                                    </select>
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">Choose start date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date ">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input name="start_date" required="" type="text" class="form-control m-b" value="03/04/2014">
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group" id="data_1">
                                <label class="col-sm-2 control-label">Choose end date</label>
                                <div class="col-sm-10">
                                    <div class="input-group date ">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input name="end_date" required="" type="text" class="form-control m-b" value="03/04/2014">
                                    </div>
                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>


                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Enter yearly cost</label>
                                <div class="col-sm-10">
                                    <input type="number" name="year_cost" required="" placeholder="50000" class="form-control">
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>




                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Choose Contract type</label>
                                <div class="col-sm-10">
                                    <select id="propertyTypes" required="" class="form-control m-b" name="contract_type">

                                        <option value="year">Yearly</option>
                                    </select>
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>





                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Enter monthly rent</label>
                                <div class="col-sm-10">
                                    <input type="number" name="month_rent" required="" placeholder="50000" class="form-control">
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>




                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Enter security deposit</label>
                                <div class="col-sm-10">
                                    <input type="number"  name="security_deposit"required="" placeholder="50000" class="form-control">
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>




                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Enter water reader number</label>
                                <div class="col-sm-10">
                                    <input type="number" name="water_reader" required="" placeholder="50000" class="form-control">
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>




                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Enter electricity reader number</label>
                                <div class="col-sm-10">
                                    <input type="number" name="elec_reader" required="" placeholder="50000" class="form-control">
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Payments paid</label>
                                <div class="col-sm-10">
                                    <input type="number" name="payments_paid" required="" placeholder="1,2,3...12" class="form-control">
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Contract Number</label>
                                <div class="col-sm-10">
                                    <input type="text" name="contract_number" required="" placeholder="78236" class="form-control">
                                </div>

                            </div>


                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Upload contract copy</label>

                                <div class="col-sm-10 fileinput fileinput-new" data-provides="fileinput">
                                    <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span>
                                        <span class="fileinput-exists">Change</span><input   required="" type="file" name="contract"/></span>
                                    <span class="fileinput-filename"></span>
                                    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                                </div> 
                            </div>


                            <div class="hr-line-dashed"></div>


                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Rent a property</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>





        <!-- Mainly scripts -->
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
        <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>

        <!-- Jasny -->
        <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

        <!-- DROPZONE -->
        <script src="js/plugins/dropzone/dropzone.js"></script>

        <!-- CodeMirror -->
        <script src="js/plugins/codemirror/codemirror.js"></script>
        <script src="js/plugins/codemirror/mode/xml/xml.js"></script>
        <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
        <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
        <script src="js/jquery.form.min.js"></script>
        <script src="js/plugins/sweetalert/sweetalert.min.js"></script>
        <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>
        <script src="js/plugins/validate/jquery.validate.min.js"></script>

        <script>


            $(document).ready(function () {


                $("myform").validate({

                });

                $.ajax({
                    dataType: "json",

                    type: "GET",
                    cache: false,

                    url: "api/getRentProperties.php",

                    success: function (data) {

                        $.each(data, function (key, value) {
                            $('#properties')
                                    .append($("<option></option>")
                                            .attr("value", value.property_id)
                                            .text(value.property_reference));
                        });


                    }

                });
                $.ajax({
                    dataType: "json",

                    type: "GET",
                    cache: false,
                    data: {"asAssoc": 1},
                    url: "api/getRenters.php",

                    success: function (data) {

                        $.each(data, function (key, value) {
                            $('#renters')
                                    .append($("<option></option>")
                                            .attr("value", value.renter_id)
                                            .text(value.renter_first_name + " " + value.renter_last_name));

                        });




                    }

                });








                $('#data_1 .input-group.date').datepicker({
                    todayBtn: "linked",
                    keyboardNavigation: false,
                    forceParse: false,

                    autoclose: true
                });

            });



            $('form').on('submit', function (e) {
                $('#ibox1').children('.ibox-content').toggleClass('sk-loading');

                e.preventDefault(); // prevent native submit
                $(this).ajaxSubmit({

                    success: function () {
                        $('#ibox1').children('.ibox-content').toggleClass('sk-loading');
                        swal({
                            title: "Saved!",
                            text: "New provider has been added!",
                            type: "success"
                        });
                        $('#myform').each(function () {
                            this.reset();
                        });
                    }
                }

                );

            });
        </script>

    </body>
</html>
