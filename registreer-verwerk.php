<?php

if (isset($_POST['submit'])) {

    if (
        !empty($_POST["firstname"])
        && !empty($_POST["lastname"])
        && !empty($_POST["email"])
        && !empty($_POST["password"])
        && !empty($_POST["phonenumber"])
        && !empty($_POST["date_of_birth"])
        && !empty($_POST["adresss"])
        && !empty($_POST["zipcode"])
        && !empty($_POST["city"])

    ) {
        if (isset($_POST['submit'])) {
            //allemaal moeten ze true zijn
            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $email = trim($_POST["email"]);
            $password = $_POST["password"];
            $phonenumber = $_POST["phonenumber"];
            $date_of_birth = $_POST["date_of_birth"];
            $adresss = $_POST["adresss"];
            $zipcode = $_POST["zipcode"];
            $city = $_POST["city"];

            //database connectie
            require 'database.php';

            $sql = "INSERT INTO users (firstname, lastname, email, 'password', phonenumber, date_of_birth, adresss, zipcode, city)
            VALUES ('$firstname', '$lastname','$email', '$password', '$phonenumber', '$date_of_birth', '$adresss', '$zipcode', '$city')";;


            if (mysqli_query($conn, $sql)) {
                header("location: inlog.php");
            }

            echo "Updated successfully";
            mysqli_close($conn); // Sluit de database verbinding

        }
    }
}
