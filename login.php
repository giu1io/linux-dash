<?php
	require_once(__DIR__."/config.php");
	
	session_start();
	
	// check if the user has insert both username and password
	if(!empty($_POST["username"])&&!empty($_POST["password"])){
		//check if the user and password match
		if($_POST["username"]==USER&&hash('sha256',$_POST["password"])==PASSWORD){
			// set the session "logged" to true
			$_SESSION["logged"]=true;
			// if the user has selected "remember me" save the password hash in a cookie.
			if(isset($_POST["remeberMe"]))
				setcookie("logged",PASSWORD, time()+60*60*24*30, "/", DOMAIN, false);	
		}
		else
			//if user o or password wrong setup an error message
			$error="Username o password errati.";
	}
	
	//if exist a cookie with the correct password than login
	if(!empty($_COOKIE["logged"])&&$_COOKIE["logged"]==PASSWORD)
		$_SESSION["logged"]=true;
	
	// if the user has request the "logout" action than destroy the session and delete the cookie
	// than redirect.
	if(!empty($_GET["action"])&&$_GET["action"]=="logout"){
		session_destroy();
		// set a negative TTL will delete the cookie 
		setcookie("logged","0", time()-60*60*24*30, "/", DOMAIN, false);
		header("Location: index.php");
	}
	
	// if the user is logged correctly redirect to index.php
	if(isset($_SESSION["logged"])&&$_SESSION["logged"])
		header("Location: index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title><?=DISPLAY_TITLE?></title>
<link rel="stylesheet" href="css/login_style.css" type="text/css" />
</head>

<body class="login">
<div class="loginbox radius">
<h2 style="color:#FFF; text-align:center; margin-bottom:5px;"><?=DISPLAY_TITLE?></h2>
	<div class="loginboxinner radius">
    	<div class="loginheader">
    		<h1 class="title">Login</h1>
        	<div class="logo"><img src="img/logo.png" /></div>
    	</div><!--loginheader-->
        
        <div class="loginform">
                	
        	<form id="login" action="" method="post">
            	<p>
                	<label for="username" class="bebas">User</label>
                    <input type="text" id="username" name="username" value="" class="radius2" />
                </p>
                <p>
                	<label for="password" class="bebas">Password</label>
                    <input type="password" id="password" name="password"  class="radius2" />
                </p>
				<p>
                	<label style="display:inline; width:100%" id="labelong" for="checkbox" class="bebas">Remember me for 2 weeks</label>
                    <input style="display:inline; width:20px" type="checkbox" id="remeberMe" name="remeberMe" />
                </p>
				<?
					if(!empty($error))
						echo "<p>$error</p>";
				?>
                <p>
                	<button class="radius title" name="client_login">Login</button>
                </p>
            </form>
        </div><!--loginform-->
    </div><!--loginboxinner-->
</div><!--loginbox-->
</div>
</body>

</html>
