<?php 
// echo "Parsing using strpos()";
// echo "<br>";
// $email = "layug.fernand@auf.edu.ph";
// echo strpos($email, '@');

// echo "<br>";
// if(strpos($email,'@') !== FALSE)
// echo "<p>The e-mail address contains an @ character.</p>";
// else
// echo "<p>The e-mail address does not contains an @ character.</p>";
// echo "<p>The e-mail address contains an @ character.</p>";
// echo "<br>";
// echo "<br>";
// echo "Parsing using strrchr()";
// echo "<p> The top-level domain of the e-mail address is " . strrchr($email, '.') . "</p>";
// echo "<br>";
// echo "<br>";

// $emailaddress = array(
//     "juandelacruz@php.com",
//     "mary.smith.mail.ph",
//     "jane.doe@example",
//     "peter.doe@auf.edu.ph"
// );

// function validateAddress($Address){
// if (strpos($Address,'@') !== FALSE && strpos($Address, '.') !==FALSE)
// return TRUE;
// else
// return FALSE;
// }

// foreach($emailaddress as $Address) {
//     if(validateAddress($Address) == FALSE)
//     echo "<p> THe e-mail address $Address does not appear to be valid</p>";
// }
// $email = "layug.fernand@auf";
// if(filter_var($email, FILTER_VALIDATE_EMAIL)){
//     echo("$email is a valid email address");
//     }
//     else{
//         echo ("$email is not valid e-mail address");
//     }

// $email = "layug.fernand@auf.edu.ph";
// $newemail = str_replace("edu", "com", $email);
// echo $newemail;
// $email="layug.fernand@auf.edu.ph";

// $nameEnd = strpos($email, '@');

// $newemail= substr_replace($email,"fernnad",0, $nameEnd);
// echo $newemail;
// $courses = "BSCOE;BSIT;BSCS;BSIS";
// $separatedcourses = strtok($courses, ";");

// while ($separatedcourses != NULL) {
//     echo "$separatedcourses<br/>";
//     $separatedcourses = strtok(";");
// }


$courses = "BSCOE;BSIT;BSCS;BSIS";

$coursearray=explode(";", $courses);
foreach ($coursearray as $course){
    echo "$course<br />";
}
?>