<?php 
include('connect.php');
session_start();

?>
<!DOCTYPE html>
<html>
<head>
<title>Report Violence</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gender Violence" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps-and-Meta-Tags -->
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- pop-up-box -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script>
	$(document).ready(function() {
		$('.popup-top-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});																							
	}); 
</script>
<!--//pop-up-box -->
<!-- web-fonts -->  
<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- //web-fonts -->
<style>

div a img
{
visibility:hidden;
}
</style>
</head>
<body class="bg">
	<div class="agile-main"> 
		<div class="menu-wrap" id="style-1"> 
			<nav class="top-nav">			
<ul class="icon-list">				
		<?php

if (!isset($_SESSION['SESS_LAST_NAME'])) {
?>
					<li class="menu-title">GBV</li>
					<li>
					<a href="#small-dialog" class="sign-in popup-top-anim"><i class="glyphicon glyphicon-user"></i> Login</a>
					</li>
					
		<?php
}
?>		
		
												
	<?php
	if (isset($_SESSION['SESS_LAST_NAME'])) {
$position=$_SESSION['SESS_LAST_NAME'];

if($position=='officer') {
?>
					<li class="menu-title">GBV</li>
					<li><a href="userdashboard.php"><i class="glyphicon glyphicon-th"></i> Dashboard </a></li>
					<li><a class="active" href="report.php"><i class="glyphicon glyphicon-share"></i> Report Violence </a></li>
					<li><a href="user.php"><i class="glyphicon glyphicon-briefcase"></i> Edit Profile </a></li>
		<?php
}

}
?>			


					<?php
   if (isset($_SESSION['SESS_LAST_NAME'])) {
$position=$_SESSION['SESS_LAST_NAME'];

if($position=='admin') {
?>
<li class="menu-title">GBV</li>
<li><a class="active" href="dashboard.php"><i class="glyphicon glyphicon-home"></i> Dashboard </a></li>
<li><a href="view-offence.php"><i class="glyphicon glyphicon-home"></i> Report Cases </a></li>
<li><a href="view-users.php"><i class="glyphicon glyphicon-home"></i> Users List </a></li>
<li><a href="site-settings.php"><i class="glyphicon glyphicon-home"></i> Settings </a></li>

 <?php
}

}
?>
					
						<ul class="nav-sub">
						
							         <li><a href="#small-dialog" class="sign-in popup-top-anim"><i class="glyphicon glyphicon-user"></i> login</a></li>                                                                                 
							<li><a href="#small-dialog1" class="sign-in popup-top-anim"><i class="glyphicon glyphicon-edit"></i> Sign Up</a></li>																								
							<li><a href="codes.html"><i class="glyphicon glyphicon-list-alt"></i> Short Codes</a></li> 
						</ul>
						<div class="clearfix"> </div>
						<script>
							$( "li a.menu" ).click(function() {
							$( "ul.nav-sub" ).slideToggle( 50, function() {
							// Animation complete.
							});
							});
						</script> 
					</li>
					<li><a href="contact.php"><i class="glyphicon glyphicon-envelope"></i> Contact </a></li>
				</ul>
			</nav>
			<button class="close-button" id="close-button">C</button>
		</div> 
		<div class="content-wrap">
			<div class="header"> 
				<div class="menu-icon">   
					<button class="menu-button" id="open-button">O</button>
				</div>
				<div class="logo">
					<h2><a href="index.php">GBV</a></h2>
				</div>
				<div class="login">
				
				<?php 
				         
                        if (isset($_SESSION['user'])) 
                          {
                         $user = $_SESSION['user'];
						echo "<span style=\"font-size:16px; color:#fff\" class=\"sign-in popup-top-anim\" ><i class=\"glyphicon glyphicon-user\"></i> $user </span> <a style=\"color:#fff\" href=\"logout.php\"> [Log Out]</a> ";
						
	
          
                          }
	                   else
	                    {
				        echo "<a href=\"#small-dialog\" class=\"sign-in popup-top-anim\"><span class=\"glyphicon glyphicon-user\"></span></a>";
				     }
             ?>
				
				
					 
					<!-- modal -->
					<div id="small-dialog" class="mfp-hide">
						<div class="login-modal"> 	
							<div class="booking-info">
								<h3><a href="index.php">Gender Based Violence Report App</a></h3>
							</div>
							<div class="login-form">
								<form action="login2.php" method="post">
									<div class="styled-input">
										<input type="text" name="username" required=""/>
										<label>Username</label>
										<span></span>
									</div>
									<div class="styled-input">
										<input type="password" name="pass" required=""> 
										<label>Password</label>
										<span></span>
									</div> 
									<div class="wthree-text"> 
										<ul> 
											<li>
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span> Remember me ?</label>  
											</li>
											<li> <a href="#">Forgot password?</a> </li>
										</ul>
										<div class="clear"> </div>
									</div> 
									<input type="submit" value="Sign In">		
								</form>
								<p>Don't have an account ?<a href="#small-dialog1" class="sign-in popup-top-anim"> Sign Up</a></p>
							</div> 
						</div>
					</div>
					<!-- //modal --> 
					<!-- modal-two -->
					<div id="small-dialog1" class="mfp-hide">
						<div class="login-modal">  
							<div class="booking-info">
								<h3><a href="index.php">Gender Based Violence Report App</a></h3>
							</div>
							<div class="login-form signup-form">
								<form action="saveuser.php" method="post">
									<div class="styled-input">
									 <input type="hidden" name="user_id"  value="<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,10));?>" readonly>
										<input type="text" name="username" required=""/>
										<label>Username</label>
										<span></span>
									</div>
									<div class="styled-input">
										<input type="text" name="email" required=""/>
										<label>Email</label>
										<span></span>
									</div>
									<div class="styled-input">
										<input type="password" name="pass" required=""> 
										<label>Password</label>
										<span></span>
									</div>  
									<div class="styled-input">
										<input type="text" name="name" required=""/>
										<label>Full Names</label>
										<span></span>
									</div>
									
									<div class="wthree-text"> 
										<input type="checkbox" id="brand1" value="">
										<label for="brand1"><span></span>I accept the terms of use</label> 
									</div>
									<input type="submit" value="Sign Up">		
								</form> 
							</div> 
						</div>
					</div>
					<!-- //modal-two --> 
				</div> 
				<div class="clearfix"> </div>
			</div>
			<div class="content">
				<!-- banner -->
				<div class="banner about-banner"> 
					<div class="banner-img">  
						<h3>Report Violence</h3>   
					</div> 
				</div>
				<!-- //banner -->
				<!-- contact -->
				<div class="w3agile contact"> 
					<h3 class="w3ls-title">Report Violence</h3>
					
											
							<?php		
							  if (isset($_GET['success-true'])) 
                                {
                        
						          echo "<div class=\"alert alert-info\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                               Report was successful !!
                            </div> ";       
                               }
	                        elseif (isset($_GET['failed-true']))
	                        {
				       echo "<div class=\"alert alert-danger\">
                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                               Report was unsuccessful !!
                            </div> ";  
				            }
							?>				
					<div class="contact-form"> 
						<form  action="save-reported.php" method="post">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Tip ID</label>
                                                <input type="text" name="offence_id" class="form-control" placeholder="Tip ID" value="<?php 
$prefix= md5(time()*rand(1, 2)); echo strip_tags(substr($prefix ,0,6));?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Offender Name</label>
                                                <input type="text" name="vehicle_no" class="form-control" placeholder="Offender Name" >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Offender's Physical Appearance / Clothing</label>
                                                <input type="text" name="driver_license"  class="form-control" placeholder="Offender's Physical Appearance">
                                            </div>
                                        </div>
                                    </div>
									
									<div class="col-md-12">
                                            <div class="form-group">
                                                <label>Concern/Event Type</label>
<select class="form-control" name="offence" >
  <option selected disabled>..Choose Concern/Event Type..</option>
                <option value="Rape">Rape</option>
            <option value="Domestic Violence">Domestic Violence</option>
             <option value="Sexual Harassment">Sexual Harassment</option>
             <option value="Acid Throwing">Acid Throwing</option>
            <option value="Reproductive Coercion">Reproductive Coercion</option>
            <option value="Female Genital Mutilation">Female Genital Mutilation</option>
            <option value="Forced Marriage">Forced Marriage</option>
            <option value="Sexual Slavery">Sexual Slavery</option>
            <option value="Forced Abortion">Forced Abortion</option>
            <option value="Forced Prostitution">Forced Prostitution</option>
            <option value="Marriage by Abduction">Marriage by Abduction</option>
            <option value="Stoning and Flogging<">Stoning and Flogging</option>
            <option value="Trafficking">Trafficking</option>
            <option value="Obstetric Violence">Obstetric Violence</option>
            <option value="Dowry Violence">Dowry Violence</option>
            <option value="Female Infanticide">Female Infanticide</option>
            <option value="Other offences and violation">Other offences and violation</option>
</select>
</select>                                                 
												</div>
                                        </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Event Description</label>
                                               
												<textarea  id="txtNarrativeText" name="name" class="form-control" style="height:150px;" placeholder=""></textarea>
												
                                            </div>
                                        </div>
                                     </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Locatio of Offense</label>
                                                <input type="text" name="address"  class="form-control" placeholder="Address of Incident" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        
										
		
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Victim Name</label>
                                                <input type="text" name="vn"  class="form-control" placeholder="Victim Name" value="" />
                                            </div>
                                        </div>
										
										
										
										<?php 
							  $user=$_SESSION['SESS_MEMBER_ID'];
	$result = $db->prepare("SELECT id,username,email,name,address FROM user WHERE id='$user'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>                                      
<input type="hidden" name="officer_reporting"  value="<?php echo $row['username']; ?>" >                                          
	<?php }?>
                                   
										
										<div class="col-md-6">
                                            <div class="form-group">
                                                <label>Victim's Race / Ethnicity</label>
                                                 <select class="form-control" name="gender" >
  <option value="Asian">Asian</option>
  <option value="American Indian / Alaska Native">American Indian / Alaska Native</option>
   <option value="Black / African American">Black / African American</option>
  <option value="Hispanic / Latino">Hispanic / Latino</option>
   <option value="Native Hawaiian / Other Pacific Islander">Native Hawaiian / Other Pacific Islander</option>
  <option value="White">White</option>
  <option value="Other">Other</option>
</select> 
                                            </div>
                                        </div>
	
                                    </div>
 <div class="row">
                                        
                                    </div>
                                   <button type="submit" class="btn btn-info btn-fill pull-left">Report Offence</button>
                                    <div class="clearfix"></div>
                                </form>
					</div>
					<div class="map"> 
						<h3 class="w3ls-title">Route Map</h3>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9503398796587!2d-73.9940307!3d40.719109700000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1441710758555" allowfullscreen></iframe>
					</div>
					
				</div>
				
				
				<div class="w3agile footer"> 
					<div class="social-icons">
						<ul>
							<li><a href="#"> </a></li>
							<li><a href="#" class="fb"> </a></li>
							<li><a href="#" class="gp"> </a></li>
							<li><a href="#" class="drb"> </a></li>
						</ul>
						<div class="clearfix"> </div>
					</div>
					 
					
				</div> 
			</div>
		</div>
	</div> 
	<!-- menu-js -->
	<script src="js/classie.js"></script>
	<script src="js/main.js"></script>
	<!-- //menu-js -->
	<!-- nice scroll-js -->
	<script src="js/jquery.nicescroll.min.js"></script> 
	<script>
		$(document).ready(function() {
	  
			var nice = $("html").niceScroll();  // The document page (body)
		
			$("#div1").html($("#div1").html()+' '+nice.version);
		
			$("#boxscroll").niceScroll({cursorborder:"",cursorcolor:"#00F",boxzoom:true}); // First scrollable DIV
		});
	</script>
	<!-- //nice scroll-js -->
	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>