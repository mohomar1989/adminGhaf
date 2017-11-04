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
            $pageNum = 21;
            include 'templates/sideBar.php'
            ?>


            <div id="page-wrapper" class="gray-bg dashbard-1">
                <?php
                $trackerPageName = "Aboutus/Contactus";
                include 'templates/navigationTrack.php'
                ?>

                <div class='ibox'>
                    <div class="ibox-content">
                        <form method="post" action="api/updateaboutcontact.php" class="form-horizontal ">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Aboutus line1</label>
                                <div class="col-sm-10"><textarea required="" id="aboutus1" name="aboutus1"  class="form-control"></textarea></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Aboutus line2</label>
                                <div class="col-sm-10"><textarea required="" id="aboutus2" name="aboutus2"  class="form-control"></textarea></div>

                            </div>

                            <div class="hr-line-dashed"></div>



                            <div class="form-group">
                                <label class="col-sm-2 control-label">Aboutus line1 AR</label>
                                <div class="col-sm-10"><textarea required="" id="aboutusar1" name="aboutusar1"  class="form-control"></textarea></div>

                            </div>

                            <div class="hr-line-dashed"></div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Aboutus line2 AR</label>
                                <div class="col-sm-10"><textarea required="" id="aboutusar2" name="aboutusar2"  class="form-control"></textarea></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Vision line1</label>
                                <div class="col-sm-10"><textarea required="" id="vision1" name="vision1"  class="form-control"></textarea></div>

                            </div>

                            <div class="hr-line-dashed"></div>



                            <div class="form-group">
                                <label class="col-sm-2 control-label">Vision line 2</label>
                                <div class="col-sm-10"><textarea required="" id="vision2" name="vision2"  class="form-control"></textarea></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Vision line 1 AR</label>
                                <div class="col-sm-10"><textarea required="" id="visionar1" name="visionar1"  class="form-control"></textarea></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Vision line2 AR</label>
                                <div class="col-sm-10"><textarea required="" id="visionar2" name="visionar2"  class="form-control"></textarea></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">WhatsApp</label>
                                <div class="col-sm-10"><input required="" id="whatsapp" name="whatsapp"  class="form-control"></div>

                            </div>



                            <div class="hr-line-dashed"></div>



                            <div class="form-group">
                                <label class="col-sm-2 control-label">Freeline</label>
                                <div class="col-sm-10"><input required="" id="freeline" name="freeline"  class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10"><input required="" id="email" name="email"  class="form-control"></div>

                            </div>


                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Office</label>
                                <div class="col-sm-10"><input required="" id="office" name="office"  class="form-control"></div>

                            </div>


                            <div class="hr-line-dashed"></div>



                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Update</button>
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

        <script src="js/plugins/dataTables/datatables.min.js"></script>
        <!-- Sweet alert -->
        <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

        <!-- CodeMirror -->
        <script src="js/plugins/codemirror/codemirror.js"></script>
        <script src="js/plugins/codemirror/mode/xml/xml.js"></script>

        <script>

            $(document).ready(function () {

                getData();
                getDataAR();
            });

//getaboutcontact_1

 function getDataAR() {
              
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "api/getaboutcontact_1.php", // replace 'PHP-FILE.php with your php file


                    success: function (data) {
                        // window.alert(data[0]["ar_amenity_name"]);

                        $('#aboutusar1').val(data["aboutus1"]);
                        $('#aboutusar2').val(data["aboutus2"]);
                        $('#visionar1').val(data["vision1"]);
                        $('#visionar2').val(data["vision2"]);
                     
                       

                    },
                    error: function () {
                        alert('Some error occurred!');
                    }
                });
            }

            function getData() {
              
                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "api/getaboutcontact.php", // replace 'PHP-FILE.php with your php file


                    success: function (data) {
                        // window.alert(data[0]["ar_amenity_name"]);

                        $('#aboutus1').val(data["aboutus1"]);
                        $('#aboutus2').val(data["aboutus2"]);
                        $('#vision1').val(data["vision1"]);
                        $('#vision2').val(data["vision2"]);
                        $('#email').val(data["email"]);
                        $('#whatsapp').val(data["whatsapp"]);
                        $('#freeline').val(data["freeline"]);
                        $('#office').val(data["office"]);
                       

                    },
                    error: function () {
                        alert('Some error occurred!');
                    }
                });
            }

        </script>


    </body>
</html>
