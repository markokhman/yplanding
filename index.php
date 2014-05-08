<?php
$bigif = false;
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
            toSetcookie($email);
        } 
        else
        { 
            $email = "first time"; 
        } 
        return $email; 
    } 

if (toGetcookie()!='first time') {
	$email = toGetcookie();
	$bigif = true;
	// echo $email;
	// redirect('vk.com');
}

?>

<!doctype html>
<!--[if IE 7 ]>    <html lang="en-gb" class="isie ie7 oldie no-js"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en-gb" class="isie ie8 oldie no-js"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en-gb" class="isie ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en-gb" class="no-js"> <!--<![endif]-->



<head>
	<title>Your Place | Your favourite places!</title>
	
	<meta charset="utf-8">
	<meta name="keywords" content="скидка, sale" />
	<meta name="description" content="YourPlace" />

	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="addons/superfish_responsive/superfish.css" type="text/css" />
	<link rel="stylesheet" href="css/template.css" type="text/css" />
	<link rel="stylesheet" href="css/updates.css" type="text/css" />
	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<link rel="stylesheet" href="css/users.css" type="text/css" />
	<link rel="stylesheet" href="animate.css" type="text/css" />

	
	<!-- This stylesheet only adds some repairs on idevices  -->
	<link rel="stylesheet" href="css/responsive.css" type="text/css" />
	
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font" />
	<link href='http://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
	<!-- <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700&amp;v1&mp;subset=latin,latin-ext" type="text/css" media="screen" id="google_font_body" /> -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Light&amp;subset=latin-ext,cyrillic" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,100' rel='stylesheet' type='text/css'>
	
	<!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
	<!-- // <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->
	<script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js">\x3C/script>')</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script src="js/jquery.noconflict.js" type="text/javascript"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js" type="text/javascript"></script>	


	<link rel="shortcut icon" href="images/favicons/favicon.ico">
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">
	
	<!-- // <script language="JavaScript" src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script> -->
	<script language="JavaScript" src="http://www.iplocationtools.com/iplocationtools.js?key=707f797d736d756a6a6f61613b746e64	"></script>
	
	<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="css/fixes.css" />
	<![endif]-->

	<!--[if lte IE 8]>
		<script src="js/respond.js"></script>
		<script type="text/javascript"> 
		var $buoop = {vs:{i:8,f:6,o:10.6,s:4,n:9}} 
		$buoop.ol = window.onload; 
		window.onload=function(){ 
		 try {if ($buoop.ol) $buoop.ol();}catch (e) {} 
		 var e = document.createElement("script"); 
		 e.setAttribute("type", "text/javascript"); 
		 e.setAttribute("src", "http://browser-update.org/update.js"); 
		 document.body.appendChild(e); 
		} 
		</script> 
	<![endif]-->
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<!-- THIS IS THE DARK THEME STYLESEET // REMOVE COMMENTS TO ENABLE -->
	<!-- <link rel="stylesheet" href="css/dark-theme.css" type="text/css" /> -->
	<!-- END DARK THEME -->
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    
	<style type="text/css">
	/*html { overflow-x:hidden; padding: 0 !important; margin:0px !important; }
	 .fullwidthbanner-container{ width:100% !important; position:relative; padding:0; max-height:600px !important; overflow:hidden;	}*/
	</style>
	<!-- <link rel="stylesheet" type="text/css" href="sliders/revolution_slider/css/settings.css" media="screen" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="sliders/revolution_slider/css/portfolio_devices.css" media="screen" /> -->
</head>

