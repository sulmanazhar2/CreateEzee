<?php
session_start();
if($_SESSION['ema'])
{
session_destroy();
	echo "<script>window.location.href='blogin.php'</script>";
}
if($_SESSION['sema'])
{
session_destroy();
	echo "<script>window.location.href='slogin.php'</script>";
}
if($_SESSION['email'])
{
session_destroy();
	echo "<script>window.location.href='../Admin/index.php'</script>";
}
?>