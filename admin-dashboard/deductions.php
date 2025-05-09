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
    <title>Admin | Deductions</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
</head>
<body>

<?php
include('../connect.php'); 
global $conn;

?>

    <!-- Deductions List -->
    <div class="deductions">
        <div class="deduction-form">
            <h2>Deduction Form</h2>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                <table class="table table-bordered table-striped d-table">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Monthly Gross Income (Ksh)</th>
                            <th>Rates Per Month (Ksh)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>0 - 5,999</td>
                            <td>150</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>6,000 - 7,999</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>8,000 - 11,999</td>
                            <td>400</td>
                        </tr> 
                        <tr>
                            <td>4</td>
                            <td>12,000 - 14,999</td>
                            <td>400</td>
                        </tr>                       
                    </tbody>
                </table>
                <div class="d-fx">
                    <input type="reset" name="dd-clear" id="dd-clear" class="btn-clear">
                    <input type="submit" name="dd-submit" id="dd-submit" class="btn-submit">                    
                </div>
            </form>
        </div>
        <div class="deduction-table">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Deduction</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pay As Your Earn (PAYE)</td>
                        <td class="actions-1">
                            <div><i class="fa-solid fa-pen-to-square"></i><a href="#">Edit</a></div>
                            <div><i class="fa-solid fa-trash"></i><a href="#">Delete</a></div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>National Health Insurance Fund (NHIF)</td>
                        <td class="actions-1">
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