<body>
	<div id="page_wrapper">

        <div id="slideshow" class="nobg">
        
			<div class="bg-wrapper-image2">
                <div class="container" >
                	<div class="top_bar">
                		<div class="logo_wrap">
                			<img style="z-index: 500; position:relative;" src="images/logoWHITE.png" width="240px">
                			<!-- <a class="right_wrap" href="businessEN.html">
                				<img src="images/getDemo.png" width="240px">
                			</a> -->
                		</div>
                	
                	</div>
                	<div class="static-content default-style with-login">
						<div id="overlay" style="background: rgba(0,0,0,0.4);">
							<!-- &nbsp; -->
						</div>
						<div class=" fadeInDown fancy_register_form" style=" text-align: center;">
                			<!-- <img class="expose" src="images/logoWHITE.png" width="250px" style="padding-bottom: 50px; padding-top: 35px;"> -->
                			<!-- <br> -->
                			<!-- <br> -->
                        	<h3 style="z-index:150; position:relative; font-size:60px; font-family: 'Dancing Script', 'cursive';">You are awesome!</h3>
                        	<?php 
                        		if(isset($_GET["p"]))
                        		{
                        			echo "<h4 style='z-index:150; position:relative;'>You came here from ".$_GET["p"]." </h4>";
									$roditel = $_GET["p"];
                        		}
                        		else
								{
									$roditel = "Main";
								}
								
                        	 ?>
                        	<h3 style="z-index:150; position:relative; font-size:40px; font-family: 'Lato', sans-serif !important;">Get mobile rewards from <br> your favorite places for being your awesome self.</h3>
                        	<br>
                        	<h3 style=" z-index:150; position:relative; font-size:40px; font-family: 'Lato', sans-serif !important; margin-top:-30px;">Non-stop and Free!</h3>
                        	<br>
                        	<!-- <h3 style="z-index:150; position:relative; font-size:40px; font-family: 'Lato', sans-serif !important; margin-top:-30px;">!</h3> -->
                        	<?php
                        	if ($bigif) {
                        		?>

	                        	<form name="email_field" style="z-index:150; position:relative;">
		                        	<input placeholder="Email address" class="expose early_access" type="hidden" name = "email" value="<?= $email?>">
		                        	<input class=" check_spot" type="button" value="Check Your Spot" onclick="sendRefferal()">
	                        	</form>	

                        		<?php
                        	} else {
                        	?>
	                        	<form name="email_field" style="z-index:150; position:relative;">
		                        	<input placeholder="Email address" class="expose early_access" type="text" name = "email">
		                        	<input class=" early_access_butt" type="button" value="Get Early Access" onclick="sendRefferal()">
	                        	</form>
                        	<?php
                        	}
                        	?>
                        	<!-- <a class="btn">Let's try it!</a> -->
                        	<!-- <a class="watch_video" href="">Whatch the video <img src="images/play_button.png"></a> -->
                        	<!-- <img src="images/bigarrow.png" width="300px" style="padding-top: 73px;opacity: 0.4;"> -->
                        </div>
                    </div><!-- end static content -->
                </div>
			</div>
        </div><!-- end slideshow -->
        
        
		<section id="content">
			<div class="container">
				<div class="row">
					<div class="feat front" >
						<!-- <img src="images/pin.png" width="40px" style="float:left;"> -->
						<img src="images/clickFavs.png" style="margin-top:-420px;" width="25%">
						<div class="text_here" style="font-size: 40px; text-align:center; margin-top:-30px;">
							<h3 style="font-size: 40px;">1. Install the FREE app "<span style="color:red;">yourplace</span>"</h3>
							<br>
							<h3 style="font-size: 40px;">2. Check-in to your favorite places</h3>
							<br>
							<h3 style="font-size: 40px;">3. Be ready to receive <span style="color:red;">exclusive rewards</span>!</h3>
							<br>
							<br>
							<br>
						</div>

					</div>
				</div>
				<div class="row">
					<div class="span2 front">
						<!-- <h3 style="color:white; margin-top:-180px;">Click Your favourite places close by</h3> -->
					
					    <!-- <div id = "0" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven0" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname0 ">Del Papa</h4>
					    	
					    </div> -->
						<div id = "1" class="afav afav1 afavtop">
				    		<div class="little_overlay lit1">+</div>				
				    		<img id="ven1" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname1 ">Del Papa</h4>
					    	
					    </div>
						<div id = "2" class="afav afav1 afavtop">
				    		<div class="little_overlay lit2">+</div>				
				    		<img id="ven2" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname2 ">Del Papa</h4>
					    	
					    </div>
						<div id = "3" class="afav afav1 afavtop">
				    		<div class="little_overlay lit3">+</div>				
				    		<img id="ven3" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname2 ">Del Papa</h4>
					    	
					    </div>
					</div>
					<div class="span2 front" style="margin-top: -65px;">
					
					    <!-- <div id = "4" class="afav afav1 afavtop">
				    		<div class="little_overlay lit4">+</div>				
				    		<img id="ven4" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname4 ">Del Papa</h4>
					    	
					    </div> -->
						<div id = "5" class="afav afav1 afavtop">
				    		<div class="little_overlay lit5">+</div>				
				    		<img id="ven5" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname5 ">Del Papa</h4>
					    	
					    </div>
						<div id = "6" class="afav afav1 afavtop">
				    		<div class="little_overlay lit6">+</div>				
				    		<img id="ven6" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname6 ">Del Papa</h4>
					    	
					    </div>
						<div id = "7" class="afav afav1 afavtop">
				    		<div class="little_overlay lit7">+</div>				
				    		<img id="ven7" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname7 ">Del Papa</h4>
					    	
					    </div>
					    <!-- <a href="#"> -->
					     
					</div>	
					<div class="span2 front">
					<!-- 
					    <div id = "8" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven8" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname8 ">Del Papa</h4>
					    	
					    </div> -->
						<div id = "9" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven9" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname9 ">Del Papa</h4>
					    	
					    </div>
					    <!-- <a href="#"> -->
					     
					</div>	

					<div class="span2 front" style="margin-top: -65px;">
					<!-- 
					    <div id = "10" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven10" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname10">Del Papa</h4>
					    	
					    </div> -->
						<div id = "11" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven11" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname11 ">Del Papa</h4>
					    	
					    </div>
					    <!-- <a href="#"> -->
					     
					</div>	

					<div class="span2 front">
					
					    <!-- <div id = "12" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven12" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname12 ">Del Papa</h4>
					    	
					    </div> -->
						<div id = "13" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven13" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname13 ">Del Papa</h4>
					    	
					    </div>
					    <!-- <a href="#"> -->
					     
					</div>	
					
					<div class="span2 front" style="margin-top: -65px;">
					
				<!-- 	    <div id = "14" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven14" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname14 ">Del Papa</h4>
					    	
					    </div> -->
						<div id = "15" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven15" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname15 ">Del Papa</h4>
					    	
					    </div>
						<div id = "16" class="afav afav1 afavtop">
				    		<div class="little_overlay lit0">+</div>				
				    		<img id="ven16" class="circular" src="images/photo.jpg" alt="" />		
					    	<h4 class="favname favname16 ">Del Papa</h4>
					    	
					    </div>
					    <!-- <a href="#"> -->
					     
					</div>	

						
					<img src="images/clickFavsDown.png" style="margin-top: -5%;margin-left: 13%;" width="400px">
				</div>

				<!-- <div class="row" style="text-align: center;">
				</div> -->


			</div>
		</section><!-- end #content -->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
