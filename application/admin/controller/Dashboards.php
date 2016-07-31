<?php
namespace app\admin\controller;
use think\Controller;
use think\View;

class Dashboards extends Controller{
	public function __construct(){
		$this->view = new View();
	}
    public function index(){
        
    	
    }
    
   public function variant_1(){
   		return $this->fetch('../public/app_admin/tpls/dashboards/variant-1.html');
   }
   public function variant_2(){
   	return $this->fetch('../public/app_admin/tpls/dashboards/variant-2.html');
   }
  
    
}
