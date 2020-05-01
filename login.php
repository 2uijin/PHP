<?php
    $con = mysqli_connect("localhost","root","mirim2","php");

    $sql = "SELECT id,pw,num FROM member";
    $RESULT = mysqli_query($con,$sql);

    function back_caution($msg){ 
        $str = "<script>";
        $str .= "alert('{$msg}');"; 
        $str .= "history.back();"; 
        $str .= "</script>"; 
        echo("$str"); 
       // exit; 
    }
    $ad_id ="admin";
    $ad_pw ="1234";

    if(mysqli_num_rows($RESULT)>0){
        while($row = mysqli_fetch_assoc($RESULT)){
         if(strcmp($row['id'], $_POST['Iid'])==0&&strcmp($row['pw'], $_POST['Ipw'])==0 ){
            echo "환영합니다.<br>";
            echo "<a href= 'pj_board.html'>게시판</a><br>";
            echo $row['num'];
            echo "<a href=edit_info.php?pnum=$row[num]> 회원정보 수정  </a>";
         break;
            }

        if(strcmp($ad_id, $_POST['Iid'])==0&&strcmp($ad_pw, $_POST['Ipw'])==0 ){
            echo "관리자님, 어서오세요<br>";
            echo "<a href= 'admin_user_info.php'>회원정보</a><br>";

            break;
        }
        elseif(strcmp($row['id'], $_POST['Iid'])!=0){
            $id_C ="틀린 id 입니다.";
            back_caution($id_C);
            }//id틀림
        elseif(strcmp($row['pw'], $_POST['Ipw'])!=0){
            $pw_C ="틀린 pw 입니다.";
            back_caution($pw_C);
            }//pw틀림 */
        elseif(strcmp($row['pw'], $_POST['Ipw'])!=0&&strcmp($row['id'], $_POST['Iid'])!=0){
            $all_C ="id 또는 pw가 틀렸습니다.";
            back_caution($all_C);
                }//둘다틀림                   
        }//배열로 가져오기
    }//if
    //echo <a herf =주소></a>
    //192.168.172.1
    //192.168.2.25
?>

