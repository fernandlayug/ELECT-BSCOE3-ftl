<?php 
echo "Constructing String";
echo "<br>";
echo '<p> This is a text string using "double quote".</p>';
echo "<p> This is a text string using a 'single quote'.</p>";
echo "<br>";
echo "Concatenation assignment Operator";
echo "<br>";
echo "<br>";
$Destination = "<p>Paris ";
$Destination .= "is in France.</p>";
echo $Destination;
echo "<br>";
echo "<br>";
echo "<br>";
echo "Adding Escape Characters and Sequences";
echo "<br>";
echo '<p> This code\'s going to work</p>';
echo "<p> This code's going to work.</p>";
echo "<p> Theme: \"New Pedagogy in New Normal\"</p>";
echo "<br>";
$price = 30.00;
echo "\$$price";
echo "<br>";
echo "<br>";
echo "<br>";
echo "Simple String Syntax";
$vegetable  = "brococoli";
echo "<p> Do you have any $vegetable?</p>";
echo "<br>";
echo "<br>";
echo "Complex String Syntax";
$fruits="Apple";
echo "<p>Do you have any {$fruits}?</p>";
echo "<br>";
echo "Counting Characters and Words in a String";
$booktitle="John Wick";
echo "<p>The movie title contains " . strlen($booktitle) . " word</p>";
echo "<br>";
echo "<br>";
echo "Counting Characters and Words in a String";
$booktitle="John Wick";
echo "<p>The movie title contains " . str_word_count($booktitle) . " word</p>";
echo "<br>";
echo "<br>";
$sampletext = "tHIs SenteNce is In DIFFerent teXT CasE.";
echo "<br>";
echo "<h3> Confusing Text</h3><br>";
echo "UPPER CASE: " . strtoupper($sampletext) . "<br>";
echo "lower case: " . strtolower($sampletext) . "<br>";
echo "<br>";
echo "lower case: " . ucfirst($sampletext) . "<br>";
echo "<br>";
echo "lower case: " . lcfirst($sampletext) . "<br>";

$lowertextcase = strtolower($sampletext);
$workingtext = ucwords($lowertextcase);
echo $workingtext;
echo "<br>";
echo "<br>";
$uppertextcase = strtoupper($sampletext);
$workingtext2 = ucwords($uppertextcase);
echo $workingtext2;
?>

