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
    <title>Contact</title>
</head>
<body>
<section class="header-c">
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
                        <li><a href="./contact.php">Contact</a></li>
                    </ul>
                </nav>
            </div>
            </div>

<div class="contactus">
                    <h3 id="cu">Contact us:</h3>
                    <form method="get">
                    <table id="tabela">
                        <tr>
                            <td>Name and Surname:</td>
                            <td>Email:</td>
                        </tr>
                        <tr>
                            <td><input type="text" name="name" required></td>
                            <td><input type="email" name="email" required></td>
                        </tr>
                        <tr>
                            <td>Phone number:</td>
                            <td>Postcode:</td>
                        </tr>
                        <tr>
                            <td><input type="number" name="number" required ></td>
                            <td><input type="number" name="postcode" required ></td>
                        </tr>
                        <tr><td><label id="lbl">Comment:</label><td></td>
                        </tr>
                        <tr>
                            <td rowspan="1" colspan="2"><textarea name="area" id="area" cols="48" rows="10" placeholder=" type your comment..." required></textarea></td>
                        </tr>
                        <tr>
                            <td><input id="submit2" type="submit" value="Send" ></td>
                        </tr>
                    </table>
                    </form>
                </div>
                <?php
                    if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["number"]) && isset($_GET["postcode"]) && isset($_GET["area"])){
                        $name=$_GET["name"];
                        $email=$_GET["email"];
                        $number=$_GET["number"];
                        $postcode=$_GET["postcode"];
                        $area=$_GET["area"];

                        $conn = new mysqli("localhost","root","","travelagency");

                                $insert_query = $conn->prepare("INSERT INTO `contact`(`name_surname`,`email`, `ph_num`, `postcode`,`comment`) VALUES (?,?,?,?,?)");
                                $name=$_GET["name"];
                                $email=$_GET["email"];
                                $number=$_GET["number"];
                                $postcode=$_GET["postcode"];
                                $area=$_GET["area"];
                                $insert_query->bind_param("sssis",$name,$email,$number,$postcode,$area);
                                $y=$insert_query->execute(); 

                                if($y){
                                    echo "You have successfully sent comment!";
                                }else{
                                    echo "";
                                    }
                                
                    }
                   

        ?>
                <div class="contactinfo">
                    <h3>Contact info:</h3>
                    <p><span>Travel Agency</span><br>
                    <span>Ulica bb</span><br>
                    <span>11000 Belgrade, Serbia</span>
                </p>
                    <p id="pc"><a href="">www.travelagency.com</a></p>
                   

                </div>
   
                
</section>
</body>
</html>