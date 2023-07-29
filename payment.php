<?php
	include_once 'header.php';
	include_once('/xampp/htdocs/IWP_PROJECT/functions/common_functions.php');
	include('/xampp/htdocs/IWP_PROJECT/includes/db.inc.php');
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
	<link rel="stylesheet" type="text/css" href="styles/cart.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Document</title>
</head>
<body>

    <!--php code to access user id-->
    <?php
        $user_ip=getIPAddress();
        $get_user="Select * from `users` where user_ip='$user_ip'";
		$result=mysqli_query($conn, $get_user);
		$run_query=mysqli_fetch_array($result);
		$user_id=$run_query['usersId'];


    ?>
    <div class="container">
        <h2 style="font-family: 'Roboto Serif', serif; font-size:50px" class="text-center text-dark">Payment Options</h2>
        <div class="row">
            <div class="col md-6">
                <a href="https://www.paypal.com"><img src="img/images/Comprehensive-blog-post-on-PayPal_Thumbnail-01.png"></a>
            </div>
            <div style="padding-top:15%; padding-left:9%" class="col md-6">
                <a style="font-family: 'Roboto Serif', serif; font-size:30px" class="text-center text-dark" href="profile.php?user_id=<?php echo $user_id?>">Pay Offline</a>
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
</html>