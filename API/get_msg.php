<?php
    require ('./config.php');
    $send_user_id = $_POST['send_user_id'];
    $received_user_id = $_POST['received_user_id'];
    $now_time = $_POST['now_time']; //当前时间
    $conn = new mysqli($MySqlHost,$MySqlUser,$MySqlPwd,$MySqlDatabaseName);
    mysqli_query($conn, "set character set 'utf8'");//读库
    mysqli_query($conn,"set names 'utf8'");//写库
    $res = mysqli_query($conn,"SELECT * FROM msg_list WHERE received_user_id = '$received_user_id'");
    $msg_num = mysqli_num_rows($res);
    $num = 0;
    for($i=0;$i<$msg_num;$i++){
        $msg_object = mysqli_fetch_array($res);
            $msg_time = $msg_object['msg_time'];
            $msg_text = $msg_object['msg_text'];
            $msg_type = $msg_object['msg_type'];
            $send_user_id = $msg_object['send_user_id'];
            $received_user_id = $msg_object['received_user_id'];
            $msg_id = $msg_object['id'];
            
            if($now_time - $msg_time<=10000){
                $msg_json['msg_time'] = $msg_time;
                $msg_json['msg_text'] = $msg_text;
                $msg_json['msg_type'] = $msg_type;
                $msg_json['send_user_id'] = $send_user_id;
                $msg_json['received_user_id'] = $received_user_id;
                $msg_json['msg_id'] = $msg_id;
                $msg_list_json[$num] = $msg_json;
                $num++; //有效消息个数
            }
    }
    echo(json_encode($msg_list_json));