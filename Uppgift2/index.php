<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
<form action = "" method="POST">
    <input type = "submit" name="logout_btn" id = "submit" value = "Log out"/>
</form>
<?php
if(isset($_POST['logout_btn']))
{session_unset();
    session_destroy();
    header('Location: //localhost/Uppgift2/login.php');
    exit();
}
?>
<br>
<?php
if ( empty ($_SESSION["username"]))
    {header('Location: //localhost/Uppgift2/login.php');
    exit();
    }
else
    {
        echo  "<strong>".$_SESSION["username"]."</strong>".' '.'you are logged in';
    }
?>
</body>
</html>