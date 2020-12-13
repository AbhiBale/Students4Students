<?php

session_start();

//Note Abhi : This if code is for if user press back button this will note allow to enter homepage without login details
if(!isset($_SESSION['username']))
{
	header('location:Login.php');
}
?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Welcome to S4S!</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link href="style/light-theme.css" rel="stylesheet" id="theme-link">
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <h1><b><a href="index.php">Students <span class="logo_colour">For </span>Students</a></b></h1>
          <h2><strong><i>Build a life you deserve...</i></strong></h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="language.php">Languages</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li><h4><u><a href="logout.php"> <img src="logout.jpg" alt="Logout" width="40" height="40" style="vertical-align:middle;margin:-25px 17px"> <?php echo $_SESSION['username']; ?></a></u></h4></li>
		  <li class="btn-toggle"><h4><u><a> <img id="myImage" src="dark.jpg" alt="Logout" width="85" height="71" style="vertical-align:top;margin:-28px 12px"</a></u></h4></li>
		  <script>
			const btn = document.querySelector(".btn-toggle");
			const theme = document.querySelector("#theme-link");
			btn.addEventListener("click", function() {
			// Swap out the URL for the different stylesheets
			if (theme.getAttribute("href") == "style/light-theme.css") {
				theme.href = "style/dark-theme.css";
				document.getElementById('myImage').src='light.jpg';
			} else {
				theme.href = "style/light-theme.css";
				document.getElementById('myImage').src='dark.jpg';
			}
			});
			</script>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h3>Latest News</h3>
        <h4><a href="https://www.wired.com/story/github-advanced-security-open-source/"><b>GitHub Takes Aim at Open Source Software Vulnerabilities</b></a></h4>
        <h5>05.06.2020 12:30 PM</h5>
        <p>GitHub Advanced Security will help automatically spot potential security problems in the world's biggest open source platform.</p>
        <h4><a href="https://www.wired.com/story/python-language-more-popular-than-ever/"><b>Python Is More Popular Than Ever</a></b></h4>
        <h5>03.02.2020 02:15 PM</h5>
        <p>Despite a rocky transition from Python 2 to Python 3, developers are still flocking to the programming language.</a></p>
        
        <h4><a href="https://www.gadgetsnow.com/slideshows/google-stops-free-unlimited-photos-backup-what-you-need-to-know-and-how-will-it-actually-impact-you/photolist/79208397.cms"><b>GOOGLE
          TO STOP FREE UNLIMITED PHOTOS BACKUP</a></b></h4>
    <h5>14.11.2020 18:19 AM</h5>
    <p>WHAT YOU NEED TO KNOW AND HOW WILL IT ACTUALLY IMPACT YOU</a></p>
    
      </div>
      <div id="content">
        <img src="intro.png" style="border-radius: 50%; max-width: 100%;">
        <h1>What is eLearning?</h1>
        <p><b>eLearning is learning utilizing electronic technologies to access educational curriculum outside of a traditional classroom. In most cases, it refers to a course, program or degree delivered completely online.</b></p>
        <p>There are many terms used to describe learning that is delivered online, via the internet, ranging from Distance Education, to computerized electronic learning, online learning, internet learning and many others.</p>
        <p>We define eLearning as courses that are specifically delivered via the internet to somewhere other than the classroom where the professor is teaching.</p>
        <p>We at Students For Students (S4S) give a wider understanding about the technological skills required to become a better coder in future.</p>
        
      </div>
    </div>
   
  </div>
</body>
</html>
