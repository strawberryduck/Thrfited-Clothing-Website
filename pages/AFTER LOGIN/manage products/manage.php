<!DOCTYPE html>
<?php
//include auth_session.php file on all user panel pages
include("../../../php/session_start.php");
?>
<html>
    <title>Products</title>
    <head>
        <link rel="stylesheet" href="manage.css">
    </head>

    <body>
        <section id="header">
            <a href="../../login/after login.php"><img src="../../../images/logo.jpg" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="../../login/after login seller.php">Home</a></li>
                    <li><a href="../items/products.php">Products</a></li>
                    <li><a href="manage.php">Manage Items</a></li>
                    <li><a href="../../about/about.html">About</a></li>
                    <li><a href="../cart/cart.php">Cart</a></li>
                    <li><a href="../../../php/logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>
        <br>

        <section id="products" class="section-p1">
            <p>Manage your products</p>
            <div class="createbuttondiv">   
                <h4><a href="../add item/add item.php">Add New Product</a></h4>       
            </div>
            <h2>YOUR PRODUCTS</h2>
            <div class="prod-container">
                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>

                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>

                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>

                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>

                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>

                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>

                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>

                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>

                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>

                <div class="prod">
                    <img src="../../../images/jacket1.jpg" alt="">
                    <div class="des">
                        <span>Adidas</span>
                        <h5>Biker Jacket Stylish</h5>
                        <h4>PRICE HERE</h4>
                    </div>
                    <button>Edit Product</button>
                    <button>Remove Product</button>
                </div>
            </div>
        </section>

        <section id="pageno" class="section-p1">
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">--></a>
        </section>
    </body>    
        
</html>