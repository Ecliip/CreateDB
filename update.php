<?php include "utilities/helpingFunctions.php"?>

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
    <input type="email" name="email">
    <input type="submit" name="submitEmail" value="update">
    <?php
    if(isset($_POST['submitEmail'])){
        $row = loadSingleRecord($_POST['email']);

        echo "<h3>Change your username</h3><br>
            <input type='text', name='username' value='$row[user_name]' <br>
            <input type='submit' name='submitChange' value='Change'>";
        }
    ?>
</form>

<?php include "utilities/backHomeBtn.php"?>
</body>
</html>