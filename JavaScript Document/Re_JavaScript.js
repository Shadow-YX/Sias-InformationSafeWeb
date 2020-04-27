// JavaScript Document

function $(elementId){
  return document.getElementById(elementId).value;
    }
function divId(elementId){
  return document.getElementById(elementId);
    }
/*用户名验证*/    
function checkUser(){
  var username=$("username");
  var userId=divId("user_prompt");
   userId.innerHTML="";    
  var reg=/^[a-zA-Z][a-zA-Z0-9]{3,15}$/;    
    if(reg.test(username)==false){
       userId.innerHTML="用户名不正确";
    return false;
      }
      return true;
    }
/*密码验证*/    
function checkPwd(){
  var password=$("password");
  var pwdId=divId("pwd_prompt");
   pwdId.innerHTML="";    
  var reg=/^[a-zA-Z0-9]{4,10}$/;    
    if(reg.test(password)==false){
       pwdId.innerHTML="密码不能含有非法字符，长度在4-10之间";
    return false;
      }
      return true;
    }
    
function checkRepwd(){
  var repassword=$("repassword");
  var password=$("password");
  var repwdId=divId("repwd_prompt");
   repwdId.innerHTML="";
    if(password!=repassword){
       repwdId.innerHTML="两次输入的密码不一致";
    return false;
      }
      return true;
    }

/*验证邮箱*/
function checkEmail(){
  var email=$("email");
  var email_prompt=divId("email_prompt");
  email_prompt.innerHTML="";
  var reg=/^\w+@\w+(\.[a-zA-Z]{2,3}){1,2}$/;    
    if(reg.test(email)==false){
      email_prompt.innerHTML="Email格式不正确，例如web@sohu.com";
    return false;
      }
      return true;
}
/*验证手机号码*/
function checkMobile(){
    var mobile=$("mobile");
    var mobileId=divId("mobile_prompt");
    var regMobile=/^1\d{10}$/;
    if(regMobile.test(mobile)==false){
        mobileId.innerHTML="手机号码不正确，请重新输入";
        return false;
        }
        mobileId.innerHTML="";
        return true;
    }
/*time*/
setInterval("fun(show_time)",1);
function fun(timeID){ 
var date = new Date();  //创建对象  
var y = date.getFullYear();     //获取年份  
var m =date.getMonth()+1;   //获取月份  返回0-11  
var d = date.getDate(); // 获取日  
var w = date.getDay();   //获取星期几  返回0-6   (0=星期天) 
var ww = ' 星期'+'日一二三四五六'.charAt(new Date().getDay()) ;//星期几
var h = date.getHours();  //时
var minute = date.getMinutes()  //分
var s = date.getSeconds(); //秒
var sss = date.getMilliseconds() ; //毫秒
if(m<10){
m = "0"+m;
}
if(d<10){
d = "0"+d;
}
if(h<10){
h = "0"+h;
}


if(minute<10){
minute = "0"+minute;
}


if(s<10){
s = "0"+s;
}


if(sss<10){
sss = "00"+sss;
}else if(sss<100){
sss = "0"+sss;
}


document.getElementById(timeID.id).innerHTML =  y+"-"+m+"-"+d+"   "+h+":"+minute+":"+s+"."+sss+"  "+ww;
  }
