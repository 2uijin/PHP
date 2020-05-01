<?php
    if (isset($_COOKIE["userid"])&&isset($_COOKIE["usernaeme"])){
        $userid = $_COOKIE["userid"];
        $username = $_COOKIE["username"];
        echo "userid쿠키 : " .$userid.<br>;
        echo "username쿠키 : ".$username.<br>;
    }
    else{
        echo "쿠키가 생성되지 않았습니다" ;
    }
?>