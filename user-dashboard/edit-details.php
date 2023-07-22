<?php 
include('../connect.php');
if(isset($_SESSION['username'])){
    $user_session = $_SESSION['username'];
    $select = "Select * from  `employees` where username = '$user_session'";
    $result = mysqli_query($conn,$select);
    $row_fetch = mysqli_fetch_assoc($result);
    $user_id = $row_fetch['code']; 
    $username = $row_fetch['fname']; 
    $useremail = $row_fetch['email'];  
    $useraddress = $row_fetch['address']; 
    $usermobile= $row_fetch['tel_no'];
}
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
  <style>
    label{
        font-weight: 600;
    }    
  </style>
<body>
    <div class="header-title">
        <h3>My Profile</h3>
    </div>
    <div class="user-details">
        <div class="edit-details">
            <form class="" method="" enctype="multipart/form-data">
                <div class="form-title">
                    <h5>Edit my details:</h5>
                </div>                                
                <!-- Full Names -->
                <div class="row g-3 mb-2">
                    <div class="col">
                        <label for="First Name">First Name</label>
                        <input type="text" class="form-control" name="fname" value="<?php $username ?>" placeholder="First name" aria-label="First name">
                    </div>
                    <div class="col">
                        <label for="Last Name">Last Name</label>
                        <input type="text" class="form-control" name="lname" placeholder="Last name" aria-label="Last name">
                    </div>
                    <div class="col">
                        <label for="Surname">Surname</label>
                        <input type="text" class="form-control" name="sname" placeholder="Surname" aria-label="Surname">
                    </div>
                </div>                
                <!-- D.o.B & Gender -->
                <div class="row g-3 mb-2">            
                    <div class="col">
                        <label for="">Gender</label><br>
                        <input type="radio" name="gender" value="Male">
                        <label for="">Male</label>
                        <input type="radio" name="gender" value="Female">
                        <label for="">Female</label>
                        <input type="radio" name="gender" value="Rather not say">
                        <label for="">Rather not say</label>                
                    </div>
                    <div class="col">
                        <label for="">Date of Birth</label>
                        <input type="date" class="form-control" placeholder="D.o.B">            
                    </div>            
                </div>
                <!-- Marital Status -->
                <div class="form-group mb-2">
			        <label for="marital_status" class=" control-label">Marital status</label>
			        <div class="col-sm-12">
			        	<select class="form-control" id="marital_status" name="marital_status" required>
			        		<option value="">Please make a choice</option>
			        		<option value="Single">Single</option>
			        		<option value="Cohabitation">Cohabitation</option>
			        		<option value="Married">Married</option>
			        		<option value="Widow/Widower">Widow/Widower</option>
			        	</select>
			        </div>
		        </div>
                <!-- Email, Tel No, Address, ID -->
                <div class="row g-3 mb-2">
                    <div class="col-md-6">
                      <label for="inputEmail4">Email</label>
                      <input type="email" class="form-control" id="inputEmail4" placeholder="username@gmail.com">
                    </div>
                    <div class="col-md-6">
                      <label for="inputtelno">Telephone Number</label>                  
                      <input type="number" class="form-control" id="inputtelno" placeholder="745548093">
                    </div>
                    <div class="col-md-6">
                      <label for="inputAddress">Address</label>
                      <input type="text" class="form-control" id="inputAddress" placeholder="Kalimoni-Juja">
                    </div>
                    <div class="col-md-6">
                      <label for="inputID">National ID</label>
                      <input type="number" class="form-control" id="inputID" placeholder="37778819">
                    </div> 
                </div>
                <!-- Type, Joining Date, Photo, Username & Password -->
                <div class="row">
                <div class="col">
                    <div class="form-group mb-2">
		                <label for="employment_type" class="control-label">Employee Type</label>
		                <div class="col-sm-12">
		                	<select class="form-control" id="employment_type" name="employment_type">
		                		<option value="">Choose your type</option>
		                		<option value="Part-time employee">Part-time employee</option>
		                		<option value="Intern">Intern</option>
		                		<option value="Permanent position">Permanent position</option>
		                	</select>
		                </div>
		            </div>
                </div>
                <div class="col">
                    <div class="form-group mb-2">
		                <label for="departmnet" class=" control-label">Department</label>
		                <div class="col-sm-12">
		                	<select class="form-control" id="departmnet" name="departmnet">
		                		<option value="">Choose your department</option>
		                		<option value="Part-time employee">Accounting</option>
		                		<option value="Intern">HR</option>
		                		<option value="Permanent position">IT</option>
		                	</select>
		                </div>
		            </div>
                </div>
            </div>
                <div class="form-group mb-2">
		            <label for="joining_date" class="control-label">Joining Date</label>
		            <div class="col-sm-12">
		            	<div class="input-group">
		            		<input type="text" class="form-control" id="joining_date" name="joining_date" placeholder="dd/mm/yyyy" value="" required />    
		            	</div>							
		            </div>
		        </div>
                <div class="form-group mb-2">
			        <label for="photo" class="control-label">Profile Picture</label>
			        <div class="col-sm-12">
			        	<input type="file" class="form-control" id="photo" name="photo" accept="image/*" placeholder="Photograph" required style="height:auto" />						  	
			        </div>
		        </div>        
                <!-- Submit -->
                <div class="submit-btn">
                    <button type="submit" class="btn btn-success">Update Details</button>
                </div>
            </form>
        </div>
        <div class="edit-password">
            <div class="">
                <div class="form-title">
                    <h5>Change Password:</h5>
                </div>
                <div class="">
                    <label for="oldPassword">Old Password</label>
                    <input type="password" class="form-control" name="oldPassword" id="oldPassword">
                </div>
                <div class="">
                    <label for="newPassword">New Password</label>
                    <input type="password" class="form-control" name="newPassword" id="newPassword">
                </div>
                <div class="">
                    <label for="confirm_passowrd">Confirm password</label>
                    <input type="password" class="form-control" name="confirm_passowrd" id="confirm_passowrd">
                </div>
                <div class="reset-btn">
                    <button type="submit" class="btn btn-primary">Change Password</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Js Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="#"></script>
</body>
</html>