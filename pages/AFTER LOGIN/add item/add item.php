<!DOCTYPE html>
<?php
//include auth_session.php file on all user panel pages
include("../../../php/session_start.php");
?>    
<html>    
<head>    
    <title>Add Item</title>    
    <link rel="stylesheet" type="text/css" href="./add item.css">
    <script type='text/javascript'>
function preview_image(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image1');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}

function preview_image1(event) 
{
 var reader = new FileReader();
 reader.onload = function()
 {
  var output = document.getElementById('output_image2');
  output.src = reader.result;
 }
 reader.readAsDataURL(event.target.files[0]);
}
</script>    
</head>   
<body> 
    <?php
        require '../../../php/database_connect.php';
        if ($_SERVER['REQUEST_METHOD']=='POST') {
            $Pname=($_POST['Name']);
            $Brand=($_POST['Brand']);
            $Fabric=($_POST['Fabric']);
            $Quality=($_POST['Quality']);
            $Size=($_POST['Size']);
            $Price=($_POST['Price']);
            $PCondition=($_POST['PCondition']);
            $Category=($_POST['Category']);
            $image1=($_POST['image1']);
            $image2=($_POST['image2']);
            $create_datetime = date("Y-m-d H:i:s");
            
            $query="INSERT into `items` (PName, Brand, Fabric, Quality, Size, Price, PCondition, Category, image_1, image_2, date_time)
                VALUES ('$Pname', '$Brand', '$Fabric', '$Quality', '$Size', '$Price', '$PCondition', '$Category', '$image1', '$image2', '$create_datetime')";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<div class='form'>
                  <h3>Added Item Sucessfully.</h3><br/>
                  <p class='link'>Click<a href='../manage products/manage.php'>here</a> to go to your items dashboard</p>
                  </div>";
                } 
            else {
                echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click<a href='add item.php'>here</a> to add item again.</p>
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
        <input type="text" name="PCondition" id="Condition" placeholder="Condition" maxlength="100">    
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

        <div id="wrapper1">
            <label><b>Image 1</b></label>
            <input type="file" name="image1" accept="image/*" onchange="preview_image(event)">
            <img id="output_image1">
            <br>
        </div>

        <div id="wrapper2">
            <label><b>Image 2</b></label>
            <input type="file" name="image2" accept="image/*" onchange="preview_image1(event)">
            <img id="output_image2">
            <br><br>
        </div>

        <div id="createbuttondiv">   
            <input type="submit" name="Add" id="Add" value="Add item">       
        </div>      
        <br><br>      
    </form> 
    
</div>    
</body>    
</html>  