<?php
$data = new parkingslot();
if(isset($_POST['update'])){
    $data->setSlotID($_POST['Slot_ID']);
    $data->setSlotCode($_POST['slotcode']);
    $data->setSlotStatus($_POST['status']);
    $data->updateSlot();
    echo "<script>
        alert('Slot is Updated!✅');
        document.location='../views/parkingslot.php';
        </script>";

}



?>