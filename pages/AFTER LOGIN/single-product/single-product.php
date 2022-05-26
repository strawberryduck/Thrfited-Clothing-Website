<!DOCTYPE html>
<?php
//include auth_session.php file on all user panel pages
include("../../../php/session_start.php");
include("../../../php/database_connect.php");
$p_id=$_GET["p_id"];
    // $u_id=$_GET["u_id"];
    $query="SELECT * FROM `items` WHERE p_id='$p_id'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $PName = $row['PName'];
    $Brand = $row['Brand'];
    $Fabric = $row['Fabric'];
    $Quality = $row['Quality'];
    $Size = $row['Size'];
    $Price = $row['Price'];
    $PCondition = $row['PCondition'];
    $image_1 = $row['image_1'];
    $image_2 = $row['image_2'];
?>
<html>
    <title>PRODUCT NAME</title>
    <head>
        <link rel="stylesheet" href="single-product.css">
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
                    <li><a href="../cart/cart.php">Cart</a></li>
                    <li><a href="../../../php/logout.php">Log Out</a></li>
                </ul>
            </div>
        </section>
        <br>

        <section id="proddetails" class="section-p1">
            <div class="single-prod-img">
                <img source src="<?php echo '../add item/uploads/' .$image_1;?>" id="MainImg" alt="" height="500" width="550"> 
                    <div class="small-img-group">
                        <div class="small-img-col">
                            <img source src="<?php echo '../add item/uploads/' .$image_2;?>" class="small-img" alt="" height="300" width="350">
                        </div>

                        <div class="small-img-col">
                            <img source src="<?php echo '../add item/uploads/' .$image_1;?>" class="small-img" alt="" height="300" width="350">
                        </div>
                    </div>
            </div>

            <div class="single-prod-details">
                <!-- <h2>Home / Jacket</h2> -->
                <h3><?php echo $PName ?></h3>
                <h3>Rs. <?php echo $Price ?></h3>
                <h2>Product Details:</h2>
                <!-- <span> -->
                <!-- </span> -->
                <h3>Brand:</h3><p><?php echo $Brand ?></p>
                <h3>Fabric:</h3><p><?php echo $Fabric ?></p>
                <h3>Quality:</h3><p><?php echo $Quality ?></p>
                <h3>Size:</h3><p><?php echo $Size ?></p>
                <h3>Condition:</h3><p><?php echo $PCondition ?></p>
                <br>
                <br>
                <button>Add To Cart</button>
            </div>
        </section>
        
        <script>
            var MainImg = document.getElementById("MainImg");
            var smallimg = document.getElementsByClassName("small-img");

            smallimg[0].onclick = function(){
                MainImg.src = smallimg[0].src;
            }

            smallimg[1].onclick = function(){
                MainImg.src = smallimg[1].src;
            }
        </script>
    </body>    
        
</html>