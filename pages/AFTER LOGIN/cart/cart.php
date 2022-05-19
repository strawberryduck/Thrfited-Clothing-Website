<?php
//include auth_session.php file on all user panel pages
include("../../../php/session_start.php");
?>

<html>
    <title>Cart</title>
    <head>
        <link rel="stylesheet" href="cart.css">
    </head>

    <body>
        <section id="header">
            <a href="../../login/after login.php"><img src="../../../images/logo.jpg" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="../../login/after login seller.php">Home</a></li>
                    <li><a href="../items/products.php">Products</a></li>
                    <li><a href="../manage products/manage.php">Manage Items</a></li>
                    <li><a href="../../about/about.html">About</a></li>
                    <li><a href="cart.php">Cart</a></li>
                    <li><a href="../../../php/logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>

        <section id = "cart" class="section-p1">
            <table width = "100%">
                <thead>
                    <tr>
                        <td>Remove</td>
                        <td>Image</td>
                        <td>Product</td>
                        <td>Price</td>
                    </tr>
                </thead>
                <tbody>
                    <td><a href="#"><button>X</button></a></td>
                    <td><img src="../../../images/jacket1.jpg" alt=""></td>
                    <td>NAME HERE</td>
                    <td>PRICE HERE</td>
                </tbody>
            </table>
        </section>
        <br>
        
        <section id="cart-add" class="section-p1">
            <div id="subtotal">
                <h3>Cart Totals</h3>
                <table>
                    <tr>
                        <td>TOTAL</td>
                    </tr>
                    <tr>
                        <td>PRICE</td>
                    </tr>
                </table>

                <button>Proceed to Checkout</button>
            </div>
        </section>
</html>