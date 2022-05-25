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
                    include("../../php/database_connect.php");
                    // include("../../php/login.php");
                    $query = " select p_id, PName, Brand, Price, image_1 from items ";
                    $result = mysqli_query($conn,$query);
                     
                    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($items as $item){
                ?>
                <div class='prod'>
                <img source src="<?php echo '../after login/add item/uploads/' .$item['image_1'];?>">
                        <div class='des'>
                            <span><?php echo $item['Brand'] ?></span>
                            <h5><?php echo  $item['PName'] ?></h5>
                            <h4><?php echo $item['Price'] ?></h4>
                        </div>
                        <?php 
                            echo "<a href='../single-product/single-product.php?p_id=$item[p_id]'>View Item</a>";
                        ?>
                        <br>
                </div>
                  <?php } ?>
            </div>
        </section>
    </body>    
</html>