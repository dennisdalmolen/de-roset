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
                        <div class="menu-text-active-new">Inloggen</div>
                    </a>
                    <a href="registreer.php">
                        <div class="menu-text-new">Registreren</div>
                    </a>
                    <a href="gegevens.php">
                        <div class="menu-text-new">Gegevens</div>
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

    <?php
    session_start();
    ?>

    <div class="login form-signin">

        <?php
        $msg = '';

        if (
            isset($_POST['login']) && !empty($_POST['email'])
            && !empty($_POST['wachtwoord'])
        ) {

            if (
                $_POST['email'] == "dennisssdalmolennn@gmail.com" &&
                $_POST['wachtwoord'] == "wachtwoord"
            ) {
                $_SESSION['valid'] = true;
                $_SESSION['timeout'] = time();
                $_SESSION['username'] = '1234';

                header("location: gegevens.php");
            } else {
                $msg = 'Verkeerde email of wachtwoord';
            }
        }
        ?>
    </div>

    <div class="login">

        <form class="form-signin" role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h2>Login.</h2>
            <h4 class="form-signin-heading"><?php echo $msg; ?></h4>
            <input type="text" class="form-control" name="email" placeholder="Voer je email in." required autofocus></br>
            <input type="text" class="form-control" name="wachtwoord" placeholder="Voer je wachtwoord in." required>
            <button class="btn btn-lg btn-primary btn-block" style="margin-top: 15px; margin-bottom: 5px;" type="submit" name="login">Login</button>
        </form>

    </div>

    <div class="inlog-extra">⠀</div>

</body>

</html>