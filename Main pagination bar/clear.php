<?php
session_start(); 
unset($_SESSION["username"]);  
session_destroy(); 
 echo "<script>alert('退出登录,session置为空,清除cookies'); history.go(-1);</script>";
?> 