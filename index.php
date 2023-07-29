<?php
	include_once 'header.php';
	include_once '/xampp/htdocs/IWP_PROJECT/functions/common_functions.php';
?>
<!--TANVI SHRIKHANDE 20BCE1710-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css"> 
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>CARA</title>
</head>
<body>
    
    
     <!--CAROUSEL-->
     <section id="banner">
        <div id="testimonial-carousel" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#testimonial-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="zara-banner" src="img/images/cart.jpg">
                </div>
                <div class="carousel-item">
                    <img class="zara-banner" src="img/images/contact.jpg">
                </div>
                <div class="carousel-item">
                    <img class="zara-banner" src="img/images/gallery.jpg">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonial-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
           
        </div>
    </section>
    <div class="slogan-banner">
        <h1 class="slogan" align="center"><strong>Find your definition of self expression with us</strong></h1>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <div class="section_subtitle">only the best</div>
                    <div class="section_title">promo prices</div>
                </div>
            </div>
        </div>
    
    <div class="categories">
        <div class="container">
            <div class="row">
                <div class="col-3 col-md-6">
                    <img src="img/images/category-1.jpg">
					<div class="promo_content promo_content_1">
						<div class="promo_title">-30% off</div>
						<div class="promo_subtitle">on all jeans</div>
					</div>
					<div class="promo_link"><a href="sale_products.php">Shop Now</a></div>
					
                </div>
                <div class="col-3 col-md-6">
                    <img src="img/images/category-2.jpg">
					<div class="promo_content promo_content_2">
						<div class="promo_title">-30% off</div>
						<div class="promo_subtitle">shoes</div>
					</div>
					<div class="promo_link"><a href="sale_products.php">Shop Now</a></div>
                </div>
                <div class="col-3 col-md-6">
                    <img src="img/images/category-3.jpg">
					<div class="promo_content promo_content_3">
						<div class="promo_title">-25% off</div>
						<div class="promo_subtitle">on Sweatshirts</div>
					</div>
					<div class="promo_link"><a href="sale_products.php">Shop Now</a></div>
                </div>
            </div>

        </div>

    </div>

    <!--BRANDS-->
    <div class="arrivals">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">new arrivals</div>
					</div>
				</div>
			</div>
			<div class="row products_container">

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="img/images/product_1.jpg" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="clothes.php">Autumn Strips</a></div>
								<div class="product_price">Rs. 1000</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><a href="clothes.php"><img src="img/images/shopping-bag-white.svg" alt=""></a></div>
								<div class="product_fav product_option">+</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="img/images/product_2.jpg" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="clothes.php">Beachy Floral Top</a></div>
								<div class="product_price">Rs. 1500</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><a href="clothes.php"><img src="img/images/shopping-bag-white.svg" alt=""></a></div>
								<div class="product_fav product_option">+</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Product -->
				<div class="col-lg-4 product_col">
					<div class="product">
						<div class="product_image">
							<img src="img/images/product_3.jpg" alt="">
						</div>
						<div class="rating rating_4">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<div class="product_content clearfix">
							<div class="product_info">
								<div class="product_name"><a href="clothes.php">Off-White Beauty</a></div>
								<div class="product_price">Rs. 1200</div>
							</div>
							<div class="product_options">
								<div class="product_buy product_option"><a href="clothes.php"><img src="img/images/shopping-bag-white.svg" alt=""></a></div>
								<div class="product_fav product_option">+</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
    <!-- Testimonials -->

	<div class="testimonials">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">only the best</div>
						<div class="section_title">testimonials</div>
					</div>
				</div>
			</div>
			<div class="row test_slider_container">
				<div class="col">

					<!-- Testimonials Slider -->
					<div class="owl-carousel owl-theme test_slider text-center">

						<!-- Testimonial Item -->
						<div class="owl-item">
							<div class="test_text">“Integer ut imperdiet erat. Quisque ultricies lectus tellus, eu tristique magna pharetra nec. Fusce vel lorem libero. Integer ex mi, facilisis sed nisi ut, vestibulum ultrices nulla. Aliquam egestas tempor leo.”</div>
							<div class="test_content">
								<div class="test_image"><img src="img/images/testimonials.jpg" alt=""></div>
								<div class="test_name">Christinne Smith</div>
								<div class="test_title">client</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
</html>