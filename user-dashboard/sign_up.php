<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="sign_up.css" />
    <!-- Animate Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Savannah Agile Solutions</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png"/>
  </head>
<body>

<?php 
include('../connect.php'); 
include('staffIdGen.php'); 
global $conn;
// Add Employee to dB
if(isset($_POST['btn-register'])){
    $code = $_POST['code'];
    $fname = $_POST['FirstName'];
    $mname = $_POST['Middlename'];
    $sname = $_POST['Surname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $mstatus = $_POST['marital_status'];
    $email = $_POST['Email_Address'];
    $telno = $_POST['tel-no'];
    $address = $_POST['address'];
    $n_id = $_POST['n-id'];
    $emptype = $_POST['employment_type'];
    $dept = $_POST['department'];
    $djoin = $_POST['joining_date'];
    $user = $_POST['username'];
    $pwd= $_POST['cfmpswd'];
    $harshpassword = password_hash($pwd,PASSWORD_DEFAULT);
    

    // Check whether the user with same name exist or not in database
    $emp_check = "Select * from `employees` where code='$code'";
    $emp_check = mysqli_query($conn,$emp_check);
    $number=mysqli_num_rows( $emp_check);    
    if($number>0){
    echo "<script>alert('User already exists')</script>";    
    }else{
        // Add user to the table
        $add_emp = "insert into `employees` (code,fname,mname,sname,gender,dob,marital_status,email,
        tel_no,address,n_id,emp_type,dept,date_join) values ('$code','$fname','$mname','$sname','$gender',
        '$dob','$mstatus','$email','$telno','$address','$n_id','$emptype','$dept','$djoin')";
        $result_user = mysqli_query($conn,$add_emp);
        if($result_user){
          echo "<script>alert('User registered successfully!')</script>";
          echo "<script>window.open('../index.php','_self')</script>";
        }
    }
    $credentials = "insert into `employee_login` (username,password) values ('$user','$harshpassword')";
    $result_credential = mysqli_query($conn,$credentials);
    

}

?>
    <!-- University Logo -->
    <div class="company-logo scale-in-center">
      <img src="../images/logo-symbol.png" alt="">
    </div>
    <div class="logo-img scale-in-center">                
      <img src="../images/Logo_SavannahAgile-1.png" alt="Logo Image">
    </div>
    <h2 class="text-center form-title">New Staff Registration Form</h2>
    <div class="message-box">
        <h3 class="msg-title">Fill the below form</h3>
		<div class="msg-tool">
			<span class="text-red">*All fields are mandatory</span>
		</div>
    </div>

    <!-- Registration Form -->
    <div class="reg-form">
        <form action="" method="post">
        <hr class="divider">
            <div class="form-group mb-2">
		        <label for="code" class="control-label">Code</label>
		        <div class="col-sm-12">
		        	<div class="input-group">
		        		<input type="text" class="form-control" id="" name="code" required />		        		
		        	</div>							
		        </div>
		    </div>
            <!-- Full Names -->            
            <div class="row g-3 mb-2">
                <div class="col">
                    <label for="First Name">First Name</label>
                    <input name="FirstName" type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <label for="Last Name">Middlename</label>
                    <input name="Middlename" type="text" class="form-control" placeholder="Middle Name" aria-label="Last name">
                </div>
                <div class="col">
                    <label for="Surname">Surname</label>
                    <input name="Surname" type="text" class="form-control" placeholder="Surname" aria-label="Surname">
                </div>
            </div>
            <!-- D.o.B & Gender -->
            <div class="row g-3">            
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
                    <input name="dob" type="date" class="form-control" placeholder="D.o.B">            
                </div>            
            </div>
            <!-- Marital Status -->
            <div class="form-group">
			    <label for="marital_status" class="control-label">Marital status</label>
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
        <hr>
            <!-- Email, Tel No, Address, ID -->
            <div class="row g-3">
                <div class="col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input name="Email_Address" type="email" class="form-control" id="inputEmail4" placeholder="username@gmail.com">
                </div>
                <div class="col-md-6">
                  <label for="inputtelno">Telephone Number</label>                  
                  <input name="tel-no" type="number" class="form-control" id="inputtelno" placeholder="745548093">
                </div>
                <div class="col-md-6">
                  <label for="inputAddress">Address</label>
                  <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Kalimoni-Juja">
                </div>
                <div class="col-md-6">
                  <label for="inputID">National ID</label>
                  <input name="n-id" type="number" class="form-control" id="inputID" placeholder="37778819">
                </div> 
            </div>
        <hr>
            <!-- Type, Joining Date, Photo  -->
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
		                	<select class="form-control" id="departmnet" name="department">
		                		<option value="">Choose your department</option>
		                		<option value="Accounting">Accounting</option>
		                		<option value="HR">HR</option>
		                		<option value="IT">IT</option>
		                	</select>
		                </div>
		            </div>
                </div>
            </div>
            <div class="form-group mb-2">
		        <label for="joining_date" class="col-sm-2 control-label">Joining Date</label>
		        <div class="col-sm-12">
		        	<div class="input-group">
		        		<input type="text" class="form-control" id="joining_date" name="joining_date" placeholder="dd/mm/yyyy" value="" required />
		        		
		        	</div>							
		        </div>
		    </div>            
        <hr>
            <!-- Account Details -->
            <div class="row">
                <div class="col">
                    <div class="form-group mb-2">
		                <label for="jobgrp" class="control-label">Job Group</label>
		                <div class="col-sm-12">
		                	<select class="form-control" id="jobgrp" name="jobgrp">
		                		<option value="">Choose your group</option>
		                		<option value="A1">A1</option>
		                		<option value="A2">A2</option>
		                		<option value="A3">A3</option>
		                	</select>
		                </div>
		            </div>
                </div>
                <!-- KRA -->
                <div class="col">
                    <div class="form-group mb-2">
                        <label for="kra">KRA Pin</label>                  
                        <input name="kra" type="text" class="form-control" id="kra" placeholder="745548093">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group mb-2">
		                <label for="bnkname" class="control-label">Bank Name</label>
		                <div class="col-sm-12">
		                	<select class="form-control" id="bnkname" name="bnkname">
		                		<option value="">Choose your bank</option>
		                		<option value="Equity">Equity</option>
		                		<option value="ABSA">ABSA</option>
		                		<option value="Standard Chartered">Standard Chartered</option>
		                	</select>
		                </div>
		            </div>
                </div>
                <div class="col">
                    <div class="form-group mb-2">
                        <label for="bnkno">Bank Account No.</label>                  
                        <input type="text" class="form-control" id="bnkno" name="bnkno" placeholder="745548093">
                    </div>
                </div>
            </div>
        <hr>
            <!-- Username & Password -->
            <div class="row g-3 mb-3">
                <div class="col">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" aria-describedby>
                </div>
                <div class="col">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="pswd" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col">
                    <label for="confirm_passowrd">Confirm password</label>
                    <input type="password" name="cfmpswd" class="form-control" id="confirm_passowrd">
                </div>
            </div>
        <hr>
            <!-- Submit -->
            <div class="submit-btn">
                <button type="submit" name="btn-register" class="btn btn-success">Register</button>
            </div>
    </form>
    </div>

    
</body>
</html>