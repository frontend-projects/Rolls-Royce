<?php session_start(); error_reporting(0); include( "DB.php");
if( $_POST['ryi-name']!="" && $_POST['ryi-submit']=="submit" && $_POST['ryi-email']!=""  && $_POST['ryi-contact']!="" && $_POST['ryi-intrested']!="" && $_POST['ryi-city']!=""     )
{
 $quer_create="insert into rolls_royce_register (`ryi-name`,`ryi-email`,`ryi-city`,`ryi-contact`,`ryi-intrested`,`ryi-location`,`ryi-post`,`ryi-company`) values('".$_POST['ryi-name']."','".mysql_real_escape_string($_POST['ryi-email'])."','".mysql_real_escape_string($_POST['ryi-city'])."','".mysql_real_escape_string($_POST['ryi-contact'])."','".mysql_real_escape_string($_POST['ryi-intrested'])."','".mysql_real_escape_string($_POST['ryi-location'])."','".mysql_real_escape_string($_POST['ryi-position'])."','".mysql_real_escape_string($_POST['ryi-company'])."') ";
	$result_find_insert=mysql_query($quer_create);
//header('location:tvs_air_pressure_table.php');
//************************************************mail*************************************************************************
	$subject    = 'Rolls-Royce Register your interest';
			$to         = 'shelly.dhingra@tothenew.com';
			$headers  = "From: shelly.dhingra@tothenew.com \r\n";
		
			$headers .= 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			
			$mail_str = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head>
				<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
				<title>Untitled Document</title>
				</head>

				<body>
				
				
				Name :'.$_POST['ryi-name'].'<br>
				Email :'.$_POST['ryi-email'].'<br>
				Mobile :'.$_POST['ryi-contact'].'<br>
				City :'.$_POST['ryi-city'].'<br>
				Intrested in:'.$_POST['ryi-intrested'].'<br>
				Company :'.$_POST['ryi-company'].'<br>
				Post :'.$_POST['ryi-position'].'<br>
				
				
				</body>
				</html>';
					

			$mail_sent_client = mail($to, $subject, $mail_str, $headers);
	header('location:thankyou.html');?>
<script>
    window.location.assign("thankyou.html")
</script><?php
exit();
//***********************************************mail-end**********************************************************************
}
?><?php include( "process.php"); ?>
<?php
if ($success) {
$username=$user->formattedName;
$useremail=$user->emailAddress;
$location=$user->location->name;
$result = json_decode(json_encode($user), true);
$position=$result['positions']['values'][0]['title'];
$company=$result['positions']['values'][0]['company']['name'];
	?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Rolls Royce</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/custom-animate.css">
  
  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="form-bg"> 
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-TH5HPL"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-TH5HPL');</script>
<!-- End Google Tag Manager -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76997033-1', 'auto');
  ga('send', 'pageview');

</script>

        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->


            <header class="header animated slideInDown">
              <div class="header-menu">
                <div class="toggle-button">
  <div class="wrapper">
    <div class="menu-bar menu-bar-top"></div>
    <div class="menu-bar menu-bar-middle"></div>
    <div class="menu-bar menu-bar-bottom"></div>
  </div>
</div>

                <div class="site-logo head-logo">
                 <a href="index.html"><img src="img/logo.png" alt="logo"> </a>
               </div>

               <nav class="site-menu" >
                <ul>
                  <li><a href="#">Models</a>
                    <ul class="sub_menu" style="display: none">
                      <li>
                      <div class="car"><a href="wraith.html"><img src="img/m-wraith-menu-hover.png" alt=""></a></div>
                      <div class="car_con"><a href="wraith.html">Wraith</a><p><a href="#">Effortless simplicity</a></p></div></li>
                      <li><div class="car"><a href="ghost.html"><img src="img/m-ghost-menu-hover.png" alt=""></a></div>
                      <div class="car_con"><a href="ghost.html">Ghost</a><p><a href="#">Effortless simplicity</a></p></div></li>
                      <li><div class="car"><a href="phantom.html"><img src="img/m-phantom-menu-hover.png" alt=""></a></div><div class="car_con"><a href="phantom.html">Phantom</a><p><a href="#">Effortless simplicity</a></p></div></li>
                      <li><div class="car"><a href="dawn.html"><img src="img/m-dawn-menu-hover.png" alt=""></a></div>
                      <div class="car_con"><a href="dawn.html">Dawn</a><p><a href="#">Effortless simplicity</a></p></div></li>
                    </ul>

                  </li>
                  <li><a href="the-rolls-royce-experience.html">The Rolls-Royce Experience</a></li>
                  <li class="logo-li"><div class="site-logo">
                 <a href="index.html"><img src="img/logo.png" alt="logo"></a> 
               </div></li>
                  <li><a href="dawn.html">A New Dawn</a></li>
                  <li><a href="#">Connect with LinkedIn</a></li>
                </ul>
              </nav>  
<div class="clearfix"></div>
            </div>

          </header>

<div class="body_content">
 <script type="text/javascript" language="javascript">
function insertRecord() {

var name = $("#ryi-name").val();
var email = $("#ryi-email").val();
var city = $("#ryi-city").val();
var intrested = $("#ryi-intrested").val();
var contact = $("#ryi-contact").val();

if(name == "") {
      alert("Please enter your name");
	  return false; 
  	}
	if(contact == "") {
      alert("Please enter your contact number");
	  return false; 
  	}
	if(city == "") {
      alert("Please select your City");
	  return false; 
  	}
	if(intrested == "") {
      alert("Please select what you intrested");
	  return false; 
  	}
	
	var atpos = email.indexOf("@");
	var dotpos = email.lastIndexOf(".");
		
  
	 if ($('#ryi-tnc').is(':checked')) {
                
                }else{
					
					$('#error_ryi-tnc').html('Please check terms & conditions');
					return false;
				}
					 if ($('#ryi-pp').is(':checked')) {
                  
                }else{
					$('#error_ryi-pp').html('Please check privacy policy');
					return false;
				}
				 
}
</script>
<div class="form-sec">
<h1>Register your interest</h1>
<h2>Register now to show interest in owning a Rolls-Royce and stand to win a trip to GoodWood United Kindom to experience sophistication.</h2>
  <form method="post" name="ryi" id="ryi" onSubmit="return insertRecord();">
 <div class="group">      
      <input type="text" name="ryi-name" id="ryi-name" value="<?php echo $username;  ?>" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Name</label>
    </div>
       
      <input type="hidden" name="ryi-email" id="ryi-email" value="<?php echo $useremail; ?>" required>
        <input type="hidden" name="ryi-location" id="ryi-location" value="<?php echo $location; ?>" required>
          <input type="hidden" name="ryi-position" id="ryi-position" value="<?php echo $position; ?>" required>
            <input type="hidden" name="ryi-company" id="ryi-company" value="<?php echo $company;  ?>" required>
   

    <div class="group">      
      <input type="Number" name="ryi-contact" id="ryi-contact" required>
      <span class="highlight"></span>
      <span class="bar"></span>
      <label>Contact Number</label>
    </div>

    <div class="input-field group">
    <select name="ryi-city" id="ryi-city" required>
      <option value=""  >City</option>
      <option value="Delhi" <?php if ((strpos($location, "Delhi") !== false) ){echo "selected";}?>><span class="purple-text">Delhi</span></option>
      <option value="Mumbai" <?php if ((strpos($location, "Mumbai") !== false) ){echo "selected";}?>>Mumbai</option>
      <option value="Kolkata" <?php if ((strpos($location, "Kolkata")!== false) ){echo "selected";}?>>Kolkata</option>
      <option value="Punjab" <?php if ((strpos($location, "Punjab")!== false) ){echo "selected";}?>>Punjab</option>
      <option value="Bangalore" <?php if ((strpos($location, "Bangalore") !== false) ){echo "selected";}?>>Bangalore</option>
    </select>
    
  </div>


   <div class="input-field group">
    <select name="ryi-intrested" id="ryi-intrested" required>
      <option value="" >Interested in</option>
      <option value="WRAITH"><span class="purple-text">WRAITH</span></option>
      <option value="GHOST">GHOST</option>
      <option value="PHANTOM">PHANTOM</option>
         <option value="DAWN">DAWN</option>
    </select>
    
  </div>

<div class="group1">
      <input type="checkbox" id="ryi-tnc" name="ryi-tnc" />
    <label for="ryi-tnc">I have read and agreed to the <a href="#">terms and conditions</a></label>
        <label id="error_ryi-tnc" style="color: red;"></label>
  </div>

  <div class="group1">
      <input type="checkbox" id="ryi-pp" name="ryi-pp" />
    <label for="ryi-pp">I have read and agreed to the <a href="#">privacy policy</a></label>
    <label id="error_ryi-pp" style="color: red;"></label>
    
  </div>


<div class="btn-submit">
  <input type="submit" value="submit" name="ryi-submit" id="ryi-submit">

</div>

  </form>

</div>



</div>




          <footer class="footer animated slideInUp">
          <div class="container-fluid">
            <div class="footer-content">
              <!-- <p>Copyright &copy; RollsRoyce.com</p>  -->
               <div class="social-icon">
              <a href="#" class="facebook_icon"></a>
              <a href="#" class="instagram_icon"></a>
              <a href="#" class="linkedin_icon"></a>
              <a href="#" class="twitter_icon"></a>
              </div>
            </div>  
</div>
          </footer>

<!-- popup -->

<div class="modal fade cus-modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
      <div class="modal-body">
      <h1>  Thank you for getting in touch! </h1>
      <h2>We always love to hear from you. Our inbox can’t wait to get your messages, so talk to us any time you like! <br>
Cheers!</h2>
      </div>
      
    </div>
  </div>
</div>



          <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> -->
          <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

          <script src="js/vendor/bootstrap.js"></script>
          <script src="js/jquery.fullPage.js"></script>
          <script src="js/main.js"></script>
      <!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css"> -->
       <?php    if( $_POST['ryi-submit']=="submit")
	   {?>
<script>
  
$(document).ready(function(){
$('#myModal').modal('show');
$('.close').on('click', function(){
	window.location.href ='index.html';
})

});

</script>
<?php } ?>

        </body>
        </html>
<?php }?>