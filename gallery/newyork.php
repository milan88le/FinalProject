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
    <title>NewYork</title>
</head>
<body>
<section class="header-ny">
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
         <h1>New York</h1>
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/ny1.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Downtown</h4>
                            <p>Lower Manhattan, also known as Downtown Manhattan or Downtown New York, is the southernmost part of Manhattan, the central borough for business, culture, and government in New York City. Lower Manhattan is defined most commonly as the area delineated on the north by 14th Street, on the west by the Hudson River, on the east by the East River, and on the south by New York Harbor (also known as Upper New York Bay). The Lower Manhattan business district, known as the Financial District, forms the main core of the area below Chambers Street...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/ny2.jpg">  
                        </div> 
                        <div class="feature-details">
                            <h4>Brooklyn Bridge</h4>
                            <p>Opened in 1883, the Brooklyn Bridge provides passage between Brooklyn and Manhattan for motorists, trains, bicycles and pedestrians. One of the primary symbols of New York City, it is a marvel of design and provides spectacular views of the city's skyline...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/ny6.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Times Square</h4>
                            <p>Times Square is a major commercial intersection, tourist destination, entertainment center, and neighborhood in midtown Manhattan in New York City. It is formed by the junction of Broadway, Seventh Avenue and 42nd Street. Together with adjacent Duffy Square, Times Square is a bowtie-shaped space five blocks long between 42nd and 47th Streets...</p>
                        </div>
                     </div>
                 </div>
                 <div class="row">
                 <div class="col-md-4">
                     <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/libst.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>The Statue of Liberty</h4>
                            <p>The Statue of Liberty (Liberty Enlightening the World; French: La Liberté éclairant le monde) is a colossal neoclassical sculpture on Liberty Island in New York Harbor in New York City, in the United States. The copper statue, a gift from the people of France to the people of the United States, was designed by French sculptor Frédéric Auguste Bartholdi and its metal framework was built by Gustave Eiffel. The statue was dedicated on October 28, 1886...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/centralpark.jpg">  
                        </div> 
                        <div class="feature-details">
                            <h4>Central Park</h4>
                            <p>Central Park is an urban park in New York City located between the Upper West and Upper East Sides of Manhattan. It is the fifth-largest park in the city by area, covering 843 acres (341 ha). It is the most visited urban park in the United States, with an estimated 42 million visitors annually as of 2016, and is the most filmed location in the world...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/empire.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>The Empire State Building</h4>
                            <p>The Empire State Building is a 102-story[c] Art Deco skyscraper in Midtown Manhattan in New York City, United States. It was designed by Shreve, Lamb & Harmon and built from 1930 to 1931. Its name is derived from "Empire State", the nickname of the state of New York. The building has a roof height of 1,250 feet (380 m) and stands a total of 1,454 feet (443.2 m) tall, including its antenna. The Empire State Building stood as the world's tallest building until the construction of the World Trade Center in 1970...</p>
                        </div>
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </section>
     
     </body>
</html>        