<?php
require_once('../model/user.class.php');
$deleteBook = new book();
if(isset($_GET['id'])){
    $deleteBook->setBookingID($_GET['id']);
    $deleteBook->deleteBook();
    echo "<script>
            alert('Parking Schedule is Deleted!!❌');
            document.location='../views/schedules.php';
            </script>";
}



?>