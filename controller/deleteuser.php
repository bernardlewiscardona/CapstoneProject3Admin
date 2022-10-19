<?php
require_once('../model/user.class.php');
$deleteUser = new users();
if(isset($_GET['id'])){
    $deleteUser->setUserID($_GET['id']);
    $deleteUser->deleteUser();
    echo "<script>
            alert('User is Deleted!!❌');
            document.location='../views/user.php';
            </script>";
}



?>