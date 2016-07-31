<?php


//login_manage();



/**
 * 处理模块的基础
 */
function login_manage(){

	if(is_login()){
		//登入了
	}else{
		$request = \think\Request::instance(); 	//url信息

		if($request->path() == 'admin/user/login'){ //过滤登入操作
			
		}else{
			$user = controller('admin/User');
			$user->login('error');
		}
	}

}
/**
* 验证是否登入
* @return true | false
*/
function is_login(){
	if(think\Session::has('user')){
		return true;
    }else{
    	return false;
    }
}