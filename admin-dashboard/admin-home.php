<?php 
include('../connect.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="admin-assets/home.css" />
    <!-- Animate Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Admin | Savannah Agile Solutions</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
  </head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">
            <h2><a href="admin-home.html">Savannah Agile Solutions</a></h2>            
        </div>
        <div class="dropdown">
          <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i>Hi, admin
          </a>
          <ul class="dropdown-menu">            
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-user"></i>My Account</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-center" href="#"><i class="fa-solid fa-power-off"></i>Sign Out</a></li>
          </ul>
        </div>
    </nav>
    <!-- Admin Page -->
    <main>
        <!-- Aside Bar -->
        <aside>
            <div class="aside-title">
                <a href="admin-home.php"><i class="fa-solid fa-house"></i>Dashboard</a>
            </div>
            <ul class="aside-list">
                <li><a href="admin-home.php?employee"><i class="fa-solid fa-people-group"></i>Staff Members</a></li>

                <li><a href="admin-home.php?departments"><i class="fa-solid fa-network-wired"></i>Departments</a></li>
                
                <li><a href="admin-home.php?allowance"><i class="fa-solid fa-sack-dollar"></i>Allowances</a></li>
                <li><a href="admin-home.php?deductions"><i class="fa-solid fa-cash-register"></i>Deductions</a></li>
                <li><a href="admin-home.php?payroll"><i class="fa-solid fa-file-invoice-dollar"></i>Payroll</a></li>
            </ul>
        </aside>
        <!-- Admin Content -->
        <div class="admin-dashboard">
            <!-- <div class="admin-welcome">
                <h2>Welcome</h2>
            </div>
            <div class="admin-profile">
                <img src="admin-assets/admin-images/admin-profile.png" alt="admin-profile">
            </div>
            <div class="admin-info">
                <h5>Catherine Devourax</h5>
                <p>System Administrator</p>
                <span>Jomo Kenyatta University</span>
            </div> -->


            <?php 
            if(isset($_GET['departments'])){
                include('departments.php');
            }
            if(isset($_GET['allowance'])){
                include('allowance.php');
            }
            if(isset($_GET['employee'])){
                include('employee.php');
            }
            if(isset($_GET['payroll'])){
                include('payroll.php');
            }
            if(isset($_GET['deductions'])){
                include('deductions.php');
            }
            ?>
        </div>
    </main>
    <!-- Footer -->
    <footer>
        <h2>Savannah Agile Solutions</h2>
        <p>&copy; 2023 All Rights Reserved</p>
    </footer>

    <!-- Js Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="admin-assets/script.js"></script>
</body>
</html>