<?php

function Createdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webdev-demo";

    // create connection
    $con = mysqli_connect($servername, $username, $password);

    // Check Connection
    if (!$con) {
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if (mysqli_query($con, $sql)) {
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "

            CREATE TABLE IF NOT EXISTS formSubmit (
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                first_name VARCHAR (25) NOT NULL,
                last_name VARCHAR (25) NOT NULL,
                email VARCHAR (25),
                telephone FLOAT,
                
        ";

        if (mysqli_query($con, $sql)) {
            return $con;
        } else {
            echo "Cannot Create table...!";
        }
    } else {
        echo "Error while creating database " . mysqli_error($con);
    }
}
