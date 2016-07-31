<?php
namespace app\admin\controller;
use think\Controller;
use think\View;

class Layout extends Controller{
	
	public function __construct(){
		$this->view = new View();
		
	}
	
  
   
    //设置 - 最顶部模板
    public function settings_pane(){
    	return $this->fetch('../public/app_admin/tpls/layout/settings-pane.html');
    }
    
    public function horizontal_menu(){
    	return $this->fetch('../public/app_admin/tpls/layout/horizontal-menu.html');
    }
    public function app_body(){
    	return $this->fetch('../public/app_admin/tpls/layout/app-body.html');
    }
    public function sidebar_logo(){
    	return $this->fetch('../public/app_admin/tpls/layout/sidebar-logo.html');
    }
    public function sidebar_profile(){
    	return $this->fetch('../public/app_admin/tpls/layout/sidebar-profile.html');
    }
    public function sidebar_menu(){
    	return $this->fetch('../public/app_admin/tpls/layout/sidebar-menu.html');
    }
    public function user_info_navbar(){
    	return $this->fetch('../public/app_admin/tpls/layout/user-info-navbar.html');
    }
    public function footer(){
    	return $this->fetch('../public/app_admin/tpls/layout/footer.html');
    }
    public function sidebar_chat(){
    	return $this->fetch('../public/app_admin/tpls/layout/sidebar-chat.html');
    }
    public function footer_chat(){
    	return $this->fetch('../public/app_admin/tpls/layout/footer-chat.html');
    }

}
