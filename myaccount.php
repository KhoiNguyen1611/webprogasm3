<?php
    session_start();
    $file = fopen('accounts.db', 'r');
    echo $_SESSION["username"];
                    while(!feof($file)){
                        $line = fgets($file);
                        $array = explode(";",$line);
                        if(trim($array[1]) == $_SESSION['username']){
                            $_SESSION["address"] = trim($array[4]);
                            $_SESSION["avt"] = trim($array[3]);
                            $_SESSION["usertype"]  = trim($array[0]);
                            $_SESSION["business"]  = trim($array[5]);
                            break;
                        }
                    }
    function show_customer(){
        echo "
            <div class = 'filesubmission'>
            <img src='avtimg/".$_SESSION["username"]."avt.png'alt='avt'/>
            <label for='image'>Set another profile picture: </label>
            <input type='file' name='new_avt' id='image' accept='image/png, image/jpeg'>
            </div>

            <div class = 'username'>
            <h2>Username: &nbsp</h3> 
            <p id = 'name'>".$_SESSION["username"]." </p>
            </div>

            <div class = 'address'>
            <h2>Address: &nbsp</h3> 
            <p id = 'add'>".$_SESSION["address"]." </p>
            </div>

            <div class = 'submit'>
            <input type='submit' name='act' id='submit' value = 'submit'>
            </div>

        ";
    };

    function show_vendor(){
        echo "
        <div class = 'filesubmission'>
            <img src='avtimg/".$_SESSION["username"]."avt.png'alt='avt'/>
            <label for='image'>Set another profile picture: </label>
            <input type='file' name='new_avt' id='image' accept='image/png, image/jpeg'>
            </div>

            <div class = 'username'>
            <h2>Username: &nbsp</h3> 
            <p id = 'name'>".$_SESSION["username"]." </p>
            </div>

            <div class = 'bname'>
            <h2>Business Name: &nbsp</h3> 
            <p id = 'name'>".$_SESSION["business"]." </p>
            </div>

            <div class = 'address'>
            <h2>Business Address: &nbsp</h3> 
            <p id = 'add'>".$_SESSION["address"]." </p>
            </div>

            <div class = 'submit'>
            <input type='submit' name='act' id='submit' value = 'submit'>
            </div>

        ";
    };

    function show_shipper(){
        echo "
            <div class = 'filesubmission'>
            <img src='avtimg/".$_SESSION["username"]."avt.png'alt='avt'/>
            <label for='image'>Set another profile picture: </label>
            <input type='file' name='new_avt' id='image' accept='image/png, image/jpeg'>
            </div>

            <div class = 'username'>
            <h2>Username: &nbsp</h3> 
            <p id = 'name'>".$_SESSION["username"]." </p>
            </div>

            <div class = 'address'>
            <h2>Distribution hub: &nbsp</h3> 
            <p id = 'add'>".$_SESSION["address"]." </p>
            </div>

            <div class = 'submit'>
            <input type='submit' name='act' id='submit' value = 'submit'>
            </div>
        ";

    };
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="myaccount.css" type="text/css">
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
        <div class = "main_area">
            <fieldset>
                <form method = "post" enctype="multipart/form-data">
                <?php
                        if($_SESSION["usertype"]  == "customer"){
                            show_customer();
                        }
                        elseif($_SESSION["usertype"] == "shipper"){
                            show_shipper();
                        }
                        elseif($_SESSION["usertype"] == "vendor"){
                            show_vendor();
                        }
                    ?>
                </form>

            </fieldset>
        </div>
    </main> 

</body>
</html>