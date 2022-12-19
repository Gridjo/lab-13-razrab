<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
interface Tovar{
	function name();
	function prise();
	function raiting();
}

/**
 * 
 */
class Milk implements Tovar
{
	public $name,$prise,$rait;
	public function __construct($name,$prise,$rait){
		$this->name=$name;
		$this->prise=$prise;
		$this->rait=$rait;
	}
	function name(){
		echo "name: ".$this->name;
	}
	function prise(){
		echo "prise: ".$this->prise;
	}
	function raiting(){
		echo "raiting ".$this->rait;
	}
}
/**
 * 
 */
class Potato implements Tovar
{
	public $name,$prise,$rait;
	public function __construct($name,$prise,$rait){
		$this->name=$name;
		$this->prise=$prise;
		$this->rait=$rait;
	}
	function name(){
		echo "name: ".$this->name;
	}
	function prise(){
		echo "prise: ".$this->prise;
	}
	function raiting(){
		echo "raiting ".$this->rait;
	}
}
/**
 * 
 */
class Folk implements Tovar
{
	public $name,$prise,$rait;
	public function __construct($name,$prise,$rait){
		$this->name=$name;
		$this->prise=$prise;
		$this->rait=$rait;
	}
	function name(){
		echo "name: ".$this->name;
	}
	function prise(){
		echo "prise: ".$this->prise;
	}
	function raiting(){
		echo "raiting ".$this->rait;
	}
}
$Milk = new Milk("немолоко","45$","4");
$Potato = new Milk("GriinHeel","5$","4.3");
$Folk = new Milk("SilverFolk","450$","5");

interface People{
	function login();
	function password();
}
/**
 * 
 */
class User implements People
{
	public $login,$password;
	function __construct($login,$password)
	{
		$this->login=$login;
		$this->password=$password;
	}
	function login(){
		echo "User login: ".$this->login;
	}
	function password(){
		echo "User password: ".$this->password;
	}
}
/**
 * 
 */
class Admin implements People
{
	public $login,$password;
	function __construct($login,$password)
	{
		$this->login=$login;
		$this->password=$password;
	}
	function login(){
		echo "Admin login: ".$this->login;
	}
	function password(){
		echo "Admin password: ".$this->password;
	}
}
/**
 * 
 */
class Admember implements People
{
	public $login,$password;
	function __construct($login,$password)
	{
		$this->login=$login;
		$this->password=$password;
	}
	function login(){
		echo "Admember login: ".$this->login;
	}
	function password(){
		echo "Admember password: ".$this->password;
	}
}
$User = new User("User112","qwerty");

/**
 * 
 */
class Pokypka implements Tovar,People
{
	public $login,$password,$name,$prise,$rait;
	function __construct($name,$prise,$rait,$login,$password){
		$this->name=$name;
		$this->prise=$prise;
		$this->rait=$rait;
		$this->login=$login;
		$this->password=$password;
	}
	function login(){
		echo "User login: ".$this->login;
	}
	function password(){
		echo "User password: ".$this->password;
	}
	function name(){
		echo "name: ".$this->name;
	}
	function prise(){
		echo "prise: ".$this->prise;
	}
	function raiting(){
		echo "raiting ".$this->rait;
	}
	function pocupka(){
 		echo "Пользователь: ".$this->login." Купил: ".$this->name;
	}


}
$User1 = new Pokypka("Milk_OF_God","4$","3,4","ivan","qwerty");
$User1->pocupka();

?>
</body>
</html>