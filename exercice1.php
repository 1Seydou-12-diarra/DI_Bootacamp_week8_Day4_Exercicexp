<?php 

conn = psycopg2.connect(
    host="localhost",
    database="dvd",
    user="postgres",
    password="postgres")

print("Opened database successfully")
?>