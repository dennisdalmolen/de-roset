<?php

if (isset($_POST["submit"])) {

    $id = $_POST["id"];

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

        $sql = "UPDATE users SET 
        firstname = '$firstname', 
        lastname = '$lastname', 
        email = '$email', 
        'password' = '$password',
        phonenumber =  '$phonenumber',
        date_of_birth =  '$date_of_birth',
        adresss =  '$adresss',
        zipcode =  '$zipcode',
        city = '$city' WHERE id = '$id'  ";

            // Voer de INSERT INTO STATEMENT uit
        ;


        if (mysqli_query($conn, $sql)) {
            header("location: gegevens.php");
        }

        echo "Updated successfully";
        mysqli_close($conn); // Sluit de database verbinding

    }
}
?>

<meta http-equiv="refresh" content="0; URL=gegevens.php" />