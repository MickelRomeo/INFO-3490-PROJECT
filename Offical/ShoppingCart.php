<?php?>
/**
 * Created by PhpStorm.
 * User: Mr Romeo
 * Date: 19/04/2018
 * Time: 11:13 AM
 */
<!DOCTYPE html >
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <title>Dynamic Order Form</title>

    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- BEGIN FOXYCART FILES -->

    <!-- END FOXYCART FILES -->
    <style>
        .bg-5 {
            background-color: 	black; /* Black Gray */
            color: red;
        }

        .logo{
            margin: 10px 50px;
            height: 100px;
        }
        .navbar {
            background-color: 	#000000;
            padding-top: 15px;
            padding-bottom: 0px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-size: 20px;
            letter-spacing: 5px;
        }
        .navbar-nav  li a:hover {
            color: #ff0000 !important;
        }
        p{
            border-bottom: 6px solid red;
            background-color: lightgrey;
    </style>

    <script type='text/javascript' src='js/order.js'></script>
</head>

<body>
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-default">

        <div class="container">
            <div class="navbar-header">
                <img src="logo.png" class="logo">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://localhost/Offical/DashBoard.html">Dashboard</a></li>
                    <li><a href="http://localhost/Offical/ShoppingCart.php">Shopping Cart</a></li>
                    <li><a href="http://localhost/Offical/contact/contact.html">Contact</a></li>
                    <li><a href="http://localhost/Offical/BitesHomePage/homepage.html">LogOut</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<div id="shop">
    <div class="container-fluid bg-3 text-center">
        <h1 align="center">Shopping Cart</h1>
        <h2 align="left">Your Orders</h2>
        <table class="table table table-condensed">
            <thead>
            <tr>
                <th>Order<th>
                <th>Status</th>
                <th>Quantity</th>
                <th>Total</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <td> Cheese Sandwich,Coca Cola<td>
                <td>Not Started</td>
                <td>2</td>
                <td>$15.00</td>
                <td><button type="button" class="btn btn-Danger">Delete Order</button></td>


            </tr>



            </tbody>
        </table>
</div>
    <div class="container-fluid bg-1 text-left">


        <div class="col-sm-6" align="center">

        </div>

        <div class="col-sm-6" align="center">

            <a href="http://localhost/Offical/LunchOrderForm/LunchMenu.php">
                <button type="button" class="btn btn-Success">Confirm Order</button></a>
                <a href="http://localhost/Offical/LunchOrderForm/LunchMenu.php">
                <button type="button" class="btn btn-warning">Create New order</button>
            </a>
        </div>
    </div>


</body>
</html>
