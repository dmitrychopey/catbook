
<?php
$user = getUser($_GET['id'], $connect);


?>

<div class="row user_content">
    <div class="medium-6 columns">
        <div class="row">
            <div class="medium-6 columns cat">
                <div><img src="img/kicka2.jpg" class="thumbnail ava" alt="eror"></div>
                <?php
                if (isPersonalPage($user['user_id'], $_SESSION['user'])){
                    ?>
                <a href="#" class="button btn_changephoto"><i class="fa fa-camera-retro"></i>  Change Photo</a>
               <?php } ?>
            </div>
            <div class="medium-6 columns texte">
                <h3><div class ="myname"><span><?php echo $user['firstname'];?> </span> <span> <?php echo $user['lastname']; ?></span> </div></h3>
                
                <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
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
        
        <div class="row">
            <div class="small-12 columns text-left">
                Texte:
                <input type="text" id="middle-label" placeholder="One fish two fish">
            </div>
        </div>
        <a href="#" class="button large expanded">Placer mes pensées!</a>
        
    </div>
</div>
