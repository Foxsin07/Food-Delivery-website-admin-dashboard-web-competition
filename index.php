<?php require_once("config.php");

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?>

<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>International Fusion Grill</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
   
   <div class="header">
       <div class="container">
            <?php include("navbar.php") ?>
           <div class="row">
           <div class="col5"></div>
                <div class="col-2">
                
                    <h1>Discover the world on your plate!</h1>
                    <p></p>
                    <a href="products.php" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/pa1.jpg">
                </div>
               
           </div>
           
       </div>
       </div>
  
         <div class="small-container">
    
        <h2 class="title">Latest Products</h2>
             <div class="row">
             	<?php get_four_products(); ?>
           </div>
           
       </div>
         
   <div class="offer">
       <div class="small-container">
           <div class="row">
           <div class="col-2">
               <img src="uploads/map.png" class="offer-img">
           </div>
           <div class="col-2">
               <p></p>
               <h1>Our location</h1>
               <small>International Fusion Grill, <br>Via Collatina, Km 12.800, 00132 Roma RM.</small>
               <br>
               <a href="https://www.google.com/maps/place/Centro+Commerciale+ROMAEST/@41.9139686,12.6589402,17z/data=!4m6!3m5!1s0x132f7c895d86c367:0x353ca710668856ee!8m2!3d41.913793!4d12.6608821!16s%2Fg%2F11byl6nn6s" class="btn">Find Now &#8594;</a>
           </div>
       </div>
       </div>
       
   </div>  

   <br>
   <br>


    <?php include("footer.php") ?>


   