<footer id="footer">
	<div class="container">

		<div class="row">
			<div class="span12">
				<div class="bottom fixclear">
							<script type="text/javascript">
								ip2location_banner1();
							</script>
						
					<ul class="social-icons fixclear">
						<li class="title">GET SOCIAL</li>
						<li class="social-twitter"><a href="#">Twitter</a></li>
						<li class="social-dribbble"><a href="#">Dribbble</a></li>
						<li class="social-facebook"><a href="#">Facebook</a></li>
						<li class="social-envato"><a href="#">Envato</a></li>
					</ul><!-- end social-icons -->
					<div class="copyright">
						<a href="index.html"><img style="margin-top: -32px;" width="100px" src="images/logo2.png" alt="" /></a>
						<p>&copy; 2013 <strong>YourPlace</strong>. All Rights Reserved. <br />
						Designed by <a href="http://www.hogash.com/" target="_blank">MOSKIS</a></p>
					</div><!-- end copyright -->
				</div><!-- end bottom -->
			</div>
		</div><!-- end row -->
		
	</div>
</footer>
        
    </div><!-- end page_wrapper -->
	
    <a href="#" id="totop">TOP</a>

<!--////////////////// Load JS Files -->

<!-- load revolution slider scripts -->

<script type="text/javascript" src="sliders/revolution_slider/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="sliders/revolution_slider/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript">
var tpj=jQuery;
tpj.noConflict();

tpj(document).ready(function() {

if (tpj.fn.cssOriginal!=undefined)
	tpj.fn.css = tpj.fn.cssOriginal;

	tpj('.fullwidthbanner').revolution(
		{
			delay:9000,
			startwidth:890,
			startheight:600,

			onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

			thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
			thumbHeight:50,
			thumbAmount:3,

			hideThumbs:200,
			navigationType:"bullet",					//bullet, thumb, none, both	 (No Shadow in Fullwidth Version !)
			navigationArrows:"verticalcentered",		//nexttobullets, verticalcentered, none

			touchenabled:"on",						// Enable Swipe Function : on/off

			navOffsetHorizontal:0,
			navOffsetVertical:20,

			stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
			stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic



			fullWidth:"on",

			shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

		});




});
</script>
<!-- end revolution slider scripts -->

