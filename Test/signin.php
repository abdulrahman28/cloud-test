<?php

include_once('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $uname = $_POST['uname'];
    $pword = $_POST['pword'];

$sql = "SELECT * FROM login where uname='" . $uname. "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    if ($row["pword"] == $pword){

        if ($row["admin"] == 1){

        echo "Welcome Administrator, " . $row["name"] . ". You have successfully logged in.";
    }

    else echo "Welcome User, " . $row["name"] . ". You have successfully logged in.";
}

    else echo "Incorrect Password!!!";

    //echo "Username: " . $row["uname"]. " Password: " . $row["pword"]. " Name: " . $row["name"] ."<br>";
  }
} else {
  echo "User does not exist!!!";
}
$conn->close();





}


?>