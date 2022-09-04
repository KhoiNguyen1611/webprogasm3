<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="shipper_registry.css" type="text/css">
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
            <form method = "post" action="">
                <fieldset>
                    <label for="username">Username:</label> 
                    <input type="text" class = 'info_input' name="" id="username">
                    <label for="password">Password:</label> 
                    <input type="password" class = 'info_input' name="" id="password">
                    <label for="">Select your distribution hub (You may change later):</label>
                    <div class="hub">
                        <div class= "hanoi_hub">   
                            <input type="radio" name = "chosenhub" id="Lazada Hanoi">
                            <label for="Lazada Hanoi">Name: Lazada Hub HCMC</label>
                            <a>-  Address: 8 floor 127 Lo Duc</a>
                        </div> 

                        <div class="hmc_hub">
                            <input type="radio" name = "chosenhub" id="Lazada HCMC">
                            <label for="Lazada HCMC">Name: Lazada Hub Danang</label>
                            <a>-  Address: 8 floor 127 Lo Duc</a>
                        </div>

                        <div class = "danang_hub">
                            <input type="radio" name = "chosenhub" id="Lazada Danang">
                            <label for="Lazada Danang">Name: Lazada Hub Hanoi</label>
                            <a>-   Address: 8 floor 127 Lo Duc</a>
                        </div>
                    </div>
                
                    <label for="image">Set a profile picture: </label>
                    <input type="file" name="" id="image" accept="image/png, image/jpeg"><br>
                    <p></p><input type="button" name="" id="register" value = "Register">
                </fieldset>
            </form>
        </div>
    </main>



</body>
</html>