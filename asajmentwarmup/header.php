<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/menu_style.css?v=<?php echo time();?>" type="text/css"/>
        <link rel="stylesheet" href="css/style.css?v=<?php echo time();?>" type="text/css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>WarmUp Management System</title>
        <style>
            body{
                background-image: url('./images/dep.jpg');
                background-position: center;
            }
        </style>
    </head>
    <body>
    <center class="w3-animate-top">
        <h1>WARM UP</h1>
        <h3 style="color:green;">Shop Management system!!!</h3>       
    </center>
    <a href="./index.php" class="w3-display-topright">
        <i class="fa fa-home w3-jumbo "></i>      
    </a>
    <hr>
    <?php
    require_once './functions.php';
    $userstr = '(Guest)';
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $userstr = "($user)";
        $loggedin = TRUE;
    } else {
        $loggedin = FALSE;
    }
    if ($loggedin) {
        include_once './menu_admin.php';
    } else {
        include_once './menu_guest.php';
    }
    ?>
</body>
</html>

