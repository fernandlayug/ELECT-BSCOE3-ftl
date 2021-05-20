<!DOCTYPE html>
<html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse:collapse;
            }
            table, td, th {
                boder: 1px solid blacks;
                padding: 5px;
            }
            th {text-align:left;}
            </style>
   </head>

    <body>
        <?php
        include('servercon.php');
        $q = intval($_GET['q']);

        $sql= "SELECT * FROM users WHERE id = '" . $q . "'";
        $result  = mysqli_query($dbconnect, $sql);

        echo "<table>
        <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        </tr>";
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['username'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($dbconnect);
        ?>
    </body>
</html>