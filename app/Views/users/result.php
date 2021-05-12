<?php

$result = array([
    'subject_name' => 'english', 'grade' => 'A', 'remark' => 'Good',
    'subject_name' => 'english', 'grade' => 'A', 'remark' => 'Good',
    'subject_name' => 'english', 'grade' => 'A', 'remark' => 'Good'
]);
print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="images/favicon.png" rel="icon" />
<title>Train Booking Invoice - Koice</title>
<meta name="author" content="harnishdesign.net">

<!-- Web Fonts
======================= -->
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' type='text/css'>

<!-- Stylesheet
======================= -->
<link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/koice/vendor/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/koice/vendor/font-awesome/css/all.min.css"/>
<link rel="stylesheet" type="text/css" href="http://demo.harnishdesign.net/html/koice/css/stylesheet.css"/>
</head>
<body>
<!-- Container -->
<div class="container-fluid invoice-container"> 
  <!-- Header -->
  <header>
    <div class="row align-items-center">
      <div class="mx-auto"> <h1><?= conf['site_title'] ?></h1>  </div>
      <br>
      <!-- logo here -->
      <img src="">
    </div>
    <hr>
  </header>
  <!-- Main Content -->
  <main>
    <!-- <p class="text-1 text-center text-muted">This e-ticket will only be valid along with an ID proof in original. if found travelling without ID proof, passenger will be treated as without ticket and charged as per extant Railway rules.</p> -->
    <!-- Passenger Details -->
    <div class="row">
      <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Candidate Name:</span><br>
        <span class="font-weight-500 text-3">Mumbai</span> </div>
      <div class="col-sm-4 mb-3 mb-sm-0"> <span class="text-black-50 text-uppercase">Student ID:</span><br>
        <span class="font-weight-500 text-3">Student ID:</span> </div>
      <div class="col-sm-4"> <span class="text-black-50 text-uppercase">Printed On</span><br>
        <span class="font-weight-500 text-3"><?= date('d M, Y') ?> </span> </div>
    </div>
    <hr class="my-4">
    <!-- Passenger Details -->
    <div class="table-responsive">
      <table class="table table-bordered text-1 table-sm">
        <thead>
          <tr>
            <th>S/N</th>
            <th>SUBJECT</th>
            <th>GRADE</th>
            <th>REMARK</th>
          </tr>
        </thead>
        <tbody>
          <?php $i=1; foreach($result as $r): ?>
          <tr>
            <td><?= $i++ ?></td>
            <td><?= strtoupper($r['subject_name']) ?></td>
            <td><?= strtoupper($r['grade']) ?></td>
            <td><?= strtoupper($r['remark']) ?></td>
          </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
   
  </main>
  <!-- Footer -->
  <footer class="text-center">
    <div class="btn-group btn-group-sm d-print-none"> <a href="javascript:window.print()" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-print"></i> Print</a> <a href="" class="btn btn-light border text-black-50 shadow-none"><i class="fa fa-download"></i> Download</a> </div>
  </footer>
</div>
<!-- Back to My Account Link -->
<p class="text-center d-print-none"><a href="#">&laquo; Back to My Account</a></p>
</body>
</html>