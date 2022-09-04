<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_registry.css" type="text/css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="navbar1">
            <nav>
                <a id="logo" href="login.php" ><img src="lazada_logo.jpg" alt="lazada logo"></a>
            </nav>
        </div>
    </header>


    <main>
        <div class="info">
            <fieldset>
                <label for="username">Username:</label> 
                <input type="text" class = 'info_input' name="" id="username">
                <label for="password">Password:</label> 
                <input type="password" class = 'info_input' name="" id="password">
                <label for="address">Address</label>
                <input type="text" class = 'info_input' name="" id="address">
                <label for="image">Set a profile picture: </label>
                <input type="file" name="" id="image" accept="image/png, image/jpeg">
                <p></p><input type="button" name="" id="register" value = "Register">
            </fieldset>
        </div>
    </main>



</body>
</html>