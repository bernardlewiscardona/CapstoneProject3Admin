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
                    <a href="user.php" class="nav_link text-decoration-none"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Users</span> </a> 
                    <a href="schedules.php" class="nav_link active text  text-decoration-none"> <i class='bx bx-calendar-check nav_icon' ></i> <span class="nav_name">All Schedule</span> </a> 
                    <a href="#" class="nav_link text-decoration-none"> <i class='bx bxs-parking nav_icon'></i><span class="nav_name">Book Parking</span> </a> 
                    <a href="#" class="nav_link text-decoration-none"> <i class='bx bx-money nav_icon' ></i> <span class="nav_name">Payment Methods</span> </a> 
                    
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
                    <p class="fw-bold mb-1 fs-3">Kate Hunington</p>
                    <p class="text-muted mb-0">Plate number</p>
                </div>
                </div>
            <div class="d-flex flex-wrap justify-content-between align-content-center gap-5">
                <div class="border-end pe-3">
                    <h3>Jan 21,2020</h3>
                    <p class="text-muted">Start Date</p>
                </div>
                <div class="border-end pe-3">
                    <h3>Jan 21,2020</h3>
                    <p class="text-muted">End Date</p>
                </div>
                <div>
                    <h3>Jan 21,2020</h3>
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
                            <td class="col-5 fw-semibold text-end fs-4">Ronald</td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Contact Number:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4">091234567</td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Email:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4">1234@gmail.com</td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Description:</h6></td>
                            <td class="col-3 fw-semibold text-end fs-4">Blue Car</td>
                        </tr>
                    </table>
                    <table>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>LastName:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4">Ganza</td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Plate Number:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4">NBC 1234</td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Plan:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4">3 Months</td>
                        </tr>
                        <tr class="border-bottom">
                            <td class="col-5 text-muted"><h6>Payment:</h6></td>
                            <td class="col-5 fw-semibold text-end fs-4">Cash</td>
                        </tr>
                    </table>
                </div>
                
            </div>
            <div>
                <div class="p-5 mt-2 rounded border rounded shadow-sm">
                    <h3 class="text-center"><i class='bx bxs-parking text-primary'></i>Parking Space</h3>
                    <div class="d-flex justify-content-around align-items-center p-3 gap-3">
                        <div class="p-3 bg-light">
                            <h6 class="text-muted">Section</h6>
                            <h6>C</h6>
                        </div>
                        <div class="p-3 bg-light">
                            <h6 class="text-muted">Row</h6>
                            <h6>22</h6>
                        </div>
                        <div class="p-3 bg-light">
                            <h6 class="text-muted">Space</h6>
                            <h6>B</h6>
                        </div>
                    </div>
                    <button class="btn btn-outline-primary col-12 fs-5">Reassign</button>
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