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
      <li><a href="big.php">Big</a></li>
        <li><a href="aia.php">AIA</a></li>
        <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Linda</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<section>

<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 <img src="images/desktop.jpg" class="desktop" alt="sushi"/>
 <img src="images/tablet.jpg" class="tablet" alt="snowboarding" />
 <img src="images/phone.jpeg" class="phone" alt="sunset" />
<h2>About me</h2>    
 <p>Hello all, my name is Linda Danh and I'm a student at Seattle Central Community College. I currently work full-time at a financial instituion in downtown Seattle while going to school full-time here at Central. I had taken a few random courses in college after high school but was still uncertain if college was the right fit for me.. I had no idea what I was pursuing or if I was gaining anything from college. Fast forward 10 years later, I was able to experience hardships with not being happy at my job. So that led me to study to be a computer programmer. I had hobbies growing up with web development, web design and programming. I'm here now turning that hobby into a career. I am pursing my associates in computer programming and hopefully to aquire my bachelors at North Seattle Community College. I had taken WEB 110 with the same Professor Newman, and I am excited to see what we can learn this quarter! </p>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
 <h3>Courses Completed at Central</h3>
    <li>ENG 101</li>
    <li>MATH 146</li>
    <li>BTM 111</li>
    <li>ITC 102</li>
    <li>ITC 110</li>
    <li>HUM 105</li>
    <li>WEB 110</li>
    <li>WEB 114</li>
<h3>Courses Currently Taking</h3>
    <li>ITC 220</li>
    <li>WEB 120</li>
</aside>
<!-- END RIGHT COL -->
    
<!-- START Footer -->
<footer>
    <p><small>&copy; 2020 - <?=date('Y')?> by <a href="contactme.php" target="_blank">Linda Danh</a>, All Rights Reserved ~ <a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a></small></p>
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
