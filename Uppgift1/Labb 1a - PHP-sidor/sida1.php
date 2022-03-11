<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Labb 1A-PHP-sida 1</title>
</head>
<body>
<main>
<h1>Strings in PHP</h1>
<p>A string is a sequence of letters, numbers, special characters and arithmetic values or combination of all. The simplest way to create a string is to enclose the string literal (i.e. string characters) in single quotation marks (')</p>
<p>You can also use double quotation marks ("). However, single and double quotation marks work in different ways. Strings enclosed in single-quotes are treated almost literally, whereas the strings delimited by the double quotes replaces variables with the string representations of their values as well as specially interpreting certain escape sequences.</p>
<p>This page prints a simple string in different types of ways using different PHP functions</p>

    <?php
    // Step 5 printing text in PHP
    $txt1 = "This text is generated using the print command in PHP";
    print "$txt1 ";

    ?>
    <br><br>
    <form method="POST">
        <label for="Name">Name:<input type="text" name="name"><br><br>
        <input type="submit" class="submit" value="submit" ><br><br>
    </form>
    <?php
    //Step 7 peforming various functions (reverse, lowercase, uppercase and counting number of characters) with the data inputted in the form

    if(isset($_POST['name']))
        {
        echo "Hello " . $_POST["name"] . "<br><br>";
        echo "Reverse: " . strrev($_POST["name"]) . "<br><br>";
        echo "Lowercase: " . strtolower($_POST["name"]) . "<br><br>";
        echo "Uppercase: " . strtoupper($_POST["name"]) . "<br><br>";
        echo "Number of characters: " . strlen($_POST["name"]) . "<br><br>";
        }
    elseif ( empty (isset($_POST["name"])))
        {$Name="Andre Lang";
        echo "Hello ".$Name."<br><br>";
        echo "Reverse: ".strrev($Name)."<br><br>";
        echo "Lowercase: ".strtolower($Name)."<br><br>";
        echo "Uppercase: ".strtoupper($Name)."<br><br>";
        echo "Number of characters: ".strlen($Name)."<br><br>";
        }


    ?>


</main>
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