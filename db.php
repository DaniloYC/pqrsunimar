<?php

session_start();

$conn = mysqli_connect(
    'pqrsunimar.cii4idtkymkd.us-east-1.rds.amazonaws.com',
    'admin',
    '123456789',
    'pqrsunimar'
);

/*
if(isset($conn)){
    echo 'DB se conecto';
}
*/

?>