<!DOCTYPE html>

<head>
 
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




 <!-- <?php
  
// Declare an array
$characters = array(
    "Volcanion" => "Water Absorb",
    "Flygon" => "Levitate",
    "Hippowdon" => "Sand Stream"
);
  
// Iterate through the array using foreach
// construct and store the key and its value
  
// Use foreach loop to display the
// key of allelements


foreach ($characters as $key => $value) {
    echo "
    
    <h3 class='b1nameBox' >Pokemon $key has the ability of $value\n. </h3> 
    
    ";
  
}

//   echo "  

// key = " . $key . ", value = "
// . $value . "\n  

//  ";
  
?>  -->




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