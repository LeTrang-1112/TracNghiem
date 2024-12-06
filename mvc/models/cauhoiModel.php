<?php
include_once "./mvc/core/Utilities.php";
class cauhoiModel extends Model{
    function layCauHoi($macauhoi){
        $result = $this->select("*","cau_hoi","macauhoi='".$macauhoi."'","ORDER BY macauhoi DESC");
        if(gettype($result)!="string" && !empty($result)){
            return $result[0];
        }
        return $result;
    } 
    function CauHoi(){
        $result = $this->select("*","cau_hoi");
        return $result;
    }
    function layallCauHoi($id){
        $result = $this->select("*","cau_hoi","id='".$id."'","ORDER BY id DESC");
        return $result;
    }
    function laySoLuongCauHoi(){
        $result = $this->select("COUNT(macauhoi) as total","cau_hoi",null,null);
        return $result;
    }
    function laySoLuong($macauhoi){
        $result = $this->select("COUNT(macauhoi) as sl","cau_hoi","macauhoi='".$macauhoi."'",null);
        return $result;
    }
    function id($id){
        $result = $this->select("id","cau_hoi","id='".$id."'");
        return $result;
    }
    
    function themCauHoi($id,$macauhoi,$cauhoi,$lca,$lcb,$lcc,$lcd,$dad){
        $result = $this->select("*","cau_hoi","macauhoi='".$macauhoi."'",null);
        if(empty($result)){
            $value = "'".$id."','".$macauhoi."','".$cauhoi."','".$lca."','".$lcb."','".$lcc."','".$lcd."','".$dad."'";
            $row = null;
            return $this->insert("cau_hoi",$value, $row);
        }else {
            return "Thêm tài khoản không thành công. Lỗi: câu hỏi ".$macauhoi." (macauhoi- ".$macauhoi.") đã được thêm rồi.";
        }
    }
    
    function themdsCauHoi($dscauhoi){
        $this->conn->beginTransaction();
        try {
            $result=1;
            foreach($dscauhoi as $cau_hoi){
                $id = $cau_hoi[0];
                $macauhoi = $cau_hoi[1];
                $cauhoi = $cau_hoi[2];
                $lca = $cau_hoi[3];
                $lcb = $cau_hoi[4];
                $lcc = $cau_hoi[5];
                $lcd = $cau_hoi[6];
                $dad = $cau_hoi[7];
                $result = $this->themCauHoi($id,$macauhoi,$cauhoi,$lca,$lcb,$lcc,$lcd,$dad);
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
    function suaCauHoi($id,$macauhoi,$cauhoi,$lca,$lcb,$lcc,$lcd,$dad){
        $setCol = array();
        array_push($setCol,'id','macauhoi','cauhoi','luachon_a','luachon_b','luachon_c','luachon_d','dapan_dung');
        $setVal = array();
        array_push($setVal,"'".$id."'", "'".$macauhoi."'","'".$cauhoi."'","'".$lca."'","'".$lcb."'","'".$lcc."'","'".$lcd."'","'".$dad."'");
        return $this->update("cau_hoi", $setCol, $setVal, "macauhoi='".$macauhoi."'");
    }
    function xoaCauHoi($macauhoi){
        $result = $this->delete("cau_hoi","macauhoi='".$macauhoi."'");
        return $result;
    }
    function timCauHoi($search){
        $result = $this->select("*","cau_hoi","macauhoi like %".$search."% ".$search."%");
        return $result;
    }
    function existCauHoi($macauhoi){
        $result = $this->select("id","macauhoi","cauhoi","luachon_a","luachon_b","luachon_c","luachon_d","dapan_dung","macauhoi='".$macauhoi."'");
        return $result;
    }
    //1 bảng chứa macauhoi và đáp án đã chọn, so sáng với bảng chính và tính số câu hỏi đúng
   
    
}
?>