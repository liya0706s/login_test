<?php
include_once "../api/db.php";

//利用count來檢查是否帳號已存在
$res=$Mem->count(['acc'=>$_POST['acc']]);
//回傳檢查的結果
if($res>0){
    echo 1;
}else{
    echo 0;
}

//簡化的寫法
// echo $User->count(['acc'=>$_POST['acc']]);



?>