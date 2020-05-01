<?php
    /*echo "회원정보 수정 <br><br>";
    $con = mysqli_connect("localhost","root","mirim2","php");
    $sql = "SELECT id,pw FROM member WHERE pnum=num ";
    $row = mysqli_fetch_assoc($RESULT);
    echo "id : $row['id']";*/

$number = $_GET['pnum'];
    
$con = mysqli_connect("localhost","root","mirim2","php");
$sql = "SELECT id FROM member where num = $number";
$RESULT = mysqli_query($con,$sql);
$row = mysqli_fetch_array($RESULT);
echo $row['id'];
echo "<br>";

?>
<html>
<form method="POST" action="edit_info_database.php">
    <input type ="hidden" name = "number" value = <?= $number?> >
    pw:<input type="text" name="pw">
        <br>
    이름:<input type="text" name="name">
        <br>
    email:<input type="text" name="email">
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
        <input type="submit" value="회원정보 수정하기">
</form>
</html>