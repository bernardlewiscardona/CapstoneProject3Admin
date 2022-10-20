<?php
$data = new client();
if(isset($_POST['update'])){
    $data->setClientID($_POST['Client_ID']);
    $data->setLastName($_POST['lastname']);
    $data->setFirstName($_POST['firstname']);
    $data->setEmail($_POST['email']);
    $data->setContactNumber($_POST['contactNumber']);
    $data->setUserName($_POST['username']);
    $data->setPassword($_POST['password']);
    $data->setCompany($_POST['company']);
    $data->setPosition($_POST['position']);
    $data->updateClient();
    echo "<script>
        alert('Parking Owner is Updated!✅');
        document.location='../views/parkingowner.php';
        </script>";

}



?>