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
    <title>Barcelona</title>
</head>
<body>
<section class="header-ba">
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
         <h1>Barcelona</h1>
         <div class="container">
             <div class="row">
                 <div class="col-md-4">
                     <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/la pedrera.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>La Pedrera (Casa Mila)</h4>
                            <p>Casa Mila (1906-1912) is a building designed by the architect Antoni Gaudi and commissioned by Pere Milà and Roser Segimon. The name, ‘Casa Milà’ comes from the fact that it was the new home of the Milà family. The couple occupied the main floor and rented out the other apartments. Casa Mila (1906-1912) is Antoni Gaudi’s most iconic work of civic architecture due to both its constructional and functional innovations, as well as its ornamental and decorative solutions. It is a total work of art...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/park güell.jpg">  
                        </div> 
                        <div class="feature-details">
                            <h4>Parc Güell</h4>
                            <p>Parc Güell is a privatized park system composed of gardens and architectural elements located on Carmel Hill, in Barcelona, Catalonia, Spain. Carmel Hill belongs to the mountain range of Collserola – the Parc del Carmel is located on the northern face. Park Güell is located in La Salut, a neighborhood in the Gràcia district of Barcelona. With urbanization in mind, Eusebi Güell assigned the design of the park to Antoni Gaudí, a renowned architect and the face of Catalan modernism...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/sagrada família.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Sagrada Familia</h4>
                            <p>The Basílica i Temple Expiatori de la Sagrada Família (Catalan: [bəˈzilikə ðə lə səˈɣɾaðə fəˈmiljə]; Spanish: Basílica de la Sagrada Familia; 'Basilica of the Holy Family'), also known as the Sagrada Família, is a large unfinished minor basilica in the Eixample district of Barcelona, Catalonia, Spain. Designed by the Catalan architect Antoni Gaudí (1852–1926), his work on the building is part of a UNESCO World Heritage Site. On 7 November 2010, Pope Benedict XVI consecrated the church and proclaimed it a minor basilica...</p>
                        </div>
                     </div>
                 </div>
                 <div class="row">
                 <div class="col-md-4">
                     <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/parc de montjuïc.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Parc de Montjuic</h4>
                            <p>Montjuïc translates to "Jewish Mountain" from medieval Latin and Catalan, and remains of a medieval Jewish cemetery have been found there. Some sources suggest that Montjuïc is related to the Latin phrase Mons Jovicus ('hill of Jove'). The city of Girona has a hill or mountain named Montjuïc just to the north of its old quarter with a similar history; its name is derived from the medieval Jewish cemetery that was there...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/tibidabo.jpg">  
                        </div> 
                        <div class="feature-details">
                            <h4>Tibidabo</h4>
                            <p>Tibidabo is a hill overlooking Barcelona, Catalonia, Spain. At 512 metres (1,680 ft), it is the tallest hill in the Serra de Collserola. Rising sharply to the north-west, it has views over the city and the surrounding coastline. The summit of the hill is occupied by the Sagrat Cor church and adjacent Tibidabo Amusement Park. The Torre de Collserola telecommunications tower is a short walk away. All three are prominently visible from most of the city of Barcelona. Designed by Enric Sagnier, the church was started in 1902 and took 60 years to complete. It is topped by a sculpture of the Sacred Heart of Jesus by Josep Miret Llopart...</p>
                        </div>
                     </div>
                 </div>
                 <div class="col-md-4">
                 <div class="feature-box">
                        <div class="feature-img">
                            <img src="../gallery/pic/campnou.jpg">
                        </div> 
                        <div class="feature-details">
                            <h4>Camp Nou</h4>
                            <p>Camp Nou is a football stadium in Barcelona, Spain. It opened in 1957 and has been the home stadium of FC Barcelona since its completion. With a seating capacity of 99,354,it is the largest stadium in Spain and Europe, and the fourth largest association football stadium in the world in capacity. It has hosted two European Cup/Champions League finals in 1989 and 1999, two European Cup Winners' Cup finals, four Inter-Cities Fairs Cup final games, five UEFA Super Cup games, four Copa del Rey finals, two Copa de la Liga finals, and twenty-one Supercopa de España finals. It also hosted five matches in the 1982 FIFA World Cup...</p>
                        </div>
                     </div>
                 </div>
             </div>
             </div>
         </div>
     </section>
     
     </body>
</html>        