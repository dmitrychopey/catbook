
<?php
if(isset($_SESSION['user'])=="")
{
    header("Location: ?file=home.php");
}

$receiver = $user = getUser($_GET['id'], $connect);


$sender = $currentUser = getUser($_SESSION['user'], $connect);



if(isset($_POST['btn-send-post']))
{
   $s_user_id = $_POST['s_user_id'];
$r_user_id = $_POST['r_user_id'];
$text = $_POST['text'];


$sql = "INSERT INTO posts(s_user_id,r_user_id, text) VALUES($s_user_id,$r_user_id,'$text')";
$result = $connect->exec($sql);

if ($result) {
    ?>
    <script>alert('successfully');</script>
    <?php
   
} else {
    ?>
    <script>alert('error while registering you...');</script>

    <?php
    
}

}




?>

<div class="row user_content">
    <div class="medium-6 columns">
        <div class="row">
            <div class="medium-6 columns cat">
            <div>
                <?php
                $avatar = getUsersPhoto($user['user_id'], $connect);
                  if($avatar['name']!="" && file_exists("user_images/".$avatar['name'])){ ?>
                  
                   <img src="user_images/<?php echo $avatar['name']?>" class="thumbnail ava" alt="eror">
                   
                   <?php
                    }else{ ?>
                    
                <img src="img/kicka2.jpg" class="thumbnail ava" alt="eror">
                
                    <?php } ?>

                 
                    </div>
                <?php
                if (isPersonalPage($user['user_id'], $_SESSION['user'])){
                    ?>
                <a href="?file=uploadimg.php&id=<?php echo $_SESSION['user'];?>" class="button btn_changephoto"><i class="fa fa-camera-retro"></i>  Change Photo</a>
               <?php } ?>
            </div>
            <div class="medium-6 columns texte">
                <h3><div class ="myname"><span><?php echo $user['firstname'];?> </span> <span> <?php echo $user['lastname']; ?></span> </div></h3>
                
                <p>Mon statut</p>
                 <a href="?file=message.php&receiver=<?php echo $user['user_id'];?>" class="button large expanded"><i class="fa fa-envelope"></i>  Send message</a>
            </div>
        </div>
        <div class="row small-up-4">
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/250x200">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/250x200">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/250x200">
            </div>
            <div class="column">
                <img class="thumbnail" src="http://placehold.it/250x200">
            </div>
        </div>
    </div>
    <div class="medium-6 large-5 columns">
        <h3>Le mur</h3>
        <p>Ici vous pouvez placer vos pensées.</p>
        
        <form name="posts" method="post">
        <div class="row">
            <div class="small-12 columns text-left">
                Texte:
                <input type="text" name="text" id="middle-label" placeholder="One fish two fish" required>
             <input type="hidden" name="r_user_id" value="<?php echo $receiver['user_id']; ?>">
            <input type="hidden" name="s_user_id" value="<?php echo $sender['user_id']; ?>">
          
            </div>
        </div>
        <!--<a href="#" class="button large expanded">Placer mes pensées!</a>-->
        <!--<a href="#" onclick="document.forms['messaging'].submit(); return false;" name="btn-send-post" class="button large expanded">Placer mes pensées!</a>-->
    <input type="submit"  name="btn-send-post">

        </form>
        
        
        <div class="posts">
               <div class="row small-up-2 medium-up-3 large-up-6 messages_list">
  
    
     <?php
     
    $posts = getUserPosts($user['user_id'],$connect);
    
  if (count($posts) > 0) {
    // output data of each row
  foreach ($posts as $post) {
      $sender = getUser($post["s_user_id"], $connect);
      ?>
      
    
      <div class="media-object">
        <div class="media-object-section">
          <img class="thumbnail small_avatar" src="img/kicka2.jpg"></a>
       
        </div>
        <div class="media-object-section">
            <h5><?php echo $sender['firstname']." ".$sender['lastname']; ?></h5>
            <p><?php echo $post['text']?></p>
        </div>
          
    </div>      
      
      <?php
    
}
} else {
    echo "0 results";
}

?>
</div>

            
         </div>
        
        
        
    </div>
</div>
