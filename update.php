<?php
  require ('connect.php');
  $name = $_GET['name'];
  $price = $_GET['price'];
  $time = $_GET['time'];

  $query = "INSERT INTO statement(id,name,price,time)VALUES('','$name','$price','$time');";
  $result = mysqli_query($connect, $query) or die('update.php-die');

  $query2 = "SELECT balance FROM user
              ORDER BY user_id DESC
              LIMIT 1;";
  $result2 = mysqli_query($connect, $query2) or die('query2.php-die');
  while($row = mysqli_fetch_array($result2)){
    $success = $row["balance"] - $price;
  }
  $query3 = "INSERT INTO user(user_id,balance)VALUES('','$success');";
  $result3 = mysqli_query($connect, $query3) or die('update.php-die');
?>
