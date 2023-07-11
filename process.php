<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'ajaxTest');





echo 'hello';



if (isset($_POST['name'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  echo "POST: your name is " . $_POST['name'];
  $query =  "INSERT INTO users(name) VALUES('$name')";
  if (mysqli_query($conn, $query)) {
    echo 'user added...';
  } else {
    echo 'ERROR: ' . mysqli_error($conn);
  }
}
if (isset($_GET['name'])) {
  echo "get: your name is " . $_GET['name'];
}
