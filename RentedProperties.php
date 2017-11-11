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
        <link href="css/plugins/sweetalert/sweetalert.css" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
        <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
        <link href="css/animate.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/plugins/dropzone/basic.css" rel="stylesheet">
        <link href="css/plugins/dropzone/dropzone.css" rel="stylesheet">
        <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
        <link href="css/plugins/codemirror/codemirror.css" rel="stylesheet">
        <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

        <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    </head>
    <body >
        <div id="wrapper">

            <!-- Side bar menu -->
            <?php
            $pageNum = 30;
            include 'templates/sideBar.php'
            ?>


            <div id="page-wrapper" class="gray-bg dashbard-1">
                <?php
                $trackerPageName = "Rented Properties";
                include 'templates/navigationTrack.php'
                ?>


                <div class="ibox">
                    <div class="ibox-content">
                        <table id="renterTable" class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    
                                    <!-- 
                                    
                                    property_reference,
    concat(renter_first_name,' ',renter_last_name),
    property_rent_start_date,
    property_rent_end_date,
    property_rent_yearly_cost,
    property_rent_contract_type,
    property_rent_month_rate,
    property_rent_deposit,
    property_rent_water,
    property_rent_electricity,
    concat(property_rent_current_payments,'/',property_rent_total_payment),
    property_rent_contract_number,
    property_rent_contract_copy
                                    -->
                                    <th>Property Reference</th>
                                    <th>Renter Name</th>
                                    <th>Rent Start Date</th>
                                    <th>Rent End Date</th>
                                    <th>Rent Yearly Cost</th>
                                    <th>Rent Contract Type</th>
                                    <th>Rent Monthly Rate</th>
                                    <th>Rent Deposit</th>
                                    <th>Water Meter</th>
                                    <th>Electricity Meter</th>
                                    <th>Current Payments</th>
                                    <th>Contract Number</th>
                                    <th>Contract Copy</th>
                                    
                                </tr>
                            </thead>
                        </table>

                    </div>
                </div>


            </div>

        </div>
        <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Update Renter</h4>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="api/updateRenter.php" class="form-horizontal ">


                            <input type="hidden" name="renter_id" id="renter_id">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Renter First Name</label>
                                <div class="col-sm-10"><input required="" id="renter_first_name" name="renter_first_name"  type="text" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Renter Last Name</label>
                                <div class="col-sm-10"><input id="renter_last_name" required=""   name="renter_last_name"  type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Renter Email</label>
                                <div class="col-sm-10"><input id="renter_email" required=""   name="renter_email"  type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Renter Number</label>
                                <div class="col-sm-10"><input id="renter_number" required=""   name="renter_number"  type="text" class="form-control"></div>

                            </div>
                            
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Renter National Id</label>
                                <div class="col-sm-10"><input id="renter_national_id" required=""   name="renter_national_id"  type="text" class="form-control"></div>

                            </div>
                            
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Renter Username</label>
                                <div class="col-sm-10"><input id="renter_username" required=""   name="renter_username"  type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Renter Password</label>
                                <div class="col-sm-10"><input id="renter_password" required=""   name="renter_password"  type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Update Renter</button>
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
        <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

        <!-- Custom and plugin javascript -->
        <script src="js/inspinia.js"></script>
        <script src="js/plugins/pace/pace.min.js"></script>

        <!-- Jasny -->
        <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

        <!-- DROPZONE -->
        <script src="js/plugins/dropzone/dropzone.js"></script>

        <script src="js/plugins/dataTables/datatables.min.js"></script>

        <!-- CodeMirror -->
        <script src="js/plugins/codemirror/codemirror.js"></script>
        <script src="js/plugins/codemirror/mode/xml/xml.js"></script>

        <script>

            $(document).ready(function () {
                $('#renterTable').DataTable({
                    searching: false,

                    "ajax": "api/getRentedProperties.php",
                    "columnDefs": [{
                            "targets": 7,
                            "width": "10%",

                            "render": function (data, type, row) {
                                return '<button type="button" onclick="getRenter(\'' + row[0] + '\');" class="btn btn-white btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i></button>'
                                        + '<button type="button" onclick="deleteArea(\'' + row[0] + '\');" class="btn btn-white btn-xs"><i class="fa fa-times"></i></button>'
                                        ;
                            }
                        }],
                    responsive: true


                });
            });


            function deleteArea(id) {

                swal({
                    title: "Are you sure?",
                    text: "You will not be able to recover this entry!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Yes, delete it!",
                    closeOnConfirm: false
                }, function () {
                    $.ajax({
                        type: "GET",
                        url: "api/delete.php", // replace 'PHP-FILE.php with your php file


                        data: {"id": id, "table": "Renter", "col": "renter_id"},
                        success: function () {

                            location.reload();
                        },
                        error: function () {
                            alert('Some error occurred!');
                        }
                    });

                });
            }
            function getRenter(id) {
                $('#renter_first_name').val("");
                $('#renter_last_name').val("");
                $('#renter_email').val("");
                $('#renter_number').val("");
                $('#renter_username').val("");
                $('#renter_password').val("");
                $('#renter_id').val("");
                $("#renter_national_id").val("");

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "api/getEntry.php", // replace 'PHP-FILE.php with your php file
                    data: {"id": id, "pk": "renter_id", "table": "Renter"},

                    success: function (data) {
                        // window.alert(data[0]["ar_amenity_name"]);

                        $('#renter_first_name').val(data[0]["renter_first_name"]);
                        $('#renter_last_name').val(data[0]["renter_last_name"]);
                        $('#renter_email').val(data[0]["renter_email"]);
                        $('#renter_number').val(data[0]["renter_number"]);
                        $('#renter_username').val(data[0]["renter_username"]);
                        $('#renter_password').val(data[0]["renter_password"]);
                        $('#renter_id').val(data[0]["renter_id"]);
                        $('#renter_national_id').val(data[0]["renter_national_id"]);



                    },
                    error: function () {
                        alert('Some error occurred!');
                    }
                });
            }

        </script>


    </body>
</html>
