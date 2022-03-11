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
    <h1> Please enter your information to create a new login account</h1>
    <p>
        <label>Login Name:</label><input type = "text"  name = "name" />
        <label>Password:</label><input type = "password" name = "pwd" />
        <br/>
        <br/>
    </p>
    <input type = "submit" name="save_btn" id = "submit" value = "Save new user"/>
    <input type = "submit"  name="login_btn" id = "submit" value = "Login"/>
</form>
<br><br>

<?php
if(isset($_POST['save_btn']))
    {
        $username = $_POST['name'];
        $password = $_POST['pwd'];
        $username_lowercase = strtolower($username);
        $password_hash = password_hash($password, PASSWORD_DEFAULT);
        $fp = fopen('accounts.txt', 'a+');
        $username_exists = false;
        while  (($csv = fgetcsv($fp, null, ";")) !== FALSE)
        {
            if ($csv[0] == $username_lowercase) {
                $username_exists = true;
            }
        }
        if ($username_exists) {
            echo "Username already exists";
        }
        else {
            if (fputcsv($fp, array($username_lowercase, $password_hash), ";")) {
                echo 'saved';
            }
        }

        fclose($fp);
    }

elseif(isset($_POST['login_btn']))
    {
        $username = $_POST['name'];
        $password = $_POST['pwd'];
        if (empty($username)) {
            echo 'No username specified';
        }
        elseif  (empty($password)) {
            echo 'No password entered';
        }
        else{
            $username_lowercase = strtolower($username);
            $fp = fopen('accounts.txt', 'a+');
            $username_exists = false;
            $password_correct = false;
            while  (($csv = fgetcsv($fp, null, ";")) !== FALSE)
            {
            if ($csv[0] == $username_lowercase) {
                $username_exists = true;
                $password_correct = password_verify($password, $csv[1]);
            }
            }

            if ($username_exists && $password_correct)
            {   $_SESSION["username"] = $username;
                header('Location: //localhost/Uppgift2/index.php');
                exit();
            }
            else
            {
            echo "username and/ or incorrect password";
            }
        }
    }

?>
</body>
</html>