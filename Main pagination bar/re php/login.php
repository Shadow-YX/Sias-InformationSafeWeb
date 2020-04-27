<?php
    header("Content-type: text/html; charset=utf-8");
	$_session["username"] = null;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = new mysqli('localhost','root','','php99');

    if ($conn->connect_error){
        echo '数据库连接失败！';
        exit(0);
    }else{
        if ($username == ''){
            echo '<script>alert("请输入用户名！");history.go(-1);</script>';
            exit(0);
        }
        if ($password == ''){
            echo '<script>alert("请输入密码！");history.go(-1);</script>';
            exit(0);

        }
        $sql = "select username,password from register where username = '$_POST[username]' and password = '$_POST[password]'";
        $result = $conn->query($sql);
        $number = mysqli_num_rows($result);
		session_start(); 
		
		if(isset($_SESSION['username']))
		{
		echo "session为空";
		}else
		{
		echo "session不为空";
}
		// 判断是否登陆
		
		if (isset($_SESSION['username']))
		{ 
		echo "您已经成功登陆"; 
		} 
		else if ($number) {
            echo '<script>alert(" 登录成功！！");history.go(-1);</script>';
			session_start(); 
			setcookie('username','password',time()+15);
			$_session["usename"] = true; 
        } else {
            echo '<script>alert("用户名或密码错误！");history.go(-1);</script>';
        }
    }
?>
