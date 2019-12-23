<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./css/main.css"/>     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script>
    <style>
        #testimg:hover{
            background-color: gray;
        }
        #btnslide{
        text-transform: uppercase;
        position: absolute;
        top: 85%;
        left:50%;
        color: white;
        }
    </style>

</head>

<body>
    <nav>
        <!--bar in large and medium screen-->
        <div class="w3-top w3-bar w3-white card" id="Navbar">
            <a href="#home" class="w3-bar-item " id="Logo">WarmUp</a>
            <div class="w3-right w3-hide-small">
                <a href="#menu" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Menu</a>
                <a href="#about" class="w3-bar-item w3-button"><i class="fa fa-address-card"></i> About</a>
                <a href="#where" class=" w3-bar-item w3-button"><i class="fa fa-map-marker "></i> Where</a>
                <a href="./login.php" class="w3-bar-item w3-button"><i class="fa fa-cog"></i> Admin</a>
                <a href="./iSearch.php" class="w3-bar-item w3-button"><i class="fa fa-search"></i> Search</a>
            </div>
            <!--Menu Icon-->
            <a href="javascript:void(0)" id="iconmenu" class="w3-bar-item w3-right w3-hide-large w3-hide-medium"
                onclick="openBar()"><i class="fa fa-bars"></i></a>
        </div>

        <!--bar in small screen-->
        <!--w3-animate create an animate apear from lelt or right-->
        <div  class="w3-sidebar w3-white w3-bar-block card w3-animate-left w3-hide-medium w3-hide-large" id="Sidebar">
            <a href="javascript:void(0)" class="w3-bar-item w3-button" onclick="closeBar()">Close <i class="fa fa-close"></i></a>
            <!--Create close button-->
            <a href="#menu" onclick="closeBar()" class="w3-bar-item w3-button"><i class="fa fa-th"></i> Menu</a>
            <a href="#about" onclick="closeBar()" class="w3-bar-item w3-button"><i class="fa fa-address-card"></i>
                About</a>
            <a href="./login.php" onclick="closeBar()" class="w3-bar-item w3-button"><i class="fa fa-cog"></i> Admin</a>
            <a href="#where" onclick="closeBar()" class=" w3-bar-item w3-button"><i class="fa fa-map-marker"></i>
                Where</a>
            
            <a href="./iSearch.php" onclick="closeBar()" class="w3-bar-item w3-button"><i class="fa fa-search"></i> Search</a>
        </div>
    </nav>

    <header id="home" >
        
        <div class="mySlides" id="0" >
                <img src="./picture/background/cake.jpg" alt="Photo" style="width:100%;height: 100%;">
                <div class="w3-center w3-hide-large w3-hide-medium">
                    <span class="w3-text-white w3-display-middle " style="font-size:90px">Warm<br>Up</span>
                    <span class="w3-tag w3-display-bottomleft">Open from 6am to 5pm</span>
                    <span class="w3-text-white w3-display-bottomright">15 Adr street, 5015</span>
                </div>
               
                 
                <div class="w3-display-left w3-text-white w3-margin-left w3-hide-small ">
                    <div class="w3-animate-left ">
                        <h1><b>WHAT IS SPECIAL AT WARM-UP???</b></h1>
                        <h5>A little hot warm black tea with sweet fruit flavor,</h5>
                        <h5>And a lot of intimacy is all we send to you this winter.</h5>
                        <a href="#about" class="w3-button w3-white w3-padding-large w3-margin-top w3-opacity w3-hover-opacity-off">CLICK
                            MORE>></a>
                    </div>
                </div>
                <a href="#menu"><span  class="bgdeliver w3-display-right w3-margin-right w3-hide-medium w3-hide-small "><img
                            class="deliver" src="./picture/hoi.gif" alt="gif"></span></a>
            </div>
        <div class="mySlides" id="1">
                <img src="./picture/background/t12.jpg" alt="Photo" style="width:100%;height: 100%;">
                <div class="w3-center w3-hide-large w3-hide-medium">
                        <span class="w3-text-white w3-display-middle " style="font-size:90px">Warm<br>Up</span>
                        <span class="w3-tag w3-display-bottomleft">Open from 6am to 5pm</span>
                        <span class="w3-text-white w3-display-bottomright">15 Adr street, 5015</span>
                    </div>
                <div class="w3-display-left w3-text-white w3-margin-left w3-hide-small">
                    <div class="w3-animate-left ">
                        <h1><b>COFFEE. NOW!!!
                            <br> THE BEGINNING OF DIVISIBILITY 
                            </b> 
                        </h1>
                        <h5>Every day we work together and work hard to build a friendly home 
                        <br> where all the fun and sharing intimate began with the appointment: <br> "Coffee beans".</h5>
                        <a href="#menu" class="w3-button w3-white w3-padding-large w3-margin-top w3-opacity w3-hover-opacity-off">CLICK
                            MORE>></a>
                    </div>
                </div>
                <a href="#menu"><span  class="bgdeliver w3-display-right w3-margin-right w3-hide-medium w3-hide-small "><img
                    class="deliver" src="./picture/hoi.gif" alt="gif"></span></a>
            </div>
        <div class="mySlides" id="2">
                <img src="./picture/background/bg1.jpg" alt="Photo" style="width:100%;height: 100%;">
                <div class="w3-center w3-hide-large w3-hide-medium">
                        <span class="w3-text-white w3-display-middle " style="font-size:90px">Warm<br>Up</span>
                        <span class="w3-tag w3-display-bottomleft">Open from 6am to 5pm</span>
                        <span class="w3-text-white w3-display-bottomright">15 Adr street, 5015</span>
                    </div>
                <div class="w3-display-left w3-text-white w3-margin-left w3-hide-small">
                    <div class="w3-animate-left ">
                        <h1><b>FIND US TO GET MORE FUN</b> </h1>
                        <h5>Open from 6am to 5pm</h5>
                        <h5><i class="fa fa-map-marker"></i> 15 Adr street, 5015</h5>
                        <a href="#where" class="w3-button w3-white w3-padding-large w3-margin-top w3-opacity w3-hover-opacity-off">CLICK
                            MORE>></a>
                    </div>
                </div>
                <a href="#menu"><span  class="bgdeliver w3-display-right w3-margin-right w3-hide-medium w3-hide-small "><img
                    class="deliver" src="./picture/hoi.gif" alt="gif"></span></a>


            </div>
        <!--Button to next slider bar-->
            <div id="btnslide">
                <div class="w3-button w3-xlarge" id="previous">&#10094;&#10094;</div>
                <div class="w3-button w3-xlarge" id="next">&#10095;&#10095;</div>
            </div>

    </header>
    <main>
        <Section class="w3-center" id="menu">
            <div class="w3-content" style="padding:128px 16px;">
                <h2  style="color:black;text-align: left;font-size:xx-large;font-weight: 300;">MENU </h2>              
                <!--Menu section-->
                <div class="w3-row w3-center w3-card w3-padding" style="margin-left: 25%;margin-right:25%;border-bottom-right-radius:10%;border-bottom-left-radius: 10%;">
                    <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                        <div class="w3-col s6 tablink">Eat</div>
                    </a>
                    <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                        <div class="w3-col s6 tablink">Drink</div>
                    </a>
                </div>
                <!--Food MENU-->
                <div id="Eat" class="menu " style="margin-top:5%;">
                    <!--Product Card Shows-->
                    <div class="w3-row w3-center">

                        <div class="w3-quarter w3-margin w3-card w3-hover-shadow w3-white ">
                            <div class="w3-black w3-xlarge w3-padding-32 ">Basic</div>
                            <img src="./picture/demoproduct/mouuse1.png" alt="Photo" style="width:100%;">
                            <div class="w3-container">
                                <h3 class="w3-text-black">MOUUSE<br>CACAO</h3>
                                <p class="w3-text-red">65.000VND</p>
                                <p><button class="w3-button w3-orange w3-block" onclick="document.getElementById('infor').style.display='block'">READ MORE!!</button></p>
                            </div>
                        </div>

                        <div class="w3-quarter w3-white w3-card w3-hover-shadow " style="margin-top:-1%;margin-left:5%;margin-right:5%">
                            <div class="w3-red w3-xlarge w3-padding-32">Hot</div>
                            <img src="./picture/demoproduct/special-chocolate.png" alt="Photo" style="width:100%;">
                            <div class="w3-container">
                                <h3 class="w3-text-black ">SPECIAL CHOCOLATE</h3>
                                <p class="w3-text-red">75.000VND</p>
                                <p><button class="w3-button w3-orange w3-block" onclick="document.getElementById('infor').style.display='block'">READ MORE!!</button></p>
                            </div>
                        </div>
                        <div class="w3-quarter w3-white w3-margin w3-card w3-hover-shadow ">
                            <div class="w3-black w3-xlarge w3-padding-32">Basic</div>
                            <img id="testimg" src="./picture/demoproduct/MOUSSEDAO.png" onclick="document.getElementById('infor').style.display='block'" alt="Photo" style="width:100%;">
                            <div class="w3-container">
                                <h3 class="w3-text-black">MOUSSE PEACHES</h3>
                                <p class="w3-text-red">50.000VND</p>
                                <p><button class="w3-button w3-orange w3-block" onclick="document.getElementById('infor').style.display='block'">READ MORE!!</button></p>
                            </div>
                        </div>


                    </div>
                    <!--ROW 2-->
                    <div class="w3-row w3-center">
                        <div class="w3-quarter w3-margin w3-card w3-hover-shadow w3-white ">
                            <div class="w3-black w3-xlarge w3-padding-32 ">Basic</div>
                            <img src="./picture/demoproduct/PHOMAITRAXANH.jpg" alt="Photo" style="width:100%;">
                            <div class="w3-container">
                                <h3 class="w3-text-black">GREEN TEA<br>CHEESE</h3>
                                <p class="w3-text-red">35.000VND</p>
                                <p><button class="w3-button w3-orange w3-block" onclick="document.getElementById('infor').style.display='block'">READ MORE!!</button></p>
                            </div>
                        </div>

                        <div class="w3-quarter w3-white w3-card w3-hover-shadow " style="margin-left:5%;margin-right:5%">
                            <div class="w3-gray w3-xlarge w3-padding-32">CLASSIC</div>
                            <img src="./picture/demoproduct/PHOMAICAPHE.jpg" alt="Photo" style="width:100%;">
                            <div class="w3-container">
                                <h3 class="w3-text-black ">COFFEE CHEESE</h3>
                                <p class="w3-text-red">45.000VND</p>
                                <p><button class="w3-button w3-orange w3-block" onclick="document.getElementById('infor').style.display='block'">READ MORE!!</button></p>
                            </div>
                        </div>
                        <div class="w3-quarter w3-white w3-margin w3-card w3-hover-shadow ">
                            <div class="w3-black w3-xlarge w3-padding-32">Basic</div>
                            <img src="./picture/demoproduct/BANHCHUOI.jpg" alt="Photo" style="width:100%;">
                            <div class="w3-container">
                                <h3 class="w3-text-black">LEMON CHEESE</h3>
                                <p class="w3-text-red">50.000VND</p>
                                <p><button class="w3-button w3-orange w3-block" onclick="document.getElementById('infor').style.display='block'">READ MORE!!</button></p>
                            </div>
                        </div>


                    </div>
                </div>
                <!--Drinks MENU-->
                <div id="Drinks" class="menu " style="margin-top:5%;">
                    <!--Product Card Shows-->
                    <div class="w3-row w3-center">

                            <div class="w3-quarter w3-margin w3-card w3-hover-shadow w3-white ">
                                <div class="w3-orange w3-xlarge w3-padding-32 ">Hot</div>
                                <img src="./picture/demoproduct/ESPRESSO.png" alt="Photo" style="width:100%;">
                                <div class="w3-container">
                                    <h3 class="w3-text-black">ESPRESSO</h3>
                                    <p class="w3-text-red">65.000VND</p>
                                    <p><button class="w3-button w3-orange w3-block" onclick="document.getElementById('infor').style.display='block'">READ MORE!!</button></p>
                                </div>
                            </div>
    
                            <div class="w3-quarter w3-white w3-card w3-hover-shadow " style="margin-top:-1%;margin-left:5%;margin-right:5%">
                                <div class="w3-orange w3-xlarge w3-padding-32">Hot</div>
                                <img src="./picture/demoproduct/LATTE.png" alt="Photo" style="width:100%;">
                                <div class="w3-container">
                                    <h3 class="w3-text-black ">AMERICANO</h3>
                                    <p class="w3-text-red">75.000VND</p>
                                    <p><button class="w3-button w3-orange w3-block" onclick="document.getElementById('infor').style.display='block'">READ MORE!!</button></p>
                                </div>
                            </div>
                            <div class="w3-quarter w3-white w3-margin w3-card w3-hover-shadow ">
                                <div class="w3-gray w3-xlarge w3-padding-32">Cold</div>
                                <img src="./picture/demoproduct/PHIN-SUA-DA.png" alt="Photo" style="width:100%;">
                                <div class="w3-container">
                                    <h3 class="w3-text-black">ICE MILK CAFE</h3>
                                    <p class="w3-text-red">50.000VND</p>
                                    <p><button class="w3-button w3-orange w3-block" onclick="document.getElementById('infor').style.display='block'">READ MORE!!</button></p>
                                </div>
                            </div>
    
    
                        </div>
                    <!--ROW 2-->
                    <div class="w3-row w3-center">
                            <div class="w3-quarter w3-margin w3-card w3-hover-shadow w3-white ">
                                <div class="w3-black w3-xlarge w3-padding-32 ">Basic</div>
                                <img src="./picture/demoproduct/TRASENVANG.png" alt="Photo" style="width:100%;">
                                <div class="w3-container">
                                    <h3 class="w3-text-black">TRÀ<br>THẠCH ĐÀO</h3>
                                    <p class="w3-text-red">35.000VND</p>
                                    <p><button class="w3-button w3-orange w3-block">READ MORE!!</button></p>
                                </div>
                            </div>
    
                            <div class="w3-quarter w3-white w3-card w3-hover-shadow " style="margin-left:5%;margin-right:5%">
                                <div class="w3-gray w3-xlarge w3-padding-32">CLASSIC</div>
                                <img src="./picture/demoproduct/phindaden.png" alt="Photo" style="width:100%;">
                                <div class="w3-container">
                                    <h3 class="w3-text-black ">TRÀ<br>THẠCH VẢI</h3>
                                    <p class="w3-text-red">45.000VND</p>
                                    <p><button class="w3-button w3-orange w3-block">READ MORE!!</button></p>
                                </div>
                            </div>
                            <div class="w3-quarter w3-white w3-margin w3-card w3-hover-shadow ">
                                <div class="w3-black w3-xlarge w3-padding-32">Basic</div>
                                <img src="./picture/demoproduct/TRASENVANG.png" alt="Photo" style="width:100%;">
                                <div class="w3-container">
                                    <h3 class="w3-text-black">TRÀ SEN VÀNG</h3>
                                    <p class="w3-text-red">50.000VND</p>
                                    <p><button class="w3-button w3-orange w3-block">READ MORE!!</button></p>
                                </div>
                            </div>
    
    
                        </div>
                </div>

                <br>
                <br>
                <a href="./iCOFFEE.php"><button class="w3-button w3-orange w3-block w3-hover-sepia">View all products >></button></a>
            </div>
            <!--SHOW MORE INFORMATION-->
            <div id="infor" class="w3-modal">
                    <div class="w3-modal-content w3-animate-top w3-card-4">
                      <div class="w3-container w3-orange w3-center w3-padding-32"> 
                        <span onclick="document.getElementById('infor').style.display='none'" 
                       class="w3-button w3-red w3-xlarge w3-display-topright">×</span>
                        <h2>MOUUSE CACAO</h2>
                      </div>
                      <div class="w3-container w3-row">
                        <div class="w3-half">
                            <img src="./picture/demoproduct/MOUSSEDAO.png" onclick="document.getElementById('infor').style.display='block'" alt="Photo">
                        </div>
                        <div class="w3-half w3-left">
                            <h3>45.000VND</h3>
                            <p>Drinks conquer the fastidious guests! The unique combination of Oolong tea, lotus seeds and fragrant aroma and crispy tan. Add some milk to add sweetness.</p>
                            <h4>Size: S M L</h4>                           
                        </div>                                                    
                      </div>
                      <button class="w3-button w3-red w3-section" onclick="document.getElementById('infor').style.display='none'">Close <i class="fa fa-remove"></i></button>
                    </div>
            </div>
        </Section>

        <section id="about" class="w3-center">
            <div class="w3-content " style="padding:128px 16px;">
                <h2 style="color:black;font-size:xx-large;text-align: left;font-weight: 300;">ABOUT</h2>
                <div class="container">
                    <h2>WARM-UP</h2>
                    <p class="w3-large">Fast food and drinks</p>
                    <div class="w3-row-padding " style="margin-top:64px">
                        <div class="w3-quarter">
                            <i class="fa fa-user w3-margin-bottom w3-jumbo"></i>
                            <p class="w3-large">Nguyen Trung Duc</p>
                            <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and
                                an interest of food, music and drinks . I want to share my world with you.</p>
                        </div>
                        <div class="w3-quarter">
                            <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
                            <p class="w3-large">Food</p>
                            <p>The dream of gathering the best chefs in the world to bring you delicious taste on each
                                piece of cake. The taste of the drink remains in memory forever</p>
                        </div>
                        <div class="w3-quarter">
                            <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
                            <p class="w3-large">Drinks</p>
                            <p>The dream of gathering the best chefs in the world to bring you delicious taste on each
                                piece of cake. The taste of the drink remains in memory forever</p>
                        </div>
                        <div class="w3-quarter">
                            <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
                            <p class="w3-large">Support</p>
                            <p>Telephone:01655454335
                                <br>
                                Address: Seoul-Korean
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section id="where" class="w3-center">
            <div class="w3-content" style="padding:128px 16px;">
                <h2 style="color:black;font-weight: 300;font-size:xx-large;text-align: left;">WHERE</h2>
                <br>
                <div class="w3-row ">
                    <div class="w3-half w3-orange w3-text-white" style="text-align:left;padding:15px;height: 250px;">
                        <h3>The WARM-UP SIGNATURE</h3>
                        <p>With enthusiastic rangers and talented Barista team and inspirational coffee stories,
                            Signature 19B Pham Ngoc Thach, District 3, Ho Chi Minh City is the space reserved for those
                            who love passionately The taste of the coffee is excellent.</p>
                    </div>
                    <div class="w3-half">
                        <img src="./picture/a1.jpg" alt="Photo" style="width:100%;height: 250px;;">
                    </div>
                </div>
                <br>
                <div class="w3-row">
                    <div id="where1" class="w3-quarter w3-card ">
                        <h4>Warm Up</h4>
                        <p><i class="fa fa-map-marker"></i> 123 Ho Tung Mau</p>
                    </div>
                    <div id="where2" class="w3-quarter w3-card">
                        <h4>Warm Up</h4>
                        <p><i class="fa fa-map-marker"></i> 68 Cau Giay</p>
                    </div>
                    <div id='where3' class="w3-quarter w3-card">
                        <h4>Warm Up</h4>
                        <p><i class="fa fa-map-marker"></i> 76 Xuan Thuy</p>
                    </div>
                    <div id="where4" class="w3-quarter w3-card">
                        <h4>Warm Up</h4>
                        <p><i class="fa fa-map-marker"></i> 37 Co Nhue </p>
                    </div>

                </div>
            </div>

        </section>
    </main>

    <footer>
        <div class="content" style="padding:50px 45px;background-color: black;color: white;">
            <div class="w3-row  ">
                <div class="w3-third ">
                    <h1>WARM UP</h1>
                </div>
                <div class="w3-third">
                    <h4>FOLLOW US</h4>
                    <p class="w3-xlarge">
                        <i class="fa fa-facebook-official w3-hover-opacity"></i>
                        <i class="fa fa-instagram w3-hover-opacity"></i>
                        <i class="fa fa-snapchat w3-hover-opacity"></i>
                        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
                        <i class="fa fa-twitter w3-hover-opacity"></i>
                        <i class="fa fa-linkedin w3-hover-opacity"></i>
                    </p>

                </div>
                <div class="w3-third">
                    <h4>Always-on Support</h4>
                    <p>
                            Delivery 1800 6936 (07:00-21:00)
                        <br>
                            Support 02871 087 088 (07:00-21:00)
                    </p>    
                    <h4>Address</h4>
                    <p>
                        62 Tran Quang Khai, Tan Dinh, Quan 1 Ho Chi Minh, Vietnam
                        <br>
                        02871 087 088
                        <br>
                        hi@thecoffeehouse.com
                    </p>                         
                </div>

            </div>
            <hr>
            <p>Copyright © 2018 WarmUp. All rights reserved.</p>

        </div>

        
    </footer>

    <script>
        //Function to open or close Sidebar
        var Sidebar = document.getElementById('Sidebar')
        function openBar() {
            if (Sidebar.style.display == 'block') {
                Sidebar.style.display = 'none';
            }
            else {
                Sidebar.style.display = 'block';
            }
        }
        function closeBar() {
            Sidebar.style.display = 'none';
        }
        //Function to auto change background image
        var myIndex = 0;
        autochange();

        function autochange() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) { myIndex = 1 }
            x[myIndex - 1].style.display = "block";
            setTimeout(autochange, 5000);
        }

        //function change the menu
        function openMenu(evt, menuName) {
            var i, x, tablinks;
            x = document.getElementsByClassName("menu");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablink");
            for (i = 0; i < x.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
            }
            document.getElementById(menuName).style.display = "block";
            evt.currentTarget.firstElementChild.className += " w3-dark-grey";
        }
        document.getElementById("myLink").click();
        
        //funtion clik to change sliderbar
        $(document).ready(function(){
            var index=0;
            startdiv = $("div.mySlides:first").attr("id");
            enddiv = $("div.mySlides:last").attr("id");
            $("div.mySlides").each(function(){
                if($(this).is('visible')){
                    index=$(this).attr("id");
                }
            });
            //set next function
            $("#next").click(function(){
                if(index==enddiv){
                    index=-1;
                }
                next =++index;
                $("div.mySlides").hide();
                $("div.mySlides").eq(next).show();
            });
            //set previous function
            $("#previous").click(function(){
                if(index==0){
                    index=enddiv;
                    prev=++index;
                }
                prev =--index;
                $("div.mySlides").hide();
                $("div.mySlides").eq(prev).show();
            });
            
        });
        
    </script>

</body>

</html>