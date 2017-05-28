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
                                        <th>Id</th>
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
            <div class="modal-dialog modal-lg">
                <div class="modal-content animated bounceInRight">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Update Property</h4>
                    </div>
                    <div class="modal-body">

                        <form id="myform" method="post" action="api/addProperty.php" enctype="multipart/form-data" class="form-horizontal ">
                            <div class="form-group">

                                <label class="col-sm-2 control-label">Contract Type</label>
                                <div class="col-sm-10"><select id="property_contract"  class="form-control m-b" name="contractType">
                                        <option value="rent">Rent</option>
                                        <option value="buy">Buy</option>

                                    </select>
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label  class="col-sm-2 control-label">Property Type</label>
                                <div class="col-sm-10"><select id="propertyType_name" class="form-control m-b" name="propertyType">

                                    </select>
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Reference#</label>
                                <div class="col-sm-10"><input required="" id="property_reference"name="propertyReference" placeholder="e.g., VB221" type="text" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Price</label>
                                <div class="col-sm-10"><input required="" id="property_price" name="propertyPrice" placeholder="e.g., 18000, the price is per year for rental" type="number" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Location</label>
                                <div  class="col-sm-2">
                                    <label class="col-sm-offset-4">Country</label>
                                    <select  id="country_name" class="form-control m-b" name="propertyCountry">

                                    </select>
                                </div>
                                <div  class="col-sm-2">
                                    <label class="col-sm-offset-4">City</label>
                                    <select id="city_name"  class="form-control m-b" name="propertyCity">

                                    </select>
                                </div>
                                <div  class="col-sm-2">
                                    <label class="col-sm-offset-4">Area</label>
                                    <select id="area_name" class="form-control m-b" name="propertyAreaLocation">


                                    </select>
                                </div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Number of bedrooms</label>
                                <div class="col-sm-10 "><input  id="property_beds" name="propertyBeds"  required="" placeholder="e.g., 4" type="number" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Number of baths</label>
                                <div class="col-sm-10"><input id="property_baths"name="propertyBaths" required="" placeholder="e.g., 3" type="number" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Area</label>
                                <div class="col-sm-10"><input id="property_area" name="propertyArea" required="" placeholder="e.g., 529" type="number" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Property Description</label>
                                <div class="col-sm-10"><textarea id="property_description" name="propertyDescription" required="" style="resize: none"  rows="4" placeholder="e.g., Breif description about the property" class="form-control"></textarea></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Arabic Property Description</label>
                                <div class="col-sm-10"><textarea id="ar_property_description" name="ar_propertyDescription" required="" style="resize: none"  rows="4" placeholder="e.g., نبذه قصيره عن العقار" class="form-control"></textarea></div>
                            </div>

                            <div class="hr-line-dashed"></div>



                            <div class="form-group">
                                <label class="col-sm-2 control-label">Amenities</label>


                                <div id="amenities" class="col-sm-10">


                                </div>



                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Location latitude</label>
                                <div class="col-sm-10"><input id="property_geolocation_lat" required="" step="any" name="propertyLatitude" placeholder="e.g., 21.421342" type="number" class="form-control"></div>

                                <br>
                                <br>
                                <br>



                                <label class="col-sm-2 control-label">Location longitude</label>
                                <div class="col-sm-10"><input id="property_geolocation_long" required="" step="any" name="propertyLongitude" placeholder="e.g., 19.42321" type="number" class="form-control"></div>

                            </div>

                            <div class="hr-line-dashed"></div>
                            <div  class="form-group">
                                <label class="col-sm-2 control-label">Property Provider</label>
                                <div class="col-sm-10"><select id="provider_name" class="form-control m-b" name="propertyProvider">

                                    </select>
                                </div>

                            </div>


                            <div class="hr-line-dashed"></div>
                            <div id="addOwner"  class="form-group">
                                <label class="col-sm-2 control-label">Property Owner</label>
                                <div class="col-sm-10">
                                    <select id="owner_first_name" class="form-control m-b" name="propertyOwner">


                                    </select>
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">360 Link</label>
                                <div class="col-sm-10 "><input name="property360" id="property_360view"  placeholder="e.g., Url of the 360 image" type="text" class="form-control"></div>
                            </div>

                            <div class="hr-line-dashed"></div>

                            <div class="form-group">

                                <label class="col-sm-2 control-label">Property Pictures</label>
                                <div class="col-sm-10">
                                    <input name="propertyImages[]" id="property_images" required="required" type="file" multiple="multiple">
                                </div>
                            </div>


                            <div class="hr-line-dashed"></div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-2">
                                    <button name="addProp" class="btn btn-primary" type="submit">Update Property</button>
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
                var table = $('#propertyTable').DataTable({
                    searching: false,
                    "ajax": "api/getProperties.php",
                    "columnDefs": [{
                            "targets": 17,
                            "width": "10%",

                            "render": function (data, type, row) {
                                return '<button type="button" onclick="getProperty(\'' + row[0] + '\');" class="btn btn-white btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-wrench"></i></button>'
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
            function getProperty(id) {

                // $("#property_beds").val("");

                $('#myform').each(function () {
                    this.reset();

                });
                $('#propertyType_name').empty();
                $('#city_name').empty();
                $('#area_name').empty();
                $('#country_name').empty();
                $('#provider_name').empty();
                $('#owner_name').empty();
                $('#amenities').empty();


                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: "api/getProperty.php",
                    data: {"id": id},

                    success: function (data) {

                        $("#property_beds").val(data[0].property_beds);

                        $("#property_reference").val(data[0].property_reference);
                        $("#property_price").val(data[0].property_price);

                        $("#property_area").val(data[0].property_area);
                        $("#property_description").val(data[0].property_description);
                        $("#ar_property_description").val(data[0].ar_property_description);
                        $("#property_geolocation_lat").val(data[0].property_lat);
                        $("#property_geolocation_long").val(data[0].property_long);
                        $("#owner_first_name").val(data[0].owner_first_name);
                        $("#property_360view").val(data[0].property_360view);

                        $("#property_baths").val(data[0].property_baths);
                        getPropertyTypes(data[0].property_type);
                        getCities(data[0].property_city);
                        getCountries(data[0].property_country);
                        getAreas(data[0].proprety_area);
                        getProviders(data[0].property_provider);
                        getOwners(data[0].property_owner);
                        getAmenities(data[0].property_amenities);



                    },
                    error: function () {
                        alert('Some error occurred!');
                    }
                });
            }
            function getPropertyTypes(id) {

                $.ajax({
                    dataType: "json",

                    type: "GET",
                    cache: false,
                    data: {"asAssoc": 1},
                    url: "api/getPropertyTypes.php",

                    success: function (data) {


                        $.each(data, function (key, value) {
                            if (value.propertyType_id == id)
                                $('#propertyType_name')
                                        .append($("<option></option>")
                                                .attr("value", value.propertyType_id)
                                                .attr("selected", "selected")
                                                .text(value.propertyType_name + "/" + value.ar_propertyType_name));


                            else
                                $('#propertyType_name')
                                        .append($("<option></option>")
                                                .attr("value", value.propertyType_id)
                                                .text(value.propertyType_name + "/" + value.ar_propertyType_name));
                        });

                        // getCities();

                    }

                });
            }
            function getCities(id) {
                $.ajax({
                    dataType: "json",

                    type: "GET",
                    cache: false,
                    data: {"asAssoc": 1},
                    url: "api/getCities.php",

                    success: function (data) {

                        $.each(data, function (key, value) {
                            if (value.city_id == id)
                                $('#city_name')
                                        .append($("<option></option>")
                                                .attr("value", value.city_id)
                                                .attr("selected", "selected")
                                                .text(value.city_name + "/" + value.ar_city_name));
                            else
                                $('#city_name')
                                        .append($("<option></option>")
                                                .attr("value", value.city_id)
                                                .text(value.city_name + "/" + value.ar_city_name));

                        });



                    }

                });

            }
            function getCountries(id) {
                $.ajax({
                    dataType: "json",

                    type: "GET",
                    cache: false,
                    data: {"asAssoc": 1},
                    url: "api/getCountries.php",

                    success: function (data) {

                        $.each(data, function (key, value) {
                            if (value.country_id == id)
                                $('#country_name')
                                        .append($("<option></option>")
                                                .attr("value", value.country_id)
                                                .attr("selected", "selected")
                                                .text(value.country_name + "/" + value.ar_country_name));
                            else
                                $('#country_name')
                                        .append($("<option></option>")
                                                .attr("value", value.country_id)
                                                .text(value.country_name + "/" + value.ar_country_name));
                        });


                    }

                });

            }
            function getAreas(id) {
                $.ajax({
                    dataType: "json",

                    type: "GET",
                    cache: false,
                    data: {"asAssoc": 1},
                    url: "api/getAreas.php",

                    success: function (data) {

                        $.each(data, function (key, value) {
                            if (value.area_id == id)
                                $('#area_name')
                                        .append($("<option></option>")
                                                .attr("value", value.area_id)
                                                .attr("selected", "selected")
                                                .text(value.area_name + "/" + value.ar_area_name));
                            else
                                $('#area_name')
                                        .append($("<option></option>")
                                                .attr("value", value.area_id)
                                                .text(value.area_name + "/" + value.ar_area_name));
                        });



                    }

                });

            }
            function getAmenities(ids) {


                $.ajax({
                    dataType: "json",

                    type: "GET",
                    cache: false,
                    data: {"asAssoc": 1},
                    url: "api/getAmenities.php",

                    success: function (data) {

                        $.each(data, function (key, value) {
                            if ($.inArray(value.amenity_id, ids)>-1)
                                $('#amenities')
                                        .append($("<label></label>")
                                                .append($("<input>")
                                                        .attr("value", value.amenity_id)
                                                        .attr("name", "propertyAmenities[]")
                                                        .attr("type", "checkbox")
                                                        .attr("checked", "checked")
                                                        ).append(" " + value.amenity_name + " ")
                                                );
                            else
                                $('#amenities')
                                        .append($("<label></label>")
                                                .append($("<input>")
                                                        .attr("value", value.amenity_id)
                                                        .attr("name", "propertyAmenities[]")
                                                        .attr("type", "checkbox")
                                                      
                                                        ).append(" " + value.amenity_name + " ")
                                                );




                        });


                       // getProviders();

                    }

                });


            }
            function getProviders(id) {

                $.ajax({
                    dataType: "json",

                    type: "GET",
                    cache: false,
                    data: {"asAssoc": 1},
                    url: "api/getProviders.php",

                    success: function (data) {

                        $.each(data, function (key, value) {
                            if (value.provider_id == id)
                                $('#provider_name')
                                        .append($("<option></option>")
                                                .attr("value", value.provider_id)
                                                .attr("selected", "selected")
                                                .text(value.provider_name));
                            else
                                $('#provider_name')
                                        .append($("<option></option>")
                                                .attr("value", value.provider_id)
                                                .text(value.provider_name));
                        });



                    }

                });

            }
            function getOwners(id) {

                $.ajax({
                    dataType: "json",

                    type: "GET",
                    cache: false,
                    data: {"asAssoc": 1},
                    url: "api/getOwners.php",

                    success: function (data) {

                        $.each(data, function (key, value) {
                            if (value.owner_id == id)
                                $('#owner_name')
                                        .append($("<option></option>")
                                                .attr("value", value.owner_id)
                                                .attr("selected", "selected")
                                                .text(value.owner_first_name + " " + value.owner_last_name));

                            else
                                $('#owner_name')
                                        .append($("<option></option>")
                                                .attr("value", value.owner_id)
                                                .text(value.owner_first_name + " " + value.owner_last_name));





                            $('#owner_name')
                                    .append($("<option></option>")

                                            .attr("value", "NULL"));
                        });


                        //  $('#ibox1').children('.ibox-content').toggleClass('sk-loading');
//                        toggleFields(); // call this first so we start out with the correct visibility depending on the selected form values
//                        // this will call our toggleFields function every time the selection value of our other field changes
//                        $("#providersSelect").change(function () {
//                            toggleFields();
//                        });


                    }

                });
            }




        </script>


    </body>
</html>
