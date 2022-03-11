<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
<div class="php">
    <?php
    // if...elseif statement was used in order to avoid parse errors after submitting the form as either GET or POST.

    // Step #7 of exercise
    if($_SERVER['REQUEST_METHOD'] == 'GET'){
        echo "<h4>GET Method</h4>";
        echo $_GET["name"] . "<br><br>";
        echo $_GET["phone"];
    }
    elseif($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        echo "";
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        echo "<h4>POST Method</h4>";
        echo $_POST["name"] . "<br><br>";
        echo $_POST["phone"];
    }
    elseif($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        echo "";
    }

    ?>
<div class="php">
    <footer>
        <?php
        $str1 ="Luleå tekniska universitet | Webbutveckling II - Skriptspråk och databaser  |";
        echo $str1;
        $str2 = "anolan~1";
        echo $str2;
        ?>
        |
        <?php echo date ("Y");?>
    </footer>
</body>
</html>
