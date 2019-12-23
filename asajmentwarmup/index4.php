<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet"> 
    <style>
        .w3-card #testimg:hover{
            background-color: gray;
        }
        .sp {
            height: 450px;
        }
    </style>
</head>

<body>
    <?php
require_once './functions.php';

$queryo = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage,cName FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%CAKE%' ORDER BY cName ";
$queryfe = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage,cName FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%FREEZE%' ORDER BY cName";
$querybm = "SELECT iId, iName, iDescription, iPrice, iStatus, iSize, iImage,cName FROM Item,Catalogue WHERE Item.catalogueId=Catalogue.cId AND cName LIKE '%Banh my%' ORDER BY cName";



$queryg = "SELECT cId, cName, cDescription from Catalogue";

$resultfe = queryMysql($queryfe);
$errorfe = $msgfe = "";
if (!$resultfe){
    $errorfe = "Couldn't load data, please try again.";
}
$resultbm = queryMysql($querybm);
$errorbm = $msgbm = "";
if (!$resultbm){
    $errorbm = "Couldn't load data, please try again.";
}





$resultg = queryMysql($queryg);
$errorg = $msgg = "";
if (!$resultg){
    $errorg = "Couldn't load data, please try again.";
}
$resulto = queryMysql($queryo);
$erroro = $msgo = "";
if (!$resulto){
    $erroro = "Couldn't load data, please try again.";
}
?>
<nav>
    <!--bar in large and medium screen-->
    <div class="w3-top w3-bar w3-white w3-card" id="Navbar">
        <a href="./index.php" class="w3-bar-item" id="Logo">WarmUp</a>
        <div class="w3-right w3-hide-small">
            <a href="./index4.php" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Menu</a>                    
            <a href="#search" class="w3-bar-item w3-button"><i class="fa fa-search"></i> Search</a>
        </div>
        <!--Menu Icon-->
        <a class="w3-bar-item w3-right w3-hide-large w3-hide-medium">
            <i class="fa fa-bars"></i>
        </a>
    </div>

    
</nav>

<main>
    
    <section class="w3-center" style="padding:50px 16px;" id="search">
        <div class="w3-content">
            <br>   

<!--Catalogue-->
                <div>
                    <h1 style="border-bottom:3px solid orange;font-weight: 300;font-size: xlarge;">Catalogue</h1>                              
                    <?php
                        while ($rowg = mysqli_fetch_array($resultg)) {
                        $gName = $rowg[1];                                           
                        echo "<div class='w3-button'><a href='./i$gName.php'>$gName</a></div>";                                           
                        }
                    ?>
                     <!--search--> 
<div>
    <form action="iSearch.php" method="post" >
        Search:
        <input type="search" name="keyword" placeholder="Product in WarmUp"/>
        <input type="submit" value="Go" />
    </form>
</div><br>
                    <h3 style="text-align:left;"> List of products:</h3>
                </div>
        </div>
    </section>
    
     

