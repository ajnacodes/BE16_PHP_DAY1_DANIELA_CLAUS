<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="challenge.css">

    <title>Challenge</title>
</head>
<body>


<!-- Image and text -->
<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">
   
  &nbsp;  Challenge Exercise 
  </a>
</nav>




<?php 




$cars = array(
    "BMW" => [
    "model" => "4-Series",
    "year" => "2021",
    "location" => "Sand Stream",
    "price" => "100.000",
    "image" => "https://media.ed.edmunds-media.com/bmw/4-series/2021/oem/2021_bmw_4-series_coupe_430i_fq_oem_1_1280.jpg"
  ],
    "Audi" => [
      "model" => "E-tron",
      "year" => "2021",
      "location" => "Sand Stream",
      "price" => "130.000",
      "image" => "https://ev-database.de/img/auto/Audi_e-tron_S_Sportback_2020/Audi_e-tron_S_Sportback_2020-01@2x.jpg"
    ],
        "Karma" => [
            "model" => "GSe-6",
            "year" => "2021",
            "location" => "Sand Stream",
            "price" => "80.000",
            "image" => "https://cdn.motor1.com/images/mgl/nJOeE/s1/karma-gs-6.jpg"
            ]
);





echo "<div class='myContainercenter'>";

echo "<div class='myContainer'>

";

echo "<div class='row gap-1 p-0'>";


foreach ($cars as $car => $attribute){
    echo "
<div class='col p-0'>
<div class='card' style='width: 29rem;'>
  <img class='card-img-top' style='height: 17rem;' src='{$attribute["image"]}' alt='Car image'>
  <div class='card-body'>
    <h5 class='card-title'>$car</h5>
    <p class='card-text'><b>Model: </b>{$attribute["model"]} \n</p>
    <p class='card-text'><b>Year: </b>{$attribute["year"]}\n</p>
    <p class='card-text'><b>Location: </b> {$attribute["location"]}\n</p>
    <p class='card-text'><b>Price: </b> {$attribute["price"]}\n</p>
    <a href='#' class='btn btn-outline-dark'>Buy now</a>
  </div>
</div>
</div>
";

};

echo "</div>
";

echo "</div>
";

echo "
</div>";
?>




    
</body>
</html>