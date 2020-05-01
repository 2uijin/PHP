<?php
    session_start();
    $name = $_SESSION["name"];
?>

<!doctype html>
<html>
    <form method="POST" action="sign_up2.php">

        id:<input type="text" name="id">
        <br>
        pw:<input type="text" name="pw1">
        <br>        
        pw확인:<input type="text" name="pw2">
        <br>        
        이름:<input type="text" name="name">
        <br>
        email:<input type="text" name="email">
        <br>
        주민번호:<input type="text" name="rnum1">-<input type="text" name = "rnum2"  size=1 >******
        <br>

        전화번호:<select name = "pnum1">
        <option value="">선택</option>
        <option value="010">010</option>
        <option value="011">011</option>
        <option value="018">018</option>
        </select>
        -<input type="text" name="pnum2" size=1>-<input type="text" name="pnum3" size=1>
        <br>
        주소:<input type="text" name="add1"><br>
        <input type="text" name="add2"><br>
        <input type ="submit" value="도로명주소 찾기">
        <br>
        <br>
        <input type="submit" value="in">
        <br>

</form>
</html>