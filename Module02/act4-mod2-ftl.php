<!DOCTYPE html>
<html>
    <head>
    <title>PHP Arithmetic Unary Operator</title>
    </head>
    <body>

        <?php 
        echo "PREFIX INCREMENT OPERATOR";
        $studentID = 100;
        $curstudentID = --$studentID;
        echo "<p>The firts student ID is ", $curstudentID, "</p>";
        $curstudentID = --$studentID;
        echo "<p>THe second student ID is ", $curstudentID, "</p>";

        echo "<br>";

        echo "POSTFIX INCREMENT OPERATOR";
        $STUDENTID = 100;
        $CURSTUDENTID = $STUDENTID--;
        echo "<p> The first student ID is ", $CURSTUDENTID, "</p>" ;
        $CURSTUDENTID = $STUDENTID--;
        echo "<p> THe second student ID is ", $CURSTUDENTID, "</p>";



        ?>


    </body>
    </html>