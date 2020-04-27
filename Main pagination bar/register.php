<!DOCTYPE ><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="../JavaScript Document/Re_JavaScript.js"></script>
<link href="../css/Re.css" rel="stylesheet" type="text/css">

</head>



  <table class="main" border="0" cellspacing="0" cellpadding="0">
  <tr>
  
  </tr>
  <tr>
    <td class="hr_1">新用户注册</td>
  </tr>
  <tr>
    <td style="height:10px;"></td>
  </tr>
  <form action="../Main pagination bar/re php/regist.php" method="post" name="myform">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td class="left">用户名：</td>
    <td class="center"><input id="username" name="username" type="text" class="in" onBlur="checkUser()" /></td>
    <td><div id="user_prompt">用户名由英文字母和数字组成的4-16位字符，以字母开头</div></td>
  </tr>
  <tr>
    <td class="left">密码：</td>
    <td class="center"><input id="password" name="password" type="password" class="in"  onblur="checkPwd()"/></td>
    <td><div id="pwd_prompt">密码由英文字母和数字组成的4-10位字符</div></td>
  </tr>
  <tr>
    <td class="left">确认密码：</td>
    <td class="center"><input id="repassword" name="repassword" type="password" class="in"  onblur="checkRepwd()"/></td>
    <td><div id="repwd_prompt"></div></td>
  </tr>
   <tr>
    <td class="left">电子邮箱：</td>
    <td class="center"><input id="email" name="email" type="text" class="in"  onblur="checkEmail()"/></td>
    <td><div id="email_prompt"></div></td>
  </tr>
    <tr>
    <td class="left">手机号码：</td>
    <td class="center"><input id="mobile" name="mobile" type="text" class="in" onBlur="checkMobile()" /></td>
    <td><div id="mobile_prompt"></div></td>
  </tr>
   <tr>
     <td class="left">&nbsp;</td>
     <td class="center"><input name="submit"  type="submit" value="注册" id="btn"/></td>
     
   </tr>
</table>
</td>
  </tr>
  </form>
</table>

        
<body>
</body>
</html>
