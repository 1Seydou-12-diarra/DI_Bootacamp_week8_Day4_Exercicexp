<?php
// Créez une connexion de base de données au serveur PostgreSQL
$dbname = "your_database_name";
$host = "localhost";
$port = "5432";
$user = "your_username";
$password = "your_password";

$conn = pg_connect("dbname=$dbname host=$host port=$port user=$user password=$password");

if (!$conn) {
  echo "Failed to connect to the database";
  exit;
}

// Créez une requête SQL
$sql = "CREATE TABLE COMPANY (
    ID      INT     PRIMARY KEY     NOT NULL,
    NAME    TEXT    NOT NULL,
    AGE     INT     NOT NULL,
    ADDRESS CHAR(50),
    SALARY  REAL
)";

// Exécuter une requête pour créer la table
$result = pg_query($conn, $sql);

if ($result) {
  echo "Table created successfully";
} else {
  echo "Error creating table: " . pg_last_error($conn);
}

// Fermez la connexion à la base de données.
pg_close($conn);
?>
