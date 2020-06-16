<?php
include_once '../model/dbh.inc.php';

class Create_class extends Database{

public function __construct(){
	$this->db_connect();

}

public function create_user(){

if(isset($_POST['reg-btn'])){

$fname =$_POST['fname'];
$lname=$_POST['lname'];
$username=$_POST['username'];
$password=$_POST['password'];
$email = $_POST['email'];


$sql= "Insert Into tbl_users (fname,lname,username,password,email) values ('$fname','$lname','$username','$password','$email')";
$result =mysqli_query($this->connection,$sql);


if($result==true){

echo "<script>alert('Successfully Added New User!');
window.location.href='../view/index.php';

</script>";





}

else {
echo "<script>alert('failed to added new User!!');</script>";
echo "<script>window.location.href='../view'/index.php;</script>";
}

return $result;
}

}


}
?>
