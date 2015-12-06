<?php
if(isset($_SESSION['user'])=="")
{
    header("Location: ?file=home.php");
}


    $sender = getUser($_SESSION['user'], $connect);
    $receiver = getUser($_GET['receiver'], $connect);


if(isset($_POST['btn-send']))
{
   $s_user_id = $_POST['s_user_id'];
$r_user_id = $_POST['r_user_id'];
$title = $_POST['title'];
$text = $_POST['text'];


$sql = "INSERT INTO messages(s_user_id,r_user_id,title, text) VALUES($s_user_id,$r_user_id,'$title','$text')";
$result = $connect->exec($sql);

if ($result) {
    ?>
    <script>alert('successfully');</script>
    <?php
    header("Location: ?file=messages.php");
} else {
    ?>
    <script>alert('error while registering you...');</script>

    <?php
    
}

}


?>

<div class="reg-form text-center">
<form name="messaging" method="post">
  <div class="row">
    <div class="small-8 columns small-centered text-center">
      <div class="row">
        <div class="small-12 columns text-left">
             Récepteur:
          <input type="text" name="receiver" id="right-label" value="<?php echo $receiver['firstname']." ".$receiver['lastname']; ?>" disabled>
        </div>
      </div>
       <div class="row">
        <div class="small-12 columns text-left">
             Titre:
          <input type="text" name="title" id="right-label" placeholder="Enter title here" required>
        </div>
      </div>
       <div class="row">
         <div class="small-12 columns text-left">
             Texte:
          <input type="text" name="text" id="right-label" placeholder="Enter your texte" required>
            <input type="hidden" name="r_user_id" value="<?php echo $receiver['user_id']; ?>">
            <input type="hidden" name="s_user_id" value="<?php echo $sender['user_id']; ?>">
            

        </div>
      </div>
    </div>
  </div>
    <input type="submit"  name="btn-send">
</form>
   </div>