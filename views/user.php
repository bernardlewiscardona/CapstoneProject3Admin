<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>All Users</title>
</head>
<?php
    require_once("../model/user.class.php");
    $allUsers = new users();
    $Users = $allUsers->getAllUsers();
    ?>
<?php
include("../controller/adduser.php");
include("../controller/updateuser.php");
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
                    <a href="./user.php" class="nav_link active  text-decoration-none"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                    <a href="./schedules.php" class="nav_link text  text-decoration-none"> <i class='bx bx-calendar-check nav_icon' ></i> <span class="nav_name">All Schedule</span> </a> 
                    <a href="#" class="nav_link text-decoration-none"> <i class='bx bxs-parking nav_icon'></i><span class="nav_name">Book Parking</span> </a> 
                    <a href="#" class="nav_link text-decoration-none"> <i class='bx bx-money nav_icon' ></i> <span class="nav_name">Payment Methods</span> </a> 
                    
            </div>
            </div> 
            <a href="#" class="nav_link text-decoration-none"> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>
        </nav>
    </div>
    <!--Container Main start-->
    <section class="main-title p-5">
        <div class="d-flex justify-content-between align-content-center gap-3">
            <h2 class="">All Users</h2>
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bx bx-plus-circle me-2" ></i>Add User</button>
            <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New User</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST">
                <!-- Name input -->
                <div class="form-outline my-4">
                    <input type="text"  class="form-control" name="lastname" placeholder="Enter Your Last Name"/>
                    <label class="form-label" for="form4Example1">LastName</label>
                </div>

                <div class="form-outline mb-4">
                    <input type="text" class="form-control" name="firstname" placeholder="Enter Your Last Name"/>
                    <label class="form-label" for="form4Example1">Firstname</label>
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
                    <th>User ID</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Contact Number</th>
                    <th>UserName</th>
                    <th>Password</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php if($Users === null){
                    echo '<script>alert("No Records")</script>';                   
                } else{?>
                <?php foreach($Users as $user){?>
                    <tr>
                    <td>
                    <?= $user['User_ID']?>
                    </td>
                    <td>
                    <?= $user['Lastname']?>
                    </td>
                    <td>
                    <?= $user['Firstname']?>
                    </td>
                    <td><?= $user['Email']?></td>
                    <td><?= $user['Contact_Number']?></td>
                    <td><?= $user['UserName']?></td>
                    <td><?= $user['Password']?></td>
                    <td>
                        <a href="" class="text-success" data-bs-toggle="modal" data-bs-target="#UpdateModal<?= $user['User_ID']?>"><i class='bx bxs-edit bx-md'></i></a>
                        
                        
                        <a href="../controller/deleteuser.php?id=<?= $user['User_ID']?>" class="text-danger"><i class='bx bxs-trash-alt bx-md'></i></a>
                    </td>
                    </tr>
                </tbody>
                <!-- Modal -->
                <div class="modal fade" id="UpdateModal<?= $user['User_ID']?>" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="UpdateModal">Update User <?= $user['User_ID']?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                        <!-- Name input -->
                        <div class="form-outline my-4">
                            <input type="hidden"  name="User_ID" value="<?= $user['User_ID']?>">
                            <input type="text"  class="form-control" name="lastname" value="<?= $user['Lastname']?>"/>
                            <label class="form-label" for="form4Example1">LastName</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="firstname" value="<?= $user['Firstname']?>"/>
                            <label class="form-label" for="form4Example1">Firstname</label>
                        </div>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" class="form-control" name="email" value="<?= $user['Email']?>"/>
                            <label class="form-label" for="form4Example2">Email address</label>
                        </div>
                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="contactNumber" value="<?= $user['Contact_Number']?>"/>
                            <label class="form-label" for="form4Example2">Contact Number</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="username" value="<?= $user['UserName']?>"/>
                            <label class="form-label" for="form4Example2">Username</label>
                        </div>
                        <div class="form-outline mb-4">
                            <input type="text" class="form-control" name="password" value="<?= $user['Password']?>"/>
                            <label class="form-label" for="form4Example2">Password</label>
                        </div>
                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-block mb-4" value="update" name="update">Update User</button>
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