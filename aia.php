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
      <li><a href="index.php" class="selected">Welcome</a></li>
      <li><a href="big/index.php">Big</a></li>
        <li><a href="aia.php">AIA</a></li>
        <li><a href="flowchart.php">Flowchart</a></li>
      <li><a href="fp/index.php">Final Project</a></li>
      <li><a href="contactme.php">Contact Linda</a></li>
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
  </nav>
</header>
        
<!-- START LEFT COL -->
<div class='wrapper'>
<table class="customer">
    <tbody>
        <tr>
            <td>Client's Name:</td>
            <td>Linda Danh - Owner/Final Decision Maker</td>
        </tr>
        <tr>
            <td>Business Name:</td>
            <td>KoolKicks</td>
        </tr>
        <tr>
            <td>Resdesign or New Website:</td>
            <td>Brand New Website</td>
        </tr>
        <tr>
            <Td>Type of Website:</Td>
            <td>Community, Informational, Shopping</td>
        </tr>
        <tr>
            <td>Client's Goals:</td>
            <td>A community where we can openly talk about anything sneakers with some purchases of shoes</td>
        </tbody>
</table>
    
<table class="aia">
    <tbody>
        <tr>
            <th>Audience</th>
            <th>Issues/Needs</th>
            <th>Approach</th>
        </tr>
        <tr>
            <td>Fellow sneaker heads:
                <br>The vast amount about the community of "sneaker heads" will come here to share likes, dislikes and anything related to shoes. They can talk about what's hot about the new shoes that will be releasing in stores. Their most used platform will be mobile devices to access this website.
            </td>
            <td>
                <ul>
                    <li>Website needs to be mobile friendly</li>
                    <li>Small images</li>
                    <li>Gallery</li>
                </ul>
            </td>
            <td>
                <ul>
                    <li>Create a mobile friendly website using minimum and maxium widths to manuiplate viewports particulary to mobile users.</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>Possible Customers:
            <br>These people will be on the website to possibly purchase some shoes that will be show cased. Community of people posting their shoes online for others to purchase.
            </td>
            <td><ul>
                    <li>Cart checkout capability</li>
                    <li>Safety for entering personal information like credit card numbers</li>
                    
                </ul>
            </td>
            <td>
                <ul>
                    <li>Create a safe and secure check out process with personal information</li>
                    <li>Have image upload capability to website</li>
                </ul>
            </td>
        </tr>
        
        <tr>
            <td>People learning about shoes:
            <br>Informational history of shoes. Information about new and old collections. Locations on where to purchase new releases. This group will be mostly mobile users and some desktops.
            </td>
            <td>
                <ul>
                    <li>Navigation</li>
                    <li>Needs organized website to view all shoes quickly</li>
                </ul>
            </td>
            <td><ul>
                <li>Create a user friendly navigation around website</li>
                </ul>
            </td>
        </tr>
    </tbody>    
</table>
    
</div> 
    
    
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
