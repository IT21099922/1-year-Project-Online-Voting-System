
<html>
<head>
    <link rel="stylesheet" href="style\signin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<title>
Star Reality
</title>
<link rel="shortcut icon" href="ImagesSL\logo.jpg">

<body class = "light-grey">



<div class = "light-grey">
 <div class="nav-container">
      <table class="nav-table">
        <tr>
          <td>
            <img src="ImagesSL\user.jpg" class="user-img">
            <a href="signin.php">  
              <button class="btn-nav"> Log in </button>
            </a>
            <a href="registration.php">
              <button class="btn-nav"> Sign up </button>
            </a>
          </td>
          <td rowspan="2">
            <img src="ImagesSL\logo.jpg" alt="" class="logo">
          </td>
        </tr>
        <tr>
          <td>
            <div class="topnav">
            <a class="padding-11-16" href="homepage.php">Home</a>
					  <a class="padding-11-16" href="competitor.php">Competitor</a>
					  <a class="padding-11-16" href="judge.php">Judge</a>
					  <a class="padding-11-16" href="live.php">Live stream</a>
					  <a class="padding-11-16" href="mobileapp.php">Mobile App</a>
					  <a class="padding-11-16" href="contactus.php">Contact Us</a>
					  <a class="padding-11-16" href="aboutus.php">About Us</a>
				</div>
      </td> 
        </tr>
      </table>    
    </div>

    <img src="ImagesSL\bg.jpg" class="bgimg" alt="">



        
    <div class="abc">
	     
         <h3>Welcome Back!<h3>
         <h5>Login to continue<h5>
         
         <form action="signinform.php" method="post">
         
             <form action="" method="POST">
               <div class="imgcontainer">
                   <label for="uname"> <img src="ImagesSL\user.png" alt="Avatar" class="avatar"> </label>
                   <input type="text" placeholder="Enter Username" name="uname" >
         
                   <label for="psw"> <img src="ImagesSL\locked.png" alt="Avatar" class="avatar"> </label>
                   <input type="password" placeholder="Enter Password" name="password" >
               </div>
               <center> <button type="submit" name="submit" class="submit"> Sign In </button> </center>
             </form>
               
             
             
             <center> <span class="psw">Forgot <a href="#">password?</a></span> </center>
            <br></br>
            <p>Login with</p>
             <div>
             <a href ="www.facebook.com">
                 <button class="social facebook">Login with Facebook</button>
             </a>
             </div>
             <div>
             <a href= "#">
                 <button class ="social twitter">Login with Twitter</button>
             </a>
             </div>
             
             <p>Not a member? <a href="#">Sign up</a></p>
             
           </div>
         </form>
    </div>


<?php
    include'footer.php'
?>
</body>
</html>


