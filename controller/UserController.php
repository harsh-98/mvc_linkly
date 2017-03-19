<?php
namespace Link\Controllers;
use Link\Models\Post;

class UserController extends BaseController{
	public function get() {
		
		$this->render("login.php");
	}


	public function post(){
		$posts=[];

		$name=$this->protect($_POST["reg_name"]);
		$user=$this->protect($_POST["reg_user"]);
		$luser=$this->protect($_POST["log_name"]);
		$pass=md5(sha1($this->protect($_POST["reg_pass"])));
		$lpass=md5(sha1($this->protect($_POST["log_pass"])));

		if((!empty($pass)&&!empty($user)&&!empty($name))||(!empty($luser)&&!empty($lpass))){
			if(!empty($pass)&&!empty($user)&&!empty($name))	{
				if(Post::create($name, $user,$pass))
					$msg=$name;
			}
			else{
				if($ms=Post::check($luser,$lpass)){
					$msg=$ms['name'];
					$posts=Post::getAll($msg);}
					else{
    		//this->render("invalid.html");

					}
				}
				$this->render('link.php', ['msg' => $msg,"posts"=>$posts]);
			}

		}
	}


	?>