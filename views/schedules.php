<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
if (isset($_SESSION["admin_id"])) {
    
    
}
else{
    header("Location: views/404.php");
}
?>
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
    require_once("../model/user.class.php");
    $allBooks = new book();
    $Books =  $allBooks ->getAllBooks();
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
                    <a href="./parkingslot.php" class="nav_link text-decoration-none"> <i class='bx bxs-car-garage nav_icon'></i> <span class="nav_name">Parking Slot</span> </a>
            </div>
            </div> 
            <a href="#" class="nav_link text-decoration-none"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <section class="main-title p-5">
        <div class="d-flex justify-content-between align-content-center gap-3">
            <h2 class="">All Book Schedules</h2>
            <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bx-plus-circle me-2" ></i>Book Parking</button> -->
            <!-- Button trigger modal -->

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Book Parking</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                <!-- Name input -->
                        <div class="form-outline my-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Current User</option>
                            <option value="">One</option>
                        </select>
                        <label class="form-label" for="form4Example1">Registered User</label>
                        </div>

                        <div class="form-outline my-4">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Select Current Parking Owner</option>
                            <option value="">One</option>
                        </select>
                        <label class="form-label" for="form4Example1">Registered Parking Owner</label>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address"/>
                            <label class="form-label" for="form4Example2">Email address</label>
                        </div>
                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="contactNumber" placeholder="Enter Your Contact Number"/>
                            <label class="form-label" for="form4Example2">Contact Number</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="username" placeholder="Enter Your Username"/>
                            <label class="form-label" for="form4Example2">Username</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="password" placeholder="Enter Your Password"/>
                            <label class="form-label" for="form4Example2">Password</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-block mb-4" value="submit" name="submit">Add User</button>
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
                    <th>Book ID</th>
                    <th>Full Name</th>
                    <th>Car Information</th>
                    <th>Chosen Plan</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($Books === null){
                    echo '<script>alert("No Records")</script>';                   
                } else{?>
                <?php foreach($Books as $book){?>
                    <tr>
                    <td>
                    <?= $book['BookID']?>
                    </td>
                    <td>
                    <div class="d-flex align-items-center">
                        <a href="view.php?id=<?= $book['BookID']?>"><img
                            src="https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png"
                            class="rounded-circle"
                            alt=""
                            style="width: 45px; height: 45px"
                            /> </a>
                        <div class="ms-3">
                            <p class="fw-bold mb-1"><?= $book['userFirstname']?> <?= $book['userLastName']?></p>
                            <p class="text-muted mb-0"><?= $book['userEmail']?></p>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1"><?= $book['PlateNumber']?></p>
                        <p class="text-muted mb-0"><?= $book['Description']?></p>
                    </td>
                    <td><?= $book['Plan']?> Month/s</td>
                    <td>        
                        <a href="../controller/deletebook.php?id=<?= $book['BookID']?>" class="text-danger"><i class='bx bxs-trash-alt bx-md'></i></a>
                    </td>
                    </tr>
                </tbody>
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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>
