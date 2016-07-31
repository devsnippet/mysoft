<?php
namespace app\admin\controller;
use think\Controller;
use think\View;

class Index extends Controller{
	
	public function __construct(){
		
		
	}
	
    public function index(){
  
    	$view = new View();
    	return $view->fetch('../public/index_admin.html');;
    }
    
    
    
    
}
