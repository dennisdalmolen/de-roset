<?php

session_start();

include "database.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data)
    {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;
    }

    $email = validate($_POST['email']);

    $pass = validate($_POST['password']);

    if (empty($email)) {

        header("Location: inlog.php?error=Email is vereist");

        exit();
    } else if (empty($pass)) {

        header("Location: inlog.php?error=Wachtwoord is vereist");

        exit();
    } else {

        $sql = "SELECT * FROM users WHERE email='$email' AND 'password'='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 50) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email && $row['password'] === $pass) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['password'] = $row['id'];

                header("Location: index.php");

                exit();
            } else {

                header("Location: inlog.php?error=Verkeerde email en of wachtwoord!");

                exit();
            }
        } else {

            header("Location: inlog.php?error=Verkeerde email en of wachtwoord!");

            exit();
        }
    }
} else {

    header("Location: gelukt.php");

    exit();
}
