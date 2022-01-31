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
    <title>Tokyo</title>
</head>
<body>
<section class="header-to">
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
         <h1>Tokyo</h1>
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/Kiyozumidera.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Kiyozumi-dera</h4>
                            <p>Kiyomizu-dera was founded in the early Heian period. The temple was founded in 778 by Sakanoue no Tamuramaro, and its present buildings were constructed in 1633, ordered by the Tokugawa Iemitsu. There is not a single nail used in the entire structure. It takes its name from the waterfall within the complex, which runs off the nearby hills. Kiyomizu means clear water, or pure water...[4][5]

It was originally affiliated with the old and influential Hossō sect dating from Nara times.[6] However, in 1965 it severed that affiliation, and its present custodians call themselves members of the "Kitahossō" sect...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/mall.jpg">  
                        </div> 
                        <div class="feature-details">
                            <h4>Takashimaya Square Mall</h4>
                            <p>This mega-complex is the merger between the Takashimaya Department store and mall which is in close proximity to Shinjuku Station (south exit). Towering high with over 15 floors, this Tokyo mall is filled with shops selling men and women’s clothing and accessories, cosmetics, children’s apparel and toys, housewares, electronics and sporting goods. Additionally, the upper floors of the mall provide shoppers with many restaurants. Be sure to check out the basement floor in Takashimaya shopping mall which is an underground food shop, known as Depachika – the perfect place to stock up on Japanese treats, groceries, and souvenirs...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/Shibuya.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Shibuya</h4>
                            <p>Shibuya is a special ward in Tokyo, Japan. As a major commercial and finance center, it houses two of the busiest railway stations in the world, Shinjuku Station (southern half) and Shibuya Station. As of May 1, 2016, it has an estimated population of 221,801 and a population density of 14,679.09 people per km2 (38,018.7/sq mi). The total area is 15.11 km2 (5.83 sq mi). The name "Shibuya" is also used to refer to the shopping district which surrounds Shibuya Station. This area is known as one of the fashion centers of Japan, particularly for young people, and as a major nightlife area...</p>
                        </div>
                     </div>
                 </div>
                 <div class="row">
                 <div class="col-md-4">
                     <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/sakaura.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Sakaura</h4>
                            <p>Hundreds of cherry trees decorate the moats of former Edo Castle around Kitanomaru Park, creating one of Tokyo's most outstanding cherry blossom sights. Boats are available for rent, but picnics are not allowed. Trees are lit up in the evenings. Many food stands can be found at nearby Yasukuni Shrine, where another thousand cherry trees are planted...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/tower.jpg">  
                        </div> 
                        <div class="feature-details">
                            <h4>Tokyo Tower</h4>
                            <p>The Tokyo Tower is a communications and observation tower in the Shiba-koen district of Minato, Tokyo, Japan, built in 1958. At 332.9 meters (1,092 ft), it is the second-tallest structure in Japan. The structure is an Eiffel Tower-inspired lattice tower that is painted white and international orange to comply with air safety regulations. The tower's main sources of income are tourism and antenna leasing. Over 150 million people have visited the tower. FootTown, a four-story building directly under the tower, houses museums, restaurants, and shops...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/tnight.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Tokyo Nightlife</h4>
                            <p>You'll find bars and clubs scattered throughout the city, but the biggest and liveliest nightlife scenes are in Roppongi, Shibuya and Shinjuku. Roppongi attracts a large international crowd and plays host to the lion's share of Tokyo nightclubs. The vibe in Shibuya is a bit more hip and a little less mainstream...</p>
                        </div>
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </section>
     
     </body>
</html>