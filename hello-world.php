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

   <?php

 /*
 
 // CLASSWORK 1 + 2

   $name = 'Claus';
   $surName = 'Mersch';
   $fullName;
   $age = 33;
   $jobTitle = "Fachreferent";
   //variables

   function printName()
   {
      $GLOBALS['fullName'] = $GLOBALS['name'] . ' ' . $GLOBALS['surName'];
      return $GLOBALS['fullName'];
   }
   echo "<h1 class='middle'>" . printName() . "</h1>";

   echo "<h1> Hello, my name is " . printName() . " and I am {$age} years old. I work as a {$jobTitle}." . "</h1><br>";

   // CLASSWORK 3

   // $players = ["Mark", "John", "Georg", "Lisa"];

   // echo "<h4>The third player in the team is {$players[2]}<h4>";

   $players = [
      "name" => [
         "1" => "Mark",
         "2" => "John",
         "3" => "Georg",
         "4" => "Lisa"
      ]
   ];
   echo "
<h3>
The third player in the team is {$players["name"]["3"]}.
</h3>
";

   // ADVANCED 1

   $composer = array(
      "Soli" => "Adriano Celentano",
      "Fils de joie" => "Stomae",
      "Nocturnes, Op. 55: No. 1 in F Minor" => "Frederic Chopin",
      "Cry me a river" => "Ella Fitzgerald",
      "Retrograde" => "James Blake"
   );

   foreach ($composer as $arrKey => $arrVal) {
      echo "<p>The song {$arrKey} is composed by {$arrVal}<p>";
   };

*/

   /* This chapter will be Project-based. We will create a Car rental agency. 

The Car agency should show the availability of the cars, the make, and models of the cars, price, and location of the specific rental place.

The second thing you need to do is to create user-friendly GUI rendering. You should use Bootstrap elements to create GUI for this project. Come up with an idea of which data you would like to present and which pages (forms, tables) you need in your GUI part and create them.  */

   /*echo '<br>';//it insert a line break 

var_dump( $GLOBALS );*/

   $cars = [
      "vw" => [
         "model" => "Golf",
         "built" => 2020,
         "price" => 80,
         "location" => "Vienna",
         "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/2020_Volkswagen_Golf_Style_1.5_Front.jpg/2880px-2020_Volkswagen_Golf_Style_1.5_Front.jpg"
      ],
      "skoda" => [
         "model" => "Octavia",
         "built" => 2021,
         "price" => 60,
         "location" => "Graz",
         "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Skoda_Octavia_IV_Combi_IMG_2795.jpg/2560px-Skoda_Octavia_IV_Combi_IMG_2795.jpg"
      ],
      "bmw" => [
         "model" => "3er",
         "built" => 2018,
         "price" => 95,
         "location" => "Salzburg",
         "img" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/6d/2004_BMW_320_CD_Sport_2.0.jpg/2560px-2004_BMW_320_CD_Sport_2.0.jpg"
      ],
      "tesla" => [
         "model" => "Model 3",
         "built" => 2022,
         "price" => 45,
         "location" => "Linz",
         "img" => "https://upload.wikimedia.org/wikipedia/commons/8/83/Tesla_Model_3_parked%2C_front_driver_side.jpg"
      ]
   ];
   echo "
      <div class='container'>
      <div class='row row-cols-1 row-cols-md-3 g-4 py-5'>
   ";

   foreach ($cars as $multArr => $subArray) {
      // foreach ($out as $keyIn => $value) {
         echo "
         <div class='col'>
         <div class='card' style='width: 18rem;'>
         <img src='{$subArray['img']}' class='card-img-top' alt='...'>
         <div class='card-body'>
            <h5 class='card-title'>{$multArr} - {$subArray['model']}</h5>
            <hr>
            <p class='card-text'>Built in: {$subArray['built']}</p>
            <p class='card-text'>Price: {$subArray['price']}</p>
            <p class='card-text'>Current Location: {$subArray['location']}</p>
            <hr>
            <a href='#' class='btn btn-primary'>Go somewhere</a>
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