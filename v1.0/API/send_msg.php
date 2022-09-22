<?php
    require ('./config.php');
    $msg_text = $_POST['msg_text']; //具体信息
    $msg_time = $_POST['msg_time']; //消息时间
    $msg_type = $_POST['msg_type']; //消息类型
    $send_user_id = $_POST['send_user_id'];
    $received_user_id = $_POST['received_user_id'];
    /**信息类型：
     * 文件：file
     * 媒体：media
     * 信息：text
     */
    $conn = new mysqli($MySqlHost,$MySqlUser,$MySqlPwd,$MySqlDatabaseName);
    mysqli_query($conn, "set character set 'utf8'");//读库
    mysqli_query($conn,"set names 'utf8'");//写库
    if(mysqli_query($conn,"INSERT INTO msg_list (msg_text,msg_time,msg_type,send_user_id,received_user_id) VALUES('$msg_text','$msg_time','$msg_type','$send_user_id','$received_user_id')")){
        echo "true";
    }else{
        echo "false";
    }