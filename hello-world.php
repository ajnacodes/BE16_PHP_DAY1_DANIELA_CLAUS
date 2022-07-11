<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Classwork</title>
       <link rel="stylesheet" href="style.css">
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
   $GLOBALS['fullName'] = $GLOBALS['name'].' '.$GLOBALS['surName'];
   return $GLOBALS['fullName'];
}
echo "<h1 class='middle'>" . printName() . "</h1>";

echo "<h1> Hello, my name is " . printName() . " and I am {$age} years old. I work as a {$jobTitle}." . "</h1><br>";

// CLASSWORK 3

$players = ["Mark", "John", "Georg", "Lisa"];

echo "<h4>The third player in the team is {$players[2]}<h4>";

// ADVANCED 1

$composer = array(
   "Soli" => "Adriano Celentano",
   "Fils de joie" => "Stomae",
   "Nocturnes, Op. 55: No. 1 in F Minor" => "Frederic Chopin",
   "Cry me a river" => "Ella Fitzgerald",
   "Retrograde" => "James Blake"
);

foreach($composer as $arrKey=>$arrVal) {echo "<p>The song {$arrKey} is composed by {$arrVal}<p>";};

// echo $fullName;

// $array = [1,2,3,4,5,6,7,8,9];
// echo count($array);

/*echo '<br>';//it insert a line break 

var_dump( $GLOBALS );*/ ?>
   </body>
</html>