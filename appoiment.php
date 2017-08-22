<html>
<head>
  <title>lab-pro</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type='text/javascript' src="<?php echo base_url(); ?>js/jq.min.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">


  <!--offline bootstrap--->
  <script src="<<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
  <link rel="<?php echo base_url(); ?>stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>css/bootstrap-theme.min.css">


  <style>
  </style>
</head>
<body>

  <div class="container" >
<h1>
<?php
echo $tomorrow = date('d/m/Y', time() + 259200);

 $date = date('d/m/Y', time() + 259200);

 $weekday = date('D', strtotime($date)); // note: first arg to date() is lower-case L

 echo $weekday; // SHOULD display Wednesday
//echo $day;
echo "<br/>";
 $today = new DateTime('2017-08-04');

// Look a year into the future for example sake
$today->modify('+12 days');

// Display full day name
echo $today->format('l') . PHP_EOL; // lowercase L

// Display three-letter day name
echo $today->format('D') . PHP_EOL;
?>

</h1>
  </div>
</body>
</html>
