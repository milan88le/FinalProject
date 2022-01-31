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
    <title>Booking</title>
</head>
<body>
<section class="header-book">
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
                <div class="booking-form">
                    <h3 id="bf">Enter your destination here, fill the form:</h3>
                    <form method="post">
                    <label>Name and Surname:</label>
                    <input type="text" name="name" class="tf" required>
                    <label>Passport Number:</label>
                    <input type="number" name="passid" min="10" class="nf" required>
                    <label>Destination ID:</label>
                    <input type="number" name="destination" min="1" max="22" class="nf" required>
                    <input type="submit" value="Book" class="bb">
                    </form>
                </div>

                <?php
                            if(isset($_POST["name"]) && isset($_POST["passid"]) && isset($_POST["destination"])){

                                $name= $_POST["name"];
                                $pass= $_POST["passid"];
                                $dest= $_POST["destination"];
                                
                                echo"<br>";
                                echo"<br>";

                                if($dest > 0 && $dest < 23){

                                $conn = new mysqli("localhost","root","","travelagency");

                                $insert_query = $conn->prepare("INSERT INTO `passengers`(`name_surname`,`passport`,`travel`) VALUES (?,?,?)");
                                $name = $_POST["name"];
                                $pass = $_POST["passid"];
                                $dest = $_POST["destination"];
                                $insert_query->bind_param("sii",$name,$pass,$dest);
                                $x=$insert_query->execute();

                                if($x){
                                echo "Your trip is successfully booked!";
                            }else{
                                echo "Your reservation was not successful!";
                                }
                            } else{
                                echo "Your reservation was not successful!";
                            }  
                        }
?>
                    <div class="contactinfo">
                    <h3>Destinations in our offer:</h3>
                    <table class="table">
                        <tr>
                            <th>Destination ID</th>
                            <th>City And State</th>
                            <th>Visa Required</th>
                            <th>Price</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Vienna , Austria</td>
                            <td>No</td>
                            <td>78&euro;</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>New York , USA</td>
                            <td>Yes</td>
                            <td>1300&euro;</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Paris , France</td>
                            <td>No</td>
                            <td>90&euro;</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Male , Maldives</td>
                            <td>Yes</td>
                            <td>1500&euro;</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Berlin , Germany</td>
                            <td>No</td>
                            <td>120&euro;</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Istanbul , Turkey</td>
                            <td>No</td>
                            <td>110&euro;</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Barcelon , Spain</td>
                            <td>No</td>
                            <td>140&euro;</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Tokyo , Japan</td>
                            <td>Yes</td>
                            <td>350&euro;</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Honk Kong , China</td>
                            <td>Yes</td>
                            <td>400&euro;</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Rome , Italy</td>
                            <td>No</td>
                            <td>86&euro;</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Athens , Greece</td>
                            <td>No</td>
                            <td>95e</td>
                        </tr>
                        <tr>
                            <td>12</td>
                            <td>Miami , USA</td>
                            <td>Yes</td>
                            <td>1000&euro;</td>
                        </tr>
                        <tr>
                            <td>13</td>
                            <td>Rio de Janeiro , Brasil</td>
                            <td>Yes</td>
                            <td>650&euro;</td>
                        </tr>
                        <tr>
                            <td>14</td>
                            <td>San Francisco , USA</td>
                            <td>Yes</td>
                            <td>1250&euro;</td>
                        </tr>
                        <tr>
                            <td>15</td>
                            <td>Los Angeles , USA</td>
                            <td>Yes</td>
                            <td>1099&euro;</td>
                        </tr>
                        <tr>
                            <td>16</td>
                            <td>Bali , Indonesia</td>
                            <td>Yes</td>
                            <td>1110&euro;</td>
                        </tr>
                        <tr>
                            <td>17</td>
                            <td>Lisbon , Portugal</td>
                            <td>No</td>
                            <td>500&euro;</td>
                        </tr>
                        <tr>
                            <td>18</td>
                            <td>Beijing , China</td>
                            <td>Yes</td>
                            <td>340&euro;</td>
                        </tr>
                        <tr>
                            <td>19</td>
                            <td>Madrid , Spain</td>
                            <td>No</td>
                            <td>190&euro;</td>
                        </tr>
                        <tr>
                            <td>20</td>
                            <td>Milano , Italy</td>
                            <td>No</td>
                            <td>250&euro;</td>
                        </tr>
                        <tr>
                            <td>21</td>
                            <td>Amsterdam , Holland</td>
                            <td>No</td>
                            <td>250&euro;</td>
                        </tr>
                        <tr>
                            <td>22</td>
                            <td>Dubai , UAE</td>
                            <td>Yes</td>
                            <td>999&euro;</td>
                        </tr>
                    </table>
                </div>            
</section>
</body>
</html>