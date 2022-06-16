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
                    <li><a href="../../login/after login.php">Home</a></li>
                    <li><a href="../items/products.php">Products</a></li>
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
                <?php
                include("../../../php/database_connect.php");
                $u_id = $_SESSION['u_id'];
                $total = 0;
                $query3 = "SELECT * from `cart` where u_id= $u_id";
                $result3 = mysqli_query($conn, $query3); 
                
                while($row = mysqli_fetch_assoc($result3)){
                    $query1= "SELECT PName, Price, image_1 FROM `items` WHERE p_id = $row[p_id]";
                    $result = mysqli_query($conn,$query1);                 
                    $items = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach($items as $item){ ?>
                        <tbody>
                        <td><a href="#"><button>X</button></a></td>
                        <td><img source src="<?php echo '../../after login/add item/uploads/' .$item['image_1'];?>"></td>
                        <td><?php echo  $item['PName'] ?></td>
                        <td><?php echo $item['Price'] ?></td>
                        <?php $total = $total + $item['Price']  ?>
                        </tbody>
               <?php } }?>
                
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
                        <td>RS.<?php echo $total ?></td>
                    </tr>
                </table>

                <button>Proceed to Checkout</button>
            </div>
        </section>
</html>