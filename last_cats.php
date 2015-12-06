<?php
if(isset($_SESSION['user'])=="")
{
    header("Location: ?file=home.php");
}
$all_cats = getAllUsers($connect);

?>

<div class="row small-up-2 medium-up-3 large-up-6 users_list">
  
  <?php
  if (count($all_cats) > 0) {
    // output data of each row
  foreach ($all_cats as $cat) {
      ?>
      
      <div class="column">
       <img src="img/kicka2.jpg" class="thumbnail ava_list" alt="eror">
        <h5><?php echo $cat['firstname'];?> </span> <span> <?php echo $cat['lastname']; ?></h5>
        <a href="?file=page.php&id=<?php echo $cat['user_id'];?>" class="button small expanded hollow">visiter</a>
                                

    </div>
      
      
      <?php
    
}
} else {
    echo "0 results";
}

?>
  
    

    
</div>
<hr>