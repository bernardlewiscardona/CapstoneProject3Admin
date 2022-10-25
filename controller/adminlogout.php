<?php

session_start();

session_destroy();

header("Location: ../views/loginadmin.php");
exit;
?>