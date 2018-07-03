<?php
include('db1.php');
$dis = $_POST['dish'];
$dat = $_POST['date'];
$tim = $_POST['time'];
$serv = $_POST['serve'];
print_r($_POST);
 // echo $_POST['dish'];
file_put_contents('postdata.txt', var_export($_POST, true));
if(mysqli_query($conn,"INSERT INTO smart_cooker( dish, datepick, timepick, serving ) VALUES('$dis','$dat','$tim','$serv')"))
      //echo "Succesfully inserted";
      <a  href="">
      else
        echo "Failed";
 ?>
