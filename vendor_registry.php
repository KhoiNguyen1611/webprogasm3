<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="vendor_registry.css" type="text/css">
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
                <form method= "post" enctype="multipart/form-data">
                    <label for="username">Username:</label> 
                    <input type="text" class = 'info_input' name="username" id="username">
                    <label for="password">Password:</label> 
                    <input type="password" class = 'info_input' name="password" id="password">
                    <label for="username">Business Name:</label> 
                    <input type="text" class = 'info_input' name="b_name" id="business">
                    <label for="address">Business Address: </label>
                    <input type="text" class = 'info_input' name="b_address" id="business address">
                    <label for="image">Set a profile picture: </label>
                    <input type="file" name="avt" id="image" accept="image/png, image/jpeg">
                    <?php
                            error_reporting(E_ERROR | E_PARSE);
                            if(isset($_POST["act"])){
                                if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["b_address"]) && isset($_POST["b_name"]) && is_uploaded_file($_FILES['avt']['tmp_name']) )
                                {
                                    $userptn = '/^(?=.*\d)(?=.*[a-z])(?!\W+)(?=.*[A-Z])(?!.*\s).{8,15}$/';
                                    $pwdptn = '/^(?=.*\d)(?=.*[a-z])(?=.*[!@#\$%\^\&*])(?=.*[A-Z])(?!.*\s).{8,20}$/';
                                    $addptn = '/^.{5,}$/';

                                    
                                    // check if user exist.
                                    $file=fopen("accounts.db","r");
                                    $finduser = false;
                                    while(!feof($file))
                                    {
                                        $line = fgets($file);
                                        $array = explode(";",$line);
                                        if(trim($array[1]) == $_POST['username'])
                                        {
                                            $finduser=true;
                                            break;
                                        }
                                    }
                                    fclose($file);
                                
                                    // register user or pop up message
                                    if( $finduser )
                                    {
                                        echo $_POST["username"];
                                        echo ' existed!';
                                    }
                                    else
                                    {
                                        $file = fopen("accounts.db", "a");
                                        $avt = $_FILES["avt"];
                                        move_uploaded_file($avt["tmp_name"], "avtimg/".$_POST["username"]."avt.png");
                                        fputs($file,"vendor".";".$_POST["username"].";".password_hash( $_POST["password"], PASSWORD_DEFAULT).";"."D:\webasm3\avtimg\\".$_POST["username"]."avt.png".";".$_POST["b_address"].";".$_POST["b_name"]."\r\n");
                                        fclose($file);
                                        echo $_POST["username"];
                                        echo " registered successfully!";
                                    }
                                }
                            }
                            else{
                                echo"input nga";
                            }
?>
                    <input type="submit" name="act" id="register" value = "Register">
                </form>
            </fieldset>
        </div>
    </main>



</body>
</html>

