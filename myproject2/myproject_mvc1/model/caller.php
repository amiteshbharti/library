<?php

/**
 * @author  Amitesh Bharti
 * @access Public
 * @date 7th march 2013
 */
require_once 'db.php';

abstract class dbAbstract {

    protected $db = "";

    function __construct() {
        $this->db = DBConnection::Connect();
    }

}

class caller extends dbAbstract
{
	
	public function FindUsers() {
	
		//$this->db->Fields(array("u.firstname as fname","u.lastname","u.email"));
		$this->db->Where(array("firstname"=>"mohit"));
		$this->db->Where(array("id BETWEEN 1 AND 20"),true,"OR");
		$this->db->From("users as u");
		$this->db->Select();
		// print_r(i);
		echo $this->db->lastQuery();
		//	result = $this->db->resultArray();
		$this->db->resultArray();
		echo "<pre/>";
		print_r($result);
		 
	}
	public function AddUser(){
	
		$this->db->Fields(array("firstname"=>"deep","lastname"=>"gupta"));
		$this->db->From("users");
		$this->db->Insert();
		echo $this->db->lastQuery();
	}
	
	public function UpdateUser(){
	
		$this->db->Fields(array("firstname"=>"deepa"));
		$this->db->From("users");
		$this->db->Where(array("id"=>44));
		$this->db->Update();
		echo $this->db->lastQuery();
	}
	
	public function DeleteUser(){
		$this->db->From("users");
		$this->db->Where(array("id"=>44));
		$this->db->Delete();
		echo $this->db->lastQuery();
	}
} 



$obj = new caller();
//$obj->FindUsers();
//$obj->AddUser();
//$obj->UpdateUser();
$obj->DeleteUser();

?>