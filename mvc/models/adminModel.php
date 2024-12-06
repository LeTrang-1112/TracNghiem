<?php
class adminModel extends Model{
    function getAdminByUsername($username)
	{
		$result = $this->select("*","admin","username='".$username."'",null);

		if(empty($result)){
			return false;
		} else {
			return $result[0];
		}
	}
	function suaAdmin($username,$password){
        $setCol = array();
        array_push($setCol,'username', 'password');
        $setVal = array();
        array_push($setVal,"'".$username."'", "'".$password."'");
        return $this->update("admin", $setCol, $setVal, "username='".$username."'");
    }
	function changePassword($username, $password){
		$setCol = array();
        array_push($setCol,'password');
        $setVal = array();
        array_push($setVal,"'".$password."'");
        return $this->update("admin", $setCol, $setVal, "username='".$username."'");
	}
}
?>