<?php

unset($_SESSION["user"]);

header("Location: ?file=logout.php");
?>
