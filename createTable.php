<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "prakwebdb";

$connect = mysqli_connect ($hostname, $username, $password, $database);
if($connect){
        echo "Koneksi ke MySQL berhasil";
}
else{
    echo "Koneksi ke MySQL gagal".mysqli_connect_error();
}
$sql = "CREATE TABLE user(
        id INT PRIMARY KEY,
        username VARCHAR (50) NOT NULL,
        password VARCHAR (50) NOT NULL)";
if(mysqli_query($connect, $sql)){
    echo "Tabel user berhasil dibuat";
}
else{
    echo "Tabel user gagal dibuat <br> ".mysqli_error($connect);
}
mysqli_close($connect);
?>