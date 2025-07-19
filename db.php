<?php
// الاتصال بقاعدة البيانات
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'fadafada';
$conn = mysqli_connect($host, $user, $password, $db);
if (!$conn) {
    die('فشل الاتصال بقاعدة البيانات: ' . mysqli_connect_error());
}
?>