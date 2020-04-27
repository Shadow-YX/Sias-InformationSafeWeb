<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>www.siashacker.com 西亚斯信息安全学习网站</title>

<link href='../css/main.css' rel="stylesheet" type="text/css">
<?php
$host='127.0.0.1';
$dbuser='root';
$pwd='123456';
$dbname='php99';

$db=new mysqli($host,$dbuser,$pwd,$dbname);

if($db->connect_error<>0){
	echo"链接失败";
	echo $db->connect_error;
	exit;
}

$db->query("SET NAMES UTF8");

$sql="SELECT * FROM msg ORDER BY id DESC";
$mysqli_result =$db->query($sql);

if ( $mysqli_result === false){
	echo" sql错误";
	exit;
}
$rows=[];

while($row=$mysqli_result->fetch_array(MYSQLI_ASSOC)){
	$rows[]=$row;
}	
  
?>
</head>
<body>


<!--上半部-->
<div id="body">
<!--  头部 -->
   <div class="header">
   <div class="wrap">
     <span class="welcome">西亚斯信息安全学习网站！--西亚斯信息安全工作室</span>   
     <span class="CD" >按Ctrl+D收藏</span>
    </div>
                

	<div class ="topmain">
 		  <div class="topin"> 
          	<div class="logo">
 			<img src="../images/logo.jpg" width="70" height="74">
            </div>
            <!--  <div class ="search">  
			<form name="keyform" method="get" id="searchform" action="http://www.baidu.com">
			<input type="text" name="keyword" class="search" value="搜索" onFocus="if (this.value == '搜索') 				{this.value = '';}" onBlur="if (this.value == '') {this.value = '搜索';}">
			</form>
		    </div> !-->
			<p><font color="#FFFFFF">
            <em>Sias Hacker Web</em>
            </p></font>
  		  </div>
   		
           
     </div> 
   </div>      
        
<!-- 导航栏 -->		 
   <div id ="topnav">
          	<ul>
          	<li><a href="../index.php">首页</a></li>
          	<li><a href="../Main pagination bar/security information.php">安全平台</a></li>
          	<li><a href="../Main pagination bar/Programming technology.php">编程技术</a></li>
          	<li><a href="../Main pagination bar/permeate technology.php">渗透技术</a></li>
          	<li><a href="../Main pagination bar/WEB security.php">WEB安全</a></li>
          	<li><a href="../Main pagination bar/reverse engineering .php">逆向破解</a></li>
			<li><a href="../Main pagination bar/bug.php">漏洞挖掘</a></li>
          	<li><a href="../Main pagination bar/mobile.php">移动安全</a></li>
          	<li><a href="../Main pagination bar/ctf.php">CTF竞赛</a></li>
            </ul>
 		 </div> 
    	 	
       	   
</div>

<!-- 中部 -->
<div id=main>
    				<!--边缘页-->
                    <div class=borden1></div>
                    <div class="left"></div>
                    <div class="right"></div>
