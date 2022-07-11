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
<?php
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
?>



</body>

</html>