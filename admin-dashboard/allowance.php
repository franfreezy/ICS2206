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
    <title>Admin | Allowances</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
  </head>
<body>
<?php
include('../connect.php'); 
global $conn;
// Add Allowance to dB
if(isset($_POST['all-submit'])){        
    $all_name = $_POST['all-name'];
    $all_amt = $_POST['all-amt'];
    // Check whether the allowance with same name exist or not in database
    $all_check = "Select * from `allowance` where allowance_name='$all_name'";
    $result_all_check = mysqli_query($conn,$all_check);
    $number=mysqli_num_rows( $result_all_check);    
    if($number>0){
    echo "<script>alert('Allowance already exists')</script>";    
    }else{
        // Add allowance to the table
        $add_all = "insert into `allowance` (allowance_name,allowance_amount) values ('$all_name','$all_amt')";
        $result_all = mysqli_query($conn,$add_all);
        if($result_all){
          echo "<script>alert('Allowance added successfully')</script>";
          echo "<script>window.open('admin-home.php?allowance','_self')</script>";
        }
    }  
}
?>
    <!-- Allowance List -->
    <div class="allowances">
        <div class="allowances-form">
            <h2>New Allowance Form</h2>
            <form action="" method="post">
                <label for="Allowance name">Allowance: </label>
                <input type="text" name="all-name" id="all-name" class="all-name" placeholder="Allowance Name" required autocomplete="off">
                <label for="Allowance amount">Amount: </label>
                <input type="number" name="all-amt" id="all-amt" class="all-amt" placeholder="Allowance Amount">
                <div class="d-flex">
                    <input type="reset" name="dpt-clear" id="dpt-clear" class="btn-clear">
                    <input type="submit" name="all-submit" id="dpt-submit" class="btn-submit">                    
                </div>
            </form>
        </div>
        <div class="allowance-table">
            <table class="table table-hover table-bordered">
                <thead class="t-head">
                    <tr class="">
                      <th>ID</th>
                      <th>Allowance</th>                                  
                      <th>Allowance Amount</th>
                      <th>Actions</th>                                  
                    </tr>
                </thead>
                <?php
                $select_all = " select * from `allowance`";
                $run_all=mysqli_query($conn, $select_all);
                while($row = mysqli_fetch_array($run_all)){
                $id = $row['allowance_id'];
                $all_name = $row['allowance_name'];
                $all_amt = $row['allowance_amount'];
                echo"
                <tbody>
                    <tr>
                        <td name='edit_id'>$id</td>
                        <td>$all_name</td>                                       
                        <td>ksh. $all_amt</td>                                       
                        <td class='actions-1'>
                            <button type='submit' name='edit' class='btn' onclick='openPopup()'>
                                <i class='fa-solid fa-pen-to-square text-primary'></i>
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
            <h4 class="text-center">Allowance</h4>
            <button type="button" class="btn" onclick="closePopup()">
                <i class="fa-solid fa-circle-xmark text-danger"></i>
            </button>
        </div>
        <div class="allowances-form">
            <h2>Edit Allowance Form</h2>
            
            <form action="" method="post">
                <label for="Allowance name">Allowance:</label>
                <input type="text" name="all-name" id="all-name" value="" class="all-name" placeholder="Allowance Name" required autocomplete="off">
                <label for="Allowance amount">Amount: </label>
                <input type="number" name="all-amt" id="all-amt" class="all-amt" placeholder="Allowance Amount">
                <div class="d-flex">
                    <input type="reset" name="dpt-clear" id="dpt-clear" class="btn-clear">
                    <input type="submit" name="all-submit" id="dpt-submit" class="btn-submit">                    
                </div>
            </form>
        </div>
        

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
    <?php 
            // if(isset($_POST['edit'])){
            //     $new_id = $_POST['edit_id'];
            //     $upt = "update * from `allowance` where allowance_id = '$new_id'";
            //     $run_upt = mysqli_query($conn,$upt);
            // }
            ?>
</body>
</html>