<!-- 主内容-->                   
<div class="center">
    					<!--跳转登录注册表单-->
        				<div class="resiger"> 
							<from action="login.php" method="get">
							<div align="right">
							<input name="zc" type="reset"  value="注册个人ID"  onclick="window.location.href='../Main pagination bar/register.php'">
    						<td>用户名</td>
    						<input name="login" type="text" size="15">
   			 				<td>密码</td><input name="passwd" type="password" size="15"> 
    						<input type="submit" value="登录"/>
							</form>
           		 			</div>
        				</div>
   
        <!--右子页-->
        <div class="centerRight">
        <div id="right"><div id="Ti"><a>热门文章</a></div>
        <li><a href="https://www.0dayhack.com/post-307.html">中华人民共和国网络安全法</a></li>
        <li><a href="http://www.kali.org.cn/thread-48625-1-1.html">渗透测试全套教程</a></li>
        <li><a href="https://www.bilibili.com/video/av15267247?from=search&seid=15790754284453582266">【C语言】C语言程序设计.浙江大学.翁恺</a></li>
        <li><a href="https://www.52pojie.cn/forum.php?mod=viewthread&tid=598884">逆向入门基础</a></li>
        <li><a href="https://www.bilibili.com/video/av18899713?from=search&seid=672456964286479008">【汇编语言】小甲鱼零基础汇编真正全集1-17章</a></li>
        <li><a href="https://www.bilibili.com/video/av51406822?from=search&seid=16693830047649102236">【python】python黑客编程</a></li>
        <li><a href="http://www.chncto.com/heikejishu/22158.html">黑客入侵技术分析_黑客是怎么入侵别人电脑的？</a></li>
        <li><a href="https://www.2cto.com/special/linuxcymldq/"></a>linux操作系统_Linux内核学习_linux常用命令大全</li>
        <li><a href="https://www.bilibili.com/video/av41942769?from=search&seid=18133537776798592298">渗透测试入门实战</a></li>
        <li><a href="https://www.bilibili.com/video/av52753577?from=search&seid=18133537776798592298">Web高级渗透测试工程师</a></li>
       
       
        </div>
        <div id="right"><div id="Ti"><a>最新文章</a></div>
        <li><a href="http://www.safebase.cn/article-257405-1.html">硅谷创业之父：不想当艺术家的程序员不是好黑客</a></li>
        <li><a href="https://www.2cto.com/article/201901/793437.html">安全专家发现有史以来最大的数据泄漏</a></li>
        <li><a href="http://www.secye.com/Network/websafe/13674.html">渗透测试信息收集心得分享</a></li>
        <li><a href="http://www.secye.com/Network/websafe/13645.html">一次SQL注入与WAF绕过思路分享</a></li>
        <li><a href="http://www.secye.com/Network/websafe/13576.html">如何判断网站是否有SQL注入漏洞并利用它进行攻击？</a></li>
        <li><a href="http://www.secye.com/Network/websafe/13604.html">一次INSERT查询的无逗号SQL注入漏洞构造利用</a></li>
        <li><a href="https://www.77169.com/html/237255.html">黑客攻击网络交易平台 一夜疯狂盗窃1600余万元</a></li>
        <li><a href="https://www.77169.com/html/237209.html">SandboxEscaper又发布了一个微软0day危机漏洞</a></li>
        <li><a href="https://www.77169.com/html/237305.html">从外网到内网的渗透姿势分享</a></li>
        <li><a href="https://www.cnblogs.com/zhaoyixiang/p/10970117.html">CTF—WEB—sql注入之宽字节注入</a></li> 
        </div>
        
        	<!--留言板-->
       	    <div class="messageboard"><p class='p'>留言板</p>
            <div class="wrapp">
			<div class='add'>
			<form action="save.php" method="post">
        	<textarea name='content' class='content' cols='50' rows='5'></textarea>
            <input name='user' class='user' type='text'/>
            <input class='btn' type='submit' value='发表留言'/>
			</form>
         	</div>
			
			<?php
			foreach($rows as $row){
         	?>
			
			
       	    <div class='msg'>
         	    <div class='info'>
          	    	 <span class='user'><?php echo $row['user'];?></span>
               		 <span class='time'><?php echo date("y-m-d H:i:s" ,$row['intime']);?></span>
                </div>
                	<div class ='content'>
            		<?php echo $row['content'];?>
          	   	    </div>
            </div>
			<?php
			}
			?>
          
        	
            </div>
        	</div>
        
        </div>
        
        
				<!-- 左子页 !-->
		<div id="Inf"><div class="InfTi">WEB安全</div>
		<li><a href="https://www.cnblogs.com/zhaoyixiang/p/10970117.html">CTF—WEB—sql注入之宽字节注入</a></li> 
        <li><a href="https://www.t00ls.net/articles-48931.html">ThinPHP5.1 代码执行漏洞简单分析</a></li>
        <li><a href="http://www.secye.com/Network/websafe/13576.html">如何判断网站是否有SQL注入漏洞并利用它进行攻击？</a></li>
        <li><a href="http://www.secye.com/Network/websafe/13604.html">一次INSERT查询的无逗号SQL注入漏洞构造利用</a></li>
	
        </div>

    
	</div>
</div>
	
<!-- 底部 --> 
  <div class=foot> 
  		 <ul class="wp nav">
 		 <li><a href="../foot menu/Introduction.php" id="P1">工作室介绍</a></li>
  	   	 <li><a href="../foot menu/CTF.php" id="P2">CTF赛程</a></li>
 	 	 <li><a href="../foot menu/mumber Recruitment.php" id="P3">成员招募</a></li>
  		 <li><a href="../foot menu/help center.php" id="P4">帮助中心</a></li>
  		 <li><a href="../foot menu/contact information.php" id="P5">联系方式</a></li>
  		 <li><a href="../foot menu/Study Route.php" id="P6">学习规划</a></li>
  		 <li><a href="../foot menu/Legal aid.php" id="P">法律援助</a></li>
         </ul>
   
   	 <div class="bar">
    	<div class="wp">
        <div id="maintime">  
	 <div id="show_time0" >
	<script>
 	setInterval("show_time0.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);  
	</script>


	 </div>
     </div>
    	<p>地址:河南省郑州市郑州大学西亚斯国际学院11号楼1楼信息安全工作室</p>
        <p> Copyright © 2019 </p>
     
 

         </div>
      </div>   
  </div>
</div>
</body>
</html>