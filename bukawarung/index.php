<?php
    session_start();
    if (!isset($_SESSION['login'])) {
        echo "<script>alert('Login Dahulu');</script>";
        echo "<script>window.location.replace('login.php');</script>";
    }
?>
 <h1><p style="text-align:center"> <b>SELAMAT DATANG</b></p></h1>

 <?php echo $_SESSION['email']; ?></b>  <br><a href="logout.php"> Logout </a>


<!-- <!DOCTYPE html>
<html>
    <head>
        <title>responsive web design</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    </head>
    <body>
        <div class="container">
            <div class="navbar">
                <img src="img/flower.png" class="flower">
                <nav>
                    <ul id="menuList">
                        <li><a href="">About Us</a></li>
                        <li><a href="">Catalogue</a></li>
                        <li><a href="">History</a></li>
                        <li><a href="">Location</a></li>
                    </ul>
                </nav>
                <img src="img/menu.png" class="menu-icon" onclick="togglemenu()">
            </div>

            <div class="row" style="margin-top: -40px;">
                <div class="col-1">
                    <hr>
                    <h2><b>Bubu Florist</b></h2>
                    <h1><i>Violet Valentine Special Event</i></h1>
                    <hr> <br>
                    <h3>Buy and Order cheap flower arrangement board mourning standing, rose valentine hand bouquet,
                        jasmine decoration and parcel here.</h3> <br>
                    <p><i>'Show your Love with a Lovely Flower'</i></p>
                    <h4>Start From $3,47</h4>
                    <button type="button">Show Details<img src="img/arrow.png"></img></button>
                </div>
                <div class="col-2">
                    <img src="img/logo.png" class="logo">
                </div>
            </div>

            <div class="media-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com/hhany__"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <script>

            var menuList = document.getElementById("menuList");

            menuList.style.maxHeight = "0px";

            function togglemenu(){
                
                if(menuList.style.maxHeight == "0px")
                    {
                        menuList.style.maxHeight = "130px";
                    }
                else
                    {
                        menuList.style.maxHeight = "0px";
                    }
            }
           
            
        </script>
</body>
</html> -->
