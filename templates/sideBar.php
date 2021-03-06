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


            <li <?php
                    switch($pageNum){
                        case 0:
                        case 20:
                        case 1:
                        case 2:
                        case 3:echo 'class="active"';break;
                    }
                    ?>>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Insert data</span><span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li <?php
                    if ($pageNum == 0) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="AddProperty.php"><i class="fa fa-building"></i> <span class="nav-label">Add Property </span></a>
                    </li>

                    <li <?php
                    if ($pageNum == 1) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="AddOwner.php"><i class="fa fa-user-secret"></i> <span class="nav-label">Add Owner </span></a>
                    </li>
                    <li <?php
                    if ($pageNum == 2) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a  href="AddRenter.php"><i class="fa fa-user"></i> <span class="nav-label">Add Renter </span></a>
                    </li>
                    <li <?php
                        if ($pageNum == 3) {
                            echo 'class="active"';
                        }
                    ?>>
                        <a href="AddProvider.php"><i class="fa fa-building-o"></i> <span class="nav-label">Add Provider </span></a>
                    </li>
                     <li <?php
                    if ($pageNum == 20) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="RentProperty.php"><i class="fa fa-building"></i> <span class="nav-label">Rent a property </span></a>
                    </li>

                </ul>
            </li>
            
            
                <li <?php
                    switch($pageNum){
                        case 4:
                        case 5:
                        case 6:
                        case 8:
                        case 21:
                        case 7:echo 'class="active"';break;
                    }
                    ?>>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Master data</span><span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li <?php
                    if ($pageNum == 4) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="PropertyTypes.php"><i class="fa fa-building"></i> <span class="nav-label">Property Types </span></a>
                    </li>

                    <li <?php
                    if ($pageNum == 5) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="Amenities.php"><i class="fa fa-star-o"></i> <span class="nav-label">Amenities </span></a>
                    </li>
                    <li <?php
                    if ($pageNum == 6) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a  href="Countries.php"><i class="fa fa-user"></i> <span class="nav-label">Property Country </span></a>
                    </li>
                    <li <?php
                        if ($pageNum == 7) {
                            echo 'class="active"';
                        }
                    ?>>
                        <a href="Cities.php"><i class="fa fa-user"></i> <span class="nav-label">Property City</span></a>
                    </li>
                       <li <?php
                        if ($pageNum == 8) {
                            echo 'class="active"';
                        }
                    ?>>
                        <a href="Areas.php"><i class="fa fa-user"></i> <span class="nav-label">Property Area</span></a>
                    </li>
                                           <li <?php
                        if ($pageNum == 21) {
                            echo 'class="active"';
                        }
                    ?>>
                        <a href="AboutContact.php"><i class="fa fa-user"></i> <span class="nav-label">Aboutus/Contactus</span></a>
                    </li>
                </ul>
            </li>
            
            
            <li <?php
                    switch($pageNum){
                        case 9:
                        case 10:
                        case 12:
                        case 13:
                        case 14:
                        case 30:
                        case 11:echo 'class="active"';break;
                        
                    }
                    ?>>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">View data</span><span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li <?php
                    if ($pageNum == 9) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a href="AvailableProperties.php"><i class="fa fa-building"></i> <span class="nav-label">Available Properties </span></a>
                    </li>

                    
                 
                  
                     <li <?php
                    if ($pageNum == 12) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a  href="Owners.php"><i class="fa fa-user"></i> <span class="nav-label">Owners</span></a>
                    </li>
                    
                    
                     <li <?php
                    if ($pageNum == 13) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a  href="Renters.php"><i class="fa fa-user"></i> <span class="nav-label">Renters</span></a>
                    </li>
                    
                     <li <?php
                    if ($pageNum == 14) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a  href="Providers.php"><i class="fa fa-user"></i> <span class="nav-label">Providers</span></a>
                        
                    </li>
                    
                     <li <?php
                    if ($pageNum == 30) {
                        echo 'class="active"';
                    }
                    ?>>
                        <a  href="RentedProperties.php"><i class="fa fa-user"></i> <span class="nav-label">Rented Properties</span></a>
                    </li>
                </ul>
            </li>
            
         
        </ul>

    </div>
</nav>
