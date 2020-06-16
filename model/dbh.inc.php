<?php
class Database{

private $dbhost;
private $dbusername;
private $dbpassword;
private $dbname;

protected function db_connect(){

$this->dbhost ='localhost';
$this->dbusername='root';
$this->dbpassword='123456';
$this->dbname='lamp_stack_crud1';

$this->connection =new mysqli($this->dbhost,$this->dbusername,$this->dbpassword,$this->dbname);
return $this->connection;

}




}

?>
