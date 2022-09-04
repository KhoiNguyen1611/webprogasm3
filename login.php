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
                    <label for="username">Username:</label> 
                    <input type="text" class = 'info_input' name="" id="username">
                    <label for="password">Password:</label> 
                    <input type="password" class = 'info_input' name="" id="password">                
                    <p></p><input type="button" name="" id="login" value = "Login">

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