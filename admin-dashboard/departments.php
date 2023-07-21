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
    <title>Admin | Departments</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
  </head>
<body>
<?php
include('../connect.php'); 
global $conn;
// Add Department to dB
if(isset($_POST['dpt-submit'])){        
    $dept_name = $_POST['dpt-nam'];
    // Check whether the department with same name exist or not in database
    $dept_check = "Select * from `department` where dpt_name='$dept_name'";
    $result_dept_check = mysqli_query($conn,$dept_check);
    $number=mysqli_num_rows( $result_dept_check);    
    if($number>0){
    echo "<script>alert('Department already exists')</script>";    
    }else{
        // Add department to the table
        $add_dept = "insert into `department` (dpt_name) values ('$dept_name')";
        $result_dept = mysqli_query($conn,$add_dept);
        if($result_dept){
          echo "<script>alert('Department added successfully')</script>";
          echo "<script>window.open('admin-home.php?departments','_self')</script>";
        }
    }  
}
// Delete department form dB
        global $conn;
        if(isset($_POST['dept-del'])){
            $remove_id = $_POST['removeitem'];
            $delete_query= "Delete  from `department` where dpt_id='$remove_id'";
            $run_delete=mysqli_query($conn,$delete_query);
            if($run_delete){
                echo "<script>alert('Department deleted successfully')</script>";
                echo "<script>window.open('admin-home.php?departments','_self')</script>";
            }else{
                echo "fail";
            }
        }
?>
    <!-- Department List -->
    <div class="department">
        <div class="department-form">
            <h2>Add New Department Form</h2>
            <form action="" method="post">
                <label for="Department name">Department: </label>
                <input type="text" name="dpt-nam" id="dpt-name" class="dpt-name" placeholder="Department Name" autocomplete="off" required>
                <div class="d-flex">
                    <input type="reset" name="dpt-clear" id="dpt-clear" class="btn-clear">
                    <input type="submit" name="dpt-submit" id="dpt-submit" class="btn-submit">                    
                </div>
            </form>
        </div>
        <div class="department-table">
            <table class='table table-bordered'>
                <thead class="t-head">
                    <tr>
                      <th>ID</th>
                      <th>Departments</th>
                      <th>Actions</th>                                  
                    </tr>
                </thead>
                <?php
                $select_dpt = " select * from `department`";
                $run_dpt=mysqli_query($conn, $select_dpt);
                while($row = mysqli_fetch_array($run_dpt)){
                $id = $row['dpt_id'];
                $dpt_name = $row['dpt_name']; 
                echo "
                <tbody>
                    <tr>
                    <td name='removeitem'>$id</td>
                    <td>$dpt_name</td>
                    <td class=''>
                        <button type='submit' class='btn' onclick='openPopup()'>
                            <i class='show-btn fa-solid fa-eye text-primary'></i>
                        </button>
                        <button type='submit' class='btn' name='dept-del'>
                            <i class='fa-solid fa-trash text-danger'></i>
                        </button>
                    </td>
                    </tr>
                    </tbody>
                    ";
                } 
                ?>  
            </table>                                                              
        </div>
    </div>
    <div class="wrapper-dpt" id="popup">
        <div class="table-header">
            <h4 class="text-center">IT Department Members</h4>
            <button type="button" class="btn" onclick="closePopup()">
                <i class="fa-solid fa-circle-xmark text-danger"></i>
            </button>
        </div>
        <table class="table table-striped">
            <thead>
                <th>Staff ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Surname</th>
                <th>Gender</th>
                <th>Email Address</th>
                <th>Date Joined</th>
            </thead>
            <tbody>
                <tr>
                    <td>JKUAT0067</td>
                    <td>Arap</td>
                    <td>Yolo</td>
                    <td>Richard</td>
                    <td>Male</td>
                    <td>@gmail.com</td>
                    <td>2/2/23</td>
                </tr>
            </tbody>
        </table>

    </div>

    <!-- Scripts -->
    <script>
        let popup = document.getElementById("popup");
        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
    </script>
</body>
</html>