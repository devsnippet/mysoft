<?php
namespace app\admin\controller;
use think\Controller;
use think\Input;
use think\Session;
use think\Request;

class User extends Controller{
    public function index(){
        
    	
    }
    /**
     * 用户列表
     */
    public function lists(){
    	
    	
    	return $this->fetch('user/list');
    }
    /**
     * 添加用户
     */
    public function add(){
    	 
    	 
    	return $this->fetch('user/add');
    }
    
    /**
     * 登入
     */
    public function login($state=''){
    
    	
    	if($state == 'error' ){
    	//	$this->redirect('admin/user/login');
    	}
    	if(!Input::post()){
    		return $this->fetch('user/login');
    	}
    	if(is_login()){
    		//return $this->success('你已经登入过了',url('Index/index'));
    	//	return array('accessGranted'=>'true');
    	}
    
    	
    	$userModel = model('user/User');
    	$user = $userModel->get(Input::post());
    	if($user){
    		$users 			= array();
    		$users['id']	= $user->id;
    		$users['name']	= $user->name;
    		Session::set('user',$users);
    		return true;
    	}else{
    		return false;
    	}
    	
    	
    }
    /**
     * 退出
     */
    public function quit(){

    	Session::delete('user');
    	return $this->success('退出成功',url('admin/login'));
    }
    
    /**
     * 注册用户
     * @return mixed
     */
    public function register(){
    	
    	if(!Input::post()){
    		return $this->fetch('register');
    	}
    	$user = model('user/user');
    	$user->data(Input::post());	
    }
    
    
  
    
}
