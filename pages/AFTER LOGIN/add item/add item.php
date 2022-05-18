<!DOCTYPE html>    
<html>    
<head>    
    <title>Add Item</title>    
    <link rel="stylesheet" type="text/css" href="add item.css">    
</head>    
<body> 
    <?php
        require '../../php/database_connect.php';
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $Pname=($_POST['Name']);
            $Brand=($_POST['Brand']);
            $Fabric=($_POST['Fabric']);
            $Quality=($_POST['Quality']);
            $Size=($_POST['Size']);
            $Price=($_POST['Price']);
            $Condition=($_POST['Condition']);
            $Category=($_POST['Category']);
            $image=($_POST['image']);
            $create_datetime = date("Y-m-d H:i:s");
            // if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
            //     $name_error = "Name must contain only alphabets and space";
            // }
            // if (!preg_match("/^[a-zA-Z ]+$/",$Brand)) {
            //     $name_error = "Name must contain only alphabets and space";
            // }
            // if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            //     $email_error = "Please Enter Valid Email ID";
            // }
            // if(strlen($password) < 6) {
            //     $password_error = "Password must be minimum of 6 characters";
            // }
            $query="INSERT into `users` (PName, Brand , Fabric, Quality, Size, Price, Condition, Category, image, date_time)
                VALUES ('$Pname', '$Brand', '$Fabric', '$Quality', '$Size', '$Price', '$Condition', '$Category', '$image' '$create_datetime')";
            $result   = mysqli_query($conn, $query);
            if ($result) {
                echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='./../login/login.php'>Login</a></p>
                  </div>";
                } 
            else {
                echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
                }
            }  
        ?>    
    <h2>Add Item</h2><br>    
    <div class="AddItem">    
    <form id="Add Item" method="post">    
        <label>
            <b>Name of Product</b>    
        </label>
        <br>   
        <input type="text" name="Name" id="Name" placeholder="Name" maxlength="100">    
        <br><br>

        <label>
            <b>Brand</b>    
        </label>
        <br>
        <input type="text" name="Brand" id="Brand" placeholder="Brand" maxlength="20">    
        <br><br>  

        <label>
            <b>Fabric</b>    
        </label>
        <br>  
        <input type="text" name="Fabric" id="Fabric" placeholder="Fabric" maxlength="20">    
        <br><br> 

        <label>
            <b>Quality</b>    
        </label> 
        <br>
        <input type="text" name="Quality" id="Quality" placeholder="Quality" maxlength="32">    
        <br><br>

        <label>
            <b>Size</b>    
        </label>
        <br>
        <input type="radio" name="Size" id="XXS" value="Extra Extra Small">
        <label for="XXS">XXS</label>
        <input type="radio" name="Size" id="XS" value="Extra Small">
        <label for="XS">XS</label> 
        <input type="radio" name="Size" id="S" value="Small">
        <label for="S">S</label>
        <input type="radio" name="Size" id="M" value="Medium">
        <label for="M">M</label>
        <input type="radio" name="Size" id="L" value="Large">
        <label for="L">L</label>
        <input type="radio" name="Size" id="XL" value="Extra Large"> 
        <label for="XL">XL</label>    
        <input type="radio" name="Size" id="XXL" value="Extra Extra Large"> 
        <label for="XXL">XXL</label> 
        <br><br>

        <label>
            <b>Price</b>    
        </label>
        <br>
        <input type="number" name="Price" id="Price" placeholder="1010" maxlength="8">    
        <br><br><br>    

        <label><b>Condition</b></label>
        <input type="text" name="Condition" id="Condition" placeholder="Condition" maxlength="100">    
        <br><br> 

        <label>
            <b>Category</b>    
        </label>
        <br>
        <input type="radio" name="Category" id="MS" value="Male Shirt">
        <label for="MS">Male Shirt</label>
        <input type="radio" name="Category" id="MT" value="Male Trousers">
        <label for="MT">Male Trousers</label> 
        <input type="radio" name="Category" id="MJ" value="Male Jacket">
        <label for="MJ">Male Jacket</label>
        <input type="radio" name="Category" id="FS" value="Female Shirt">
        <label for="FS">Female Shirt</label>
        <input type="radio" name="Category" id="FSk" value="Female Skirt">
        <label for="FSk">Female Skirt</label>
        <input type="radio" name="Category" id="FJ" value="Female Jacket"> 
        <label for="FJ">Female Jacket</label>    
        <br><br>
        <label><b>Image ( .png or .jpg)</b></label>
        <input type="file" name="image" id="image" accept="image/png, image/jpg">
        <div id="display_image"></div>    
        <br><br>

        <div id="createbuttondiv">   
            <input type="submit" name="Add" id="Add" value="Add item">       
        </div>      
        <br><br>      
    </form> 
    
    <script src="add item.js"></script>
</div>    
</body>    
</html>  