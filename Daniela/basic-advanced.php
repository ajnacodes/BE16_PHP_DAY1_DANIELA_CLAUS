<!DOCTYPE html>

<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

 
<link rel="stylesheet" href="styles.css">


    <title>Basic Exercise 1</title>
</head>

<body>
    
<!-- basic exercise one -->

<!-- <?php 

$name = "Daniela";

echo "

<div class='b1nameBox'>

<div class='b1name'>

<h1>$name</h1>

</div>

</div>

";

?> -->




<!-- basic exercise two -->


<!-- <?php 

$name = "Anna";

$age = "22";

$jobTitle = "Developer";

echo "

<div class='b1nameBox'>

<div class='b1name'>

<h3>Hi, my name is $name and i am $age years old. <br>
I work as a $jobTitle.
</h3>

</div>

</div>

";

?> -->




<!-- basic three -->
<!-- <?php
$players = ["name" => [
    "1" => "Mark",
    "2" => "John",
    "3" => "Georg",
    "4" => "Lisa"]
];
echo "
<div class='b1nameBox'>
<div class='b1name'>
<h3>The third player in the team is {$players["name"]["3"] }.
</h3>
</div>
</div>
";
?> -->
















<!-- ADVANCED -->




 <?php
  
// Declare an array
$characters = array(
    "Volcanion" => "Water Absorb",
    "Flygon" => "Levitate"
);

$DAcharacters = array(
        "Hippowdon" => [
        1 => "Sand Stream",
        2 => "Sand Storm"],
        "Raticate" => [
            1 => "Gluttony",
            2 => "Hustle"] 
    );
  
// Iterate through the array using foreach
// construct and store the key and its value
  
// Use foreach loop to display the
// key of allelements

echo "<div class = 'container-center'>";

echo "
    <div class = 'container justify-content-center align-items-center'>
";

foreach ($characters as $pokemon => $ability) {
    echo "
    
    <div class='card text-center'>
    <div class='card-header'>
    $pokemon
    </div>
    <div class='card-body'>
      <h5 class='card-title'></h5>
      <p class='card-text'>Pokemon $pokemon has the ability of $ability\n.</p>
   
    </div>
  </div>
  </br>
    
    ";
  
}

foreach ($DAcharacters as $pokemon => $ability) {
        echo "
        
    <div class='card text-center'>
    <div class='card-header'>
    $pokemon
    </div>
    <div class='card-body'>
      <h5 class='card-title'></h5>
      <p class='card-text'>Pokemon $pokemon has the ability of $ability[1] and $ability[2]\n.</p>
   
    </div>
  </div>

  </br>

        ";
 };

 echo " </div>";

 echo " </div>";














 
// advanced second


// $characters = array(
//     "Hippowdon" => [
//       1 => "Sand Stream",
//       2 => "Sand Storm"],
//     "Flygon" => "Levitate",
//     "Volcanion" => "Water Absorb"
// );
// // Iterate through the array using foreach
// // construct and store the key and its value
// // Use foreach loop to display the
// // key of allelements
// foreach ($characters as $key => $value) {
//     echo "
//     <h3 class='b1nameBox' >Pokemon $key has the ability of $value[1] and $value[2]\n. </h3>
//     ";
// }









//   echo "  

// key = " . $key . ", value = "
// . $value . "\n  

//  ";
  
?> 




<!-- advanced trial -->

<!-- 
<?php
  
// Declare a multi-dimensional array
$character = array(
    array("Volcanion", "Water Absorb", "Flygon"), 
    array("Levitate", "Hippowdon", "Sand Stream"),
    array("Sand Force")
);
  
// Iterate through the array using foreach
// construct and store the key and its value
  
// Use foreach loop to display the
// key of allelements
foreach ($character as $keyOut => $out) {
    foreach($out as $keyIn => $value) {
        echo "   " . $value . "   \n   ";    
    }
}
  
?> -->









</body>

</html>