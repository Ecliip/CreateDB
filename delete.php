
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Welcome, here you can delete your account</h1>
<h3>Enter in the field below your email</h3>
<form method="post" action="delete.php">
    <input type="email" name="email" value="<?php echo $_POST[email]?>">
    <input type="submit" name="show" value="Show account">
    <?php include "utilities/helpingFunctions.php";
    if(isset($_POST['show'])){
        $row = loadSingleRecord($_POST['email']);
        echo !empty($row) ?
            "<br><h4>Your username is <u>$row[user_name]</u>, are you sure you want to delete it?</h4><br>
 <input type='submit' name='confirm' value='Delete account'>" :
            "please try again";
    }
    if(isset($_POST['confirm'])){
        $result = deleteRecord($_POST['email']);
    }
    ?>
</form>

<?php include "utilities/backHomeBtn.php"?>
</body>
</html>