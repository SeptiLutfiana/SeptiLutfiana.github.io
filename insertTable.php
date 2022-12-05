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
$sql = "INSERT INTO user(id,username,password) 
VALUES (1, 'Admin', '123')";



if(mysqli_query($connect, $sql)){
    echo "Data berhasil ditambahkan";
}
else{
    echo "Data gagal ditanbahkan <br> ".mysqli_error($connect);
}
mysqli_close($connect);
?>