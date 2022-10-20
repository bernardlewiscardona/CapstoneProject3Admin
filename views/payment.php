<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Payment Methods</title>
</head>
<?php
    require_once("../model/user.class.php");
    $allPayment = new payment();
    $Payment = $allPayment->getAllPayment();
    ?>
<?php
include("../controller/addpayment.php");
include("../controller/updatepayment.php");
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
                    <a href="./user.php" class="nav_link  text-decoration-none"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                    <a href="./schedules.php" class="nav_link text  text-decoration-none"> <i class='bx bx-calendar-check nav_icon' ></i> <span class="nav_name">All Schedule</span> </a> 
                    <a href="./parkingowner.php" class="nav_link text-decoration-none"> <i class='bx bxs-parking nav_icon'></i><span class="nav_name">Parking Owners</span> </a> 
                    <a href="./payment.php" class="nav_link text-decoration-none active"> <i class='bx bx-money nav_icon' ></i> <span class="nav_name">Payment Methods</span> </a> 
                    
            </div>
            </div> 
            <a href="#" class="nav_link text-decoration-none"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <section class="main-title p-5">
        <div class="d-flex justify-content-between align-content-center gap-3">
            <h2 class="">Payment Methods</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bx-plus-circle me-2" ></i>Add Payment</button>
            <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Payment</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                <!-- Name input -->
                <div class="form-outline my-4">
                    <input type="text"  class="form-control" name="payment_method" placeholder="Enter New Payment Method"/>
                    <label class="form-label" for="form4Example1">Payment Method</label>
                </div>
                <div class="form-outline my-4">
                    <input type="date"  class="form-control" name="createdAT" placeholder="Enter Date Created"/>
                    <label class="form-label" for="form4Example1">Date Created</label>
                </div>

                
    
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary btn-block mb-4" value="submitpayment" name="submitpayment">Add Payment</button>
            </div>
            </form>
        </div>
        </div>
        </div>
        </div>
        <div class="">
                <table class="table align-middle mb-0">
                <thead class="">
                    <tr>
                    <th>Payment ID</th>
                    <th>Type of Payment</th>
                    <th>Created At</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($Payment === null){
                    echo '<script>alert("No Records")</script>';                   
                } else{?>
                <?php foreach($Payment as $payment){?>
                    <tr>
                    <td>
                    <?= $payment['Payment_ID']?>
                    </td>
                    <td>
                    <?= $payment['Payment_Method']?>
                    </td>
                    <td>
                    <?= $payment['Created_At']?>
                    </td>
                    <td>
                        <a href="" class="text-success" data-bs-toggle="modal" data-bs-target="#UpdatePaymentModal<?= $payment['Payment_ID']?>"><i class='bx bxs-edit bx-md'></i></a>
                        
                        
                        <a href="../controller/deletepayment.php?id=<?= $payment['Payment_ID']?>" class="text-danger"><i class='bx bxs-trash-alt bx-md'></i></a>
                    </td>
                    </tr>
                </tbody>
                <!-- Modal -->
                <div class="modal fade" id="UpdatePaymentModal<?= $payment['Payment_ID']?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="UpdatePaymentModal">Update Payment ID: <?= $payment['Payment_ID']?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                        <!-- Name input -->
                        <div class="form-outline my-4">
                            <input type="hidden"  name="Payment_ID" value="<?= $payment['Payment_ID']?>">
                            <input type="text"  class="form-control" name="payment_method" value="<?= $payment['Payment_Method']?>"/>
                            <label class="form-label" for="form4Example1">Payment Method</label>
                        </div>
                        <div class="form-outline my-4">
                            <input type="date"  class="form-control" name="createdAT" value="<?= $payment['Created_At']?>"/>
                            <label class="form-label" for="form4Example1">Enter Date Created</label>
                        </div>
                        <!-- Email input -->
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block mb-4" value="updatePayment" name="updatePayment">Update Payment</button>
                    </div>
                    </form>
                    
                <?php }}?>

                </table>
            <div class="card-body"> 
            </div>
        </div>
    </section>
</body>
<script src="../public/js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>