<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM employee WHERE e_id = '".$_GET['employee_del']."'");
header("location:all_employee.php");  

?>
