<!DOCTYPE html >
<head>
<title>Functions</title>
</head>
<body>
<?php

/*
function name_of_function(parameters)
{ 
    statements;
}
*/


/*
function displayCourse($Course1, $Course2, $Course3)

{  
    echo "Courses Offered" . BR;
    echo "Computer Studies: " . $Course1 . BR;
    echo $Course2 . BR;
    echo $Course3 . BR; 
}

displayCourse("BSIS", "BSIT", "BSCS");

function displayCourse2 ($Course1, $Course2, $Course3)
{
    return $Course1;
    return $Course2;
    return $Course3;

    echo BR;
}

echo displayCourse2("BSIS", "BSIT", "BSCS");
echo BR;

function averageNumber($a, $b, $c)
{
    $SumofNumbers = $a + $b + $c;
    $result = $SumofNumbers / 3;

    return $result;
   
}
echo averageNumber(90, 98, 85);

*/

/*
$a = 50;
$b = 25;

function addition()
{
$GLOBALS['c'] = $GLOBALS ['a'] + $GLOBALS['b'];
}

addition();
echo $c;
*/
/*
if( Conditional Statement)
{
Statement
}

*/

// $Value =  70;

// if ($Value >= 75)

// {
//     echo "<p> PASSED</p>";

//     $a = 5;
//     $b = 10;

//     $c = $a + $b;

//     echo $c;

// }

//      else

// {
//     echo "<p> FAILED.</p>";


// }

// echo "<p> This statement always executes after the if statement.</p>";

// $oldpassword = "a";
// $password = "a";

// $new_password = "aa";
// $confirm_password = "aa";

// if($oldpassword == $password)
// if($new_password == $confirm_password)
// {
//     echo "Change Password accepted";
// }

// $SalesTotal = 40;
// if ($SalesTotal >= 50)
// if ($SalesTotal <=100)
// echo "The Sales Total is between 50 and 100.";
// $age = 33;
// if ($age < 30)
// {
//     // code is executed if the expression1 evaluates TRUE
//     echo "Your age is less than 30!";
// }
// elseif ($age > 30 && $age <40)
// {
//     // code is executed if the expression2 evaluates TRUE
//     echo "Your age is between 30 and 40";
// }
// elseif ($age > 40 && $age < 50)
// {
//     // code is executed if the expression3 evaluates TRUE
//     echo "Your age is between 40 and 50";
// }
// else
// {
//     //code is executed if the the expression1, expression2, expression3 evaluates to FALSE
//     echo "Your age is greater 50";
// }
$site = "Business";
switch ($site)
{
    case 'Business':
        echo "My favourite site is business.com!";
        $a = 55;
        $b = 10;
        $c = $a + $b;
        echo $c;
        break;

    case 'Code':
        echo "My favourite site is code.com!";
        break;

    case 'Music':
        echo "My favourite site is music.com!";
        break;
        
    case 'Video':
        echo "My favourite site is video.com!";
        break;
        
    case 'Photography':
        echo "My favourite site is photography.com!";
        break;

    default:
    echo "I like everything at site";
}

?>
</body>
</html>