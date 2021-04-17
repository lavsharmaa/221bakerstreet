<?php
include("../connection/connect.php");
error_reporting(0);
session_start();


// sending query
mysqli_query($db,"DELETE FROM contact WHERE email = '".$_GET['message_del']."'");
header("location:all_messages.php");  

?>
