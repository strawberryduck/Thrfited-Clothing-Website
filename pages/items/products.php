<!DOCTYPE html>
<html>
    <title>Products</title>
    <head>
        <link rel="stylesheet" href="./products.css">
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    </head>

    <body>
        <section id="header">
            <a href="#"><img src="../../images/logo.jpg" class="logo" alt=""></a>

            <div>
                <ul id="navbar">
                    <li><a href="../../index.html">Home</a></li>
                    <li><a href="../registration/registration.php">Register</a></li>
                    <li><a href="../login/login.php">Login</a></li>
                    <li><a href="../items/products.html">Products</a></li>
                    <li><a href="../about/about.html">About</a></li>
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