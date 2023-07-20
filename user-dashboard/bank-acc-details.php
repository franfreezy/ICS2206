<?php 
include('../connect.php');
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
    <title>Bank Account Details | Savannah Agile Solutions</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
  </head>
  <style>
    label{
        font-weight: 600;
    }    
  </style>
<body>
    <div class="header-title">
        <h3>Account Details</h3>
    </div>
    <div class="user-details">
        <div class="edit-details">
            <!-- Account Details -->
            <div class="row">
                <!-- Job Group -->
                <div class="col">
                    <div class="form-group mb-2">
		                <label for="jobgrp" class="control-label">Job Group</label>
		                <div class="col-sm-12">
		                	<select class="form-control" id="jobgrp" name="jobgrp" disabled>
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
                        <input type="text" class="form-control" id="kra" placeholder="745548093" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Bank Name -->
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
                <!-- Account Number -->
                <div class="col">
                    <div class="form-group mb-2">
                        <label for="bnkno">Bank Account No.</label>                  
                        <input type="text" class="form-control" id="bnkno" name="bnkno" placeholder="745548093">
                    </div>
                </div>
            </div>
            <div class="update-acc">
                <div class="submit-btn">
                    <button type="submit" class="btn btn-success">Update Details</button>
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