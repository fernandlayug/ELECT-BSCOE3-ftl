<?php 
// echo "<br>";
// echo "Comparing String";
// echo "<br>";
// $firstletter = "a";
// $secondletter = "A";
// if($secondletter > $firstletter)
// echo "<p> The second letter occurs later in the alphabet than the first letter.</p>";
// else
// echo "<p> The second letter occurs earlier in the alphabet than the first letter.</p>";
// echo "<br>";
// echo "<br>";

// echo "String Comparison Functions";
// echo "<br>";
// $strcomparison = strcasecmp("Don", "don");
// echo $strcomparison;

// echo "<br>";
// echo "<br>";

// echo "Determining the Similarity of Two Strings";
// echo "<br>";
// $Firstname = "Don";
// $Secondname = "Dan";
// echo "<p>The names \"$Firstname\" and \"$Secondname\" have " . similar_text($Firstname, $Secondname). "characters in common.</p>";
// echo "<p>You must change" . levenshtein($Firstname, $Secondname) . "character(s) to make the names \"$Firstname\" and \"$Secondname\" the same.</p>";


// echo "<br>";
// echo "<br>";


// echo "Determining Words Pronounced similarly";
// $FirstnameA = "Gosselin";
// $SecondnameA = "Dauselin";

// $FirstnameSoundsLike = soundex($FirstnameA);
// $SecondanmeSoundsLike = soundex($SecondnameA);

// If($FirstnameSoundsLike == $SecondanmeSoundsLike)
// echo "<p>The names are pronounced the same.</p>";
// else
// echo "<p> The name are not pronounced the same.</p>";

// echo "<br>";
// echo "<br>";

// $FirstnameSoundsLikeA = metaphone($FirstnameA);
// $SecondanmeSoundsLikeA = metaphone($SecondnameA);

// If($FirstnameSoundsLikeA == $SecondanmeSoundsLikeA)
// echo "<p>The names are pronounced the same.</p>";
// else
// echo "<p> The name are not pronounced the same.</p>";

// echo "<br>";
// echo "<br>";
// echo "Working with Regular Expressions";
// $String = "Course Technology";
// if(preg_match("/course technology/", $String))
// echo "<p>Match found</p>";
// else
// echo "<p>No Match</p>";
// echo "<br>";


echo "Matching any Character";

$ZIP = "2102";
if(preg_match("/..../", $ZIP) == 0 )
{
    echo "<p>Format did not match</p>";
}
else
{
echo "<p>Format match";
}


$URL = "www.google.com";
if(preg_match("/^www/", $URL) == 0 )
{
    echo "<p>Format did not match</p>";
}
else
{
echo "<p>Format match";
}


$identifier = "https://www.google.net.ph";
if(preg_match("/com$/", $identifier) == 0 ) 
{
    echo "<p>Format did not match</p>";
}
else
{
echo "<p>Format match";
}

echo "<br>";
echo "String Pattern";

$identifier = "https://www.google.com";
    if(preg_match("/com$/", $identifier) == 0 ) 
    {
        echo "<p>Format did not match</p>";
    }
    else
    {
    echo "<p>Format match";
    }
    

?>