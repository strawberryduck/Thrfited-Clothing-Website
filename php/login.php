<!DOCTYPE html>    
<html>    
<head>    
    <title>Login</title>    
    <link rel="stylesheet" type="text/css" href="login.css">    
</head>    
<body>  
    <?php
            require 'database_connect.php';
            session_start();
            if (isset($_POST['email'])&& isset($_POST['password'])){
                $email=($_POST['email']);
                $password=($_POST['password']);
                $query="SELECT * FROM `users` WHERE email='$email'";
                $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                $row = mysqli_fetch_assoc($result);
                $hash = $row['password'];
                $verify = password_verify($password,$hash);
                if($verify){
                    if ($row['email'] == $email ) {
                        echo "Logged in!";
                        $_SESSION['email'] = $row['email'];
                        $_SESSION['FName'] = $row['FName'];
                        //if buyer or seller
                        // test
                        $type['u_type'] = $row['row'];
                        if ($row['u_type'] == 'Buyer')
                        {
                            header("Location:after login.php");
                            // exit();
                        } else {
                            header("Location:after login seller.php");
                            // exit();
                        }

                    }
                    else {
                        echo "<div class='form'>
                        <h3>Incorrect Email/Password.</h3><br/>
                        <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                        </div>";
                    }
                }
            }         
    ?>  
    <h2>Login</h2><br>    
    <div class="login">    
    <form id="login" method="post">    
        <label><b>Email
        </b>    
        </label>
        <br>    
        <input type="text" name="email" id="email" placeholder="Email">    
        <br><br>    
        <label><b>Password     
        </b>    
        </label>    
        <input type="Password" name="password" id="password" placeholder="Password">    
        <br><br> 
        <div id="signinbuttondiv">   
            <input type="submit" name="log" id="log" value="Sign in">       
        </div>
        <br><br>      
    </form>     
</div>    
</body>    
</html>  