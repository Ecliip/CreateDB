<?php

$con = mysqli_connect(
    "localhost",
    "root",
    "root",
    "user",
    3307
);

if(mysqli_connect_errno()){
    echo "MySql failed: <br>" . mysqli_connect_error();
} else {
    echo "DB is connnected<br>";
}