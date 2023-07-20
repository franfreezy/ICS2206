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
    <title>Salary Slip | Savannah Agile Solutions</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
  </head>
  <style>    
  </style>
<body>
    <div class="header-title">
        <h3>Salary Slip</h3>
    </div>
    <div class="salary-details">
        <!-- Salary Slip Details -->
        <table class="table table-striped table-responsive table-hover table-bordered">
            <thead>
                <th>Salary Month</th>
                <th>Earnings (Ksh)</strong></th>
                <th>Deductions (Ksh)</th>
                <th>Allowances (Ksh)</th>
                <th>Net Pay (Ksh)</th>
                <th>Actions</th>
            </thead>
            <tbody>
                <tr>
                    <td>March 2023</td>
                    <td>104,000.00</td>
                    <td>25,000.00</td>
                    <td>15,000.00</td>
                    <td><strong>114,000.00</strong></td>
                    <td class="text-center">
                        <button type="submit" class="btn" onclick="openPopup()">
                            <i class="show-btn fa-solid fa-eye text-primary"></i>
                        </button>
                        <button type="" class="btn" onclick="">
                            <i class="show-btn fa-solid fa-download text-primary"></i>
                        </button>
                        <!-- Payslip PopUp -->
                        <div class="wrapper" id="popup">
                            <div class="payslip-title">
                                <h1>Employee Payslip</h1>
                            </div>
                            <div class="employee-details">
                                <label for="Employee ID">Employee ID : <b>SMN-00001</b></label><br>
                                <label for="Employee Name">Employee Name : <b>Godiah Moses</b></label>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <table class="payslip-info">                    
                                        <tbody>
                                            <tr >
                                                <td class="slip-info">Payroll Reference No. :</td>
                                                <td class="slip-info-2">YBK-20004K</td>
                                            </tr>
                                            <tr>
                                                <td class="slip-info">Date :</td>
                                                <td class="slip-info-2">2/2/2023 - 2/3/2023</td>
                                            </tr>
                                            <tr>
                                                <td class="slip-info">National ID :</td>
                                                <td class="slip-info-2">37934384</td>
                                            </tr>
                                            <tr>
                                                <td class="slip-info">Department :</td>
                                                <td class="slip-info-2">IT Department</td>
                                            </tr>                            
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-1 border"></div>
                                    <div class="col-md-5">
                                        <table class="payslip-info2">
                                            <tbody>
                                                <tr>
                                                    <td class="slip-info">Gross Pay :</td>
                                                    <td class="slip-info-2"><strong><sup>Ksh</sup>100,000.00</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="slip-info">Allowances :</td>
                                                    <td class="slip-info-2"><strong><sup>Ksh</sup>7,000.00</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="slip-info">Deductions :</td>
                                                    <td class="slip-info-2"><strong><sup>Ksh</sup>10,000.00</strong></td>
                                                </tr>
                                                <tr>
                                                    <td class="slip-info">Net Pay :</td>
                                                    <td class="slip-info-2"><strong><sup>Ksh</sup>97,000.00</strong></td>
                                                </tr>                            
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                            <div class="divider"></div>
                            <div class="calculations">
                                <div class="slip-allowance">
                                    <div class="crd-hdr">
					                	<h2>Allowances</h2>						
					                </div>
                                    <ul class="list-grp">
					                	<li class="list-grp-item"> House Allowance
					                    <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span>
					                    </li>						  
					                	<li class="list-grp-item"> Transport Allowance
					                    <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span>
					                    </li>
                                        <li class="list-grp-item"> Health Allowance
					                    <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span>
					                    </li>						  
					                </ul>
                                </div>
                                <div class="slip-deduction">
                                    <div class="crd-hdr">
						                <h2>Deductions</h2>						
					                </div>
                                    <ul class="list-grp">
						                <li class="list-grp-item"> PAYE
					                    <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span>
					                    </li>						  
						                <li class="list-grp-item"> NHIF
					                    <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span>
					                    </li>
                                        <li class="list-grp-item"> NSSF
					                    <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span>
					                    </li>						  
					                </ul>
                                </div>
                            </div>
                            <div class="divider"></div>
                            <div class="btn-options">
                                <a href="#" class="print"><i class="fa-solid fa-print"></i>Print</a>
                            <button type="button" class="close" onclick="closePopup()">Close</button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>                    

    <!-- Js Links -->
    <script>
        let popup = document.getElementById("popup");
        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="#"></script>
</body>
</html>