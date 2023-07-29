<?php
	include_once 'header.php';
	include('/xampp/htdocs/IWP_PROJECT/functions/common_functions.php');
	include('/xampp/htdocs/IWP_PROJECT/includes/db.inc.php');
    if(isset($_GET['order_id']))
    {
        $order_id=$_GET['order_id'];
        $select_data="Select * from `user_orders` where order_id=$order_id";
        $result=mysqli_query($conn, $select_data);
        $row_fetch=mysqli_fetch_assoc($result);
        $invoice_number=$row_fetch['invoice_number'];
        $amount_due=$row_fetch['amount_due'];

    }
    if(isset($_POST['confirm_payment']))
    {
        $invoice_number=$_POST['invoice_number'];
        $amount=$_POST['amount'];
        $payment_mode=$_POST['payment_mode'];
        $insert_query="Insert into `user_payments` (order_id, invoice_number, amount, payment_mode) values ($order_id, $invoice_number, $amount, '$payment_mode')";
        $result=mysqli_query($conn, $insert_query);
        if($result)
        {
            echo "<script>alert('Successfully completed payment')</script>";
            echo "<script>window.open('profile.php?my_orders', '_self')</script>";

        }
        $update_orders="update `user_orders` set order_status='Complete' where order_id=$order_id";
        $result_orders=mysqli_query($conn, $update_orders);

    }
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
	<link rel="stylesheet" type="text/css" href="profile/cart.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Document</title>
</head>
<body>
    <div align="center" class="container">
        <div style="font-size:40px; font-family: 'Roboto Serif', serif; padding-bottom:10%">CONFIRM PAYMENT</div>
        <form action="" method="post">
            <div style="padding-bottom:10%">
                <input type="text" class="form-control" name="invoice_number" placeholder="INVOICE NUMBER" value="<?php echo $invoice_number?>">

            </div>
            <div style="padding-bottom:10%">
                <label>AMOUNT</label>
                <input type="text" class="form-control" name="amount" placeholder="AMOUNT" value="<?php echo $amount_due?>">
            
            </div>
            <div style="padding-bottom:10%">
               <select name="payment_mode"  class="form-select w-100 m-auto">
                <option>Select Payment Mode</option>
                <option>UPI</option>
                <option>Netbanking</option>
                <option>PayPal</option>
                <option>Cash On Delivery</option>
                <option>Pay Offline</option>
               </select>

            </div>
            <div style="padding-bottom:10%">
                <input class="btn btn-dark w-100" type="submit" value="Confirm" name="confirm_payment">

            </div>
            
        </form>

    </div>
</body>
</html>