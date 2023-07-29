
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
    <link rel="stylesheet" type="text/css" href="styles/signup.css">
    <link rel="stylesheet" href="styles/styles.css">
   
    <title>CARA</title>
</head>
<body>
    <!--NAVBAR-->
    <section id="page">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light fs-5">
                <a><img src="img/logo.png"></a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbar">
                  <ul class="navbar-nav mx-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="clothes.php">Clothes</a>
                    </li>
                    <?php
                        if(isset($_SESSION["userid"]))
                        {
                            echo "<li class='nav-item'><a class='nav-link' href='cart.php'>Cart<sup>1</sup></a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Logout</a></li>";
                        }
                        else
                        {
                            echo "<li class='nav-item'>
                            <a class='nav-link' href='login.php'>Login</a>
                            </li>";
                            echo "<li class='nav-item'>
                            <a class='nav-link' href='signup.php'>Signup</a>
                            </li>";

                        }
                    ?>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                  </ul>

                  <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                </form>
                <button style="color:white" class="btn btn-dark my-sm-0" type="submit">Search</button>
                </div>
            </nav>

        </div>

    </section>
    
	<div class="page-wrapper p-t-180 p-b-100 font-poppins" style="background-image: url(img/images/start-a-clothing-line-retail1.jpg);">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading" style="background-image: url(img/images/product_10.jpg);"></div>
                <div class="card-body">
                    <h2 class="title">Sign up</h2>
                    <form method="POST" action="includes/signup.inc.php">
                        <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyNameinput"){
                                    echo "<p class='errorTag'>Fill in Name inputs</p>";
                                }  
                            }
                        ?>
                        <div class="input-group">
                            <?php
                                $value = isset($_REQUEST['name']) ? htmlentities($_REQUEST['name']) : '';
                                echo "<input class=\"input--style-3\" type=\"text\" placeholder=\"Name\" name=\"name\" value=\"$value\">";
                            ?>
                            
                        </div>
                        <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyUsernameinput"){
                                    echo "<p class='errorTag'>Fill in Username inputs</p>";
                                }  
                                if($_GET["error"] == "invaliduid"){
                                    echo "<p class='errorTag'> Invalid Username inputs</p>";
                                } 
                                if($_GET["error"] == "uidexists"){
                                    echo "<p class='errorTag'> Username exists. Enter Different Username.</p>";
                                } 
                            }
                        ?>
						<div class="input-group">
                            <input class="input--style-3" type="text" placeholder="UserName" name="uid">
                        </div>
                        <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyEmailinput"){
                                    echo "<p class='errorTag'>Fill in Email inputs</p>";
                                }
                                if($_GET["error"] == "invalidinput"){
                                    echo "<p class='errorTag'> Invalid Email inputs</p>";
                                }  
                            }
                        ?>
                        <div class="input-group">
                            <input class="input--style-3" type="email" placeholder="Email" name="email">
                        </div>
                        <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyPwdinput"){
                                    echo "<p class='errorTag'>Fill in Password inputs</p>";
                                }  
                            }
                        ?>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Password" name="pwd">
                        </div>
                        <?php
                            if(isset($_GET["error"])){
                                if($_GET["error"] == "emptyRepwdinput"){
                                    echo "<p class='errorTag'>Fill in RepeatPassword inputs</p>";
                                }  
                                if($_GET["error"] == "passwordsdontmatch"){
                                    echo "<p class='errorTag'>Passwords dont match. Recheck.</p>";
                                } 
                            }
                        ?>
						<div class="input-group">
                            <input class="input--style-3" type="password" placeholder="Repeat-password" name="repwd">
                        </div>
                        
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--light" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>