<?php
include_once "./mvc/core/Utilities.php";
class DScauhoiModel extends Model{
    //lay all danh sach cau hoi
    function LayDanhSachCauHoi(){
        $result = $this->select("*","danhsach_cauhoi",null,"ORDER BY id DESC");
        return $result;
    }
    
    //lay 1 ds cau hoi
    function LayDSCauHoi($id){
        $result = $this->select("*","danhsach_cauhoi","id='".$id."'","ORDER BY id DESC");
        if(gettype($result)!="string" && !empty($result)){
            return $result[0];
        }
        return $result;
    }
    function LayDanhSachCauHoi_HK(){
        $result = $this->select("*","danhsach_cauhoi","ten_baithi like N'% kì %' or ten_baithi like N'% kỳ %'","ORDER BY id DESC");
        return $result;
    }
    function LayDanhSachCauHoi_THPTQG(){
        $result = $this->select("*","danhsach_cauhoi","ten_baithi like N'% THPTQG %' or ten_baithi like N'% THPT Quốc_Gia %'","ORDER BY id DESC");
        return $result;
    }
    function LayDanhSachCauHoi_KT(){
        $result = $this->select("*","danhsach_cauhoi","ten_baithi like N'% Kiểm_Tra %' or ten_baithi like N'% KT %'","ORDER BY id DESC");
        return $result;
    }
    //lay sl ds                                                                                                                 
    function LaySlDSCauHoi(){
        $result = $this->select("COUNT(id) as total","danhsach_cauhoi",null,null);
        return $result;
    }
    function themDanhSachCauHoi($id,$tenbaithi,$capdo){
        $result = $this->select("*","danhsach_cauhoi","id='".$id."'",null);
        if(empty($result)){
            $value = "'".$id."','".$tenbaithi."','".$capdo."','".date('Y-m-d H:i:s')."', '".'ON'."'";
            $row = null;
            return $this->insert("danhsach_cauhoi",$value, $row);
        }else {
            return "Thêm danh sách câu hỏi không thành công. Lỗi: danh sach cau hoi ".$id." (id- ".$id.") đã được thêm rồi.";
        }
    }
    function suaDSCauHoi($id,$tenbaithi,$capdo,$ngaytao,$trangthai){
        $setCol = array();
        array_push($setCol,'id', 'ten_baithi','capdo','ngay_tao','trangthai');
        $setVal = array();
        array_push($setVal,"'".$id."'", "'".$tenbaithi."'","'".$capdo."'","'".$ngaytao."'","'".$trangthai."'");
        return $this->update("danhsach_cauhoi", $setCol, $setVal, "id='".$id."'");
    }
    function xoaDSCauHoi($id){
        $result = $this->delete("cau_hoi","id='".$id."'");
        $result = $this->delete("danhsach_cauhoi","id='".$id."'");
        return $result;
    }
    function timDSCauHoi($search){
        $result = $this->select("*","danhsach_cauhoi","id like %".$search."% ".$search."%");
        return $result;
    }
    function existDSCauHoi($id){
        $result = $this->select("id","danhsach_cauhoi","id='".$id."'");
        return $result;
    }
    function tinhSoLuotLamBai($id){
        $result = $this->select("count(*) as'sl'","baithi","id_baithi='".$id."'");
        return $result;
    }
    function themBaiThi($username,$id,$tenbaithi,$diemthi){
            $result = $this->select("*","baithi","id_baithi='".$id."'and username_tk='".$username."'",null);
            if(empty($result)){
                $value = "'".$username."','".$id."','".$tenbaithi."','".$diemthi."'";
                $row = null;
                return $this->insert("baithi",$value, $row);
        }else {
            return " Lỗi: Bài thi đã được hoàn thành";
        }
        
    }
    function BaiThi(){
        $result = $this->select("*","baithi",NULL,NULL);
        return $result;
    }
    function diemthi(){
        $result = $this->select("diemthi,count(diemthi) as dem","baithi",NULL,"GROUP BY diemthi");
        return $result;
    }
        function slBaiThi(){
        $result = $this->select("COUNT(*) as total","baithi",NULL,NULL);
        return $result;
    }
    function lichSuThi($username){
        $result = $this->select("*","baithi","username_tk='$username'",NULL);
        return $result;
    }
    function layBaiThi($username,$id){
        $result = $this->select("*","baithi","id_baithi='$id'and username_tk='$username'",NULL);
        return $result;
    }
    function xoaBaiThi($username,$id){
        $result = $this->delete("baithi","id_baithi='".$id."' and username_tk='".$username."'");
        return $result;
    }
    function suaValue($id,$trangthai){
        $setCol = array();
        array_push($setCol,'id','trangthai');
        $setVal = array();
        array_push($setVal,"'".$id."'", "'".$trangthai."'");
        return $this->update("danhsach_cauhoi", $setCol, $setVal, "id='".$id."'");
    }
}
?>