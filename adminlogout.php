<?php
require "dbcon.php";
session_start();
session_destroy();
header("location:adminlogin.php");
?>