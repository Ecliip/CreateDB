<?php
$con = mysqli_connect(
    "localhost",
    "root",
    "root",
    "user",
    3307
);

if(mysqli_connect_errno()) {
    echo "MySQL failed " . mysqli_connect_errno();
    exit();
} else {
    echo "DB is connected";
}