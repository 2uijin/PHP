<?PHP
    echo $_GET["myname"];
    echo " 학년 : ";
    echo $_GET["grade"];

    $num = count ($_GET["sub"]);

    for($i =0 ; $i<$num ; $i++){
        echo $_GET["sub"][$i];
        if($i != $num-1)
            echo ",";       
        }
    
?>