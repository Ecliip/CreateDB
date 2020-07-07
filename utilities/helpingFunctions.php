<?php include "connectToDB.php";
function insertData() {
    global $con;
    $result = mysqli_query(
        $con,
        "INSERT INTO users (user_name, email)
VALUES ('$_POST[username]', '$_POST[email]')"
    );
    if(!$result){
        die("Query doesn't work: " . mysqli_error($con));
    }
}