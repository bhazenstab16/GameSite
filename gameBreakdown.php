<?php $_GET["id"] ?>
<?php 		
			$dbhost = "127.0.0.1:3356";
			$dbuser = "root";
			$dbpass = "";
			$db = "games";

			$con = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $con -> error);

			if ($con->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
		
			$sql = "SELECT * FROM games WHERE gameID={$_GET['id']}";
			$result = $con->query($sql);
?>
	
<html>
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Khronos - Particles</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">  
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

</head>
<meta charset="utf-8">
	<body id="top">
	<header>

   	<div class="row">
   		<div class="logo">
	         <a href="index.php">Game Tracker</a>
	      </div> 

			<div class="social-links">
			   <ul>
					<li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
				   <li><a href="https://www.tumblr.com/"><i class="fa fa-tumblr"></i></a></li>				   
				   <li><a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a></li>				     			
				</ul>
			</div>
   	</div> 

   </header>
      <section id="home" class="home-particles">
   	<div class="shadow-overlay"></div>
   	<div class="content-wrap-table">		   
		   <div class="main-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">
		   			<div id="counter">
		   				<div class="half">
		   					<span>Game Tracker Basic</span>
		   				</div> 
		   			</div>
			  			<div class="bottom-text">
			  				<h1>Our site is launching soon.</h1>
				  			<p>
							Say, didn't you read this already? Check the first page again if you missed it. 
				  			</p>			  				
			  			</div>			  						  			   			
			   	</div>
			   	<div class="scroll-icon">
					   <p class="scroll-text">Scroll For More Info</p>
					   <a href="#info" class="smoothscroll">
					   	<div class="mouse"></div>
					   </a>
				   	<div class="end-top"></div>
					</div>
		   	</div> 
		   </div>
		</div>
   </section>
      <section id="info">

   	<div class="info-overlay"></div>

   	<div class="row">   		
   		<div class="col-twelve tabs-wrap">

				<div class="tab-container">

					<!-- tab content - about
   				================================================== -->
					<div id="tab-about" class="tab-content">
						
					   <div class="tab-entry">

					   	<div class="row tab-entry-intro">
					   		<div class="col-twelve with-bottom-line">

					   			<p class="lead">This is a Beta Page. Please be gentle with our feelings.</p>

					   		</div>   		
					   	</div> <!-- /tab-content-intro -->

					   	<div class="row about-content tab-entry-content">
					     		
					   		<div class="about-list block-1-3 block-s-1-2 block-tab-full">

						      	<div class="bgrid item">           
						            <div class="item-content">	
									<?php $row = $result->fetch_assoc() ?>
						            	 <h3 class="h05">Game Rating</h3>

							            <p>
										<?= $row["gameRating"] ?>
										<center>What does that mean? <a href= "https://www.esrb.org/ratings-guide/">Click  Here to Find Out</a>
										</center>
						         		</p>
						         		
						         	</div> 	         	 

									</div> <!-- /bgrid -->

									<div class="bgrid item">	                         

						            <div class="item-content">	
						            	<h3 class="h05">Game Description</h3>  

							            <p>
										<?= $row["gameDescription"] ?>
						         		</p>

						         		
						            </div>	                          

								   </div> <!-- /bgrid -->

									<div class="bgrid item">	              
									<?=$row["trailerLink"]?> <!--Just move this wherever you want it, to change the dimensions of the iframe, change it in the database, once you find the size you like, change it for the others -->
									</div>
				<div class="item-content">
					<h3 class="h05">Available On</h3>
						<p>
						<?php if($row["forSteam"] == 0)
				{
					echo "</tr>";
				}				
				else
				{
					echo "Steam", "</tr>";
				}
				?>
				<tr><?php if($row["forSwitch"] == 0)
				{
					echo "</tr>";
				}				
				else
				{
					echo ", Switch", "</tr>";
				}
				?>
				<tr><?php if($row["forPS4"] == 0)
				{
					echo "</tr>";
				}				
				else
				{
					echo ", Playstation 4","</tr>";
				}
				?>
				<tr><?php if($row["forXbox1"] == 0)
				{
					echo "</tr>";
				}				
				else
				{
					echo ", Xbox One", "</tr>";
				}
				?>
				<tr><?php if($row["forPS3"] == 0)
				{
					echo "</tr>";
				}				
				else
				{
					echo ", Playstation 3", "</tr>";
				}
				?>
				<tr><?php if($row["for3DS"] == 0)
				{
					echo "</tr>";
				}				
				else
				{
					echo ", 3DS", "</tr>";
				}
				?>
						</p>
				</div>                

								   <div class="bgrid item">	            
						            </div>	               

								   </div> <!-- /bgrid -->

								   <div class="bgrid item">   	           
						        			
						            </div>	               

								   </div> <!-- /bgrid -->

						      </div> <!-- /about-list --> 

					     	</div> <!-- /row about-content -->
					     		
					   </div> <!-- /tab-entry -->

					</div> <!-- /tab-about -->
<!-- DO NOT UNDER ANY CIRCUMSTANCES TAKE THESE BREAKS OUT THEY ARE VITAL TO THE FORMATTING -->
<?="<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>"?>
		
		
		
   <footer>

   	<div class="social-wrap">
   		<div class="row">
				
	         <ul class="footer-social-list">
	            <li><a href="https://www.facebook.com/">
	             	<i class="fa fa-facebook"></i><span>Facebook</span>
	            </a></li>
	            <li><a href="https://twitter.com/">
	              	<i class="fa fa-twitter"></i><span>Twitter</span>
	            </a></li>
	            <li><a href="https://www.tumblr.com/">
	              	<i class="fa fa-tumblr"></i><span>Tumblr</span>
	            </a></li>
	            <li><a href="https://www.instagram.com/">
	              	<i class="fa fa-instagram"></i><span>Instagram</span>
	            </a></li>
	         </ul>
	         
			</div>
   	</div>

   	<div class="footer-bottom">

			<div class="footer-logo">
					<img src="images/footer-logo.png" alt="">				
			</div>

   		<div class="copyright">
		     	<span>© Copyright Khronos 2016.</span> 
		     	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		   </div>		   

   	</div>

   	<div class="back-to-top">
		 	<a href="#top" class="smoothscroll"><span>Back to Top</span></a>
		</div>

   </footer>

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>
	</body>
</html>