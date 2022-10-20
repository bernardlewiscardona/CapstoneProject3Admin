<?php
if(isset($_POST['submit'])){
    require_once('../model/user.class.php');
    $addClient = new client();
    $addClient->setLastName($_POST['lastname']);
    $addClient->setFirstName($_POST['firstname']);
    $addClient->setEmail($_POST['email']);
    $addClient->setContactNumber($_POST['contactNumber']);
    $addClient->setUserName($_POST['username']);
    $addClient->setPassword($_POST['password']);
    $addClient->setCompany($_POST['company']);
    $addClient->setPosition($_POST['position']);
    $addClient->addNewClient();
    echo "<script>
    alert('New Parking Owner Is Added✅!');
    document.location='../views/parkingowner.php'</script>";
}
?>