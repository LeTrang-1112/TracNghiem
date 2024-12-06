<?php
include_once "./mvc/core/Utilities.php";
class taiKhoanModel extends Model{
    function layDanhSachTaiKhoan(){
        $result = $this->select("*","tai_khoan",null,"ORDER BY username DESC");
        return $result;
    }
    function layTaiKhoan($username){
        $result = $this->select("*","tai_khoan","username='".$username."'","ORDER BY username DESC");
        if(gettype($result)!="string" && !empty($result)){
            return $result[0];
        }
        return $result;
    }
    function kiemTraTaiKhoan($username)
	{
		$result = $this->select("*","tai_khoan","username='".$username."'",null);
		if(empty($result)){
			return false;
		} else {
			return $result[0];
		}
	}
    function laySoLuongTaiKhoan(){
        $result = $this->select("COUNT(username) as total","tai_khoan",null,null);
        return $result;
    }
    function themTaiKhoan($username,$password){
        $result = $this->select("*","tai_khoan","username='".$username."'",null);
        if(empty($result)){
            $value = "'".$username."','".$password."'";
            $row = null;
            return $this->insert("tai_khoan",$value, $row);
        }else {
            return "Thêm tài khoản không thành công. Lỗi: tài khoản ".$username." (username- ".$username.") đã được thêm rồi.";
        }
    }
    function themDanhSachTaiKhoan($dsTaiKhoan){
        $this->conn->beginTransaction();
        try {
            $result=1;
            foreach($dsTaiKhoan as $taikhoan){
                $username = $taikhoan[0];
                $password = $taikhoan[1];
                $result = $this->themTaiKhoan($username,$password);
                if(!is_numeric($result)){
                    break;
                }
            }
            if(!is_numeric($result)){
                $this->conn->rollBack();
                return $result;
            }else{
                $this->conn->commit();
                return 1;
            }
        } catch(Throwable $t) {
            $this->conn->rollBack();
            return $t->getMessage();
        }
    }
    function suaTaiKhoan($username,$password){
        $setCol = array();
        array_push($setCol,'username', 'password');
        $setVal = array();
        array_push($setVal,"'".$username."'", "'".$password."'");
        return $this->update("tai_khoan", $setCol, $setVal, "username='".$username."'");
    }
    
    function xoaTaiKhoan($username){
        $result = $this->delete("tai_khoan","username='".$username."'");
        return $result;
    }
    function timTaiKhoan($search){
        $result = $this->select("*","tai_khoan","username like %".$search."% ".$search."%");
        return $result;
    }
    function existTaiKhoan($username){
        $result = $this->select("username","password","username='".$username."'");
        return $result;
    }
}
?>