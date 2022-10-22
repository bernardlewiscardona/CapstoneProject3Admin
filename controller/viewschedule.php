<?php
$allSchedule= new book();
$schedule = $allSchedule->getAllBooks();

$data = new book();
$item_id = $_GET['id'];
$data->setBookingID($item_id);
$item = $data->getBookByID();
$val = $item[0];


?>