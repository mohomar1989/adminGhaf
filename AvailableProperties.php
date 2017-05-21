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
        <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
        <link href="css/plugins/codemirror/codemirror.css" rel="stylesheet">
        <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

        <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    </head>
    <body >
        <div id="wrapper">

            <!-- Side bar menu -->
            <?php
            $pageNum = 9;
            include 'templates/sideBar.php'
            ?>


            <div id="page-wrapper" class="gray-bg dashbard-1">
                <?php
                $trackerPageName = "Available Properties";
                include 'templates/navigationTrack.php'
                ?>


                <div class="ibox">
                    <div class="ibox-content">
                        <div class="table-responsive">
                        <table style="font-size: 12px;" id="propertyTable" width="100%" class="table table-striped table-bordered table-hover" >
                            <thead >
                                <tr>
                                    <th></th>
                                    <th>Reference</th>
                                    <th>Contract Type</th>
                                    <th>Property Type</th>
                                    <th>Description</th>
                                    <th>Arabic Description</th>
                                    <th>Price</th>
                                    <th>Area</th>
                                    <th>Beds</th>
                                    <th>Baths</th>
                                    <th>Country</th>
                                    <th>City</th>
                                    <th>Area Location</th>
                                    <th>GeoLocation</th>
                                    <th>Owner</th>
                                    <th>Provider</th>
                                    <th>360 view link</th>
                                    <th>Edit/Delete</th>
                                </tr>
                            </thead>
                        </table>
                        </div>

                    </div>
                </div>


            </div>

        </div>
        <div class="modal inmodal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Update Owner</h4>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="api/updateOwner.php" class="form-horizontal ">


                            <input type="hidden" name="owner_id" id="owner_id">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Owner First Name</label>
                                <div class="col-sm-10"><input required="" id="owner_first_name" name="owner_first_name"  type="text" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Owner Last Name</label>
                                <div class="col-sm-10"><input id="owner_last_name" required=""   name="owner_last_name"  type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Owner Email</label>
                                <div class="col-sm-10"><input id="owner_email" required=""   name="owner_email"  type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Owner Number</label>
                                <div class="col-sm-10"><input id="owner_number" required=""   name="owner_number"  type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Owner Username</label>
                                <div class="col-sm-10"><input id="owner_username" required=""   name="owner_username"  type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Owner Password</label>
                                <div class="col-sm-10"><input id="owner_password" required=""   name="owner_password"  type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Update Owner</button>
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
                var table=$('#propertyTable').DataTable({
                    searching: false,
                    "ajax": "api/getProperties.php",
                    "columnDefs": [{
                            "targets": 17,
                            "width": "10%",

                            "render": function (data, type, row) {
                                return '<button type="button" onclick="getOwner(\'' + row[0] + '\');" class="btn btn-white btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i></button>'
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


                        data: {"id": id, "table": "Property", "col": "property_id"},
                        success: function () {

                            location.reload();
                        },
                        error: function () {
                            alert('Some error occurred!');
                        }
                    });

                });
            }
            function getOwner(id) {
                $('#owner_first_name').val("");
                $('#owner_last_name').val("");
                $('#owner_email').val("");
                $('#owner_number').val("");
                $('#owner_username').val("");
                $('#owner_password').val("");
                $('#owner_id').val("");

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "api/getEntry.php", // replace 'PHP-FILE.php with your php file
                    data: {"id": id, "pk": "owner_id", "table": "Owner"},

                    success: function (data) {
                        // window.alert(data[0]["ar_amenity_name"]);

                        $('#owner_first_name').val(data[0]["owner_first_name"]);
                        $('#owner_last_name').val(data[0]["owner_last_name"]);
                        $('#owner_email').val(data[0]["owner_email"]);
                        $('#owner_number').val(data[0]["owner_number"]);
                        $('#owner_username').val(data[0]["owner_username"]);
                        $('#owner_password').val(data[0]["owner_password"]);
                        $('#owner_id').val(data[0]["owner_id"]);



                    },
                    error: function () {
                        alert('Some error occurred!');
                    }
                });
            }

        </script>


    </body>
</html>
