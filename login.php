<?php
    session_start();
  
//    if(isset($_SESSION['user']))   // Checking whether the session is already there or not if 
//                                  // true then header redirect it to the home page directly 
//     {
//        header("Location:myaccount.php"); 
//     }
   if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
   {
        $user = $_POST['user'];
        $pass = $_POST['pass'];
    
       if(isset($_POST["user"]) && isset($_POST["pass"])){
       $file = fopen('accounts.db', 'r');
       $good=false;
       while(!feof($file)){
           $line = fgets($file);
           $array = explode(";",$line);
       if(trim($array[1]) == $_POST['user'] && password_verify($_POST['pass'], trim($array[2]))){
               $good=true;
               break;
           }
       }
    
       if($good){
       $_SESSION['user'] = $user;
          if(trim($array[0]) == "customer"){
            $_SESSION["username"] = $_POST['user'];
            header('location: myaccount.php');
          }
          if(trim($array[0]) == "shipper"){
            $_SESSION["username"] = $_POST['user'];
            header('location: myaccount.php');
          }
          if(trim($array[0]) == "vendor"){
            $_SESSION["username"] = $_POST['user'];
            header('location: myaccount.php');
          }
       }else{
          //  echo "invalid UserName or Password";
       }
       fclose($file);
       }
      
  
   }
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="navbar1">
            <nav>
                <a id="logo" href="login.php" ><img src="logo.png" alt="lazada logo"></a>
            </nav>
        </div>
    </header>

    <main>
        <form method="post" action="">
            <div class="info">
                <fieldset>
                    <form method = "post">
                        <label for="username">Username:</label> 
                        <input type="text" class = 'info_input' name="user" id="username">
                        <label for="password">Password:</label> 
                        <input type="password" class = 'info_input' name="pass" id="password">                
                        <p></p><input type="submit" name="login" id="login" value = "Login">
                    </form>
                    <br><hr>


                    <p>Don't have an account?</p>
                    <div class = "register_req">
                        <a href="vendor_registry.php"><input type="button" name="registry" id="Register" value = "Vendor registry"></a>
                        <a href="customer_registry.php"><input type="button" name="registry" id="Register" value = "Customer registry"></a>
                        <a href="shipper_registry.php"><input type="button" name="registry" id="Register" value = "Shipper registry"></a>
                    </div>
                </fieldset>
            </div>
        </form>
    </main>
</body>
</html> 