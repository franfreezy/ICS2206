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
    <title>Admin | Staff Members</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
  </head>
<body>
    <?php
include('../connect.php'); 
global $conn;

?>
    <div class="staff-members">
        <div class="staff-header">
            <h2>Staff Members</h2>
            <a href="#"><i class="fa-solid fa-plus"></i>Add New Staff Member</a>
        </div>
        <div class="staff-table">
            <table>
                <thead>
                    <tr class="">
                      <th>Staff ID</th>
                      <th>National ID</th>
                      <th>Full Name</th>
                      <th>Gender</th>
                      <th>Mobile Number</th>                      
                      <th>Email</th>                       
                      <th>Department</th>
                      <th>D.O.B</th>
                      <th>Date Joined</th>
                      <th></th>            
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>JKUAT0001</td>
                        <td>38080714</td>
                        <td>Frandel Wanjawa</td>
                        <td>Male</td>
                        <td>0729634366</td>                        
                        <td>frandelwanjawa19@gmail.com</td>                        
                        <td>Electrical</td>
                        <td>2/8/2000</td>
                        <td>1/1/2023</td>
                        <td class="actions">
                            <div><i class="fa-solid fa-pen-to-square"></i><a href="#">Edit</a></div>
                            <div><i class="fa-solid fa-trash"></i><a href="#">Delete</a></div>
                        </td>
                    </tr>
                                       
                </tbody>
            </table>
        </div>
    </div>

    
</body>
</html>