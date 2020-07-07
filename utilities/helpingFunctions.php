<?php include "connectToDB.php";
function insertData() {
    global $con;
    $result = mysqli_query(
        $con,
        "INSERT INTO users(user_name, email) VALUES('$_POST[username]', '$_POST[email]')"
    );
    if(!result){
        echo "<br>MySQL failed: ". mysqli_error() ."<br>";
    }
}

function printData()
{
    global $con;
    $result = mysqli_query(
        $con,
        "SELECT * FROM users"
    );
    if ($result) {
        while($row = mysqli_fetch_assoc($result)){
            echo "$row[user_name]<br>";
        }

    }else{
        echo "failed: " . mysqli_error();
    }
}

function loadSingleRecord($email){
    global $con;
    $result = mysqli_query(
        $con,
        "SELECT * FROM users WHERE email = '$email'"
    );
    if(!result){

    }
    return mysqli_fetch_assoc($result);
}
