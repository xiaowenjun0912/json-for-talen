<?php

    //连接数据库
    $link = mysqli_connect('127.0.0.1','root','root','test');

    $sql = "select *from students";

    $result = mysqli_query($link,$sql);

    //转换成数组
    $data = mysqli_fetch_all($result,1);

    //转换成JSON字符串
    echo json_encode($data);

?>