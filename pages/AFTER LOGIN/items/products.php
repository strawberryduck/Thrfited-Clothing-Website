<!DOCTYPE html>
<?php
//include auth_session.php file on all user panel pages
include("../../../php/session_start.php");
?>
<html>
    <title>Products</title>
    <head>
        <link rel="stylesheet" href="products.css">
    </head>

    <body>
        <section id="header">
            <a href="../../login/after login.php"><img src="../../../images/logo.jpg" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="../../login/after login seller.php">Home</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="../manage products/manage.php">Manage Items</a></li>
                    <li><a href="../../about/about.html">About</a></li>
                    <li><a href="../cart/cart.php">Cart</a></li>
                    <li><a href="../../../php/logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>
        <br>

        <section id="products" class="section-p1">
            <h2>PRODUCTS</h2>
            <p>Summer Collection is all the rage right now!</p>
            <div class="prod-container">
            <?php 
                                        $query = " select PName, Brand, Price, image_1 from items ";
                                        $result = mysqli_query($conn,$query);
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $PName = $row['PName'];
                                        $Brand = $row['Brand'];
                                        $Price = $row['Price'];
                                        $image_1 = $row['image_1'];
                            ?>

            
                <div class="prod">
                        <?php echo "$image_1" ?>
                        <div class="des">
                            <?php echo "<span>$Brand</span>" ?>
                            <?php echo "<h5>$PName</h5>" ?>
                            <?php echo "<h4>$Price</h4>" ?>
                        </div>
                    <a href="#"><p>Add to cart</p></a>
                </div>
            
                <?php 
                                    }  
                ?> 
            </div>
        </section>
    </body>    
        
</html>