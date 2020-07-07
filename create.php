<?php include "utilities/helpingFunctions.php";
echo "$_POST[username], $_POST[username]";

if(isset($_POST['submit'])){
    insertData();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Wellcome to the create User page!</h1>
<form method="post", action="create.php">
    <div>
        Name: <input type="text" name="username">
    </div>
    <div>
        Email: <input type="email" name="email">
    </div>
    <div>
        <input type="Submit" name="submit" value="Create User">
    </div>
</form>

<br>
<?php include "utilities/backHomeBtn.php"?>
</body>
</html>