<!-- Carousels (by CarouFredSel) -->
		<script type="text/javascript" defer="defer">
jQuery(document).ready(function($) {
    // alert("Your location is: " + geoplugin_countryName() + ", " + geoplugin_region() + ", " + geoplugin_city() + ", " + geoplugin_latitude() + ", " + geoplugin_longitude());
    // alert(ip2location_city());	
    // alert(ip2location_country_long());	
	
// --------------------------------------------COOKIES
	// alert(document.cookie);
	function getCookie(cname)
	{
	var name = cname + "=";
	var ca = document.cookie.split(';');
	for(var i=0; i<ca.length; i++) 
	  {
	  var c = ca[i].trim();
	  if (c.indexOf(name)==0) return c.substring(name.length,c.length);
	  }
	return "";
	}
	
	$('.little_overlay').click(function () {
		$(this).html('&#10004;');
	});

	// alert(getCookie('yourplaceRef'));
//---------------------------------------------------------

    var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0!
	var yyyy = today.getFullYear();
	if(dd<10) {
    dd='0'+dd
	} 

	if(mm<10) {
	    mm='0'+mm
	} 


	today = yyyy+''+mm+''+dd;
	// alert(today);
    var image_temp='';
    $.ajax({
      url: 'https://api.foursquare.com/v2/venues/search',
      dataType: 'json',
      data: 'categoryId=4d4b7105d754a06374d81259&near='+ip2location_city()+','+ip2location_country_long()+'&client_id=MIVYNX0PCWHUIOICCB0PY1TGPH4BSWNEJBHMSYWBNEDMHXDE&client_secret=MQ05J03SBZ2KTMRKTLOWUC4U1PLS3LA554CB1FBYLPDUGNLU&v='+today+'&limit=17',
      // data: 'limit=7&ll='+latitude+','+longitude+'&client_id='+client_id+'&client_secret='+client_secret+'',
      async: false,
      success: onAjaxSuccess
	});
	 
	function onAjaxSuccess(data)
	{
	  // Здесь мы получаем данные, отправленные сервером и выводим их на экран.
	  var l = data.response.venues.length;
		for (var i = 0; i < l; i++) {
		    var venue = data.response.venues[i];
		    // var k = group.items.length;
	  		// alert(JSON.stringify(venue));
	  		// alert(venue.id);
	  		$.ajax({
		      url: 'https://api.foursquare.com/v2/venues/'+venue.id+'/photos',
		      dataType: 'json',
		      data: 'oauth_token=MBGJUNB5CSBLNTOOU5IQ1XXARSCXOJRPJAKWADVK53TJ44PI&v='+today+'&limit=1',
		      // data: 'limit=7&ll='+latitude+','+longitude+'&client_id='+client_id+'&client_secret='+client_secret+'',
		      async: false,
		      success: littleSuccess
			});

	  		// alert(image_temp);
			$('#ven'+i).attr('src',image_temp);
			$('.favname'+i).html(venue.name);
		}
		function littleSuccess(data) {
			// alert (JSON.stringify(data.response.photos.items[0]));
			image_temp = data.response.photos.items[0].prefix+data.response.photos.items[0].width+'x'+data.response.photos.items[0].height+data.response.photos.items[0].suffix;
			// alert(image_temp);
		}
	}



});
</script>
<?php
echo  
"<script type='text/javascript'>

	function sendRefferal(rod)
	{

		var email = document.email_field.email.value;
		if(isEmail(email))
		{
			
			window.location.href = 'ref.php?email=' + email+'&rod='+'".$roditel ."' ;
			
		}
		else 
		{
			alert('Wrong Email');
		}
	}
	//validation of email
	function isEmail(email) 
	{
     	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,6})$/;
     	return reg.test(email);
	}
	
	</script>";
 ?>
