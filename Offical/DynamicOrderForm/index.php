<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>Dynamic Order Form</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>

        .bg-5 {
            background-color: 	black; /* Black Gray */
            color: red;
        }
        #order-table td.product-title{font-size: 20px;}
        #order-table td.num-pallets{font-size: 20px;}
        #order-table td.times{font-size: 20px;}
        #order-table td.price-per-pallet{font-size: 20px;}
        #order-table td.row-total{font-size: 20px;}
        #order-table td.product-sub{font-size: 20px;}
        .radio-inline{font-size: 20px;}

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
                    <li><a href="http://localhost/Offical/BitesHomePage.html">LogOut</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
    
    
    <div id="page-wrap">
    
        <h1>Small Cafe's BreakFast Menu</h1>
        <form class="ShoppingCart" action="ShoppingCart.php" method="post" accept-charset="utf-8" id="QB-order-form">
    	<table id="order-table">
    	    <tr>
    	         <th>Product Name</th> 
    	         <th>Quantity</th>
    	         <th>X</th>
    	         <th>Unit Price</th>
    	         <th>=</th>
    	         <th style="text-align: right; padding-right: 30px;">Totals</th> 
    	    </tr>
            <tr class="odd">
                <td class="product-title">Hot Dog/Bread & Sausage</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="sparkle-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>9</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="sparkle-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Cheese Sandwich</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mvp-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>8</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-mvp-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="odd">
                <td class="product-title">Bake and Egg</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>10</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Bake and Cheese</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-pro-league-red-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>10</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-pro-league-red-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="odd">
                <td class="product-title">Bake Egg and Sausage</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-quick-dry-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>10</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-quick-dry-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Potato Pies</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="turface-mound-clay-red-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>5</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="turface-mound-clay-red-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="odd">
                <td class="product-title">Blue Waters</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-red-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>5</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-red-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Fruta</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-drying-agent-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>5</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-drying-agent-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="odd">
                <td class="product-title">Coca Cola</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-professional-num-pallets" ></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>6</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-professional-row-total" disabled="disabled"></input></td>
            </tr>
            <tr class="even">
                <td class="product-title">Sprite</td>
                <td class="num-pallets"><input type="text" class="num-pallets-input" id="diamond-pro-top-dressing-num-pallets"></input></td>
                <td class="times">X</td>
                <td class="price-per-pallet">$<span>6</span></td>
                <td class="equals">=</td>
                <td class="row-total"><input type="text" class="row-total-input" id="diamond-pro-top-dressing-row-total" disabled="disabled"></input></td>
            </tr>

            <tr>
                <td class="product-sub" colspan="6" style="text-align: right;">
                    Product SUBTOTAL: <input type="text" class="total-box" value="$0" id="product-subtotal" disabled="disabled"></input>
                </td>
            </tr>
    	</table>

        <label class="radio-inline"><input type="radio" name= "collect" id="TakeAway" required>Take Away</label>
        <label class="radio-inline"><input type="radio" name= "collect" id="Delivery">Delivery</label>
        <label class="radio-inline"><input type="text" name= "collectl" id="Location">Location</label>

    	<table id="shipping-table">


            <tr>
                <th>Total Qty.</th>
                <th>X</th>
                <th>Shipping Rate</th>
                <th>=</th>
                <th style="text-align: right;">Shipping Total</th>
            </tr>
    	 <tr>
    	     <td id="total-pallets"><input id="total-pallets-input" value="0" type="text" disabled="disabled"></input></td>
    	     <td>X</td>
    	     <td id="shipping-rate">10.00</td>
    	     <td>=</td>
    	     <td style="text-align: right;"><input type="text" class="total-box" value="$0" id="shipping-subtotal" disabled="disabled"></input></td>
    	 </tr>

    	</table>
    	
    	<div class="clear"></div>
    	
        <div style="text-align: right;">
            <span>ORDER TOTAL(+shipping): </span>
            <input type="text" class="total-box" value="$0" id="order-total" disabled="disabled"></input>

            <br/>



            <a href="http://localhost/Offical/ShoppingCart.php">
                <input type="submit" value="Create Your Order" class="submit" />
            </a>


                
            </form>
        </div>
        
    </div>



<!-- Footer -->
<footer class="bg-5 text-left">
    © COPYRIGHT 2018.
    DESIGNED AND DEVELOPED BY GROUP L OF INFO3490
</footer>

</body>

</html>
