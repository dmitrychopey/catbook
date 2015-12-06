<?php
if(isset($_SESSION['user'])=="")
{
    header("Location: ?file=home.php");
}
$messages = getUserMessages($currentUser['user_id'], $connect);

?>

    <div class="row small-up-2 medium-up-3 large-up-6 messages_list">
    <h4>Mes messages</h4>
    
     <?php
  if (count($messages) > 0) {
    // output data of each row
  foreach ($messages as $message) {
      $sender = getUser($message["s_user_id"], $connect);
      ?>
      
    
      <div class="media-object">
        <div class="media-object-section">
            <img class="thumbnail" src="http://placehold.it/200x200">
             <a href="?file=message.php&receiver=<?php echo $sender['user_id'];?>" class="button small expanded hollow">Répondre</a>
        </div>
        <div class="media-object-section">
            <h5><?php echo $sender['firstname']." ".$sender['lastname']; ?></h5>
            <p>Title: <?php echo $message['title']?></p>
            <p><?php echo $message['text']?></p>
        </div>
          
    </div>      
      
      <?php
    
}
} else {
    echo "0 results";
}

?>
</div>


