<?php 
// Créez une connexion de base de données au serveur PostgreSQL
$conn = pg_connect("host=localhost dbname=mydatabase user=postgres password=mypassword");

// Créez une requête SQL pour l'insertion.
$sql = "INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (1, 'Paul', 32, 'California', 20000.00 );

        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (2, 'Allen', 25, 'Texas', 15000.00 );

        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

        INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
        VALUES (4, 'Mark', 25, 'Rich-Mond ', 65000.00 );";

// Exécuter la requête à insérer dans la table
$result = pg_query($conn, $sql);

// Fermez la connexion à la base de données
pg_close($conn);

?>