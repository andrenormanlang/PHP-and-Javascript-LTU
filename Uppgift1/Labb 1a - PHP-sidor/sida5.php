<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Labb 1A-PHP-sida 5</title>
</head>
<body>
<main>
    <h1>PHP Server Variables</h1>
    <p>$_SERVER is an array containing information such as headers, paths, and script locations. The entries in this array are created by the web server. There is no guarantee that every web server will provide any of these; servers may omit some, or provide others not listed here.</p><br><br>
    <?php
     echo "a. Server name:  ".$_SERVER['SERVER_NAME']."<br><br>";
     echo "b. User IP Address:  ".$_SERVER['REMOTE_ADDR']."<br><br>";
     echo "c. Filename of PHP page:  ".$_SERVER['SCRIPT_NAME']."<br><br>";
    echo  "d. Users Port:  ".$_SERVER['SERVER_PORT']."<br><br>";
    echo  "e. Method used to access the page:  ".$_SERVER['REQUEST_METHOD']."<br><br>";
    ?>
</main>
<footer>
    Luleå tekniska universitet | Webbutveckling II - Skriptspråk och databaser  |
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
</html><?php
