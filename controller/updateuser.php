<?php
$data = new users();


if(isset($_POST['update'])){
    $data->setUserID($_POST['User_ID']);
    $data->setLastName($_POST['lastname']);
    $data->setFirstName($_POST['firstname']);
    $data->setEmail($_POST['email']);
    $data->setContactNumber($_POST['contactNumber']);
    $data->setUserName($_POST['username']);
    $data->setPassword($_POST['password']);
    $data->updateUser();
    echo "<script>
        alert('Record Updated!✅');
        document.location='../views/user.php';
        </script>";

}



?>