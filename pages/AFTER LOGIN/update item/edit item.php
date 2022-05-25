<!DOCTYPE html>
<?php
//include auth_session.php file on all user panel pages
include("../../../php/session_start.php");
?>    
<html>    
<head>    
    <title>Edit Item</title>    
    <link rel="stylesheet" type="text/css" href="./edit item.css">
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
            $p_id = $_GET['p_id'];
            $u_id = $_SESSION['u_id'];
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
            
            $query="UPDATE `items` SET u_id = '$u_id', PName = '$Pname', Brand = '$Brand', Fabric = '$Fabric', Quality = '$Quality', Size = '$Size', Price = '$Price', PCondition = '$PCondition', Category = '$Category', image_1 = '$image1', image_2 = '$image2', date_time = '$create_datetime'
                   WHERE p_id = '$p_id'";
            $result = mysqli_query($conn, $query);
            if ($result) {
                echo "<div class='form'>
                  <h3>Updated Item Sucessfully.</h3><br/>
                  <p class='link'>Click<a href='../manage products/manage.php'>here</a> to go to your items dashboard</p>
                  </div>";
                } 
            else {
                echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click<a href='../manage products/manage.php'>here</a> to go back to items dashboard and retry.</p>
                  </div>";
                }
            }  
        ?>    
    <h2>Edit Item</h2><br>    
    <div class="EditItem">    
    <form id="Edit Item" method="post">    
        <label>
            <b>Name of Product</b>    
        </label>
        <br>   
        <input type="text" name="Name" id="Name" placeholder="Name" maxlength="100" required autofocus>    
        <br><br>

        <label>
            <b>Brand</b>    
        </label>
        <br>
        <input type="text" name="Brand" id="Brand" placeholder="Brand" maxlength="20" required>    
        <br><br>  

        <label>
            <b>Fabric</b>    
        </label>
        <br>  
        <input type="text" name="Fabric" id="Fabric" placeholder="Fabric" maxlength="20" required>    
        <br><br> 

        <label>
            <b>Quality</b>    
        </label> 
        <br>
        <input type="text" name="Quality" id="Quality" placeholder="Quality" maxlength="32" required>     
        <br><br>

        <label>
            <b>Size</b>    
        </label>
        <br>
        <input type="radio" name="Size" id="XXS" value="Extra Extra Small" required>
        <label for="XXS">XXS</label>
        <input type="radio" name="Size" id="XS" value="Extra Small" required>
        <label for="XS">XS</label> 
        <input type="radio" name="Size" id="S" value="Small" required>
        <label for="S">S</label>
        <input type="radio" name="Size" id="M" value="Medium" required>
        <label for="M">M</label>
        <input type="radio" name="Size" id="L" value="Large" required>
        <label for="L">L</label>
        <input type="radio" name="Size" id="XL" value="Extra Large" required> 
        <label for="XL">XL</label>    
        <input type="radio" name="Size" id="XXL" value="Extra Extra Large" required> 
        <label for="XXL">XXL</label> 
        <br><br>

        <label>
            <b>Price</b>    
        </label>
        <br>
        <input type="number" name="Price" id="Price" placeholder="1010" maxlength="8" required>    
        <br><br><br>    

        <label><b>Condition</b></label>
        <input type="text" name="PCondition" id="Condition" placeholder="Condition" maxlength="100" required>    
        <br><br> 

        <label>
            <b>Category</b>    
        </label>
        <br>
        <input type="radio" name="Category" id="MS" value="Male Shirt" required>
        <label for="MS">Male Shirt</label>
        <input type="radio" name="Category" id="MT" value="Male Trousers" required>
        <label for="MT">Male Trousers</label> 
        <input type="radio" name="Category" id="MJ" value="Male Jacket" required>
        <label for="MJ">Male Jacket</label>
        <input type="radio" name="Category" id="FS" value="Female Shirt" required>
        <label for="FS">Female Shirt</label>
        <input type="radio" name="Category" id="FSk" value="Female Skirt" required>
        <label for="FSk">Female Skirt</label>
        <input type="radio" name="Category" id="FJ" value="Female Jacket" required> 
        <label for="FJ">Female Jacket</label>    
        <br><br>

        <div id="wrapper1">
            <label><b>Image 1</b></label>
            <input type="file" name="image1" accept="image/*" onchange="preview_image(event)" required>
            <img id="output_image1">
            <br>
        </div>

        <div id="wrapper2">
            <label><b>Image 2</b></label>
            <input type="file" name="image2" accept="image/*" onchange="preview_image1(event)" required>
            <img id="output_image2">
            <br><br>
        </div>

        <div id="editbuttondiv">   
            <input type="submit" name="Edit" id="Edit" value="Update item">       
        </div>      
        <br><br>      
    </form> 
    
</div>    
</body>    
</html>  