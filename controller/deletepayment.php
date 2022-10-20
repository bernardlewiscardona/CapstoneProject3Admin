<?php
require_once('../model/user.class.php');
$deletePayment = new payment();
if(isset($_GET['id'])){
    $deletePayment->setPaymentID($_GET['id']);
    $deletePayment->deletePayment();
    echo "<script>
            alert('Payment is Deleted!!❌');
            document.location='../views/payment.php';
            </script>";
}


?>