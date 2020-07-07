<?php include "utilities/helpingFunctions.php";
$email = $username = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Welcome to update username page!</h1>
<h3>type your email: </h3>
<form method="post" action="update.php">
    <input type="email" name="email" value="<?php echo $_POST['email']?>">
    <input type="submit" name="submitEmail" value="update">
    <?php
    if(isset($_POST['submitEmail'])) {
        $email = $_POST['email'];
        $row = loadSingleRecord($email);

        echo "<h3>Change your username</h3><br>
            <input type='text', name='username' value='$row[user_name]' <br>
            <input type='submit' name='submitChange' value='Change'>";
    }
    if (isset($_POST['submitChange'])) {
        $username = $_POST['username'];
        $result = updateRecord($username, $email);
        if($result){
            $row = loadSingleRecord($email);
            "<br>";
            echo "<h3>your new username is $_POST[username]($_POST[email])</h3>";
            $email = $username = "";
        }

    }
    ?>
</form>
<?php

?>
<?php include "utilities/backHomeBtn.php"?>
</body>
</html>