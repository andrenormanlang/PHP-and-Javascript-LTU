<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Labb 1A-PHP-sida 2</title>
</head>

<body>
<main>
    <h1>Arrays in PHP</h1>
    <p>Arrays in PHP is a type of data structure that allows us to store multiple elements of similar data type under a single variable thereby saving us the effort of creating a different variable for every data.</p>
    <p>There are three types of arrays that you can create. These are:<br><br>
        - Indexed array — An array with a numeric key.<br><br>
        - Associative array — An array where each key has its own specific value.<br><br>
        - Multidimensional array — An array containing one or more arrays within itself</p>'
    <p>This page shows the possibility of changing and restructuring the data inside an array using PHP code.</p>

    <form method="POST">
    <label for="Farm Animal"><input name='farmAnimals[]' placeholder='Enter a Farm Animal Name'></label><br><br>
    <label for="Farm Animal"><input name='farmAnimals[]' placeholder='Enter a Farm Animal Name'></label><br><br>
    <label for="Farm Animal"><input name='farmAnimals[]' placeholder='Enter a Farm Animal Name'></label><br><br>
    <button name='submit'>Submit farm animals</button><br><br>
</form>
    <?php
    if(isset($_POST['submit']))
    {   //Steps 5a and 5b of exercise converting values of the form in HTML to an array
        $farmAnimals=$_POST['farmAnimals'];
        foreach($farmAnimals as $farmAnimal):
        echo"";
        endforeach;
        print_r($farmAnimals);
        echo"<br><br>";
        //Steps 5c, 5d, 5e and 5f replacing, adding and removing animals of the orginal array
        $replace = [
            '2' => 'Ostrich',
            '4' => 'Alpaca',
            '0' => ''
        ];
        $replaced = array_replace($farmAnimals, $replace);
        array_splice($replaced,0,1);
        print_r($replaced);
        echo"<br><br>";
        // Step 5g printing the replaced element of the second place in the array
        echo $replaced ['1'];
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