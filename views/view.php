<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Schedules</title>
</head>
<?php
include("../model/user.class.php");
include('../controller/viewschedule.php');
?>
<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="d-flex flex-end gap-3">
        <div class="header_img"> <img src="https://www.w3schools.com/howto/img_avatar.png" alt=""></div>
        <h5 class="align-self-center"> Hi, Admin</h5>
        </div>
        
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo text-decoration-none"> <i class='bx bxs-car-garage nav_logo-icon'></i> <span class="nav_logo-name">Parkspace</span> </a>
                <div class="nav_list"> 
                    <a href="../index.php" class="nav_link text-decoration-none"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> 
                    <a href="./user.php" class="nav_link text-decoration-none"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                    <a href="./schedules.php" class="nav_link active text  text-decoration-none"> <i class='bx bx-calendar-check nav_icon' ></i> <span class="nav_name">All Schedule</span> </a> 
                    <a href="./parkingowner.php" class="nav_link text-decoration-none"> <i class='bx bxs-parking nav_icon'></i><span class="nav_name">Parking Owners</span> </a> 
                    <a href="./payment.php" class="nav_link text-decoration-none"> <i class='bx bx-money nav_icon' ></i> <span class="nav_name">Payment Methods</span> </a> 
                    
            </div>
            </div> 
            <a href="#" class="nav_link text-decoration-none"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <section class="main-title">
        <div class="d-flex justify-content-between align-content-center gap-3 border rounded shadow-sm p-3">
            <div class="d-flex align-items-center text-start">
                <a href="view.php"><img
                    src="https://imgd.aeplcdn.com/0x0/n/cw/ec/41406/bmw-8-series-right-front-three-quarter8.jpeg"
                    class="rounded-circle"
                    alt=""
                    style="width: 55px; height: 55px"
                    /> </a>
                <div class="ms-3">
                    <p class="fw-bold mb-1 fs-3"><?= $val['userFirstname']?> <?= $val['userLastName']?></p>
                    <p class="text-muted mb-0"><?= $val['PlateNumber']?></p>
                </div>
                </div>
            <div class="d-flex flex-wrap justify-content-between align-content-center gap-5">
                <div class=" pe-3">
                    <h3></h3>
                    <p class="text-muted"></p>
                </div>
                <div class=" pe-3">
                    <h3></h3>
                    <p class="text-muted"></p>
                </div>
                <div>
                    <h3>500 PHP</h3>
                    <p class="text-muted">Amount Payable</p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-3">
    <div class="">
        <div class=" container d-flex justify-content-between align-content-center gap-3 p-3 ">
            <div class="p-5 rounded border rounded shadow-sm" >
                <h4 class="mb-4"><i class='bx bxs-contact text-primary bx-sm'></i> Car & Personal Information</h4>
                <div class="d-flex gap-5">
                    <table>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>FirstName:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4"><?= $val['userFirstname']?></td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Contact Number:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4"><?= $val['ContactNumber']?></td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Email:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4"><?= $val['userEmail']?></td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Car Description:</h6></td>
                            <td class="col-3 fw-semibold text-end fs-4"><?= $val['Description']?></td>
                        </tr>
                    </table>
                    <table>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>LastName:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4"><?= $val['userLastName']?></td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Plate Number:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4"><?= $val['PlateNumber']?></td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Plan:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4"><?= $val['Plan']?> Month/s</td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Payment:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4"><?= $val['PaymentMethod']?></td>
                        </tr>
                    </table>
                </div>
                
            </div>
            <div>
                <div class="p-5 mt-2 rounded border rounded shadow-sm">
                    <h3 class="text-center"><i class='bx bxs-parking text-primary'></i>Parking Space</h3>
                    <div class="d-flex justify-content-around align-items-center p-3 gap-3">
                        <div class="p-3 bg-light">
                            <h6 class="text-muted">Parking Slot Code:</h6>
                            <h6 class="text-center"><?= $val['Slot']?></h6>
                        </div>
                    </div>
                    <div class="p-3 text-center">
                            <h6 class="text-muted">Parking Owner Name: </h6>
                            <h6 class="text-center"><?= $val['clientFirstName']?> <?= $val['clientLastName']?></h6>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </section>
</body>
<script src="../public/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>