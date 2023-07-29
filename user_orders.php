<?php
	include_once 'header.php';
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
	<link rel="stylesheet" type="text/css" href="profile/cart.css">
	<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Document</title>
</head>
<body>
    <?php
    $userid=$_SESSION['userid'];
    $get_user="Select * from `users` where usersId=$userid";
    $result=mysqli_query($conn, $get_user);
    $row_fetch=mysqli_fetch_assoc($result);
    $user_id=$row_fetch['usersId'];
    
    ?>
    <div align="center"><h2 style="font-family: 'Roboto Serif', serif">ALL ORDERS</h2></div>
    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">S.No</th>
        <th scope="col">Amount Due</th>
        <th scope="col">Total Products</th>
        <th scope="col">Invoice Number</th>
        <th scope="col">Date</th>
        <th scope="col">Complete/Incomplete</th>
        <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $get_order_details="Select * from `user_orders` where usersId=$user_id";
            $result_orders=mysqli_query($conn, $get_order_details);
            while($row_data=mysqli_fetch_assoc($result_orders))
            {
                $order_id=$row_data['order_id'];
                $amount_due=$row_data['amount_due'];
                $total_products=$row_data['total_products'];
                $invoice_number=$row_data['invoice_number'];
                $order_status=$row_data['order_status'];
                if($order_status=='pending')
                {
                    $order_status='Incomplete';
                }
                else{
                    $order_status='Complete';
                }
                $order_date=$row_data['order_date'];
                $number=1;
                echo"<tr>
                <th scope='row'>$number</th>
                <td>$amount_due</td>
                <td>$total_products</td>
                <td>$invoice_number</td>
                <td>$order_date</td>
                <td>$order_status</td>";
                
                if($order_status=='Complete')
                {   
                    echo "<td>PAID</td>";
                }
                else{
                   echo "<td><a href='confirm_payment.php?order_id=$order_id'>Confirm</a></td>";
                }
                "</tr>";
                $number++;
            }

        ?>
        
    </tbody>
    </table>

    
</body>
</html>