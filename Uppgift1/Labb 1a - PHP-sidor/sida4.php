<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Labb 1A-PHP-sida 4</title>
</head>

<body>
<main>
    <h1>PHP Functions</h1>
    <p>PHP function is a piece of code that can be reused many times. It can take input as argument list and return value. There are thousands of built-in functions in PHP.
    </p>
    <p>Some of the main advantages of PHP Functions are:</p>
    <ul>
        <li>Code Reusability: PHP functions are defined only once and can be invoked many times, like in other programming languages.</li>
        <li>Less Code: It saves a lot of code because you don't need to write the logic many times. By the use of function, you can write the logic only once and reuse it.</li>
        <li>Easy to understand: PHP functions separate the programming logic. So it is easier to understand the flow of the application because every logic is divided in the form of functions.</li>
    </ul>
    <p>This page demonstrates the use of PHP functions for a mathematical purpose.</p>
    <!--- STEP #5 of Exercise regarding the parameters length and width of the form and the button calculate --->
    <form method="POST">
        <h4>To calculate the perimeter and area of a rectangle please enter the values below:</h4>
        <label for="le">Enter length:</label>
        <input type = "text" id="le" name = "le"  size="1">
        <br/><br/>

        <label for="wi">Enter width:</label>
        <input type = "text" id ="wi" name = "wi"  size="1">
        <br/><br/>

        <input type= "submit" value = "calculate" name="btncalculate"   size="2"><br/><br/>
    </form>
    <?php
    if(isset($_POST['btncalculate']))
    {
        $l=$_POST['le'];
        $w=$_POST['wi'];
        // Steps #4,#6,#7,#8 &#9 of Exercise encompassing both the calculation of both perimeter and area within the same function
        function calculateCircumference($l,$w){
            $calculatePerimeter = 2*($l+$w);
            echo  "Perimeter of a rectangle of length $l and width $w is "  .$calculatePerimeter."<br><br>";
            $calculateArea = $l*$w;
            echo  "Area of a rectangle of length $l  and width $w is "  .$calculateArea."<br><br>";
        }
        calculateCircumference($l,$w);
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
