
   <?php 
   if(isset($_POST['Submit']))
   {
       $fullname = $_POST['name'];
       $edad = $_POST['age'];

       echo "User has submitted the form and entered this name: $fullname <br>";
       echo "User age is: $edad<br>";
   }
   ?>
   
<!DOCTYPE html>
<html>
    <head>
        <title>
           Registration Form
        </title>
    </head>
    <body>
        <h4>REGISTRATION FORM</h4>
        <form name="registration" action="<?php $_PHP_SELF ?>" method="post" >
        <P>Name: <input type="text" name="name" /></P>
        <P>Age: <input type="text" name="age" /></P>
       <input type="submit"name="Submit" value="Send Form" /></p>
    </form>
        </body>
   </html>
