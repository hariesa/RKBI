<?php
if($_GET['action']==''){
session_start();

$user=$_POST['user'];


//session_register('user');
$_SESSION['user']=true;
$_SESSION['user']=$user;

//echo $_SESSION['user'];
header('location:index.php?m=');

}
?>
