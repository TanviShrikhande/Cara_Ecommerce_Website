<?php
	include_once 'header.php';
	include('/xampp/htdocs/IWP_PROJECT/functions/common_functions.php');
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
	<div align="center">
		<form action="" method="post">
			<section class="h-100" style="background-color: #eee;">
				<div class="container h-100 py-5">
					<div class="row d-flex justify-content-center align-items-center h-100">
					<div class="col-10">

						<div lass="d-flex justify-content-between align-items-center mb-4">
							<div class="cart_title">Shopping Cart
							</div>
						</div>
						<?php
							global $conn;
							$get_ip_add = getIPAddress();
							$total=0;
							$cart_query="Select * from `cart_details` where ip_address='$get_ip_add'";
							$result=mysqli_query($conn, $cart_query);
							while($row=mysqli_fetch_array($result))
							{
								$product_id=$row['product_id'];
								$select_products="Select * from `products` where product_id='$product_id'";
								$result_products=mysqli_query($conn, $select_products);
								while($row_product_price=mysqli_fetch_array($result_products))
								{
									$product_price=array($row_product_price['product_price']);
									$price_table=$row_product_price['product_price'];
									$product_title=$row_product_price['product_title'];
									$product_image1=$row_product_price['product_image_1'];

									$product_values=array_sum($product_price);
									$total=$total+$product_values;
									
						
								
						?>

						<div class="card rounded-3 mb-4">
							<div class="card-body p-4">
								<div class="row d-flex justify-content-between align-items-center">
									<div class="col-md-2 col-lg-2 col-xl-2">
										<img
										src="img/images/<?php echo $product_image1 ?>"
										class="img-fluid rounded-3" alt="Cotton T-shirt">
									</div>
									<div class="col-md-3 col-lg-3 col-xl-3">
										<h5 class="lead fw-normal mb-2"><?php echo $product_title ?></h5>
									</div>
									<div class="col-md-3 col-lg-3 col-xl-2 d-flex">
										<input type="text" class="form-control" placeholder="Quantity" name="qty">
									</div>
									
									<div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
										<h5 class="mb-0">Rs.<?php echo $price_table ?></h5>
										<br>
										<p>Remove: <input type="checkbox" name="removeitem[]" value="<?php echo $product_id?>"></p>
									</div>
									<?php
										
										
										if(isset($_POST['update_cart']))
										{
											$get_ip_add = getIPAddress();
											$quantities=$_POST['qty'];
											$update_cart="update `cart_details` set quantity=$quantities where product_id='$product_id'";
											$new_query=mysqli_query($conn, $update_cart);
											$total=$total*$quantities; 

										}

										
										
									?>
									<div class="col-md-1 col-lg-1 col-xl-1 text-end">
										
										<button class='btn' name="update_cart"><i class='fas fa-plus fa-lg'></i></button>
										<button class='btn' name="remove_cart"><i class='fas fa-trash fa-lg'></i></button>
										
									</div>
								</div>
							</div>
						</div>
						<?php
								}
							}	
							
						

						?>
						<div class="card">
						<div class="card-body">
							<div style="font-family: 'Roboto Serif', serif; font-size:30px" class="subtotal_title">Subtotal: Rs.<?php echo $total?></div>
							<button type="button" class="btn btn-dark btn-block btn-lg"><a style="color:white" href="clothes.php"> Continue Shopping</button>
							<button type="button" class="btn btn-dark btn-block btn-lg"><a style="color:white" href="payment.php">Proceed to Pay</a></button>
						</div>
						</div>

					</div>
					</div>
				</div>
			</section>
		</form>
	</div>
	<!--Function to remove items from cart"-->
	<?php
		function remove_cart_item()
		{
			global $conn;
			if(isset($_POST['remove_cart']))
			{
				foreach($_POST['removeitem'] as $remove_id)
				{
					echo $remove_id;
					$delete_query="Delete from `cart_details` where product_id=$remove_id";
					$run_delete=mysqli_query($conn, $delete_query);
					if($run_delete)
					{
						echo "<script>window.open('cart.php', '_self')</script>";
					}
				}
			}
		}
		echo $remove_item=remove_cart_item();

		// function update_cart()
		// {
		// 	global $conn;
			
		// 	if(isset($_POST['update_cart']))
		// 	{
		// 		foreach($_POST['updateitem'] as $update_id)
		// 		{
		// 			echo $update_id;
		// 			$quantities=$_POST['qty'];
		// 			$update_query="update cart_details set quantity=$quantities where product_id=$update_id";
		// 			$run_update=mysqli_query($conn, $update_query);
		// 			if($run_update)
		// 			{
		// 				echo"<script>window.open('cart.php', '_self')</script>";
		// 			}
		// 		}
		// 	}
		// }
		// echo $update_item=update_cart();
	?>
</body>
</html>