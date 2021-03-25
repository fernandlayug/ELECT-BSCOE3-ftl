<!DOCTYPE html>
<html>
    <head>
    <title>PHP Arrays</title>
    </head>
    <body>

        <?php 
  
$Province = array("Pampanga","Bulacan","Tarlac","Bataan","Zambales","Nueva Ecija");
echo "$Province[0]<br />";
echo "$Province[1]<br />";
echo "$Province[2]<br />";
echo "$Province[3]<br />";
echo "$Province[4]<br />";
echo "$Province[5]<br />";

echo "Central Luzon has ", count($Province), " Provinces.";
        ?>


    </body>
    </html>