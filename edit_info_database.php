<?php
    $pw = $_POST['pw'];
    $email = $_POST['email'];
    $pnum = $_POST['pnum1']."-".$_POST['pnum2']."-".$_POST['pnum3'];
    $add = $_POST['add1']." ".$_POST['add2'];
    $num = $_POST['numb'];
   $con = mysqli_connect("localhost","root","mirim2","php");
   $sql = "UPDATE member SET pw = $pw , add =$add, tel = $pnum, email=$email WHERE num= $num";
   if (mysqli_query($con, $sql)){
    echo "<br> 성공적으로 저장되었습니다.";    
}
else{
   error_log(mysqli_error($con));
}

mysqli_close($con);

?>