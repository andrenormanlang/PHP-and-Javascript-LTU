<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Labb 1A-PHP-sida 3</title>
</head>

<body>
<main>
    <h1>Conditional Statements & Loops in PHP</h1>
    <p>Looping statements in PHP are used to execute the same block of code a specified number of times.<br>
    In PHP we have the following looping statements:<br>
    &#8226; while - loops through a block of code if and as long as a specified condition is true<br>
    &#8226; do...while - loops through a block of code once, and then repeats the loop as long as a special condition is true<br>
    &#8226; for - loops through a block of code a specified number of times<br>
    &#8226; foreach - loops through a block of code for each element in an array<br><br></p>

    <p>Conditional Statements - They enable the possibility of performing different actions for different conditions.<br>
        There are 4 types of conditional statements in PHP:<br>
        &#8226; if statement - executes some code if one condition is true<br>
        &#8226; if...else statement - executes some code if a condition is true and another code if that condition is false<br>
        &#8226; if...elseif...else statement - executes different codes for more than two conditions<br>
        &#8226; switch statement - selects one of many blocks of code to be executed
        </p>
    <p>This page demonstrates the possibility of conversion of a string of words to an array and the use of loops in PHP to execute the search of a specific string inside an array.</p>
    <!--- Steps #4 and #5 of the exercise --->
<form method="POST">
    <label for="phrase">Write a phrase: <input type="text" name="phrase"><br><br>
    <label for="word">Select a word from the phrase: <input type="text" name="keyword"><br><br>
    <button name='submit'>Submit phrase & word</button><br><br>
</form>
    <?php
    if(isset($_POST['submit']))
    {
        $phrase=$_POST["phrase"];
        $phrase = explode(' ', $_POST['phrase']); //Step #6a of the exercise - Function "explode" below converts words of the phrase from a string to an array
        print_r($phrase); //Step #6c of the exercise
        echo"<br><br>";
        ?>
        <?php
        $keyword=$_POST["keyword"]; //Step #6b of the exercise?>
        <?php
        // Step #6d of the exercise determining the position of the word inputted in the 2nd field was found in the array using an if statement with an index variable
        echo "The word $keyword is in place: ";   foreach ($phrase as $idx =>$elem)
        if ($elem == $keyword){
            echo $idx." ";
        }
        ?>
        <br><br>
        The word
        <?php
        print_r($keyword) ; ?>
        was found:

        <?php
        // Step #6e of the exercise determining the number of times the word inputted in the 2nd field is found in the array using a Loop - foreach with counter and If statement
        $count="$keyword";
        $i = 0;
        foreach($phrase as $arr)
        {
            if($arr === $count){
                $i++;
            }
        }
        if ($i==1)
        {echo "$i time";}
        elseif ($i>1)
        {echo "$i times";}
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
