<?php
include_once 'connect.php';



function currentUser($id, $connect)
{

    $sql = "SELECT * FROM users WHERE user_id=$id";

    $sth = $connect->prepare($sql);

    $sth->execute();

    $row = $sth->fetch(PDO::FETCH_ASSOC);

    return $row;
}

?>