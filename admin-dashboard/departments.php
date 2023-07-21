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
?>
    <!-- Department List -->
    <div class="department">
        <div class="department-form">
            <h2>Add New Department Form</h2>
            <form action="" method="post">
                <label for="Department name">Department: </label>
                <input type="text" name="dpt-nam" id="dpt-name" class="dpt-name" placeholder="Department Name" required>
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
                    <td>$id</td>
                    <td>$dpt_name</td>
                    <td class='actions-1'>
                        <div><a href='#'><i class='fa-solid fa-pen-to-square'></i></a></div>
                        <div><a href='#'><i class='fa-solid fa-eye'></i></a></div>
                        <div><a href='#'><i class='fa-solid fa-trash'></i></a></div>
                    </td>
                    </tr>
                    </tbody>
                    ";
                } 
                ?>  
            </table>                                                              
        </div>
    </div>
</body>
</html>