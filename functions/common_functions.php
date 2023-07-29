<?php
include('/xampp/htdocs/IWP_PROJECT/includes/db.inc.php');
function getProducts()
{
    global $conn;

    //condition to check if isset or not
    if(!isset($_GET['category']))
    {
        if(!isset($_GET['brand']))
        {
            $select_query="Select * from `products`";
            $result_query=mysqli_query($conn, $select_query);
            while($row=mysqli_fetch_assoc($result_query))
            {
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image_1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo "<div class='col-md-4'>
                <div class='card'>
                    <img class='card-img-top' src='./product_images/$product_image1' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>Rs. $product_price</p>
                        <button class='btn'><a href='clothes.php?add_to_cart=$product_id'<i class='fa-solid fa-cart-shopping'></i></a></button>
                        <button class='btn'><a href='product_details.php?product_id=$product_id'<i class='fa-solid fa-plus'></i></a></button>
                    </div>
                </div>
            </div>";


            }
        }
    }
}
function getsaleProducts()
{
    global $conn;

    //condition to check if isset or not
    if(!isset($_GET['category']))
    {
        if(!isset($_GET['brand']))
        {
            $select_query="Select * from `sale_products`";
            $result_query=mysqli_query($conn, $select_query);
            while($row=mysqli_fetch_assoc($result_query))
            {
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image_1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo "<div class='col-md-4'>
                <div class='card'>
                    <img class='card-img-top' src='./product_images/$product_image1' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>Rs. $product_price</p>
                        <button class='btn'><a href='clothes.php?add_to_cart=$product_id'<i class='fa-solid fa-cart-shopping'></i></a></button>
                        <button class='btn'><a href='product_details.php?product_id=$product_id'<i class='fa-solid fa-plus'></i></a></button>
                    </div>
                </div>
            </div>";


            }
        }
    }
}

//getting unqiue categories

function getUniqueCategories()
{
    global $conn;

    //condition to check if isset or not
    if(isset($_GET['category']))
    {   
        $category_id=$_GET['category'];
        $select_query="Select * from `products` where category_id=$category_id";
        $result_query=mysqli_query($conn, $select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0)
        {   
            echo "<h2 align='center'>No stock for this category</h2>";

        }
        while($row=mysqli_fetch_assoc($result_query))
        {
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image_1'];
            $product_price=$row['product_price'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            echo "<div class='col-md-4'>
            <div class='card'>
                <img class='card-img-top' src='./product_images/$product_image1' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <p class='card-text'>Rs. $product_price</p>
                    <button class='btn'><a href='clothes.php?add_to_cart=$product_id'<i class='fa-solid fa-cart-shopping'></i></a></button>
                        <button class='btn'><a href='product_details.php?product_id=$product_id'<i class='fa-solid fa-plus'></i></a></button>
                </div>
            </div>
        </div>";


        }
    
    }
}

//getting unqiue brands

function getUniqueBrands()
{
    global $conn;

    //condition to check if isset or not
    if(isset($_GET['brand']))
    {   
        $brand_id=$_GET['brand'];
        $select_query="Select * from `products` where brand_id=$brand_id";
        $result_query=mysqli_query($conn, $select_query);
        $num_of_rows=mysqli_num_rows($result_query);
        if($num_of_rows==0)
        {   
            echo "<h2 align='center'>No stock for this Brand</h2>";

        }
        while($row=mysqli_fetch_assoc($result_query))
        {
            $product_id=$row['product_id'];
            $product_title=$row['product_title'];
            $product_description=$row['product_description'];
            $product_image1=$row['product_image_1'];
            $product_price=$row['product_price'];
            $category_id=$row['category_id'];
            $brand_id=$row['brand_id'];
            echo "<div class='col-md-4'>
            <div class='card'>
                <img class='card-img-top' src='./product_images/$product_image1' alt='Card image cap'>
                <div class='card-body'>
                    <h5 class='card-title'>$product_title</h5>
                    <p class='card-text'>$product_description</p>
                    <p class='card-text'>Rs.$product_price</p>
                    <button class='btn'><a href='clothes.php?add_to_cart=$product_id'<i class='fa-solid fa-cart-shopping'></i></a></button>
                        <button class='btn'><a href='product_details.php?product_id=$product_id'<i class='fa-solid fa-plus'></i></a></button>
                </div>
            </div>
        </div>";


        }
    
    }
}


//displaying brands in side nav
function getBrands()
{
    global $conn;        
    $select_brands="Select * from `brands`";
    $result_brands=mysqli_query($conn,$select_brands);


    while($row_data=mysqli_fetch_assoc($result_brands))
    {
        $brand_title=$row_data['brand_title'];
        $brand_id=$row_data['brand_id'];
        echo "<li><a class='sidebar_section_content_link' href='clothes.php?brand=$brand_id'>$brand_title</a></li>";
    }

											
}

//displaying categories
function getCategories(){

    global $conn;
    $select_categories="Select * from `categories`";
    $result_categories=mysqli_query($conn,$select_categories);


    while($row_data=mysqli_fetch_assoc($result_categories))
    {
        $category_title=$row_data['category_title'];
        $category_id=$row_data['category_id'];
        echo "<li><a class='sidebar_section_content_link' href='clothes.php?category=$category_id'>$category_title</a></li>";
    }

}

//searching products
function searchProduct(){
    global $conn;
            if(isset($_GET['search_data_product']))
            {
                $search_data_value=$_GET['search_data'];

            
            $search_query="Select * from `products` where product_keywords like '%$search_data_value%'";
            $result_query=mysqli_query($conn, $search_query);
            $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows==0)
            {   
                echo "<h2 align='center'>No Results found</h2>";

            }
            while($row=mysqli_fetch_assoc($result_query))
            {
                $product_id=$row['product_id'];
                $product_title=$row['product_title'];
                $product_description=$row['product_description'];
                $product_image1=$row['product_image_1'];
                $product_price=$row['product_price'];
                $category_id=$row['category_id'];
                $brand_id=$row['brand_id'];
                echo "<div class='col-md-4'>
                <div class='card'>
                    <img class='card-img-top' src='./product_images/$product_image1' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>$product_title</h5>
                        <p class='card-text'>$product_description</p>
                        <p class='card-text'>Rs. $product_price</p>
                        <button class='btn'><a href='clothes.php?add_to_cart=$product_id'<i class='fa-solid fa-cart-shopping'></i></a></button>
                        <button class='btn'><a href='product_details.php?product_id=$product_id'<i class='fa-solid fa-plus'></i></a></button>
                    </div>
                </div>
            </div>";


            }
        }
}

