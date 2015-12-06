<?php
if(isset($_SESSION['user'])=="")
{
    header("Location: ?file=home.php");
}


    $sender = getUser($_SESSION['user'], $connect);
    $receiver = getUser($_GET['receiver'], $connect);
?>
<div class="reg-form text-center">
<form name="registration" method="post" action="c_registration.php">
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
          <input type="text" name="firstname" id="right-label" placeholder="Enter title here" required>
        </div>
      </div>
       <div class="row">
         <div class="small-12 columns text-left">
             Texte:
          <input type="text" name="firstname" id="right-label" placeholder="Enter your texte" required>
            <input type="hidden" name="r_user_id" value="<?php echo $receiver['user_id']; ?>">
            <input type="hidden" name="s_user_id" value="<?php echo $sender['user_id']; ?>">
            

        </div>
      </div>
    </div>
  </div>
    <input type="submit">
</form>
   </div>