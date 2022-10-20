<?php
if(isset($_POST['submitpayment'])){
    require_once('../model/user.class.php');
    $addPayment = new payment();
    $addPayment ->setPaymentMethod($_POST['payment_method']);
    $addPayment ->setCreatedAt($_POST['createdAT']);
    $addPayment -> addNewPayment();
    echo "<script>
    alert('New Payment Is Added✅!');
    document.location='../views/payment.php'</script>";
}
?>