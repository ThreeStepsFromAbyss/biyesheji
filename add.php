<?php
	$name = $_POST['name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $adress = $_POST['adress'];
    $content = $_post['content'];
    date_default_timezone_set("PRC");//将时间戳转成北京时间日期
    $time = time();  //获取时间戳
    $dateSub = date('Y年m月d日H时i分',$time);
    //$dateNow = mktime($date["hour"],$date["minute"],0,$date["month"],$date["day"],$date["year"]);
 
	$hostName = "localhost";//数据库地址，用户名，密码，端口，数据库名
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
 
$sql = "INSERT INTO usertb (name,email,tel,adress,content,datesub)
VALUES ('$name','$email','$tel','$adress','$content','$dateSub')";
 
if (mysqli_query($conn, $sql)) {
    echo'<br/>';
    echo "新记录插入成功";
    echo'<br/>';
    echo "当前时间：".$dateSub;
    echo'<br/>';
    echo "您的名字：".$name;
    echo'<br/>';
    echo "您的邮箱：".$email;
    echo'<br/>';
    echo "您的手机号：".$tel;
    echo'<br/>';
    echo "您的地址：".$adress;
    echo'<br/>';
    echo "您的备注：".$content;
    echo'<br/>';
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 
mysqli_close($conn);
?>