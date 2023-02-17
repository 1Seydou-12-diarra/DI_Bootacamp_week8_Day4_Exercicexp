<?php 

$conn = psycopg2.connect(
    host="localhost",
    database="dvd",
    user="postgres",
    password="postgres");
    
//     $conn = pg_connect("dbname=$dbname host=$host port=$port user=$user password=$password");

// if (!$conn) {
//   echo "Opened database successfully";
//   exit;
// }

?>