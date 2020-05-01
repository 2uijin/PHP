<?php
if($_GET["Iid"] != "kim"){
    echo "<script>alert(\"아이디가 틀립니다\");</script>";
}

if($_GET["Ipw"]!="1234"){
    echo "<script>alert(\"비밀번호가 틀립니다\");</script>";
}

if($_GET["Ipw"] == "1234" && $_GET["Iid"] == "kim"){ 
    
    echo $_GET["Iid"];
    echo " 님 환영합니다<br>";

    echo "<a href=pj_board.php?name=" . $_GET['Iid'] . ">게시판</a>";
    echo "<br>";
    echo "<a href=pj_board.php>회원정보</a><br>";
}
?>