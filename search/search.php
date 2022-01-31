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
    <title>Search</title>
</head>
<body>
<section class="header-s">
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
            
             
            <?php
            if(isset($_POST["search"])){
            
            $state=$_POST["search"];
            
            $conn = new mysqli("localhost","root","","travelagency");
            
            $select_query = $conn->prepare("SELECT * FROM `destination` INNER JOIN `travels` ON `destination`.`id`= `travels`. `destination` WHERE `state` LIKE ? OR `city` LIKE ? ");
            $state='%'. $_POST["search"].'%';
            $select_query->bind_param("ss",$state,$state);
            $select_query->execute();
            $res = $select_query->get_result();
            If($res->num_rows>0){
            foreach($res as $row) {
               ?> <div class="ds"><?php echo $row['state']; echo " , "; echo $row['city']; echo "  -  "; echo $row['price']; echo "  &euro; price, from ";echo $row['start_date']; echo "  to  "; echo $row['end_date']; echo "." ?></div>
               <?php
             }
             
            }
            else{
                echo "Sorry! We don't have result!";}
            }
        
             
            foreach($res as $row){
            if($row['city'] == "New York"){
                echo '<img src="../gallery/pic/ny4.jpg" class="ny">';
            }elseif($row ['city'] == "Vienna"){
                echo '<img src="../gallery/pic/vienna.jpg" class="ny">';
            }elseif($row ['city'] == "Paris"){
                echo '<img src="../gallery/pic/paris.jpg" class="ny">';
            }elseif($row ['city'] == "Male"){
                echo '<img src="../gallery/pic/maldives.jpg" class="ny">';
            }elseif($row ['city'] == "Berlin"){
                echo '<img src="../gallery/pic/berlin.jpg" class="ny">';
            }elseif($row ['city'] == "Istanbul"){
                echo '<img src="../gallery/pic/istanbul.jpg" class="ny">';
            }elseif($row ['city'] == "Barcelona"){
                echo '<img src="../gallery/pic/barcelona.jpg" class="ny">';
            }elseif($row ['city'] == "Tokyo"){
                echo '<img src="../gallery/pic/tokyo.jpg" class="ny">';
            }elseif($row ['city'] == "Hong Kong"){
                echo '<img src="../gallery/pic/hongkong.jpg" class="ny">';
            }elseif($row ['city'] == "Rome"){
                echo '<img src="../gallery/pic/rome.jpg" class="ny">';
            }elseif($row ['city'] == "Athens"){
                echo '<img src="../gallery/pic/athens.jpg" class="ny">';
            }elseif($row ['city'] == "Miami"){
                echo '<img src="../gallery/pic/miami.jpg" class="ny">';
            }elseif($row ['city'] == "Rio de Janeiro"){
                echo '<img src="../gallery/pic/rio.jpg" class="ny">';
            }elseif($row ['city'] == "San Francisco"){
                echo '<img src="../gallery/pic/san francisco.jpg" class="ny">';
            }elseif($row ['city'] == "Los Angeles"){
                echo '<img src="../gallery/pic/la.jpg" class="ny">';
            }elseif($row ['city'] == "Bali"){
                echo '<img src="../gallery/pic/bali.jpg" class="ny">';
            }elseif($row ['city'] == "Lisbon"){
                echo '<img src="../gallery/pic/lisbon.jpg" class="ny">';
            }elseif($row ['city'] == "Beijing"){
                echo '<img src="../gallery/pic/beijing.jpg" class="ny">';
            }elseif($row ['city'] == "Madrid"){
                echo '<img src="../gallery/pic/madrid.jpg" class="ny">';
            }elseif($row ['city'] == "Milano"){
                echo '<img src="../gallery/pic/milano.jpg" class="ny">';
            }elseif($row ['city'] == "Amsterdam"){
                echo '<img src="../gallery/pic/amsterdam.jpg" class="ny">';
            }elseif($row ['city'] == "Dubai"){
                echo '<img src="../gallery/pic/dubai.jpg" class="ny">';
            }
            else{
                echo "";
                
            }
            }
        
            ?>

            
</section>
</body>
</html>