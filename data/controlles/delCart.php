<?php
require("../init.php");
session_start();
@$uid=$_SESSION['uid'];
@$pid=$_REQUEST["pid"];
$sql="delete from dr_cart where pid_c=$pid and uid=$uid";
$result=mysqli_query($conn,$sql);
$row=mysqli_affected_rows($conn);
if($row>0){
    echo '{"code":1,"msg":"删除成功"}';
}else{
    echo '{"code":-1,"msg":"删除失败"}';
}

?>