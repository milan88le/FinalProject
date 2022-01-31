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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TravelAgency</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    
</head>
<body>
    <section class="header">
        <div class="container">
            <a href="./index.php"><img src="./img/logo2.png"></a>
            <a href="./logout.php"><button type="button" class="login-btn">Logout</button></a>
            <p class="welc">Welcome, <?php echo $_SESSION['username'];  ?></p>
            <div class="navbar">
                <nav>
                    <ul>
                        <li><a href="./index.php">Home</a></li>
                        <li><a href="#feat">Destinations</a></li>
                        <li><a href="#book">Booking</a></li>
                        <li><a href="#gal">Gallery</a></li>
                        <li><a href="./contact/contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <h1>Travel Agency</h1>
        <p>With us your travelling will be amazing</p>
        <div class="input-group2">
            <form method="POST" action="./search/search.php" class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search Country or City" required>
            <div class="input-group-append">
                <input type="submit" class="input-group-text btn" value="Search">
            </form>
            </div>
        </div>
     </section>
     <section class="features" id="feat">
         <h1>Featured Destination</h1>
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div class="feature-box">
                        <div class="feature-img">
                            <img src="./img/1.jpg">
                            <div class="price">
                                <p>78&euro;</p>
                            </div>
                            <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div> 
                        <div class="feature-details">
                            <h4>Vienna</h4>
                            <p>Austria's capital Vienna offers a blend of imperial traditions, music, and endearing charm. A city that inspires with the old and the new alike, and always has a cosy place available in a coffee house or wine tavern.</p>
                            <div>
                                <span><i class="fas fa-map-marker-alt"></i>Vienna</span>
                                <span><i class="fas fa-sun"></i>4 Days</span>
                                <span><i class="far fa-moon"></i>3 Nights</span>
                            </div>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="./img/2.jpg">
                            <div class="price">
                                <p>86&euro;</p>
                            </div>
                            <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div> 
                        <div class="feature-details">
                            <h4>Rome</h4>
                            <p>Rome, the capital of Italy, is a city like no other. For more than two millennia, this city has been the center of European culture, politics and religion. Walking around the streets of Rome feels like taking a tour through the history of humankind. Rome is densely populated with ancient churches, Roman ruins, beautiful fountains, spacious squares (piazzas) and expensive shops. In simple words, it is a city for everyone.</p>
                            <div>
                                <span><i class="fas fa-map-marker-alt"></i>Rome</span>
                                <span><i class="fas fa-sun"></i>3 Days</span>
                                <span><i class="far fa-moon"></i>2 Nights</span>
                            </div>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="./img/3.jpg">
                            <div class="price">
                                <p>90&euro;</p>
                            </div>
                            <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            </div>
                        </div> 
                        <div class="feature-details">
                            <h4>Paris</h4>
                            <p>Nowhere else on earth makes the heart swoon like the mention of Paris. The city lures with its magnificent art, architecture, culture, and cuisine, but there's also a quieter magic waiting to be explored: the quaint cobbled lanes, the sweet patisseries around the corner, and the cozy little bistros that beckon with a glass of Beaujolais. Get ready to make Paris your own.</p>
                            <div>
                                <span><i class="fas fa-map-marker-alt"></i>Paris</span>
                                <span><i class="fas fa-sun"></i>5 Days</span>
                                <span><i class="far fa-moon"></i>4 Nights</span>
                            </div>
                        </div>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <section class="gallery" id="gal">
         <h1>Travelling Gallery</h1>
         <div class="container">
             <div class="row">
                 <div class="col-md-3">
                    <div class="gallery-box"> 
                     <a href="./gallery/newyork.php"><img src="./img/newyork.jpg"></a>
                     <h4>New York</h4>
                    </div>
                 </div>
                 <div class="col-md-3">
                    <div class="gallery-box"> 
                    <a href="./gallery/barcelona.php"><img src="./img/barcelona.jpg"></a>
                     <h4>Barcelona</h4>
                    </div>
                 </div>
                 <div class="col-md-3">
                    <div class="gallery-box"> 
                    <a href="./gallery/tokyo.php"><img src="./img/tokyo.jpg"></a>
                     <h4>Tokyo</h4>
                    </div>
                 </div>
                 <div class="col-md-3">
                    <div class="gallery-box"> 
                    <a href="./gallery/hongkong.php"><img src="./img/hongkong.jpg"></a>
                     <h4>Hong Kong</h4>
                    </div>
                 </div>
             </div>
         </div>
     </section>
    <section class="banner" id="book">
        <div class="banner-highlights">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2>Get 30% on top destination</h2>
                        <p>Book your tickets before 28th february and avail 30% flat discount.</p>
                    </div>
                    <div class="col-md-4"></div>
                    <button type="button" class="booking-btn"><a href="./booking/booking.php">Book Now</a></button>
                </div>
            </div>
        </div>
    </section>
    <section class="users-feedback">
        <h1>Users Review</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="user-review">
                     <p>Just returned to the uk after 5 days and nights in NYC!Few things to help other.NYC is a magical city! I'd recommend walking to get around as you see more, however the subway is cheap and easy to use.Try and get to a Knicks game, we paid £100 for tickets but it's worth it.Dress for comfort rather than style.The beggars on the street can make you feel uncomfortable which is a shame,Hire bikes to look around Central Park, it's too big to walk. JFK is a nightmare to pass through, took us over 2 hours to clear customs!I shall be returning in 2022 and I'm counting the days already.</p>   
                     <h5>John Criss</h5>
                     <small>New York</small>
                    </div>
                    <img src="./img/johncriss.jpg">
                </div>
                <div class="col-md-4">
                <div class="user-review">
                     <p>Istanbul is a beautiful city with great weather. While landing into the airport, one gets to see the Sea of Marmara and many ships and boats all aorund - what a delightful sight! The people are pleasant and helpful and most speak English. There is so much to see and do in Istanbul. It is a reasonably priced destination. I recommend the Grand Bazaar (lots to see and buy here), the Blue Mosque, Sophia HAgia, Underground cisterns, eating on the streets and restaurants around (not in your hotel), walking around through the gardens, a 1.5 hr Bosphorus cruise, Topkapi Palace.</p>   
                     <h5>Ana Hegel</h5>
                     <small>Istanbul</small>
                    </div>
                    <img src="./img/anahegel.jpg">
                </div>
                <div class="col-md-4">
                <div class="user-review">
                     <p>Berlin is one fantastic place to visit. We went in January when it snowing and Germans know how to deal with snow. The transport system was clear, U Bahn, S Bahn all perfect without any problems. The streets clear in the major area's (Brandenburg Gates, Checkpoint Charlie etc). The city is a wealth of history thanks to the World War, The Brandenburg Gates are a site to behold, Checkpoint Charlie with all the razamatazz with actors as guards and the gyspys begging isnt bad at all. The TV Tower is a thing of beauty and those lifts are like lightning.</p>   
                     <h5>Larry George</h5>
                     <small>Berlin</small>
                    </div>
                    <img src="./img/larrygeorge.jpg">
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                <a href="https://www.youtube.com"><img src="./img/logo2.png" class="footer-logo"></a>
                    <p class="p1">Subscribe Travel Agency on YouTube Channel to watch more videos about destinations, best offers and discount on top destination. </p>
                </div>
                <div class="col-md-3">
                    <h4>Features</h4>
                    <p class="p2">Deals and offers</p>
                    <p class="p2">Customer Reviews</p>
                    <p class="p2">Cancellation Policy</p>
                </div>
                <div class="col-md-3">
                <h4>Quick Contact</h4>
                    <p><i class="fa fa-phone-square"></i>060123456</p>
                    <p><i class="far fa-envelope"></i>project@example.com</p>
                    <p><i class="fa fa-home"></i>11000, Belgrade</p>
                </div>
                <div class="col-md-3">
                <h4>Follow Us on</h4>
                    <p><i class="fab fa-facebook"></i><a href="https://facebook.com">Facebook</a></p>
                    <p><i class="fab fa-instagram"></i><a href="https://instagram.com">Instagram</a></p>
                    <p><i class="fab fa-twitter"></i><a href="https://twitter.com">Twitter</a></p>
                </div>
            </div><hr>
            <p class="copyright">Made by Milan Stojanovic - ITBootcamp 2022</p>
        </div>
    </section>
</body>
</html>