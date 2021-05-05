<?php
include('servercon.php');

$sqlstring = "UPDATE tblinfo SET email='layug@gmail.com' WHERE ID=1";

if(mysqli_query($dbconnect, $sqlstring)){
    echo "Records Updated<br>";
//mysqli_affected_rows
    $affectedrows = mysqli_affected_rows($dbconnect);
    echo "Successfully update $affectedrows record/s <br>";

    $mysqlinfo = mysqli_info($dbconnect);
    echo $mysqlinfo;

} else 
{
    echo "Unable to execute the query.  Error code " . mysqli_error($dbconnect);
}
mysqli_close($dbconnect);

?>