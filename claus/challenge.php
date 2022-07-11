<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Classwork</title>
   <link rel="stylesheet" href="style.css">
   <!-- CSS only -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

   <nav class="navbar navbar-expand-lg bg-info shadow">
      <div class="container-fluid">
         <a class="navbar-brand" href="#">AUTOHAUS</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               <a class="nav-link active" aria-current="page" href="#">Home</a>
               <a class="nav-link" href="#">Cars</a>
               <a class="nav-link" href="#">Pricing</a>
               <a class="nav-link disabled">AGB</a>
            </div>
         </div>
      </div>
   </nav>

   <?php

   $cars = [
      "VW" => [
         "model" => "Golf",
         "built" => 2020,
         "price" => 80,
         "location" => "Vienna",
         "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/2020_Volkswagen_Golf_Style_1.5_Front.jpg/2880px-2020_Volkswagen_Golf_Style_1.5_Front.jpg"
      ],
      "Skoda" => [
         "model" => "Octavia",
         "built" => 2021,
         "price" => 60,
         "location" => "Graz",
         "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Skoda_Octavia_IV_Combi_IMG_2795.jpg/2560px-Skoda_Octavia_IV_Combi_IMG_2795.jpg"
      ],
      "BMW" => [
         "model" => "3er",
         "built" => 2018,
         "price" => 95,
         "location" => "Salzburg",
         "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/2004_BMW_320_CD_Sport_2.0.jpg/2560px-2004_BMW_320_CD_Sport_2.0.jpg"
      ],
      "Tesla" => [
         "model" => "Model 3",
         "built" => 2022,
         "price" => 45,
         "location" => "Linz",
         "img" => "https://upload.wikimedia.org/wikipedia/commons/8/83/Tesla_Model_3_parked%2C_front_driver_side.jpg"
      ]
   ];
   echo "
      <div class='container bg-light m-5 p-5 gap-5'>
      <div class='row row-cols-1 row-cols-md-3 g-4 py-5 justify-content-around'>
   ";

   foreach ($cars as $multArr => $subArray) {
      // foreach ($out as $keyIn => $value) {
      echo "
         <div class='col'>
         <div class='card shadow' style='width: 18rem;'>
         <img src='{$subArray['img']}' class='card-img-top' alt='...'>
         <div class='card-body'>
            <h5 class='card-title'>{$multArr} - {$subArray['model']}</h5>
            <hr>
            <p class='card-text'>⚒ Built in: {$subArray['built']}</p>
            <p class='card-text'>💰 Price: {$subArray['price']}€</p>
            <p class='card-text'>📍 Current Location: {$subArray['location']}</p>
            <hr>
            <a href='#' class='btn btn-primary'>👉 Rent</a>
         </div>
         </div>
         </div>";
   };

   echo "
      </div>
      </div>
   ";


   ?>

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>