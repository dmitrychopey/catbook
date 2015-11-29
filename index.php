<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include_once 'helper.php';
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Welcome to CatBook</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text">Catbook</li>

                <li><a href="?file=home.php">Home</a></li>
                <li><a href="#">Three</a></li>
                <li class="has-submenu">
                    <a href="#">Three</a>
                    <ul class="submenu menu vertical" data-submenu>
                        <li><a href="#">One</a></li>
                        <li><a href="#">Two</a></li>
                        <li><a href="#">Three</a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
                <li><a href="#"> <?php if (isset($_SESSION['user']))

                            $connect = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
                            $currentUser = currentUser($_SESSION['user'], $connect);
                            echo $currentUser['email'];

                        ?>
                    </a>
                </li>
                <li><a href="">Exit</a> </li>
                <li><input type="search" placeholder="Search"></li>
                <li>
                    <button type="button" class="button">Search</button>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="content">
    <?php
    if (isset($_GET['file'])) {
        include $_GET['file'];
    } else {
        echo "Error! Page not faund";
    }
    ?>

</div>

<hr>
<div class="row column">
    <ul class="menu">
        <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li>
    </ul>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
<script>
    $(document).foundation();
</script>
</body>
</html>