<?php
include_once '../model/dbh.inc.php';

class Select_class extends Database{

    public function __construct(){
        $this->db_connect();

    }

    
    

    public function show_all_users(){

        $sql = "select * from tbl_users";
        $result =mysqli_query($this->connection,$sql);
        return $result;
      

    }

    public function select_edit_user($userId){

        $sql = "select * from tbl_users where userId ='$userId'";
        $result =mysqli_query($this->connection,$sql);
        return $result;
      

    }
}

?>