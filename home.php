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

        <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    </head>
    <body >
        <div id="wrapper">
            <nav class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav metismenu" id="side-menu">
                        <li class="nav-header">
                            <div class="dropdown profile-element"> <span>
                                    <img alt="image" height="48" width="48" class="img-thumbnail" src="img/logo.jpeg" />
                                </span>
                                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Admin</strong>
                                        </span> <span class="text-muted text-xs block">Account <b class="caret"></b></span> </span> </a>
                                <ul class="dropdown-menu animated fadeInRight m-t-xs">

                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </div>

                        </li>
                     


                       <li >
                            <a href="AddProperty.php"><i class="fa fa-building"></i> <span class="nav-label">Add Property </span></a>
                        </li>

                        <li>
                            <a href="AddOwner.php"><i class="fa fa-user"></i> <span class="nav-label">Add Owner </span></a>
                        </li>
                        <li>
                            <a href="AddRenter.php"><i class="fa fa-user"></i> <span class="nav-label">Add Renter </span></a>
                        </li>
                        <li>
                            <a href="AddProvider.php"><i class="fa fa-user"></i> <span class="nav-label">Add Provider </span></a>
                        </li>
                        <li>
                            <a ><i class="fa fa-user"></i> <span class="nav-label">Available Properties</span></a>
                        </li>
                        <li>
                            <a ><i class="fa fa-user"></i> <span class="nav-label">Rented Properties </span></a>
                        </li>
                        <li>
                            <a ><i class="fa fa-user"></i> <span class="nav-label">Sold Properties </span></a>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">

                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " ><i class="fa fa-bars"></i> </a>

                    </div>

                </nav>
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

        <script>

            Dropzone.autoDiscover = false;
            jQuery(document).ready(function () {

                $("div#my-awesome-dropzone").dropzone({
                    url: "./img/test",
                    dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br>Upload maximum of 10 pictures of property with preferable size of 189*189 pixels and not more than 1MB."

                });

            });

        </script>

        <script>
            /*
             $(document).ready(function() {
             setTimeout(function() {
             toastr.options = {
             closeButton: true,
             progressBar: true,
             showMethod: 'slideDown',
             timeOut: 4000
             };
             toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');
             
             }, 1300);
             
             
             var data1 = [
             [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,30],[11,10],[12,13],[13,4],[14,3],[15,3],[16,6]
             ];
             var data2 = [
             [0,1],[1,0],[2,2],[3,0],[4,1],[5,3],[6,1],[7,5],[8,2],[9,3],[10,2],[11,1],[12,0],[13,2],[14,8],[15,0],[16,0]
             ];
             $("#flot-dashboard-chart").length && $.plot($("#flot-dashboard-chart"), [
             data1, data2
             ],
             {
             series: {
             lines: {
             show: false,
             fill: true
             },
             splines: {
             show: true,
             tension: 0.4,
             lineWidth: 1,
             fill: 0.4
             },
             points: {
             radius: 0,
             show: true
             },
             shadowSize: 2
             },
             grid: {
             hoverable: true,
             clickable: true,
             tickColor: "#d5d5d5",
             borderWidth: 1,
             color: '#d5d5d5'
             },
             colors: ["#1ab394", "#1C84C6"],
             xaxis:{
             },
             yaxis: {
             ticks: 4
             },
             tooltip: false
             }
             );
             
             var doughnutData = {
             labels: ["App","Software","Laptop" ],
             datasets: [{
             data: [300,50,100],
             backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
             }]
             } ;
             
             
             var doughnutOptions = {
             responsive: false,
             legend: {
             display: false
             }
             };
             
             
             var ctx4 = document.getElementById("doughnutChart").getContext("2d");
             new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});
             
             var doughnutData = {
             labels: ["App","Software","Laptop" ],
             datasets: [{
             data: [70,27,85],
             backgroundColor: ["#a3e1d4","#dedede","#9CC3DA"]
             }]
             } ;
             
             
             var doughnutOptions = {
             responsive: false,
             legend: {
             display: false
             }
             };
             
             
             var ctx4 = document.getElementById("doughnutChart2").getContext("2d");
             new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});
             
             });
             */
        </script>
    </body>
</html>
