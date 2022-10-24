<?php
require_once('../model/user.class.php');
$deleteSlot= new parkingslot();
if(isset($_GET['id'])){
    $deleteSlot->setSlotID($_GET['id']);
    $deleteSlot->deleteSlot();
    echo "<script>
            alert('Parking Slot is Deleted!!❌');
            document.location='../views/parkingslot.php';
            </script>";
}



?>