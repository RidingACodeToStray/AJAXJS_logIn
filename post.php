<?php
$conn = @mysqli_connect("localhost","root","","html5-7");
if (!$conn) {
    die("连接失败！");
}
$conn->query("set names utf8");//读取数据库格式
$name = $_POST['name'];
$pwd = md5($_POST['pwd']);//用户输入密码转化为md5格式
$sql = "SELECT * FROM user WHERE name = '{$name}' AND pwd ='{$pwd}'";
$conn->query($sql);
//判断登录是否成功
if(mysqli_affected_rows($conn)>0){
    echo "登陆成功";
}else {
    echo "登陆失败,账号或密码错误";
}
?>