<?php
// Créez une connexion de base de données au serveur PostgreSQL.
$host = "localhost";
$port = "5432";
$dbname = "mydb";
$user = "myuser";
$password = "mypassword";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
  echo "Failed to connect to the database";
}

// Créez une requête SQL.
$result = pg_query($conn, "SELECT * FROM COMPANY");

// Exécuter la requête pour récupérer la table
while ($row = pg_fetch_assoc($result)) {
  echo "ID: " . $row['ID'] . " | NAME: " . $row['NAME'] . " | AGE: " . $row['AGE'] . " | ADDRESS: " . $row['ADDRESS'] . " | SALARY: " . $row['SALARY'] . "<br>";
}

// Fermez la connexion à la base de données.
pg_close($conn);
?>