//get ip address function

function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  


//cart function
function cart()
{
    if(isset($_GET['add_to_cart']))
    {
        global $conn;
        $get_ip_add=getIPAddress();
        $get_product_id=$_GET['add_to_cart'];
        $select_query="Select * from `cart_details` where ip_address='$get_ip_add' and product_id=$get_product_id"; 
        $result_query=mysqli_query($conn, $select_query);
        $num_of_rows=mysqli_num_rows($result_query);
            if($num_of_rows>0)
            {   
                echo "<script>alert('This item is already present inside cart')</script>";
                echo "<script>window.open('clothes.php','_self' )</script>";

            }
            else{
                $insert_query="insert into `cart_details` (product_id, ip_address,quantity) values($get_product_id, '$get_ip_add', 0)";
                $result_query=mysqli_query($conn, $insert_query);
                echo "<script>alert('This item is added to cart')</script>";
                echo "<script>window.open('clothes.php','_self' )</script>";

            }


    }
}

//function to get cart item numbers
function cart_item()
{
    if(isset($_GET['add_to_cart']))
    {
        global $conn;
        $get_ip_add=getIPAddress();
        $select_query="Select * from `cart_details` where ip_address='$get_ip_add'"; 
        $result_query=mysqli_query($conn, $select_query);
        $count_cart_items=mysqli_num_rows($result_query);
    }else{
            global $conn;
            $get_ip_add=getIPAddress();
            $select_query="Select * from `cart_details` where ip_address='$get_ip_add'"; 
            $result_query=mysqli_query($conn, $select_query);
            $count_cart_items=mysqli_num_rows($result_query);

        }
        echo $count_cart_items;


}

function total_cart_price()
{
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
            $product_values=array_sum($product_price);
            $total=$total+$product_values;
            

        }


    }
    echo "Rs.". $total."\-";
}

//get user order details
function get_user_order_details()
{
        global $conn;
        $userid=$_SESSION['userid'];
        $get_details="Select * from `users` where usersId=
        $userid";
        $result_query=mysqli_query($conn, $get_details);
        while($row_query=mysqli_fetch_array($result_query))
        {
        $user_id=$row_query['usersId'];

        if(!isset($_GET['edit_account']))
        {
            if(!isset($_GET['my_orders']))
            {
                if(!isset($_GET['delete_order']))
                {
                    $get_orders="Select * from `user_orders` where usersId=$userid and order_status='pending'";
                    $result_orders_query=mysqli_query($conn, $get_orders);
                    $row_count=mysqli_num_rows($result_orders_query);
                    if($row_count>0)
                    {
                        echo "<h3 class=' text text-center'>You have $row_count pending orders </h3>";
                    }

                }
            }
        }
    }
        
    

}
?>