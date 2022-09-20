<?php

$servername = "localhost";
$username = "root1";
$password = "root";
$dbname = "orange";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//SELECT [*] FROM [TableName] WHERE [condition1] [AND [OR]] [condition2]...

$sql = "SELECT * FROM student ";

// $sql = "SELECT * FROM student Where Address_ = 'Amman' ";
// $sql = "SELECT * FROM student Where Age = 26 ";



// mysqli_query() function performs a query against a database.
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
            <th>Student iD</th>
            <th>First name</th>
            <th>Middle name</th>
            <th>Family name</th>
            <th>Date of birth</th>
            <th>Degree</th>
            <th>Major</th>
            <th>Address</th>
            <th>Age</th>
            <th>Tell number</th>




        </tr>
        <?php
        if ($result->num_rows > 0) {
            // output data of each row
            // mysqli_fetch_assoc() function fetches a result row as an associative array.
            while ($row = $result->fetch_assoc()) {
        ?>

                <tr>
                    <td><?php echo $row["StudentID"]   ?> </td>
                    <td><?php echo $row["First_name"]   ?></td>
                    <td><?php echo $row["Middle_name"]   ?></td>
                    <td><?php echo $row["Family_name"]   ?></td>
                    <td><?php echo $row["Date_of_birth"]   ?></td>
                    <td><?php echo $row["Degree"]   ?></td>
                    <td><?php echo $row["Major"]   ?></td>
                    <td><?php echo $row["Address_"]   ?></td>
                    <td><?php echo $row["Age"]   ?></td>
                    <td><?php echo $row["Tell_number"]   ?></td>
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
