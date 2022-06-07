
<?php
header('Content-Type:text/html;charset=utf-8');
$user_data = array( 
    1 => array('username'=> 'admin', 'password'=> 'admin'),
   
);
//判断是否有登录表单提交
if(isset($_POST['username']) && isset($_POST['password'])){
	//取出用户名和密码，用户名自动去除两端空白，自动转换为小写
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    //到用户数组中验证用户名和密码
    foreach($user_data as $k=>$v){
        if($v['username'] == $username && $v['password'] == $password){
			//将用户ID和用户名保存到Session中
			session_start();
			$_SESSION['user'] = array('id'=>$k, 'username'=>$v['username']);
		
			header('Location: index.php');
			exit;  //重定向后停止脚本继续执行
        }
    }
    exit('登录失败！用户名或密码错误，请刷新页面重试。');  //验证失败
}

 require './login.html';

