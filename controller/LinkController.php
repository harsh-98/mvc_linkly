<?php
namespace Link\Controllers;
use Link\Models\Post;

class LinkController extends BaseController{
	public function get(){
		
		$this->render("invalid.html");
	}


	public function post(){

		$name=$this->protect($_POST['name']);
		$link=$this->protect($_POST['link']);
		
		if(!empty($link)){		
	Post::inser($name,$link);}
	$posts=Post::getAll($name);

	$this->render('link.php', ['msg' => $name,"posts"=>$posts]);

	
}
}


?>