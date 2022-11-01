<?php require 'database.php'; ?>

<?php

session_start();

$conn = mysqli_connect($host, $dbuser, $dbpass, $dbname);

if ($_SESSION['valid'] != true) {
    header("location: inlog.php");
    exit;
}

$sql = "SELECT * FROM users ";

if ($resultaat = mysqli_query($conn, $sql)) {
    $users = mysqli_fetch_all($resultaat, MYSQLI_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ijssalon in Castricum die bezorgt door heel Noord-Holland">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <title>De Roset</title>

</head>

<header>

    <div class="header-group">
        <div class="header-left">
            <img src="images/rosetlogo.png" alt="">
        </div>
        <div class="header-new">
            <div class="header-right">
                <nav>
                    <a href="index.php">
                        <div class="menu-text">Over Ons</div>
                    </a>
                    <a href="bestellen.php">
                        <div class="menu-text">Bestellen</div>
                    </a>
                    <a href="blog.php">
                        <div class="menu-text">Blog</div>
                    </a>
                    <a href="contact.php">
                        <div class="menu-text">Contact</div>
                    </a>
                    <a href="winkelmandje.php">
                        <div class="menu-text">Winkelmandje</div>
                    </a>
                </nav>
            </div>
            <div class="header-right-new">
                <nav>
                    <a href="inlog.php">
                        <div class="menu-text-new">Inloggen</div>
                    </a>
                    <a href="registreer.php">
                        <div class="menu-text-new">Registreren</div>
                    </a>
                    <a href="gegevens.php">
                        <div class="menu-text-active-new">Gegevens</div>
                    </a>
                    <a href="bestellingen.php">
                        <div class="menu-text-new">Bestellingen</div>
                    </a>
                    <a href="uitloggen.php">
                        <div class="menu-text-new">Uitloggen</div>
                    </a>
                </nav>
            </div>
        </div>
    </div>

</header>

<body>

    <div class="main-group">

        <div class="main-left">
            <div class="smaak-vdd">
                <div class="svdd-1">
                    <div class="main-text">
                        <h2>Smaak Van de Dag</h2>
                    </div>
                    <div class="ijs-image">
                        <img src="images/ijs-fotos/ChocolateMarshmallow-300x258.jpg" alt="">
                    </div>
                </div>
                <div class="svdd-2">
                    <div class="text-1">
                        <h3>Chocolade</h3>
                    </div>
                    <a href="#">
                        <div class="bestel-knop-1">
                            Bestel
                        </div>
                    </a>
                </div>
            </div>

            <div class="populaire-smaken">
                <div class="main-text">
                    <h2>Populaire Smaken</h2>
                </div>
                <div class="pps-group">
                    <div class="pps-item-1">
                        <div class="ijs-image">
                            <img src="images/ijs-fotos/PremiumAmarettoPeachCharlotte.jpg" alt="">
                        </div>
                        <div class="text-1">
                            <h4>Amaretto Perzik</h4>
                        </div>
                    </div>

                    <div class="pps-item-2">
                        <div class="ijs-image">
                            <img src="images/ijs-fotos/PremiumBananaPecan-300x258.jpg" alt="">
                        </div>
                        <div class="text-1">
                            <h4>Pecan Banaan</h4>
                        </div>
                    </div>

                    <div class="pps-item-3">
                        <div class="ijs-image">
                            <img src="images/ijs-fotos/PremiumMintChocolateChip-300x258.jpg" alt="">
                        </div>
                        <div class="text-1">
                            <h4>Mint Chocolade</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="main-right">

            <div class="main-main">
                <div class="main-gegevens">
                    <h2>Jouw Gegevens:</h2>
                    <table class="table">
                        <?php foreach ($users as $user) : ?>
                            <h4>Voornaam:</h4> <?php echo $user["firstname"] ?>
                            <h4>Achternaam:</h4><?php echo $user["lastname"] ?>
                            <h4>Email:</h4><?php echo $user["email"] ?>
                            <h4>Wachtwoord:</h4><?php echo $user["password"] ?>
                            <h4>Telefoonnummer:</h4><?php echo $user["phonenumber"] ?>
                            <h4>Geboortedatum:</h4><?php echo $user["date_of_birth"] ?>
                            <h4>Adress:</h4><?php echo $user["adresss"] ?>
                            <h4>Postcode:</h4><?php echo $user["zipcode"] ?>
                            <h4>Stad:</h4><?php echo $user["city"] ?>
                            <h4>Rol:</h4><?php echo $user["role"] ?>
                            <div class="gegevens-bijwerken">
                                <a href="gegevens-update.php?id=<?php echo $user["id"] ?>" class="btn btn-warning">Gegevens bijwerken!</a>
                            </div>
                        <?php endforeach; ?>
                </div>
            </div>

        </div>

    </div>

</body>