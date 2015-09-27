<?php
function getname($Record, $var)
{

// $Record = 1; //need the post info here
// $var = "R1_FileName";

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "select * from animals.t_main2 where ID = " . $Record;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row

    while($row = $result->fetch_assoc()) {
        echo $row[$var];
    }
} else {

}

// Close connection

mysqli_close($conn);

}

function calcScore($points, $response) {

}

?>