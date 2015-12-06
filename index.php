<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
session_start();
include_once 'helper.php';
  $connect = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
?>

<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Welcome to CatBook</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" type="text/css" href="css/app.css">
    <link rel="shortcut icon" type="img" href="img/favicon.ico"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
<div class="top-bar">
    <div class="row">
        <div class="top-bar-left">
            <ul class="dropdown menu" data-dropdown-menu>
                <li class="menu-text"><img src="img/logo.ico" class="logo" alt="eror"> Catbook</li>

                <li>
                    <?php
                    if(isset($_SESSION['user']) != ""){
                     
                        
                        ?>
                             <a href="?file=page.php&id=<?php echo $_SESSION['user'];?>">MyPage</a>
                          <?php
                    }else{
                        ?>
                         <a href="?file=home.php">Home</a>
                       
                        <?php
                    }
                    ?>
                    
                    </li>
               <li><a href="?file=messages.php">Mes messages</a></li>
                <li><a href="#">Amis</a></li>
                <li> <a href="?file=last_cats.php">Dernières chats</a></li>
                
              

            </ul>
        </div>
        <div class="top-bar-right">
            <ul class="menu">
               <?php if (isset($_SESSION['user']) != ""){
                            $currentUser = getUser($_SESSION['user'], $connect);
                               ?>
                          <li> <a href="#"><?php echo $currentUser['email']; ?> </a> </li>
                          <li> <a href="?file=c_logout.php">Exit</a></li>
                          <?php
                    }else{
                        ?>
                           <li> <a href="?file=login.php">Log in</a></li>
                        
                        <?php
                    }
                     
                 ?>
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
        $pieces = explode("&", $_GET['file']);
        include $pieces[0];
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