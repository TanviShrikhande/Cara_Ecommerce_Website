<?php
    session_start();
    
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
                            echo "<li class='nav-item'><a class='nav-link' href='cart.php'>Cart<sup></sup></a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='includes/logout.inc.php'>Logout</a></li>";
                            echo "<li class='nav-item'><a class='nav-link' href='profile.php'>Profile</a></li>";
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

                  <form class="d-flex" action="search_clothes.php" method="get">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search_data">
                    <input type="submit"  value="Search" class="btn btn-dark my-sm-0" name="search_data_product">
                </form>
                
                <!-- <button class="btn btn-dark my-sm-0" type="submit">Search</button> -->
                    
            </div>
            </nav>

        </div>

    </section>
</body>
</html>