<?php

include_once('connect.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $uname = $_POST['uname'];
    $pword = $_POST['pword'];
    $cpword = $_POST['cpword'];

  //  echo "Username: $uname, Passord: $pword";

  if ($pword == $cpword){

    $sql = "INSERT INTO login (uname, pword, admin)
    VALUES ('$uname', '$pword', 0)";
    
    if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();


  }

else print "Password does not match!!!";



}






?>