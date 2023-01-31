<?php
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
// 设置编码，防止中文乱码
mysqli_query($conn , "set names utf8");
 
$sql = 'SELECT id, name, email, tel, adress, content,datesub FROM usertb';
 
mysqli_select_db( $conn, 'userdb' );
$retval = mysqli_query( $conn, $sql );
if(! $retval )
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '<h2>留言列表</h2>';
echo '<table border="1"><tr><td>ID</td><td>名字</td><td>邮箱</td><td>手机号</td><td>地址</td><td>备注</td><td>提交时间</td></tr>';
while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['id']}</td> ".
         "<td>{$row['name']} </td> ".
         "<td>{$row['email']} </td> ".
         "<td>{$row['tel']} </td> ".
         "<td>{$row['adress']} </td> ".
         "<td>{$row['content']} </td> ".
         "<td>{$row['datesub']} </td> ".
         "</tr>";
}
echo '</table>';
mysqli_close($conn);
?>