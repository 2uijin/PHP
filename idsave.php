<?php
if($_POST == "kim" && $_POST =="0000"){
    if($_POST["save_id"])
        $id = setcookie("id",$_POST["Iid"]);
echo "<script> location.herf = 'save.php'</script>"
    }
else echo "<script>alert('fail'); history.go(-1);  </script>"

?>