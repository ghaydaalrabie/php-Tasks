<?php

// error_reporting(0);
// ini_set('display_errors', 0);

$servername = "localhost";
$username = "root1";
$password = "root";
$dbname = "store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



// $sql1 = "INSERT INTO orders  (user_id,status,order_date, order_price) 
// VALUES ('4','shipped' , '2022-06-10' , '200' )";

// $conn->query($sql1);


// $sql2 ="DELETE FROM orders WHERE id=1";
// $conn->query($sql2);


// $sql3 = "UPDATE orders SET order_price='40' WHERE id=4";
// $conn->query($sql3);


$sql = "SELECT *
from customers
INNER JOIN orders ON  orders.user_id= customers.id
INNER JOIN emails ON  emails.id = customers.email_id ORDER BY orders.id" ;






// $sql = "DELETE FROM order WHERE id=3";


// $connection->query($sq);




$result = $conn->query($sql);


?>


<!DOCTYPE html>
<html>

<head>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body>

    <br> <br>


    <table style="width:100%">
        <tr>
            <th>First name</th>
            <th>Last name</th>
            <th>Address</th>
            <th>phone</th>
            <th>status</th>
            <th>order_date</th>
            <th>order_price</th>
            <th>email</th>






        </tr>
        <?php




        if ($result->num_rows > 0) {
            // output data of each row
            // mysqli_fetch_assoc() function fetches a result row as an associative array.
            while ($row = $result->fetch_assoc()) {
        ?>




                <tr>
                    <td><?php echo $row["firstname"]   ?> </td>
                    <td><?php echo $row["lastname"]   ?></td>
                    <td><?php echo $row["address"]   ?></td>
                    <td><?php echo $row["phone"]   ?></td>
                    <td><?php echo $row["status"]   ?></td>
                    <td><?php echo $row["order_date"]   ?></td>
                    <td><?php echo $row["order_price"]   ?></td>
                    <td><?php echo $row["email"]   ?></td>


                </tr>


        <?php


            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>





    </table>


</body>

</html>


<?php


echo "<br>";
echo "<br>";
