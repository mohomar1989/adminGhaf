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
            <?php
            $pageNum = 2;
            include 'templates/sideBar.php';
            ?>


            <div id="page-wrapper" class="gray-bg dashbard-1">
                <?php
                $trackerPageName = "Add new renter";
                include 'templates/navigationTrack.php'
                ?>


                <div class="ibox" id="ibox1">
                    <!-- Add property form -->
                    <div class="ibox-content">
                        <div class="sk-spinner sk-spinner-double-bounce">
                            <div class="sk-double-bounce1"></div>
                            <div class="sk-double-bounce2"></div>
                        </div>
                        <form method="post" action="api/addRenter.php" class="form-horizontal">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10"><input required="" name = "renter_first_name" placeholder="e.g., Mohammed" type="text" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10"><input required="" name = "renter_last_name" placeholder="e.g., Omar" type="text" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10"><input required="" name = "renter_email"  placeholder="e.g., exmaple@example.com" type="email" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Mobile #</label>
                                <div class="col-sm-10"><input required="" name = "renter_number" placeholder="e.g., 00971727261521" type="tel" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10"><input required="" name = "renter_username" placeholder="e.g., user1" type="text" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10"><input required="" name = "renter_password" placeholder="e.g., Password" type="password" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>







                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit">Add renter</button>
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
        <script src="js/jquery.form.min.js"></script>
        <script src="js/plugins/sweetalert/sweetalert.min.js"></script>

        <script>

            $('form').on('submit', function (e) {
                $('#ibox1').children('.ibox-content').toggleClass('sk-loading');

                e.preventDefault(); // prevent native submit
                $(this).ajaxSubmit({
                    clearForm: true,
                    error: function(data){
                          $('#ibox1').children('.ibox-content').toggleClass('sk-loading');
                        swal({
                            title: "NotSaved!",
                            text: "Username already exists.",
                            type: "warning"
                        });
                        
                    },
                    success: function () {
                        $('#ibox1').children('.ibox-content').toggleClass('sk-loading');
                        swal({
                            title: "Saved!",
                            text: "New renter has been added!",
                            type: "success"
                        });
                    }
                    
                }

                );

            });
        </script>
    </body>
</html>
