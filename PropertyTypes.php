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
            $pageNum = 4;
            include 'templates/sideBar.php'
            ?>


            <div id="page-wrapper" class="gray-bg dashbard-1">
                <?php
                $trackerPageName = "Property Types";
                include 'templates/navigationTrack.php'
                ?>

                <div class='ibox'>
                    <div class="ibox-content">
                        <form method="post" action="api/addPropertyType.php" class="form-horizontal ">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">English Property Type</label>
                                <div class="col-sm-10"><input required="" name="propertyTypeEn" placeholder="e.g.,Warehouse" type="text" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Arabic Property Type</label>
                                <div class="col-sm-10"><input required="" pattern="^[\u0621-\u064A0-9 ]+$"  name="propertyTypeAr" placeholder="e.g., مخزن" type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Add property type</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="ibox">
                    <div class="ibox-content">
                        <table id="propertyTypeTable" class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>Property Id</th>
                                    <th>Property EN name</th>
                                    <th>Property AR name</th>
                                    <th>Edit/Delete</th>

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
                        <h4 class="modal-title">Update property type</h4>
                    </div>
                    <div class="modal-body">

                        <form method="post" action="api/updateEntry.php" class="form-horizontal ">

                            <input type="hidden" value="PropertyType" name="table">
                            <input type="hidden" value="propertyType_id" name="idCol">
                            <input type="hidden" value="propertyType_name" name="enCol">
                            <input type="hidden" value="ar_propertyType_name" name="arCol">
                            <input type="hidden" value="PropertyTypes.php" name="redirect">
                            <input type="hidden" value="" id="eId" name="id"> 
                            <div class="form-group">
                                <label class="col-sm-2 control-label">English Property Type</label>
                                <div class="col-sm-10"><input required="" id="enName" name="enName" placeholder="e.g.,Warehouse" type="text" class="form-control"></div>

                            </div>

                            <input type="hidden" id="countryId" name="propertyTypeId">
                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Arabic Property Type</label>
                                <div class="col-sm-10"><input id="arName" required="" pattern="^[\u0621-\u064A0-9 ]+$"  name="arName" placeholder="e.g., مخزن" type="text" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Update Property</button>
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
        <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

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
                $('#propertyTypeTable').DataTable({
                    searching: false,

                    "ajax": "api/getPropertyTypes.php",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    "columnDefs": [{
                            "targets": 3,
                            "width": "10%",

                            "render": function (data, type, row) {
                                return '<button type="button" onclick="getPropertyType(\'' + row[0] + '\');" class="btn btn-white btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i></button>'
                                        + '<button type="button" onclick="deleteArea(\'' + row[0] + '\');" class="btn btn-white btn-xs"><i class="fa fa-times"></i></button>'
                                        ;
                            }
                        }]

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


                        data: {"id": id, "table": "PropertyType", "col": "propertyType_id"},
                        success: function () {

                            location.reload();
                        },
                        error: function () {
                            alert('Some error occurred!');
                        }
                    });

                });
            }
            function getPropertyType(id) {
                $('#arName').val("");
                $('#enName').val("");
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "api/getPropertyType.php", // replace 'PHP-FILE.php with your php file
                    data: {"propertyTypeId": id},

                    success: function (data) {
                        // window.alert(data[0]["ar_amenity_name"]);

                        $('#arName').val(data[0]["ar_propertyType_name"]);
                        $("#enName").val(data[0]["propertyType_name"]);
                        $("#eId").val(data[0]["propertyType_id"]);

                    },
                    error: function () {
                        alert('Some error occurred!');
                    }
                });
            }

        </script>


    </body>
</html>
