<?php
	include_once 'header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:opsz,wght@8..144,200&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styles/admin_index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div align="center" class="container">
		<div class="details_title">Manage Details</div>
            <br>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="img_container">
                        <div>
                            <img  style="width:450px; height:400px" class="details_img" src="img/images/promo_2.jpg">
                            <div  style="padding-right:130px" align="center">
                                <p class="admin_name">Admin: Tanvi Shrikhande</p>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                        <div style="padding-top:100px; padding-right:10px" class="mini_container">
                            <div class="row">
                            
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-dark"><a class="text-light" href="insert_product.php">Insert Products</a></button>
                                    <button type="button" class="btn btn-dark">View Products</button>
                                </div>
                                <div class="col-md-6">
                            
                                    <button type="button" class="btn btn-dark"><a class="text-light" href="admin_index.php?insert_category"><i class="fa-solid fa-plus"></i> Categories</a></button>
                                    <button type="button" class="btn btn-dark"><i class="fa-solid fa-eye"></i> Categories</button>
                                </div>
                            
                            </div>
                            <br>

                            <div class="row">
                            
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-dark"><a class="text-light" href="admin_index.php?insert_brands">Insert Brands</a></button>
                                    <button type="button" class="btn btn-dark">View Brands</button>
                                </div>
                            
                            
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-dark">All Orders</button>
                                    <button type="button" class="btn btn-dark">All Payments</button>
                                </div>
                                
                            </div>
                            <div class="container_2">
                                <?php
                                    if(isset($_GET['insert_category'])){
                                        include('insert_categories.php');
                                    }
                                ?>
                                <?php
                                    if(isset($_GET['insert_brands'])){
                                        include('insert_brands.php');
                                    }
                                ?>
                            </div>
                            <br>
                            <div align="center">
                                <div style="padding-top:20px" class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-dark">Logout</button>
                                    </div>
                                    
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
</div>   
</body>
</html>