<script src="js/jquery.carouFredSel.js" type="text/javascript"></script>
<script type="text/javascript">
;(function($) {
	// ** partners carousel
	$('#partners_carousel').carouFredSel({
		responsive: true,
		scroll: 1,
		auto: false,
		items: {
			width: 250,
			visible: {
				min: 3,
				max: 10
			}
		},
		prev	: {	
			button	: ".partners_carousel .prev",
			key		: "left"
		},
		next	: { 
			button	: ".partners_carousel .next",
			key		: "right"
		}
	});
	// *** end partners carousel
	$(window).load(function(){
		// ** recent works
		$('#recent_works1').carouFredSel({
			responsive: true,
			scroll: 1,
			auto: false,
			items: {
				width: 300,
				visible: {
					min: 3,
					max: 10
				}
			},
			prev	: {	
				button	: ".recentwork_carousel .prev",
				key		: "left"
			},
			next	: { 
				button	: ".recentwork_carousel .next",
				key		: "right"
			}
		});
		// *** end recent works carousel
	});
})(jQuery);
</script>
<!-- end Carousels (by CarouFredSel) -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50659886-1', 'yourplaceapp.com');
  ga('send', 'pageview');

</script>

<script type="text/javascript">

if (screen.width <= 699) {
// document.location = "http://yourplace.kz/mobile2";
	$('.visible-desktop').hide();
}


if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
   // location.replace("http://yourplace.kz/mobile2");
	$('.visible-desktop').hide();

}

</script>

<!-- JavaScript at the bottom for fast page loading -->

<script type="text/javascript" src="js/bootstrap.min.js"></script><!-- Bootstrap Framework -->
<script type="text/javascript" src="js/plugins.js"></script><!-- jQuery Plugins -->
<script type="text/javascript" src="addons/superfish_responsive/superfish_menu.js"></script><!-- Superfish Menu -->


<script type="text/javascript" src="js/kalypso_script.js"></script><!-- custom scripts file -->

<!-- prettyphoto scripts & styles -->
<link rel="stylesheet" href="addons/prettyphoto/prettyPhoto.css" type="text/css" />
<script type="text/javascript" src="addons/prettyphoto/jquery.prettyPhoto.js"></script>
<script type="text/javascript">

	function ppOpen(panel, width){
		jQuery.prettyPhoto.close();
		setTimeout(function() {
			jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: width, theme:'pp_kalypso'});
			jQuery.prettyPhoto.open(panel);
		}, 300);
	} // function to open different panel within the panel
	
	jQuery(document).ready(function($) {
		jQuery("a[data-rel^='prettyPhoto'], .prettyphoto_link").prettyPhoto({theme:'pp_kalypso',social_tools:false, deeplinking:false});
		jQuery("a[rel^='prettyPhoto']").prettyPhoto({theme:'pp_kalypso'});
		jQuery("a[data-rel^='prettyPhoto[login_panel]']").prettyPhoto({theme:'pp_kalypso', default_width:800, social_tools:false, deeplinking:false});
		
		jQuery(".prettyPhoto_transparent").click(function(e){
			e.preventDefault();
			jQuery.fn.prettyPhoto({social_tools: false, deeplinking: false, show_title: false, default_width: 980, theme:'pp_kalypso transparent', opacity: 0.95});
			jQuery.prettyPhoto.open($(this).attr('href'),'','');
		});

		if ((screen.width <= 699) || (navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
			// $('#overlay').animate({
			// 	backgroundColor: 'rgba(0,0,0,0.4)'
			// });
		} else {
			
			// $('#overlay').animate({
			// 	backgroundColor: 'rgba(0,0,0,0.4)'
			// });
			
				// $('.expose').mouseenter(function(e){
				// 	$('#overlay').animate({
				// 		backgroundColor: 'rgba(0,0,0,0.4)'
				// 	});
				// });

				// $('.expose').mouseleave(function(e){
				// 	$('#overlay').animate({
				// 		backgroundColor: 'rgba(0,0,0,0.7)'
				// 	});
				// });
		}


		// if () {
		   // location.replace("http://yourplace.kz/mobile2");
		// }

		
	});

</script>
<!--end prettyphoto -->

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<!-- // <script> -->
	<!-- // 	var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; -->
	<!-- // 	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1; -->
	<!-- // 	g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js"; -->
	<!-- // 	s.parentNode.insertBefore(g,s)}(document,"script")); -->
	<!-- // </script> -->
</body>
</html>