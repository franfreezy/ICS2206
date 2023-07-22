
<?php 
include('../connect.php');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="user-home.css" />
    <!-- Animate Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Home | Savannah Agile Solutions</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
  </head>
<body>
    <!-- Navigation Bar -->
    <nav>
        <div class="logo">
            <h2><a href="user-home.php">Savannah Agile Solutions</a></h2>            
        </div>
        <div class="dropdown">
          <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-user"></i>Hi, user
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
                <div class="prof-img">
                    <img src="user-images/admin-profile.png" alt="profile pic">
                </div>
                <div class="prof-name">
                    <h5>Lewis Hamilton</h5>
                </div>
            </div>
            <ul class="aside-list">               
                <li><a href="user-home.php"><i class="fa-solid fa-user"></i>My Profile</a></li>
                <li><a href="user-home.php?bank-acc-details"><i class="fa-solid fa-landmark"></i>Bank Account</a></li>
                <li><a href="user-home.php?salary-slip"><i class="fa-solid fa-sack-dollar"></i>Salary Slips</a></li>                
            </ul>
        </aside>
        <!-- Main Content Area-->
        <div class="main-content">
            <?php
            if(!isset($_GET['edit-details'])){
                if(!isset($_GET['bank-acc-details'])){
                    if(!isset($_GET['salary-slip'])){
                        include ('edit-details.php');
                    }                    
                }
            }
            if(isset($_GET['bank-acc-details'])){
                include('bank-acc-details.php');
            }    
            if(isset($_GET['salary-slip'])){
                include('salary-slip.php');
            } 
            // if(!isset($_GET['edit-details'])){
            //     include ('edit-details.php');
            // }
            // if(isset($_GET['bank-acc-details'])){
            //     include('bank-acc-details.php');
            // }
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
    <script src="#"></script>
</body>
</html>