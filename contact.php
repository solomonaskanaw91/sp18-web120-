
<!DOCTYPE html>
<html lang="en">
<head>
<title>Solomon's WEB120 Title Page</title>
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
<div class="wrapper">
<header>
<h1><a href="index.php"><i class="logo fa fa-home"></i> Solomon Askanaw Portal</a></h1>
    <nav>
        <ul class="topnav" id="myTopnav">
            <li><a href="index.php" class="selected">Welcome</a></li>
            <li><a href="big/index.php">Big</a></li>
            <li><a href="aia.php">AIA</a></li>
            <li><a href="flowchart.php">Flowchart</a></li>
            <li><a href="fp/index.php">Final Project</a></li>
            <li><a href="contact.php">Contact Solomon</a></li>   <li class="icon"> 
    <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a>        </li>
      </ul>
   </nav>
</header>
<h1>Contact Solomon</h1>
     <?php include 'includes/simple.php';?>
	 <p class="clear-recaptcha"></p>   
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
} else {
    x.className = "topnav";
  }
}
</script>
    <footer>
<small>&copy; 2018, by Solomon Askanaw All Rights Reserved, <a href="http://validator.w3.org/check?uri=referer" target="_blank">Valid HTML</a> ~ <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">Valid CSS</a></small></footer>
</div>
    
</body>
    
</html>








