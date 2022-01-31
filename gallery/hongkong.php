<?php

session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>HongKong</title>
</head>
<body>
<section class="header-hk">
        <div class="container">
            <a href="../index.php"><img src="../img/logo2.png"></a>
            <a href="../logout.php"><button type="button" class="login-btn">Logout</button></a>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../index.php#feat">Destinations</a></li>
                        <li><a href="../index.php#book">Booking</a></li>
                        <li><a href="../index.php#gal">Gallery</a></li>
                        <li><a href="../contact/contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            </div>
        <section class="features" id="feat">
         <h1>Hong Kong</h1>
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/Yau ma tei.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Yau ma tei</h4>
                            <p>Yau Ma Tei, formerly known as Waterloo (named after Waterloo Road), is a part of the Yau Tsim Mong (Yau Ma Tei, Tsim Sha Tsui, and Mong Kong) District in the south of the Kowloon Peninsula. Here, there are a wide variety of things to do. This list contains something for every visitor, old and new, in Hong Kong. A perfect quick afternoon getaway, Yau Ma Tei is a place where the old and new Hong Kong are juxtaposed within close proximity...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/tsim sha tsui.jpg">  
                        </div> 
                        <div class="feature-details">
                            <h4>Star ferry pier</h4>
                            <p>Star Ferry Pier, Central (Chinese: 中環天星碼頭) may refer to any of the successive generations of Central Ferry Piers in Central, Hong Kong used by the Star Ferry for its services across Victoria Harbour to Tsim Sha Tsui Ferry Pier and until April 2011, to Hung Hom Pier. The current Star Ferry pier is the fourth to bear the name in Central. It opened for public service on 12 November 2006...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/hkatnight.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Tsim sha tsui</h4>
                            <p>Tsim Sha Tsui, often abbreviated as TST, is an urban area in southern Kowloon, Hong Kong. The area is administratively part of the Yau Tsim Mong District.[1] Tsim Sha Tsui East is a piece of land reclaimed from the Hung Hom Bay now east of Tsim Sha Tsui. The area is bounded north by Austin Road and in the east by Hong Chong Road and Cheong Wan Road...</p>
                        </div>
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </section>
     
     </body>
</html>