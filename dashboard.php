<?php 
include('connect.php');

session_start();
if(!isset($_SESSION['SESS_FIRST_NAME'])){
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Gender Based Violence Report App</title> 
<!-- For-Mobile-Apps-and-Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Gender Violence" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all"> 
<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" /> 
<link rel="stylesheet" href="css/light-bootstrap-dashboard.css" type="text/css" media="all" /> 
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
					removalDelay: 50,
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
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='officer') {
?>
					<li class="menu-title">GBV</li>
					<li><a href="userdashboard.php"><i class="glyphicon glyphicon-th"></i> Dashboard </a></li>
					<li><a href="report.php"><i class="glyphicon glyphicon-share"></i> Report Violence </a></li>
					<li><a href="user.php"><i class="glyphicon glyphicon-briefcase"></i> Edit Profile </a></li>
		<?php
}
?>			
					<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='admin') {
?>
<li class="menu-title">GBV</li>
<li><a class="active" href="dashboard.php"><i class="glyphicon glyphicon-th"></i> Dashboard </a></li>
<li><a href="view-offence.php"><i class="glyphicon glyphicon-list-alt"></i> Reported Cases </a></li>
<li><a href="view-users.php"><i class="glyphicon glyphicon-user"></i> Users List </a></li>
<li><a href="site-settings.php"><i class="glyphicon glyphicon-cog"></i> Settings </a></li>

 <?php
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
				
				<div class="container-fluid">
                <div class="row">
                  
					<div class="col-md-6">
                        <div class="card">

                            <div class="header-light">
                                <h4 class="title">Email Statistics</h4>
                                <p class="category">Last Campaign Performance</p>
                            </div>
                            <div class="content-light">
                                <div id="chartPreferences" class="ct-chart ct-perfect-fourth"></div>

                                <div class="footer">
                                    
                                    <hr>
                                    <div class="stats">
									
                                        <i class="fa fa-clock-o"></i> Welcome
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
					   
                               <div class="col-md-6">
                        <div class="card ">
                            <div class="header-light">
                                <h4 class="title">Latest</h4>
                                <p class="category">Reported Offences</p>
                            </div>
                            <div class="content-light">
                                <div class="table-full-width">
                                    <table class="table">
                                        <tbody>
<?php 
	$result = $db->prepare("SELECT * FROM reported_offence ORDER BY id DESC limit 5");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>                                           
										   <tr>
                                                <td><?php echo $row['offence']; ?></td>
                                                <td class="td-actions text-right">
                                                  <span style="padding:2px; background-color:#1DC7EA; color:#FFF;">  <?php echo $row['date']; ?> </span>
                                                </td>
                                            </tr>
	<?php } ?>
                                          </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
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
	<!--  Charts Plugin -->
	<script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="js/chartist.min.js"></script>
	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="js/demo.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
	  
	  demo.initChartist();
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