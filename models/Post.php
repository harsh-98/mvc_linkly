<?php

namespace Link\Models;

class Post{

	public static  function DB(){
		return new \PDO("mysql:dbname=myDB;host=localhost","harsh","12345678");

	}

	public static function create($name,$user,$pass)
	{
		$db=self::DB();
	$query=$db->prepare("insert into user_info(name,user_name ,password) values (:name,:user,:pass)");
		return $query->execute(["name"=>$name,"user"=>$user,"pass"=>$pass]);

	}
	public static function getAll($name){
        $db = self::DB();
        $query = $db->prepare('SELECT * FROM link where name=:name');

        $result = $query->execute(["name"=>$name]);
        if (!$result){
            print_r($query->errorInfo());
        }
        return $query->fetchAll();
    }


	

public static function check($lname,$lpass){
        $db = self::DB();
        $query = $db->prepare('SELECT * FROM user_info where  user_name=:name && password =:pass');

        $result = $query->execute([
            "name"=>$lname,"pass"=>$lpass]);
    if (!$result){        
    return 0;}
        
        return $query->fetch(\PDO::FETCH_ASSOC);
    }
	
    public static function inser($name,$link){
        $db = self::DB();
        $query = $db->prepare('insert into link(name,link) values(:name ,:link)');

        $result = $query->execute([
            "name"=>$name,"link"=>$link]);


    }
}
?>