<?php
	include_once 'header.php';
	include('/xampp/htdocs/IWP_PROJECT/includes/db.inc.php');
	include('/xampp/htdocs/IWP_PROJECT/functions/common_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,200&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<title>Document</title>
	<script src="https://kit.fontawesome.com/122d8303d3.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="styles/clothes.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body>
	<div class="container">
		<div class="products_title" align="center">Products</div>
		<br>
		<br>
		<div class="row">
			<div class="col-md-2">
				<!-- Categories -->
				<div class="sidebar_section">
							<div class="sidebar_title">Category</div>
								<div class="sidebar_section_content">
									<ul>
										
										<?php
											
											getCategories();

										?>



									</ul>
								</div>
							</div>

				<!-- Color -->
						<div class="sidebar_section">
							<div class="sidebar_title">Color</div>
							<div class="sidebar_section_content sidebar_color_content mCustomScrollbar" data-mcs-theme="minimal-dark">
								<ul>
									<li><a class="sidebar_section_content_link" href="#">Blue (23)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Brown (11)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Black (61)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Orange (34)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Green (17)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Red (22)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Pink (7)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Yellow (13)</a></li>
								</ul>
							</div>
						</div>
						<!-- Size -->
						<div class="sidebar_section">
							<div class="sidebar_title">Size</div>
							<div class="sidebar_section_content">
								<ul>
									<li><a class="sidebar_section_content_link" href="#">Small S (23)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Medium M (11)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Large L (61)</a></li>
									<li><a class="sidebar_section_content_link" href="#">Extra Large XL (34)</a></li>
								</ul>
							</div>
						</div>
						<!-- Size -->
						<div class="sidebar_section">
							<div class="sidebar_title">Brands</div>
							<div class="sidebar_section_content">
								<ul>
								<?php
											
											getBrands();

										?>

								</ul>
							</div>
						</div>




			</div>
			<div class="col-md-10">
				
				<div class="row">
				<!--fetching products from db-->
				<?php
					
					getProducts();
					getUniqueCategories();
					getUniqueBrands();
					// $ip = getIPAddress();  
					// echo 'User Real IP Address - '.$ip;  
					if(isset($_SESSION["userid"]))
					{
						cart();
					}
					else
					{
						echo "<script>alert('Login')</script>";
					}
					

					

				?>

				</div>
			</div>
		</div>
	</div>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/malihu-custom-scrollbar/jquery.mCustomScrollbar.js"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/categories_custom.js"></script>
<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="footer_logo">CARA</div>
					<nav class="footer_nav">
						<ul>
							<li><a href="index.php">home</a></li>
							<li><a href="clothes.php">clothes</a></li>
							<li><a href="categories.html">about</a></li>
							<li><a href="contact.php">contact</a></li>
						</ul>
					</nav>
					<div class="footer_social">
						<ul>
							<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-pinterest"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-reddit"></i></a></li>
							<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
						</ul>
					</div>

			</div>
		</div>
	</footer>

</body>
</html>
