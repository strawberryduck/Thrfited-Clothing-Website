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
            <?php 
                    include("../../../php/database_connect.php");
                    // include("../../php/login.php");
                    $u_id = $_SESSION['u_id'];
                    $query = " select p_id, PName, Brand, Price, image_1 from items WHERE u_id = '$u_id' ";
                    $result = mysqli_query($conn,$query);
                     
                    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($items as $item){
                ?>
                <div class='prod'>
                <img source src="<?php echo '../add item/uploads/' .$item['image_1'];?>">
                        <div class='des'>
                            <span><?php echo $item['Brand'] ?></span>
                            <h5><?php echo  $item['PName'] ?></h5>
                            <h4><?php echo $item['Price'] ?></h4>
                        </div>
                        <?php 
                            echo "<a href='../update item/edit item.php?p_id=$item[p_id]'>Edit Item</a>";
                        ?>
                        <br>
                        <?php 
                            echo "<a href='../remove item/remove item.php?p_id=$item[p_id]'>Remove Item</a>";
                        ?>
                        <br>
                        <?php 
                            echo "";
                        ?>
                </div>
                  <?php } ?>
            </div>
        </section>

    </body>    
        
</html>