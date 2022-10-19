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
                    <a href="#" class="nav_link active text  text-decoration-none"> <i class='bx bx-calendar-check nav_icon' ></i> <span class="nav_name">All Schedule</span> </a> 
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
            <h2 class="">All Book Schedules</h2>
            <button class="btn btn-primary"><i class="bx bx-plus-circle me-2" ></i>Book Parking</button>
        </div>
        <div class="">
                <table class="table align-middle mb-0">
                <thead class="">
                    <tr>
                    <th>Book ID</th>
                    <th>Status</th>
                    <th>Car Description</th>
                    <th>Plan</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>
                        <div class="d-flex align-items-center">
                        <a href="view.php"><img
                            src="https://mdbootstrap.com/img/new/avatars/7.jpg"
                            class="rounded-circle"
                            alt=""
                            style="width: 45px; height: 45px"
                            /> </a>
                        <div class="ms-3">
                            <p class="fw-bold mb-1">Kate Hunington</p>
                            <p class="text-muted mb-0">kate.hunington@gmail.com</p>
                        </div>
                        </div>
                    </td>
                    <td>
                        <p class="fw-normal mb-1">Designer</p>
                        <p class="text-muted mb-0">UI/UX</p>
                    </td>
                    <td>
                        <span class="badge badge-warning rounded-pill d-inline">Awaiting</span>
                    </td>
                    <td>Senior</td>
                    <td>
                        <a href="#" class="text-success"><i class='bx bxs-edit bx-md'></i></a>
                        <a href="#" class="text-danger"><i class='bx bxs-trash-alt bx-md'></i></a>
                    </td>
                    </tr>
                </tbody>
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