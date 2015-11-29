<?php
include_once 'connect.php';

if (isset($_SESSION['user']) != "") {
    header("Location: index.php?file=home.php");
}

$connect = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = md5($_POST['password']);


$sql = "INSERT INTO users(firstname,lastname,email, password) VALUES('$firstname','$lastname','$email','$password')";
$result = $connect->exec($sql);


if ($result) {
    ?>
    <script>alert('successfully registered ');</script>
    <?php
    header("Location: index.php?file=registration_complete.php");
} else {
    ?>
    <script>alert('error while registering you...');</script>

    <?php
    header("Location: index.php?file=registration.php");
}

?>