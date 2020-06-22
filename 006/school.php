<?php

$user = "root";
$pass = "";

try {
    //host is localhost; port number used in mysql is  3306; dbname is name of the db
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=3306', $user, $pass);
    //select * from 'name of table in the db'; this part of the code shows an array.
    foreach ($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}

