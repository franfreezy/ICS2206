<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/sign_up.css" />
    <!-- Animate Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <title>Savannah Agile Solutions</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.png"/>
  </head>
<body>
    <!-- University Logo -->
    <div class="company-logo scale-in-center">
      <img src="images/logo-symbol.png" alt="">
    </div>
    <div class="logo-img scale-in-center">                
      <img src="images/Logo_SavannahAgile-1.png" alt="Logo Image">
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
        <form>
        <hr class="divider">
            <!-- Full Names -->
            <div class="row g-3 mb-2">
                <div class="col">
                    <label for="First Name">First Name</label>
                    <input type="text" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col">
                    <label for="Last Name">Last Name</label>
                    <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
                <div class="col">
                    <label for="Surname">Surname</label>
                    <input type="text" class="form-control" placeholder="Surname" aria-label="Surname">
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
                    <input type="date" class="form-control" placeholder="D.o.B">            
                </div>            
            </div>
            <!-- Marital Status -->
            <div class="form-group">
			    <label for="marital_status" class="col-sm-2 control-label">Marital status</label>
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
        <hr>
            <!-- Type, Joining Date, Photo, Username & Password -->
            <div class="form-group mb-2">
		        <label for="employment_type" class="col-sm-2 control-label">Employee Type</label>
		        <div class="col-sm-12">
		        	<select class="form-control" id="employment_type" name="employment_type">
		        		<option value="">Choose your type</option>
		        		<option value="Part-time employee">Part-time employee</option>
		        		<option value="Intern">Intern</option>
		        		<option value="Permanent position">Permanent position</option>
		        	</select>
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
            <div class="form-group mb-2">
			    <label for="photo" class="col-sm-2 control-label">Profile Picture</label>
			    <div class="col-sm-12">
			    	<input type="file" class="form-control" id="photo" name="photo" accept="image/*" placeholder="Photograph" required style="height:auto" />						  	
			    </div>
		    </div>
            <div class="row g-3 mb-3">
                <div class="col">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" aria-describedby>
                </div>
                <div class="col">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="col">
                    <label for="confirm_passowrd">Confirm password</label>
                    <input type="password" class="form-control" id="confirm_passowrd">
                </div>
            </div>
        <hr>
            <!-- Submit -->
            <div class="submit-btn">
                <button type="submit" class="btn btn-success">Register</button>
            </div>
    </form>
    </div>

    
</body>
</html>