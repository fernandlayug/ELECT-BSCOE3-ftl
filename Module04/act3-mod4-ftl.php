<?php 
if($_REQUEST["name"] || $_REQUEST["age"]) {
    echo "Welcome " . $_REQUEST['name']. "<br />";
    echo "Your are " . $_REQUEST['age']. " years old.<br />";
    exit();
}
?>