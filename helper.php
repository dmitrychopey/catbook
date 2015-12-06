<?php
include_once 'connect.php';



function getUser($id, $connect)
{

    $sql = "SELECT * FROM users WHERE user_id=$id";

    $sth = $connect->prepare($sql);

    $sth->execute();

    $row = $sth->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function getAllUsers($connect)
{

    $sql = "SELECT * FROM users";
    $sth = $connect->prepare($sql);

    $sth->execute();

    $result = $sth->fetchAll();

    return $result;
}


function isPersonalPage($id, $sessionId){
    if($id==$sessionId){
        return true;
    }
    else{
        return false;
    }
}

?>