<?php
    session_start();
    echo "회원정보<br>";
    $name = $_POST['name'];
    $_SESSION['name'] = $name;
    $id = $_POST['id'];
    $pw1 = $_POST['pw1'];
    $pw2 = $_POST['pw2'];
    if (strcmp($pw1, $pw2) == 0) {
        $pw = $pw1;
    }
    $email = $_POST['email'];
    $rnum1 = $_POST['rnum1'];
    $year = substr($rnum1, 0, 2);
    $rnum2 = $_POST['rnum2'];
    if ((int)$rnum2 % 2 == 0) {
        $gender = "여자";
    } else {
        $gender = "남자";
    }
    $birthYear = (int)$year + (int)((int)$rnum2 / 3) * 100 + 1900;
    $birthMonth = substr($rnum1, 2, 2);
    $birthDay = substr($rnum1, 4, 2);
    $age = date("Y") - $birthYear + 1;
    $pnum = $_POST['pnum1']."-".$_POST['pnum2']."-".$_POST['pnum3'];
    $add = $_POST['add1']." ".$_POST['add2'];
    echo "아이디 $id<br>";
    echo "비번 $pw<br>";
    echo "이름 $name<br>";
    echo "이메일 $email<br>";
    echo "나이 $age<br>";
    echo "성별 $gender<br>";
    echo "생년월일 {$birthYear}년 {$birthMonth}월 {$birthDay}일<br>";
    echo "전화번호 $pnum<br>";
    echo "주소 $add";

    $con = mysqli_connect("localhost","root","mirim2","php");
    $sql = " INSERT INTO member (name,id,pw,birth,addr1,addr2,tel,email,gender,age) VALUES(".
    "'{$name}','{$id}','{$pw}','{$year}','{$add}','{$add}','{$pnum}','{$email}','{$gender}','{$age}')";

    if (mysqli_query($con, $sql)){
         echo "<br> 성공적으로 저장되었습니다.";    
    }
    else{
        error_log(mysqli_error($con));
    }
    
    mysqli_close($con);
?>