<!DOCTYPE html>
<html>
    <head>
        <title>
            REGISTRATION FORM
        </title>
    </head>
    <body>
    
    </form>
<?php

function displayRequired($fieldname){
    echo "The field \"$fieldname\" is required.<br />";
}

function validateInput($data, $fieldname){
    global $errorCount;

    if(empty($data))
    {
        displayRequired($fieldname);
        ++$errorCount;
        $retval = "";
    }else
    {
        $retval = trim($data);
        $retval = stripslashes($retval);
    }
    return($retval);
}
$errorCount=0;

$firstname = validateInput($_POST['fname'], "Firstname");
$lastname = validateInput($_POST['lname'], "Lastname");
if ($errorCount>0)
echo "Please use the \"Back\" button to re enter the data.<br />";
else

echo "Thank you for filling out the registration form, $firstname $lastname.";


?>
         
      
        </body>
</html>