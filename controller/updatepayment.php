<?php
$data = new payment();
if(isset($_POST['updatePayment'])){
    $data->setPaymentID($_POST['Payment_ID']);
    $data->setPaymentMethod($_POST['payment_method']);
    $data->setCreatedAt($_POST['createdAT']);
    $data->updatePayment();
    echo "<script>
        alert('Record Updated!✅');
        document.location='../views/payment.php';
        </script>";

}



?>