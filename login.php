<?php

 session_start();
 
 ?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AlGhaf | Login</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box center-orientation text-center loginscreen animated fadeInDown">
        <div>
            <div>


            </div>
            <h3>Welcome to AlGhaf Admin Panel</h3>
          
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" method="post" action="validateUser.php">
                <div class="form-group">
                    <input name="userName" type="text" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input name="password" type="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

            </form>
            <?php 
           
                
          if(isset($_SESSION['loginError']) && $_SESSION['loginError']>0) {
 echo 'incorrect username/ password please try again.' ;
 unset($_SESSION['loginError']);
 
}

?> 
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
