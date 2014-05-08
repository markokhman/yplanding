<?php 
	define("HOST", "localhost");
define("DBUSER", "root");
define("PASS", "bogmojasila");
define("DB", "ref");
	$loh='';
	if(isset($_GET["status"]))
	{
		if(existsEmail($_GET["status"]))
		$loh = curPlace($_GET["status"]);
		else
		{
			echo "Oops does not exist such page..sorry";
		}
	}
	else 
	{
		if(isset($_GET["email"]) && isset($_GET["rod"]))
		{
		$email = $_GET["email"];
		toSetcookie($email);
		$rod = $_GET["rod"];
		if(isEmail($email) && !existsEmail($email))
		{
			if(!existsEmail($rod))
			{
				loadDbMain($email);
			}
			else
			{
				$user = getUser($rod);
				$user['child'] = $email;
				loadDbParent($user);
			}
		}
		else
		{
			// echo "email depricated";
		}
		// echo "http://yourplace.kz/index.php?p=".$email;
		// echo "<br>";
		$loh = curPlace($email);
		}
		else
		{
			echo "Tipa Hacker chtole???";	
		}
	}
	//proverka na validnost' email
	function isEmail($txt)
	{
		if(filter_var($txt, FILTER_VALIDATE_EMAIL)) return true;
		else false;
	}
	//zagruzka v db bez parenta
	
	function loadDbMain($email)
	{
		$con = mysqli_connect(HOST, DBUSER, PASS, DB);
		//proverka na svyaz
		if (mysqli_connect_errno()) 
		{
 			 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		mysqli_query($con,"INSERT INTO record (parent_id, email, child_number) VALUES ( 0,'".$email."',0)");
		mysqli_close($con);
	}
	//proverka v db est?
	function existsEmail($email)
	{
		$con = mysqli_connect(HOST, DBUSER, PASS, DB);	
		$reco = mysqli_query($con,"SELECT * FROM record Where email = '".$email."'");
		$result = mysqli_fetch_array($reco);
		mysqli_close($con);
		if($result['id'] > 0) 
			return true;
		else 
			return false;
		
	}
	//zagruzka v db  s parenta
	function loadDbParent($input)
	{
		
		$con = mysqli_connect(HOST, DBUSER, PASS, DB);
		//proverka na svyaz
		if (mysqli_connect_errno()) 
		{
 			 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		mysqli_query($con,"INSERT INTO record (parent_id, email, child_number) VALUES ( ".$input['id'].",'".$input['child']."',0)");
		$input['child_number']++;
		mysqli_query($con,"UPDATE record SET child_number=".$input['child_number']." where email ='".$input['email']."'");

		mysqli_close($con);	 
	}
	//uznat id of email
	function getUser($email)
	{
		$con = mysqli_connect(HOST, DBUSER, PASS, DB);
		//proverka na svyaz
		if (mysqli_connect_errno()) 
		{
				 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT * FROM record Where email='".$email."'");		

		$info = mysqli_fetch_array($result);
		
		return $info;
		mysqli_close($con);
	}
	function curPlace($email)
	{
		$con = mysqli_connect(HOST, DBUSER, PASS, DB);
		//proverka na svyaz
		if (mysqli_connect_errno()) 
		{
 			 echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$reco = mysqli_query($con,"SELECT * FROM record Order by  child_number Desc");
		$pos = 0;
		$prevPos = 1;
		while($result = mysqli_fetch_array($reco))
		{
			$pos++;
			$coolpos = 1;
			if($pos == 1) 
			{
				$curNumberofChild = $result['child_number'];
			}
			if($curNumberofChild > $result['child_number'])
			{
				$curNumberofChild = $result['child_number'];
				$curPos = $pos;
				$prevPos = $curPos;
			}
			if($result['email'] == $email)
			{
				break;
			}
		}
		$loh = $pos." People ahead of You <br> <p style='font-size:40px; font-family: 'Dancing Script', 'cursive';'> You could be ".$prevPos." to get the app, <br>if You will bring at least one of Your friends!</p>";
		// echo 

		mysqli_close($con);
		return $loh;
	}

	function toSetcookie($email) 
    { 
        $numberofmonths = 2; 
        $expireTime = $numberofmonths * 30 * 60 * 24 * 60 + time(); 
        setcookie('yourplaceRef',$email,$expireTime); 
    } 
    function toGetcookie() 
    { 
        if(isset($_COOKIE['yourplaceRef'])) 
        { 
            $email = $_COOKIE['yourplaceRef']; 

        } 
        else
        { 
            $email = "first time"; 
        } 
        return $email; 
    } 
 ?>



 </body>
<!DOCTYPE html>
<html>
<head>
	<title>Your Place</title>
	<link rel="stylesheet" href="css/users.css" type="text/css" />
	<link rel="stylesheet" href="css/template.css" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<!-- <link rel="icon" href="images/favicons/favicon.ico"> -->
	<link rel="shortcut icon" href="images/favicons/favicon.ico">


	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Light&amp;subset=latin-ext,cyrillic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font" />
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-50659886-1', 'yourplaceapp.com');
	  ga('send', 'pageview');

	</script>


</head>
<body>
<div id="page_wrapper">
	<div id="slideshow" class="nobg">
        
			<div class="bg-wrapper-image2">
                <div class="container" >
                	<div class="top_bar">
                		<div class="logo_wrap">
                			<img style="z-index: 500; position:relative;" src="images/logoWHITE.png" width="80px">
                			
                		</div>
                	
                	</div>
                	<div class="static-content default-style with-login">
						<div id="overlay">
							<!-- &nbsp; -->
						</div>
						<div class=" animated fadeInDown fancy_register_form" style=" text-align: center;">
                			<!-- <img class="expose" src="images/logoWHITE.png" width="250px" style="padding-bottom: 50px; padding-top: 35px;"> -->
                			<!-- <br> -->
                			<!-- <br> -->
                        	<h3 style="z-index:150; position:relative; font-size:60px; font-family: 'Lato', 'cursive';"><?= $loh?></h3>
                        	<?php 
                        		if(isset($_GET["p"]))
                        		{
                        			echo "<h4>You came here from ".$_GET["p"]." </h4>";
									$roditel = $_GET["p"];
                        		}
                        		else
								{
									$roditel = "Main";
								}
								
                        	 ?>
                        	<!-- <p style="font-size:40px; font-family: 'Dancing Script', 'cursive';">Get toooons of specials from Your favourite venues</p> -->
                        	<!-- <br> -->
                        	<!-- <p style="font-size:40px; font-family: 'Dancing Script', 'cursive';">Non-stop!</p> -->
                        	<!-- <form name="email_field"> -->
                        	<!-- <input placeholder="Email address" class="expose early_access" type="text" name = "email"> -->
                        	<!-- <input class=" early_access_butt" type="button" value="Get Early Access" onclick="sendRefferal()"> -->
                        	<!-- </form> -->
                        	<!-- <a class="btn">Let's try it!</a> -->
                        	<!-- <a class="watch_video" href="">Whatch the video <img src="images/play_button.png"></a> -->
                        	<br>
                        	<br>
                        	<br>
                        	<p style="font-size:30px; font-family: 'Open Sans', 'cursive';">Get early access by referring your friends.</p>
                        	<a href="http://www.facebook.com/sharer.php?u=http://www.yourplaceapp.com/?p=<?= $email?>" target="_blank" ><img src="images/socials/facebook.png" alt="Facebook" /></a>
                        	<a href="http://twitter.com/share?url=http://www.yourplaceapp.com/?p=<?= $email?>&text=Nice app, best places!" target="_blank"><img src="images/socials/twitter.png" alt="Twitter" /></a>
                        	<a href="https://plus.google.com/share?url=http://www.yourplaceapp.com/?p=<?= $email?>" target="_blank"><img src="images/socials/google.png" alt="Google" /></a>
                        	<a href="mailto:?Subject=YourPlace app&Body=Go to http://www.yourplaceapp.com/?p=<?= $email?> to get early access!"><img src="images/socials/email.png" alt="Email" /></a>
                        	<br>
                        	<h3 style="font-size:30px; font-family: 'Open Sans';">Or share this link</h3>
                        	<p style="font-size:25px; font-family: 'Open Sans';">http://www.yourplaceapp.com/?p=<?= $email;?></p>

                        </div>
                    </div><!-- end static content -->
                </div>
			</div>
        </div><!-- end slideshow -->
</div>



</html>