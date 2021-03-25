<!DOCTYPE html>
<html>
    <head>
    <title>Comparison and Conditional Operators</title>
    </head>
    <body>

        <?php 
        echo "Comparisons and Conditional Operators <br>";

        $age = 18;
        $address = "Bulacan";


        ($age == 18) && ($address = "Pampanga") ? $message = "You are allowed to go outside." : $message = "You are not allowd to go outside";
        echo $message;

        ?>


    </body>
    </html>