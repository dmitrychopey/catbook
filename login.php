<?php


include_once 'connect.php';
$connect = new PDO("mysql:host=$host;dbname=$dbname", $login, $password);
if(isset($_SESSION['user'])!="")
{
    header("Location: ?file=home.php");
}


if(isset($_POST['btn-login']))
{
    $email = $_POST['email'];
    $upass = $_POST['password'];
    $sql="SELECT * FROM users WHERE email='$email'";

    $sth = $connect -> prepare($sql);

    $sth -> execute();

    $row = $sth->fetch(PDO::FETCH_ASSOC);

    if($row['password']==md5($upass))
    {
        $_SESSION['user'] = $row['user_id'];
        $location = "Location: ?file=page.php&id=".$row['user_id'];
        
        header($location);
    }
    else
    {
        ?>
        <script>alert('wrong details');</script>
        <?php
    }

}

?>



<div class="reg-form text-center">
    <form name="registration" method="post">
        <div class="row">
            <div class="small-8 columns small-centered text-center">
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="right inline">E-mail</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" name="email" id="right-label" placeholder="Enter your email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="small-3 columns">
                        <label for="right-label" class="right inline">Password</label>
                    </div>
                    <div class="small-9 columns">
                        <input type="text" name="password" id="right-label" placeholder="Enter your password" required>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" name="btn-login">
        <!--  <a href="#" onclick="document.forms['registration'].submit(); return false;" class="button large">Inscription</a>-->
    </form>
</div>