<?php
if(isset($_SESSION['user'])!="")
{
    header("Location: ?file=home.php");
}
?>
<div class="reg-form text-center">
<form name="registration" method="post" action="c_registration.php">
  <div class="row">
    <div class="small-8 columns small-centered text-center">
      <div class="row">
        <div class="small-3  columns">
          <label for="right-label" class="right inline">Firstname</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="firstname" id="right-label" placeholder="Enter your firstname" required>
        </div>
      </div>
       <div class="row">
        <div class="small-3 columns">
          <label for="right-label" class="right inline">Lastname</label>
        </div>
        <div class="small-9 columns">
          <input type="text" name="lastname" id="right-label" placeholder="Enter your lastname" required>
        </div>
      </div>
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
    <input type="submit">
<!--  <a href="#" onclick="document.forms['registration'].submit(); return false;" class="button large">Inscription</a>-->
</form>
   </div>