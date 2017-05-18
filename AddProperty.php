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


            <?php $pageNum = 0;
            include 'templates/sideBar.php';
            ?>

            <div id="page-wrapper" class="gray-bg dashbard-1">



                <?php
                $trackerPageName = 'Add new property';
                include 'templates/navigationTrack.php';
                ?>
                <!-- Form -->
                <div class='ibox' id="ibox1">

                    <div class="ibox-content" >
                        <div class="sk-spinner sk-spinner-double-bounce">
                            <div class="sk-double-bounce1"></div>
                            <div class="sk-double-bounce2"></div>
                        </div>
                        <form method="post" enctype="multipart/form-data" class="form-horizontal ">
                            <div class="form-group">

                                <label class="col-sm-2 control-label">Contract Type</label>
                                <div class="col-sm-10"><select  class="form-control m-b" name="contractType">
                                        <option value="rent">Rent</option>
                                        <option value="buy">Buy</option>

                                    </select>
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Type</label>
                                <div class="col-sm-10"><select class="form-control m-b" name="propertyType">
                                        <option value="Flat">Flat</option>
                                        <option value="Shop">Shop</option>
                                        <option value="Land">Land</option>
                                        <option value="Villa">Villa</option>
                                        <option value="Factory">Factory</option>
                                        <option value="Warehouse">Warehouse</option>


                                    </select>
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Reference#</label>
                                <div class="col-sm-10"><input required="" name="propertyReference" placeholder="e.g., VB221" type="text" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Price</label>
                                <div class="col-sm-10"><input required="" name="propertyPrice" placeholder="e.g., 18000" type="number" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Location</label>
                                <div  class="col-sm-2">
                                    <label class="col-sm-offset-4">Country</label>
                                    <select   class="form-control m-b" name="propertyCountry">
                                        <option value="Oman">Oman</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="UAE">UAE</option>

                                    </select>
                                </div>
                                <div  class="col-sm-2">
                                    <label class="col-sm-offset-4">City</label>
                                    <select  class="form-control m-b" name="propertyCity">
                                        <option value="Muscat">Muscat</option>

                                    </select>
                                </div>
                                <div  class="col-sm-2">
                                    <label class="col-sm-offset-4">Area</label>
                                    <select  class="form-control m-b" name="propertyAreaLocation">

                                        <option value="Area1">Area1</option>

                                    </select>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Number of bedrooms</label>
                                <div class="col-sm-10 "><input name="propertyBeds"  required="" placeholder="e.g., 4" type="number" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Number of baths</label>
                                <div class="col-sm-10"><input name="propertyBaths" required="" placeholder="e.g., 3" type="number" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Area</label>
                                <div class="col-sm-10"><input name="propertyArea" required="" placeholder="e.g., 529" type="number" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Description</label>
                                <div class="col-sm-10"><textarea name="propertyDescription" required="" style="resize: none"  rows="4" placeholder="e.g., Breif description about the property" class="form-control"></textarea></div>
                            </div>

                            <div class="hr-line-dashed"></div>




                            <div class="form-group">
                                <label class="col-sm-2 control-label">Amenities</label>


                                <div class="col-sm-10">
                                    <label> <input name="propertyAmenities[]" type="checkbox" value="Central A\C"> Central A\C </label>
                                    <label> <input name="propertyAmenities[]" type="checkbox" value="Shared Pool"> Shared Pool </label>
                                    <label> <input name="propertyAmenities[]" type="checkbox" value="Security"> Security </label>
                                    <label> <input name="propertyAmenities[]" type="checkbox" value="Balcony"> Balcony </label>

                                </div>
                                <div class="col-sm-10">
                                    <label> <input type="checkbox" name="propertyAmenities[]" value="Covered Parking"> Covered Parking </label>
                                    <label> <input type="checkbox" name="propertyAmenities[]" value="Shared Gym"> Shared Gym </label>
                                    <label> <input type="checkbox" name="propertyAmenities[]" value="Kitchen Appliances"> Kitchen Appliances </label>
                                    <label> <input type="checkbox" name="propertyAmenities[]" value="Pool View"> Pool View </label>

                                </div>


                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Location latitude</label>
                                <div class="col-sm-10"><input required="" name="propertyLatitude" placeholder="e.g., 21.421342" type="number" class="form-control"></div>

                                <br>
                                <br>
                                <br>



                                <label class="col-sm-2 control-label">Location longitude</label>
                                <div class="col-sm-10"><input required="" name="propertyLongitude" placeholder="e.g., 19.42321" type="number" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>
                            <div  class="form-group">
                                <label class="col-sm-2 control-label">Property Provider</label>
                                <div class="col-sm-10"><select id="mySelect" class="form-control m-b" name="propertyProvider">
                                        <option value="1">Al Ghaf</option>
                                        <option value="2">Provider 1</option>
                                    </select>
                                </div>

                            </div>


                            <div class="hr-line-dashed"></div>
                            <div id="addOwner"  class="form-group">
                                <label class="col-sm-2 control-label">Property Owner</label>
                                <div class="col-sm-10"><select id="mySelect" class="form-control m-b" name="propertyOwner">
                                        <option value="1">Al Ghaf</option>

                                        <option value="2">Owner 2</option>


                                    </select>
                                </div>

                            </div>


                            <div class="hr-line-dashed"></div>
                          
                            <div class="form-group">
                                
                                <label class="col-sm-2 control-label">Property Pictures</label>
                                <div class="col-sm-10">
                                    <input name="files[]" type="file" multiple="multiple">
                                </div>
                            </div>
                                

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button name="addProp" class="btn btn-primary" type="submit">Add property</button>
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

        <script>

            Dropzone.autoDiscover = false;
            jQuery(document).ready(function () {

                $("div#my-awesome-dropzone").dropzone({
                    url: "./img/test",
                    dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br>Upload maximum of 10 pictures of property with preferable size of 189*189 pixels and not more than 1MB.",
                    paramName: 'myFiles'

                });

            });

            $(document).ready(function () {
                toggleFields(); // call this first so we start out with the correct visibility depending on the selected form values
                // this will call our toggleFields function every time the selection value of our other field changes
                $("#mySelect").change(function () {
                    toggleFields();
                });

            });
// this toggles the visibility of other server
            function toggleFields() {
                if ($("#mySelect").val() === "1")
                    $("#addOwner").show();
                else
                    $("#addOwner").hide();
            }
            $('form').submit(function(){
               
                var formData = new FormData($(this)[0]);
                 
                $('#ibox1').children('.ibox-content').toggleClass('sk-loading');
                $.ajax({

                    type: "POST",
                    cache: false,
                    url: $(this).attr('action'),
                    data: formData,
                    success: function (data) {
                        
                        $('#ibox1').children('.ibox-content').toggleClass('sk-loading');
                        
                    }

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
