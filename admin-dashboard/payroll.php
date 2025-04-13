<?php

$payrolls = [
    [
        'ref_no' => '2023-KBYT-JKUAT',
        'period' => '2/1/23 - 2/2/23',
        'emp_id' => 'SNM-00000',
        'name' => 'Frandel Wanjawa',
        'gross' => 100000,
        'allowances' => 9500,
        'deductions' => 18750,
        'net' => 109750
    ],
    [
        'ref_no' => '2023-KBYT-JKUAT',
        'period' => '2/1/23 - 2/2/23',
        'emp_id' => 'SNM-00000',
        'name' => 'Frandel Wanjawa',
        'gross' => 100000,
        'allowances' => 9500,
        'deductions' => 18750,
        'net' => 109750
    ],
    [
        'ref_no' => '2023-KBYT-JKUAT',
        'period' => '2/1/23 - 2/2/23',
        'emp_id' => 'SNM-00000',
        'name' => 'Frandel Wanjawa',
        'gross' => 100000,
        'allowances' => 9500,
        'deductions' => 18750,
        'net' => 109750
    ],
    [
        'ref_no' => '2023-KBYT-JKUAT',
        'period' => '2/1/23 - 2/2/23',
        'emp_id' => 'SNM-00000',
        'name' => 'Frandel Wanjawa',
        'gross' => 100000,
        'allowances' => 9500,
        'deductions' => 18750,
        'net' => 109750
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin | Payroll</title>
  <link rel="icon" type="image/x-icon" href="../images/favicon.png"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="admin-assets/home.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
<?php
include('../connect.php'); 
global $conn;

?>
<div class="payroll">
  <div class="payroll-table">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Ref No.</th>
          <th>From - To</th>
          <th>Employee ID</th>
          <th>Name</th>
          <th>Gross Pay (Ksh.)</th>
          <th>Allowances (Ksh.)</th>
          <th>Deductions (Ksh.)</th>
          <th>Net Pay (Ksh.)</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($payrolls as $pay): ?>
        <tr>
          <td><?= $pay['ref_no'] ?></td>
          <td><?= $pay['period'] ?></td>
          <td><?= $pay['emp_id'] ?></td>
          <td><?= $pay['name'] ?></td>
          <td><?= number_format($pay['gross'], 2) ?></td>
          <td><?= number_format($pay['allowances'], 2) ?></td>
          <td><?= number_format($pay['deductions'], 2) ?></td>
          <td><strong><?= number_format($pay['net'], 2) ?></strong></td>
          <td class="actions-2">
            <div><a href="#divMain"><i class="fa-solid fa-eye"></i> View</a></div>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>

<!-- Payslip -->
<div class="overlay" id="divMain">
  <div class="wrapper">
    <div class="payslip-title">
      <h1>Employee Payslip</h1>
    </div>
    <div class="employee-details">
      <label>Employee ID : <b>SMN-00001</b></label><br>
      <label>Employee Name : <b>Frandel Wanjawa</b></label>
    </div>
    <div class="row">
      <div class="col-md-6">
        <table class="payslip-info">
          <tbody>
            <tr><td class="slip-info">Payroll Reference No. :</td><td class="slip-info-2">YBK-20004K</td></tr>
            <tr><td class="slip-info">Date :</td><td class="slip-info-2">2/2/2023 - 2/3/2023</td></tr>
            <tr><td class="slip-info">National ID :</td><td class="slip-info-2">37934384</td></tr>
            <tr><td class="slip-info">Department :</td><td class="slip-info-2">IT Department</td></tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-1 border"></div>
      <div class="col-md-5">
        <table class="payslip-info">
          <tbody>
            <tr><td class="slip-info">Gross Pay :</td><td class="slip-info-2"><strong><sup>Ksh</sup>100,000.00</strong></td></tr>
            <tr><td class="slip-info">Allowances :</td><td class="slip-info-2"><strong><sup>Ksh</sup>7,000.00</strong></td></tr>
            <tr><td class="slip-info">Deductions :</td><td class="slip-info-2"><strong><sup>Ksh</sup>10,000.00</strong></td></tr>
            <tr><td class="slip-info">Net Pay :</td><td class="slip-info-2"><strong><sup>Ksh</sup>97,000.00</strong></td></tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="divider"></div>
    <div class="calculations">
      <div class="slip-allowance">
        <div class="crd-hdr"><h2>Allowances</h2></div>
        <ul class="list-grp">
          <li class="list-grp-item">House Allowance <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span></li>
          <li class="list-grp-item">Transport Allowance <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span></li>
          <li class="list-grp-item">Health Allowance <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span></li>
        </ul>
      </div>
      <div class="slip-deduction">
        <div class="crd-hdr"><h2>Deductions</h2></div>
        <ul class="list-grp">
          <li class="list-grp-item">PAYE <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span></li>
          <li class="list-grp-item">NHIF <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span></li>
          <li class="list-grp-item">NSSF <span class="badge rounded-pill text-bg-primary">Ksh.1,500</span></li>
        </ul>
      </div>
    </div>
    <div class="divider"></div>
    <div class="btn-options">
      <a href="#" class="print"><i class="fa-solid fa-print"></i> Print</a>
      <a href="#" class="close">Close</a>
    </div>
  </div>
</div>

</body>
</html>
