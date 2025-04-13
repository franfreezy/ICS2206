<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="admin-assets/styles.css" />
    <!-- Animate Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Admin | Savannah Agile Solutions</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
  </head>
<body>
    <?php
 require('../connect.php');
 global $conn;
if(isset($_POST['btn-signin'])){
  $username = $_POST['user_username'];  
  $userpassword = $_POST['userpassword'];
//   $harshpassword = password_hash($userpassword,PASSWORD_DEFAULT);

  //select data from dB
  $select_query = "Select * from `admin_login` where username='$username'";
  $result_select = mysqli_query($conn,$select_query);
  $row  = mysqli_num_rows($result_select);
  $array = mysqli_fetch_assoc($result_select);
  if($row>0){
    if (password_verify($userpassword,$array['password'])){
        echo "<script>alert('Welcome $username')</script>";
        echo "<script>window.open('admin-home.php','_self')</script>";
    }else{
        echo "<script>alert('Incorrect Password')</script>";
    }
}  
  }


    ?>
    <!-- Company Name & Logo -->
    <div class="main-section">
        <div class="hero-section"></div>
        <div class="user-sign-in">
            <!-- Company Logo -->
            <div class="company-logo scale-in-center">
                <img src="../images/logo-symbol.png" alt="">
            </div>
            <div class="logo-img scale-in-center">                
                <img src="../images/Logo_SavannahAgile-1.png" alt="Logo Image">
            </div>
            <!-- Sign in Form -->
            <div class="log-in-form">
                <div class="container-fluid">
                    <div class="forms-container">
                        <div class="sign-up">
                            <form action="" method="post" class="sign-up-form">
                                <h2 class="title">Admin Sign In</h2>
                                <!-- Username -->
                                <div class="input-field">
                                    <span><i class="fa-solid fa-user"></i></span>
                                    <input type="text" name="user_username" id="" placeholder="Username" required autocomplete="off">
                                </div>            
                                <!-- Password -->
                                <div class="input-field" id="password-container">
                                    <span><i class="fa-solid fa-lock"></i></span>
                                    <input type="password" name="userpassword" id="password" placeholder="Password" required>
                                    <div id="show-password"><i class="fa-solid fa-eye-slash"></i><i class="fa-solid fa-eye"></i></div>                                                        
                                </div>
                                <div class="reset-password">
                                    <a href="#">Forgot password?</a> 
                                </div>       
                                <!-- Submit Button -->
                                <input type="submit" name="btn-signin" id="signin" class="btn solid" value="Sign In">                
                                <div class="d-flex">
                                    <p class="mx-1">Don't have an account yet? </p>
                                    <a href="http://www.smartbaby.ct.ws/admin-dashboard/admin-register.php"> Sign Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Js Links -->
    <!-- Password Toggle -->
    <script>   
    const togglePassword = document.querySelector('#show-password');
    const password = document.querySelector('#password');
    togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('.fa-eye');
    });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="admin-assets/script.js"></script>
</body>
</html>