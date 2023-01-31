<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $adress = $_POST['adress'];
	$content = $_post['content'];
    //$date = date_parse_from_format('Y年m月d日H时i分',$time);
    //$dataNow = mktime($date["hour"],$date["minute"],0,$date["month"],$date["day"],$date["year"]);
 
	$hostName = "localhost";//你的数据库地址，用户名，密码，端口，数据库名
    $usrName = "root";
    $passWord = "";
    $port = "3306";
    $dbname = "userdb";
 
    $conn = mysqli_connect($hostName, $usrName, $passWord, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "数据库连接成功";
}
 ?>