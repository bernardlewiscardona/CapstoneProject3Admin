<?php
if(isset($_POST['submit'])){
    require_once('../model/user.class.php');
    $addUsers = new users();
    $addUsers->setLastName($_POST['lastname']);
    $addUsers->setFirstName($_POST['firstname']);
    $addUsers->setEmail($_POST['email']);
    $addUsers->setContactNumber($_POST['contactNumber']);
    $addUsers->setUserName($_POST['username']);
    $addUsers->setPassword($_POST['password']);
    $addUsers->addNewUser();
    echo "<script>
    alert('New Product Is Added✅!');
    document.location='../views/user.php'</script>";
}
?>