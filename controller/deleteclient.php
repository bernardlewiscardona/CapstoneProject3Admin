<?php
require_once('../model/user.class.php');
$deleteClient = new client();
if(isset($_GET['id'])){
    $deleteClient ->setClientID($_GET['id']);
    $deleteClient ->deleteClient();
    echo "<script>
            alert('Client is Deleted!!❌');
            document.location='../views/parkingowner.php';
            </script>";
}



?>