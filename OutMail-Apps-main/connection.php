<?php
session_start();
$host = 'ec2-3-224-164-189.compute-1.amazonaws.com';
$port = '5432';
$user = 'vxvbhrxzeqdsoy'; 
$password = '4a4e2de3191db5b0d7cf5b88668d86269e536fae20ecbdf882ec506fc05b1246';
$db   = 'dcrbsn02q1k5om';

$connection = pg_connect("host=$host port =$port dbname=$db user=$user password=$password");
// if($connection){
// echo 'Koneksi Berhasil';
// }
// else{
// echo 'Koneksi Gagal';
// }
// ?>