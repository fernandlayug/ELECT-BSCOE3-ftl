<!DOCTYPE html >
<head>
<title>Functions</title>
</head>
<body>
<?php

// $count = 1;
// while ($count <= 10)
// {
//     echo "$count<br />";

//     ++$count;
// }
// echo "You have printe 10 numbers.<br />";
// $count = 1;
// do {

// echo "<p> The count is equal to $count</p>";
// ++$count;

// } while($count <= 10);

$Province = array("Pampanga","Bulacan","Bataan","Zambales","Nueva Ecija", "Aurora");
// $NoOfProvince = count($Province);

// echo "$Province[0]<br />";
// echo "$Province[1]<br />";
// echo "$Province[2]<br />";
// echo "$Province[3]<br />";
// echo "$Province[4]<br />";
// echo "$Province[5]<br />";

// echo "Central Luzon has ", count($Province), " Provinces.";

// for($i=0; $i < 2; $i++)
// {
//     echo $Province[$i], "<br>";
// }

// foreach($Province as $probinsya)
// {
//     echo $probinsya. "<br>";
// }

//initialize the array
$lamborghinis =array("suv"=>"Urus", "sports"=>"Huracan", "coupe"=>"Aventador");

//find size of the array
$size=count($lamborghinis);

//gettin the array of keys/index strings
$keys=array_keys($lamborghinis);

//using the for loop
for($i=0; $i<$size; $i++)
{
    echo $lamborghinis[$keys[$i]] . " is a " . $keys[$i] . " car <br>";
}
?>
</body>
</html>