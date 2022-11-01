<?php

require 'database.php';

$id = $_GET["id"];

$sql = "SELECT * FROM users WHERE id = $id LIMIT 1";

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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
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
                        <form action="gegevens-update-verwerk.php" method="post">

                            <?php foreach ($users as $user) : ?>

                                <input type="hidden" name="id" value="<?php echo $user["id"] ?>">

                                <div class="form-group">
                                    <div class="form-left">
                                        <label for="voornaam">Voornaam</label>
                                    </div>
                                    <div class="form-right">
                                        <input type="text" name="voornaam" id="firstname" value="<?php echo $user["firstname"] ?>">
                                    </div>
                                </div>
                                <div class=" form-group">
                                    <div class="form-left">
                                        <label for="achternaam">Achternaam</label>
                                    </div>
                                    <div class="form-right">
                                        <input type="text" name="achternaam" id="lastname" value="<?php echo $user["lastname"] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-left">
                                        <label for="email">Email</label>
                                    </div>
                                    <div class="form-right">
                                        <input type="email" name="email" id="email" value="<?php echo $user["email"] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-left">
                                        <label for="wachtwoord">Wachtwoord</label>
                                    </div>
                                    <div class="form-right">
                                        <input type="text" name="wachtwoord" id="password" value="<?php echo $user["password"] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-left">
                                        <label for="telefoonnummer">Telefoonnummer</label>
                                    </div>
                                    <div class="form-right">
                                        <input type="text" name="telefoonnummer" id="phonenumber" value="<?php echo $user["phonenumber"] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-left">
                                        <label for="geboortedatum">Geboortedatum</label>
                                    </div>
                                    <div class="form-right">
                                        <input type="date" name="geboortedatum" id="date_of_birth" value="<?php echo $user["date_of_birth"] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-left">
                                        <label for="geboortedatum">Adress</label>
                                    </div>
                                    <div class="form-right">
                                        <input type="text" name="geboortedatum" id="adresss" value="<?php echo $user["adresss"] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-left">
                                        <label for="geboortedatum">Postcode</label>
                                    </div>
                                    <div class="form-right">
                                        <input type="text" name="geboortedatum" id="zipcode" value="<?php echo $user["zipcode"] ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-left">
                                        <label for="geboortedatum">Stad</label>
                                    </div>
                                    <div class="form-right">
                                        <input type="text" name="geboortedatum" id="city" value="<?php echo $user["city"] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="form-left">
                                    </div>
                                    <div class="form-right">
                                        <button type="submit" class="btn btn-info" name="submit">Update gebruiker!</button>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </form>
                </div>
            </div>

        </div>

    </div>

</body>