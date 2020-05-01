<?php 
 $userid ="";
 if(isset($_COOKIE["id"])){
     $userid = $_COOKIE["id"];
 }   
?>

<!doctype html>
<html>
    <form method="POST" action="idsave.php">
        <input type="text" name="Iid" ,value =<?=$userid?>>
        <br>
        <input type="text" name="Ipw">
        <br>
        <input type="submit" value="in">
        <br>
        id저장<input type="checkbox" value ="save">
</form>
</html>
