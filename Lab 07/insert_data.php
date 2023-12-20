<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "ifti";


$xml = simplexml_load_file("data.xml");


$conn = new mysqli($host, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


function insertData($conn, $name, $magnitude, $distance)
{
    $name = $conn->real_escape_string($name);
    $sql = "INSERT INTO stars (name, magnitude, distance) VALUES ('$name', $magnitude, $distance)";
    if ($conn->query($sql) === TRUE) {
        echo "Record inserted successfully.<br>";
    } else {
        echo "Error inserting record: " . $conn->error . "<br>";
    }
}


for($i=0 ; $i< sizeof($xml->name) ; $i++){
    $name = $xml->name[$i] ;
    $magnitude = $xml->magnitude[$i];
    $distance = $xml->distance[$i];

    insertData($conn, $name, $magnitude, $distance);
}


$conn->close();
?>
