<?php
$con = mysqli_connect("localhost","root","mirim2","php");

// Check connection

    $sql = "
    INSERT INTO php (
      num ,
      name,
      id,
      pw,
      brith,
      addr1,
      addr2,
      tel,
      email,
      gender,
      age) VALUES(
      0,
      "$name",
      "$id",
      "$year",
      "$age",
      "$add",
      //"$add2",
      "$tel",
      "$email",
      "$gender",
      "$age"

      );
    ";

    $result = mysqli_query($con, $sql);
    if($result === false){
      error_log(mysqli_error($con));
    }
?>