<?php
  $connect=mysqli_connect('localhost','root');
  mysqli_select_db($connect,'test');
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $textarea=$_POST['text'];
  $query="INSERT INTO `visitorInfo`(`name`,`phone`,`email`,`textarea`) VALUES ('$name','$phone','$email','$textarea')";
  mysqli_query($connect,$query);
  echo "Data has been sent";
?>