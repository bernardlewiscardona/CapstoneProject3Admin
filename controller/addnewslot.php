<?php
if(isset($_POST['submit'])){
    require_once('../model/user.class.php');
    $addParking = new parkingslot();
    $addParking ->setSlotCode($_POST['slotcode']);
    $addParking ->setSlotName($_POST['name']);
    $addParking ->setSlotStatus($_POST['status']);
    $addParking ->addNewSlot();
    echo "<script>
    alert('New Parking Slot Is Added✅!');
    document.location='../views/parkingslot.php'</script>";
}
?>