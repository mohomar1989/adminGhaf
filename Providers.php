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
            $pageNum = 14;
            include 'templates/sideBar.php'
            ?>


            <div id="page-wrapper" class="gray-bg dashbard-1">
                <?php
                $trackerPageName = "Providers";
                include 'templates/navigationTrack.php'
                ?>


                <div class="ibox">
                    <div class="ibox-content">
                        <table id="providerTable" class="table table-striped table-bordered table-hover" >
                            <thead>
                                <tr>
                                    <th>Provider ID</th>
                                    <th>Provider Name</th>
                                    <th>Provider Email</th>
                                    <th>Provide Number</th>
                                    <th>Provider Logo</th>

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
                        <h4 class="modal-title">Update Renter</h4>
                    </div>
                    <div class="modal-body">

                        <form method="post" enctype="multipart/form-data" action="api/updateProvider.php" class="form-horizontal ">


                            <input type="hidden" name="provider_id" id="provider_id">
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Provider Name</label>
                                <div class="col-sm-10"><input required="" id="provider_name" name="provider_name"  type="text" class="form-control"></div>

                            </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Provider Email</label>
                                <div class="col-sm-10"><input required="" id="provider_email" name="provider_email"  type="text" class="form-control"></div>

                            </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Provider Number</label>
                                <div class="col-sm-10"><input required="" id="provider_number" name="provider_number"  type="text" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Provider Logo</label>
                                <div class="col-sm-10"><img src="" width="100" style="max-height: 100px;max-width: 100px" id="provider_logo_image"></div>
                                <div class="col-sm-10"><input id="provider_logo" type="file" required=""   name="provider_logo" onchange="document.getElementById('provider_logo_image').src = window.URL.createObjectURL(this.files[0])" class="form-control"></div>

                            </div>
                            <div class="hr-line-dashed"></div>



                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Update Provider</button>
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
                                        $('#providerTable').DataTable({
                                            searching: false,
                                            "ajax": "api/getProviders.php",
                                            "columnDefs": [{
                                                    "targets": 5,
                                                    "width": "10%",

                                                    "render": function (data, type, row) {
                                                        return '<button type="button" onclick="getProvider(\'' + row[0] + '\');" class="btn btn-white btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i></button>'
                                                                + '<button type="button" onclick="deleteArea(\'' + row[0] + '\');" class="btn btn-white btn-xs"><i class="fa fa-times"></i></button>'
                                                                ;
                                                    }
                                                },
                                                {
                                                    "targets": 4,
                                                    "render": function (data, type, row) {

                                                        return '<img src="' + row[4] + '" style="max-height:100px;max-width:100px"/>';

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


                                                data: {"id": id, "table": "Provider", "col": "provider_id"},
                                                success: function () {

                                                    location.reload();
                                                },
                                                error: function () {
                                                    alert('Some error occurred!');
                                                }
                                            });

                                        });
                                    }
                                    function getProvider(id) {

                                        $('#provider_id').val("");
                                        $('#provider_name').val("");
                                        $('#provider_email').val("");
                                        $('#provider_number').val("");
                                        $("#provider_logo_image").attr('src', "");
                                        $('#provider_logo').val("");
                                        $.ajax({
                                            type: "GET",
                                            dataType: "json",
                                            url: "api/getEntry.php", // replace 'PHP-FILE.php with your php file
                                            data: {"id": id, "pk": "provider_id", "table": "Provider"},

                                            success: function (data) {
                                                // window.alert(data[0]["ar_amenity_name"]);

                                                $('#provider_id').val(data[0]["provider_id"]);
                                                $('#provider_name').val(data[0]["provider_name"]);
                                                $('#provider_email').val(data[0]["provider_email"]);
                                                $('#provider_number').val(data[0]["provider_number"]);
                                                $("#provider_logo_image").attr('src', data[0]["provider_logo"]);


                                            },
                                            error: function () {
                                                alert('Some error occurred!');
                                            }
                                        });
                                    }

        </script>


    </body>
</html>
