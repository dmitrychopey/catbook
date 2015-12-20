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


function getUserMessages($id, $connect){
    
     $sql = "SELECT * FROM messages WHERE r_user_id = $id";
    $sth = $connect->prepare($sql);

    $sth->execute();

    $result = $sth->fetchAll();

    return $result;
}


function getUserPosts($id, $connect){
    
    $sql = "SELECT * FROM posts WHERE r_user_id = $id ORDER BY post_id DESC";
    $sth = $connect->prepare($sql);

    $sth->execute();

    $result = $sth->fetchAll();

    return $result;
}

function getUsersPhoto($id, $connect){

  $sql = "SELECT * FROM images WHERE user_id=$id";

    $sth = $connect->prepare($sql);

    $sth->execute();

    $row = $sth->fetch(PDO::FETCH_ASSOC);

    return $row;

}


function deleteUsersPhoto($id, $connect){
    $sql = "DELETE FROM images WHERE user_id=$id";

    $sth = $connect->prepare($sql);

    $sth->execute();
    
}

?>