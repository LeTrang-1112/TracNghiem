<?php
class admin extends Controller{

    #region Xử lý admin
    function index(){
        if(isset($_SESSION['admin'])){
            $md = $this->model("taiKhoanModel");
            $md1=$this->model("DScauhoiModel");
            $sl_taikhoan = $md->laySoLuongTaiKhoan();
            $sl_baithi=$md1->LaySlDSCauHoi();
            $sl_lichsuthi=$md1->slBaiThi();
            $sl_truycap=array();
            $arr_session_id=array();
            $arr_session_id_online=array();
            $arr_time_session_id=array();
            if(is_writable("counter.log")){
                $ar_rows = file("counter.log", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $nrrows = count($ar_rows);
                if($nrrows>0) {
                    for($i=0; $i<$nrrows; $i++){
                        $ar_line = explode(",", $ar_rows[$i]);
                        if(!in_array($ar_line[0], $arr_session_id)){
                            array_push($arr_session_id,$ar_line[0]);
                        }
                        if(!in_array($ar_line[0], $arr_session_id_online)&&(time()-$ar_line[1])<TIME_ONLINE){
                            array_push($arr_session_id_online,$ar_line[0]);
                        }
                        $date=date('m/Y', $ar_line[1]);
                        if(array_key_exists($date,$arr_time_session_id)){
                            if(!in_array($ar_line[0], $arr_time_session_id[$date])){
                                array_push($arr_time_session_id[$date],$ar_line[0]);
                            }
                        }else{
                            $arr_temp=array($ar_line[0]);
                            $arr_time_session_id[$date]=$arr_temp;
                        }
                    }
                }
            }
            $sl_truycap=array(count($arr_session_id),count($arr_session_id_online));
            $labelChart=array_keys($arr_time_session_id);
            $data_session_id=array_values($arr_time_session_id);
            $dataChart=array();            
            foreach($data_session_id as $data){
                array_push($dataChart,count($data));
            }
            $this->view("layout_admin",[
                "Page"=>"dashboard",
                "sl_taikhoan"=>$sl_taikhoan[0]["total"],
                "sl_baithi"=>$sl_baithi[0]["total"],
                "sl_lichsuthi"=>$sl_lichsuthi[0]["total"],
                "sl_truycap"=>$sl_truycap,
                "labelChart"=>json_encode($labelChart),
                "dataChart"=>json_encode($dataChart)
            ]);
        } else {
            $this->view("pages/admin/login");
        }
    }
    function index1(){
        if(isset($_SESSION['admin'])){
            $md = $this->model("taiKhoanModel");
            $sl_taikhoan = $md->laySoLuongTaiKhoan();
            $sl_truycap=array();
            $arr_session_id=array();
            $arr_session_id_online=array();
            $arr_time_session_id=array();
            if(is_writable("counter.log")){
                $ar_rows = file("counter.log", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $nrrows = count($ar_rows);
                if($nrrows>0) {
                    for($i=0; $i<$nrrows; $i++){
                        $ar_line = explode(",", $ar_rows[$i]);
                        if(!in_array($ar_line[0], $arr_session_id)){
                            array_push($arr_session_id,$ar_line[0]);
                        }
                        if(!in_array($ar_line[0], $arr_session_id_online)&&(time()-$ar_line[1])<TIME_ONLINE){
                            array_push($arr_session_id_online,$ar_line[0]);
                        }
                        $date=date('m/Y', $ar_line[1]);
                        if(array_key_exists($date,$arr_time_session_id)){
                            if(!in_array($ar_line[0], $arr_time_session_id[$date])){
                                array_push($arr_time_session_id[$date],$ar_line[0]);
                            }
                        }else{
                            $arr_temp=array($ar_line[0]);
                            $arr_time_session_id[$date]=$arr_temp;
                        }
                    }
                }
            }
            $sl_truycap=array(count($arr_session_id),count($arr_session_id_online));
            $labelChart=array_keys($arr_time_session_id);
            $data_session_id=array_values($arr_time_session_id);
            $dataChart=array();
            foreach($data_session_id as $data){
                array_push($dataChart,count($data));
            }
            $this->view("layout_admin",[
                "Page"=>"thongtin_taikhoan",
                "sl_taikhoan"=>$sl_taikhoan[0]["total"],
                "sl_truycap"=>$sl_truycap,
                "labelChart"=>json_encode($labelChart),
                "dataChart"=>json_encode($dataChart)
            ]);
        } else {
            $this->view("pages/admin/login");
        }
    }
    function index2(){
        if(isset($_SESSION['admin'])){
            $md = $this->model("DScauhoiModel");
            $sl_taikhoan = $md->LaySlDSCauHoi();
            $tongbaithi = $md->slBaiThi();
            $sl_truycap=array();
            $arr_session_id=array();
            $arr_session_id_online=array();
            $arr_time_session_id=array();
            if(is_writable("counter.log")){
                $ar_rows = file("counter.log", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
                $nrrows = count($ar_rows);
                if($nrrows>0) {
                    for($i=0; $i<$nrrows; $i++){
                        $ar_line = explode(",", $ar_rows[$i]);
                        if(!in_array($ar_line[0], $arr_session_id)){
                            array_push($arr_session_id,$ar_line[0]);
                        }
                        if(!in_array($ar_line[0], $arr_session_id_online)&&(time()-$ar_line[1])<TIME_ONLINE){
                            array_push($arr_session_id_online,$ar_line[0]);
                        }
                        $date=date('m/Y', $ar_line[1]);
                        if(array_key_exists($date,$arr_time_session_id)){
                            if(!in_array($ar_line[0], $arr_time_session_id[$date])){
                                array_push($arr_time_session_id[$date],$ar_line[0]);
                            }
                        }else{
                            $arr_temp=array($ar_line[0]);
                            $arr_time_session_id[$date]=$arr_temp;
                        }
                    }
                }
            }
            $sl_truycap=array(count($arr_session_id),count($arr_session_id_online));
            $labelChart=array_keys($arr_time_session_id);
            $data_session_id=array_values($arr_time_session_id);
            $dataChart=array();
            foreach($data_session_id as $data){
                array_push($dataChart,count($data));
            }
            $this->view("layout_admin",[
                "Page"=>"thongtin_baithi",
                "sl_taikhoan"=>$sl_taikhoan[0]["total"],
                "sl_truycap"=>$sl_truycap,
                "tong_diem"=>$tongbaithi[0]["total"],
                "labelChart"=>json_encode($labelChart),
                "dataChart"=>json_encode($dataChart)
            ]);
        } else {
            $this->view("pages/admin/login");
        }
    }
    function login(){
        if(isset($_POST["btnSubmit"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $md = $this->model("adminModel");
            $data = $md->getAdminByUsername($username);
            if($data){
                if($data["password"]==$password){
                    $_SESSION['admin'] = $data;
                    if(isset($_SESSION['admin'])){
                        header("Location:".INDEX_URL."admin");
                    }
                } else {
                    $this->view("pages/layout_admin.php", [
                        "Error"=>"Username hoặc password không đúng."]);
                }
            } else {
                $this->view("pages/admin/login", [
                    "Error"=>"Username hoặc password không đúng."
                ]);
            }
        }else{
            $this->view("pages/admin/login");
        }
    }
    function setting(){
        if(isset($_POST["btnSubmit"])){
            $username = $_SESSION["admin"]["username"];
            $password = $_SESSION["admin"]["password"];
            $md = $this->model("adminModel");
            $result = $md->suaAdmin($username,$password);
            $admin = $md->getAdminByUsername($username);
            if($result==1){
                $_SESSION['admin'] = $admin;
                header("Location:".INDEX_URL."admin");
            }else{
                $this->view("layout_admin",[
                    "Page"=>"setting",
                    "admin"=>$admin,
                    "Message"=>$result
                ]);
            }
        }else{
            $username = $_SESSION["admin"]["username"];
            $md = $this->model("adminModel");
            $result = $md->getAdminByUsername($username);
            $this->view("layout_admin",[
                "Page"=>"setting",
                "admin"=>$result
            ]);
        }
    }
    function logout(){
        session_unset();
		session_destroy();
        header("Location:".INDEX_URL."admin");
    }
    #endregion
    #region Xử lý sinh viên
    function themtaikhoan(){
        if(isset($_POST["btnSubmit"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $md = $this->model("taiKhoanModel");
            $result = $md->themTaiKhoan($username, $password);
            if($result==1){
                header("Location:".INDEX_URL."admin/themtaikhoan");
            }else{
                $this->view("layout_admin",[
                    "Page"=>"them_tai_khoan",
                    "Message"=>$result,
                ]);
            }
        }else{
            $this->view("layout_admin",[
                "Page"=>"them_tai_khoan",
            ]);
        }
    }
    function themDStaikhoan(){
        if(isset($_POST["btnSubmit"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $md = $this->model("taiKhoanModel");
            $result = $md->themTaiKhoan($username, $password);
            if($result==1){
                header("Location:".INDEX_URL."admin/themDStaikhoan");
            }else{
                $this->view("layout_admin",[
                    "Page"=>"them_tai_khoan",
                    "Message"=>$result,
                ]);
            }
        }else{
            $this->view("layout_admin",[
                "Page"=>"them_tai_khoan",
            ]);
        }
    }
    function danhsachTaiKhoan($ma_lophocphan=null){
        if(isset($ma_lophocphan)){
            $md = $this->model("ChitietLophocphanModel");
            $result = $md->layDanhsachSinhvienCuaLophocphan($ma_lophocphan);
            $this->view("layout_admin",[
                "Page"=>"lhp_dsTaiKhoan",
                "Danhsach"=>$result
            ]);
        }else {
            $md = $this->model("taiKhoanModel");
            $result = $md->layDanhSachTaiKhoan();
            $this->view("layout_admin",[
                "Page"=>"danh_sach_tai_khoan",
                "Danhsach"=>$result
            ]);
        }
    }
    function lichsu(){
            $md = $this->model("DScauhoiModel");
            $result = $md->BaiThi();
            $this->view("layout_admin",[
                "Page"=>"lichsu",
                "Danhsach"=>$result
            ]);
        
    }
    function suataikhoan(){
        if(isset($_POST["btnSubmit"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $md = $this->model("taiKhoanModel");
            $result = $md->suaTaiKhoan($username,$password);
            if($result==1){
                header("Location:".INDEX_URL."admin/danhsachTaiKhoan");
            }else{
                $this->view("layout_admin",[
                    "Page"=>"sua_tai_khoan",
                    "Message"=>$result
                ]);
            }
        }else if(isset($_GET["username"])){
                $username = $_GET["username"];
                $md = $this->model("taiKhoanModel");
                $result = $md->layTaiKhoan($username);
                $this->view("layout_admin",[
                    "Page"=>"sua_tai_khoan",
                    "taikhoan"=>$result
                ]);
        }
        else{
            header("Location:".INDEX_URL."admin/danhsachTaiKhoan");
        }
    }
    function xoataikhoan(){
        if(isset($_GET["username"])){
            $username = $_GET["username"];
            $md = $this->model("taiKhoanModel");
            $result = $md->xoataikhoan($username);
            
            if($result==1){
                header("Location:".INDEX_URL."admin/danhsachsinhvien");
            }else{
                $md = $this->model("SinhvienModel");
                $dstaikhoan = $md->layDanhsachTaiKhoan();
                $this->view("layout_admin",[
                    "Page"=>"danh_sach_tai_khoan",
                    "Danhsach"=>$dstaikhoan,
                    "Message"=>$result
                ]);
            }
        }else{
            header("Location:".INDEX_URL."admin/danhsachTaiKhoan");
        }
    }
    function xoadanhsachTaiKhoan(){
        if(isset($_POST["btnSubmitXoaSV"])){
            $dsTaiKhoan = json_decode($_POST["ds_mssv_hidden"],TRUE);
            $md = $this->model("taiKhoanModel");
            foreach($dsTaiKhoan as $taikhoan){
                $result1 = $md->xoaTaiKhoan($taikhoan);
            }
            if($result1==1){
                header("Location:".INDEX_URL."admin/danhsachTaiKhoan");
            }else{
                $md = $this->model("taiKhoanModel");
                $result = $md->layDanhSachTaiKhoan();
                $this->view("layout_admin",[
                    "Page"=>"danh_sach_tai_khoan",
                    "Danhsach"=>$result,
                    "Message"=>$result1
                ]);
            }
        }else{
            header("Location:".INDEX_URL."admin/danhsachTaiKhoan");
        }

    }
    //DS CAUHOI
    function danhsachCauHoi($ma_lophocphan=null){
        if(isset($ma_lophocphan)){
            $md = $this->model("ChitietLophocphanModel");
            $result = $md->layDanhsachSinhvienCuaLophocphan($ma_lophocphan);
            $this->view("layout_admin",[
                "Page"=>"lhp_dsCauHoi",
                "Danhsach"=>$result
            ]);
        }else {
            $md = $this->model("DScauhoiModel");
            $result = $md->layDanhSachCauHoi();
            $this->view("layout_admin",[
                "Page"=>"danh_sach_cau_hoi",
                "Danhsach"=>$result
            ]);
        }
    }
    function xoaDScauhoi(){
        if(isset($_GET["id"])){
            $id = $_GET["id"];
            $md = $this->model("DScauhoiModel");
            $result = $md->xoaDSCauHoi($id);
            if($result==1){
                header("Location:".INDEX_URL."admin/danhsachCauHoi");
            }else{
                $md = $this->model("DScauhoiModel");
                $dscauhoi = $md->layDSCauHoi();
                $this->view("layout_admin",[
                    "Page"=>"danh_sach_cau_hoi",
                    "Danhsach"=>$dscauhoi,
                    "Message"=>$result
                ]);
            }
        }else{
            header("Location:".INDEX_URL."admin/danhsachCauHoi");
        }
    }
    //tổng danh sách
    function xoadanhsachCauHoi(){
        if(isset($_POST["btnSubmitXoaSV"])){
            $dscauhoi = json_decode($_POST["ds_mssv_hidden"],TRUE);
            $md = $this->model("DScauhoiModel");
            foreach($dscauhoi as $ds){
                $result1 = $md->xoaDSCauHoi($ds);
            }
            if($result1==1){
                header("Location:".INDEX_URL."admin/danhsachCauHoi");
            }else{
                $md = $this->model("DScauhoiModel");
                $result = $md->layDSCauHoi();
                $this->view("layout_admin",[
                    "Page"=>"danh_sach_cau_hoi",
                    "Danhsach"=>$result,
                    "Message"=>$result1
                ]);
            }
        }else{
            header("Location:".INDEX_URL."admin/danhsachCauHoi");
        }

    }
    function themDScauhoi(){
        if(isset($_POST["btnSubmit"])){
            $id = $_POST["id"];
            $tenbaithi = $_POST["ten_baithi"];
            $capdo= $_POST["capdo"];
            $md = $this->model("DScauhoiModel");
            $result = $md->themDanhSachCauHoi($id,$tenbaithi,$capdo);
            if($result==1){
                header("Location:".INDEX_URL."admin/themDScauhoi");
            }else{
                $this->view("layout_admin",[
                    "Page"=>"them_danh_sach_ch",
                    "Message"=>$result,
                ]);
            }
        }
        else{
            $this->view("layout_admin",[
                "Page"=>"them_danh_sach_ch",
            ]);
        }
    }
    function suaDScauhoi(){
        if(isset($_POST["btnSubmit"])){
            $id = $_POST["id"];
            $tenbaithi = $_POST["ten_baithi"];
            $capdo = $_POST["capdo"];
            $ngaytao =$_POST["ngay_tao"];
            $trangthai =$_POST["trangthai"];
            $md = $this->model("DScauhoiModel");
            $result = $md->suaDSCauHoi($id,$tenbaithi,$capdo,$ngaytao,$trangthai);
            if($result==1){
                header("Location:".INDEX_URL."admin/danhsachCauHoi");
            }else{
                $this->view("layout_admin",[
                    "Page"=>"sua_DS_cau_hoi",
                    "Message"=>$result
                ]);
            }
        }else if(isset($_GET["id"])){
                $id = $_GET["id"];
                $md = $this->model("DScauhoiModel");
                $result = $md->layDSCauHoi($id);
                $this->view("layout_admin",[
                    "Page"=>"sua_DS_cau_hoi",
                    "dscauhoi"=>$result
                ]);
        }
        else{
            header("Location:".INDEX_URL."admin/danhsachCauHoi");
        }
    }
    //CÂU HỎI 
    function CauHoi(){
        $id = $_GET["id"];
        $md = $this->model("cauhoiModel");
        $result = $md->layallCauHoi($id);
        $this->view("layout_admin",[
            "Page"=>"cau_hoi",
            "Danhsach"=>$result
        ]);
    }
    function themcauhoi(){
        if(isset($_GET["btnSubmit"])){
            $id = $_GET["id"];
            $macauhoi = $_GET["macauhoi"];
            $cauhoi= $_GET["cauhoi"];
            $lca = $_GET["luachon_a"];
            $lcb = $_GET["luachon_b"];
            $lcc = $_GET["luachon_c"];
            $lcd = $_GET["luachon_d"];
            $dad = $_GET["dapan_dung"];
            $md = $this->model("cauhoiModel");
            $result = $md->themCauHoi($id,$macauhoi,$cauhoi,$lca,$lcb,$lcc,$lcd,$dad);
            if($result==1){
                header("Location:".INDEX_URL."admin/themcauhoi?id= $id ");
            }else{
                $this->view("layout_admin",[
                    "Page"=>"them_cau_hoi",
                    "Message"=>$result,
                ]);
            }
        }
        else{
            $this->view("layout_admin",[
                "Page"=>"them_cau_hoi",
            ]);
        }
       
    }
    function xemDSCauHoi(){
        if(isset($_POST["btnSubmit-xem"])){
            {
                $md = $this->model("cauhoiModel");
                $result = $md->laycauhoi();
                $this->view("layout_admin",[
                    "Page"=>"cau_hoi",
                    "Danhsach"=>$result
                ]);
            }
        }else{
            header("Location:".INDEX_URL."admin/danhsachCauHoi");
        }

    }
    function xoaCauHoi(){
        $id = $_GET["btnSubmitXoaSV"];
        if(isset($_GET["btnSubmitXoaSV"])){
            $cauhoi = json_decode($_GET["ds_mssv_hidden"],TRUE);
            $md = $this->model("cauhoiModel");
            foreach($cauhoi as $ds){
                $result1 = $md->xoaCauHoi($ds);
            }
            if($result1==1){
                header("Location:".INDEX_URL."admin/CauHoi?id=$id");
            }else{
                $md = $this->model("cauhoiModel");
                $result = $md->layallCauHoi($id);
                $this->view("layout_admin",[
                    "Page"=>"cau_hoi",
                    "Danhsach"=>$result,
                    "Message"=>$result1
                ]);
            }
        }else{
            header("Location:".INDEX_URL."admin/CauHoi");
        }
    }
    function suaCauHoi(){
        if(isset($_GET["btnSubmit"])){
            $id = $_GET["id"];
            $macauhoi = $_GET["macauhoi"];
            $cauhoi = $_GET["cauhoi"];
            $lca =$_GET["luachon_a"];
            $lcb =$_GET["luachon_b"];
            $lcc =$_GET["luachon_c"];
            $lcd =$_GET["luachon_d"];
            $dad =$_GET["dapan_dung"];
            $md = $this->model("cauhoiModel");
            $result = $md->suaCauHoi($id,$macauhoi,$cauhoi,$lca,$lcb,$lcc,$lcd,$dad);
            if($result==1){
                header("Location:".INDEX_URL."admin/CauHoi?id=$id");
            }else{
                $this->view("layout_admin",[
                    "Page"=>"sua_cau_hoi",
                    "Message"=>$result
                ]);
            }
        }else if(isset($_GET["macauhoi"])){
                $id = $_GET["macauhoi"];
                $md = $this->model("cauhoiModel");
                $result = $md->layCauHoi($id);
                $this->view("layout_admin",[
                    "Page"=>"sua_cau_hoi",
                    "dscauhoi"=>$result
                ]);
        }
        else{
            header("Location:".INDEX_URL."admin/CauHoi");
        }
    }

    #endregion
}
?>