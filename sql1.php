<?php
$mysqli = mysqli_connect('localhost', 'root', '', 'shop');
if ($mysqli->connect_error) {
    die('Ошибка подключения (' . $mysqli->connect_errno . ') '
        . $mysqli->connect_error);
}

if (mysqli_connect_error()) {
    die('Ошибка подключения (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
}

echo 'Соединение установлено... ' . $mysqli->host_info . "\n";


function select($connection, $table){
    $sql = "SELECT * FROM $table";
    $result = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_assoc($result)){
        print_r("<pre>");
        print_r($row);
    }
}

function insert($connection, $table, $data){
    $sql = "INSERT INTO $table values ($data)";
    $result = mysqli_query($connection, $sql);
}

function update($connection, $table, $field,  $data, $id){
    $sql = "UPDATE $table SET $field = $data WHERE id =" . $id;
    $result = mysqli_query($connection, $sql);
}
function delete($connection, $table, $id){
    $sql = "DELETE FROM $table WHERE id = $id";
    $result = mysqli_query($connection, $sql);
}
$table = 'products';
$field = 'title';
$data = 'test';
$id = 5;
//$data = "7, 'iphone 5', 'iuytr', null, '2016-05-06 00:16:24', 923, 1";

select($mysqli, $table);
//insert($mysqli, $table, $data);
//update($mysqli, $table, $field,  $data, $id);
//delete($mysqli, $table, $id);