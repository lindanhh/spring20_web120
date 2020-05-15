<!DOCTYPE html>
<html>
<head>
    <title>WEB120 - Welcome to lindanhcodes.com By Linda Danh</title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/form.css" />
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
  <h1><a href="index.php"><i class="logo fa fa-home"></i> Linda Danh WEB120 Portal</a></h1>
  <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.html" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
        <li><a href="aia/index.php">AIA</a></li>
        <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Linda</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>

    <h1>Contact Linda Danh</h1>
<?php
/*
 * Below are 2 different forms to be re-used       
 * 
 * Only use one at a time, comment out the other!       
 *
 */

include 'includes/contact_include.php'; #site keys & code here

$toAddress = "thuy-trang.danh@seattlecolleges.edu";  //place your/your client's email address here
$toName = "Linda Danh"; //place your client's name here
$website = "KoolKicks";  //place NAME of your client's website

echo loadContact('simple.php');#demonstrates a simple contact form
//echo loadContact('multiple.php');#demonstrates multiple form elements

?>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Thank you for your input!</h3>
<p>Your business is greatly appreciated!</p>

</aside>
<!-- END RIGHT COL -->
    
<!-- START Footer -->
<footer>
    <p><small>&copy; 2013 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Linda Danh</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
</footer>
<!-- END Footer --> 
</main>
<!-- END WRAPPER -->

<!-- JavaScript associated with the W3Schools.com Top Navigation Response Exercise --> 
<script>
/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>
