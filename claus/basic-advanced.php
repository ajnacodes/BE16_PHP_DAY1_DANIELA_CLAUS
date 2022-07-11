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

   $composers = array( "Playlist" =>
      ["Soli" => "Adriano Celentano",
      "Fils de joie" => "Stomae",
      "Nocturnes, Op. 55: No. 1 in F Minor" => "Frederic Chopin",
      "Cry me a river" => "Ella Fitzgerald",
      "Retrograde" => "James Blake"]
   );

   echo "<p>The song Soli is composed by {$composers["Playlist"]["Soli"]}.<p> <br>";
   echo "<p>The song Fils de joie is composed by {$composers["Playlist"]["Fils de joie"]}.<p> <br>";
   echo "<p>The song Nocturnes, Op. 55: No. 1 in F Minor is composed by {$composers["Playlist"]["Nocturnes, Op. 55: No. 1 in F Minor"]}.<p> <br>";
   echo "<p>The song Cry me a river is composed by {$composers["Playlist"]["Cry me a river"]}.<p> <br>";
   echo "<p>The song Retrograde is composed by {$composers["Playlist"]["Retrograde"]}.<p> <br>";




   // var_dump( $GLOBALS )

   
   ?>

   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>