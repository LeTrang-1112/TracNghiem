<?php
class trangchu extends Controller{
    protected $taikhoanModel;

    function __construct(){
        $this->taikhoanModel = $this->model("taikhoanModel");
    }
    function index(){
        
        $limit = 4;
        $taikhoan = $this->taikhoanModel->layDanhSachTaiKhoan();
        $this->view("layout",[
            "Page"=>"trang_chu",
            "taikhoan"=>$taikhoan
        ]);
    }
    function login(){
        if(isset($_POST["btnSubmit"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            $md = $this->model("taiKhoanModel");
            $data = $md->kiemTraTaiKhoan($username);
            if($data){
                if($data["password"]==$password){
                    $_SESSION['tai_khoan'] = $data;
                    if(isset($_SESSION['tai_khoan'])){
                        header("Location:".INDEX_URL."");
                    }
                } else {
                    $this->view("layout",[
                        "Page"=>"logintk",
                        "Error"=>"Username hoặc password không đúng."]);
                    
                }
            } else {
                $this->view("layout",[
                    "Page"=>"logintk",
                    "Error"=>"Username hoặc password không đúng."]);
                
            }
        }else{
            $this->view("layout",[
                "Page"=>"logintk"
                ]);        }
    }
        function CauHoith(){
            $md = $this->model("DScauhoiModel");
            $result = $md->LayDanhSachCauHoi();
            $this->view("layout",[
                "Page"=>"baithi",
                "Danhsach"=>$result
            ]);
        }
        function CauHoics(){
            $md = $this->model("DScauhoiModel");
            $result = $md->LayDanhSachCauHoi();
            $this->view("layout",[
                "Page"=>"baithi_th",
                "Danhsach"=>$result
            ]);
        }
        function CauHoipt(){
            $md = $this->model("DScauhoiModel");
            $result = $md->LayDanhSachCauHoi();
            $this->view("layout",[
                "Page"=>"baithi_thpt",
                "Danhsach"=>$result
            ]);
        }
        function CauHoihk(){
           
            $this->view("layout",[
                "Page"=>"baithihocky",
            ]);
        }
        function CauHoiqg(){
           
            $this->view("layout",[
                "Page"=>"baithithptqg",
            ]);
        }
        function CauHoikt(){
           
            $this->view("layout",[
                "Page"=>"baithikt",
            ]);
        }
        function lamBaiThi(){
            if(isset($_SESSION['tai_khoan']))
        {
            $username= $_SESSION['tai_khoan']['username'];
            $id = $_GET["id"];
            $md1=$this->model("DScauhoiModel");
            $result1=$md1->BaiThi();
            foreach($result1 as $bt)
            {
                if($bt['username_tk']==$username && $bt['id_baithi']==$id)
                {
                    $result2=$md1->layBaiThi($username,$id);
                    $this->view("layout",[
                        "Page"=>"diemthi",
                        "tong"=>$result2
                    ]);
                }
            }

            $md = $this->model("cauhoiModel");
            $result = $md->layallCauHoi($id);
            $this->view("layout",[
                "Page"=>"trac_nghiem",
                "Danhsach"=>$result
            ]);
        }
        else {
            $this->view("layout",[
                "Page"=>"logintk"
                ]);
        }
        }
        function tinhDiem(){  
            $md = $this->model("cauhoiModel");
            $result = $md->CauHoi();
            $tong=0;
            $id;
            $i=0;
            $j=0;
            foreach($result as $in)
            {
              if(isset($_GET[$in["macauhoi"]])){
                if( $_GET[$in["macauhoi"]]==$in['dapan_dung'])
                {
                $i++;}
                $id=$in['id'];
                $j++;
                }
            }
            $tenbaithi;
            $md1=$this->model("DScauhoiModel");
            $name=$md1->LayDSCauHoi($id);
            $tenbaithi=$name['ten_baithi'];
            $one =10/$j;
            $tong=$one*$i;
            $username= $_SESSION['tai_khoan']['username'];
            $md1=$this->model("DScauhoiModel");
            $result1=$md1->themBaiThi($username,$id,$tenbaithi,$tong);
            $result2=$md1->layBaiThi($username,$id);
            $this->view("layout",[
                "Page"=>"diemthi",
                "tong"=>$result2
            ]);
            
    }
    function logout(){
        session_unset();
		session_destroy();
        header("Location:".INDEX_URL."trangchu");
    }
    function setting(){
        if(isset($_SESSION['tai_khoan']))
        {
            $username = $_SESSION["tai_khoan"]["username"];
            $md = $this->model("taiKhoanModel");
            $result = $md->layTaiKhoan($username);
            $this->view("layout",[
                "Page"=>"setting",
                "taikhoan"=>$result
            ]);
        }
        else {
            $this->view("layout",[
                "Page"=>"logintk"
                ]);
        }
    }
    function lichSuThi(){
        if(isset($_SESSION['tai_khoan']))
        {
        $username= $_SESSION['tai_khoan']['username'];
        $md1=$this->model("DScauhoiModel");
        $result1=$md1->lichSuThi($username);
        $this->view("layout",[
            "Page"=>"lichsuthi",
            "baithi"=>$result1
        ]);
         }
    else {
        $this->view("layout",[
            "Page"=>"logintk"
            ]);
    }
    }
    function dangnhap(){
        if(isset($_SESSION['tai_khoan']))
        {
        $this->logout();
        $this->view("layout",[
            "Page"=>"logintk"
            ]);
         }
    else {
        $this->view("layout",[
            "Page"=>"logintk"
        ]);
    }
    }
    function about()
    {
        $this->view("layout",[
            "Page"=>"abouts"
        ]);
    }
    function doimatkhau1(){
        $md1=$this->model("taiKhoanModel");
        $result1=$md1->layTaiKhoan($username);
        $this->view("layout",[
            "Page"=>"doimatkhau",
            "taikhoan"=>$result1
        ]);
    }
    function doimatkhau_tk(){
        
        if(isset($_POST["btnSubmit"])){
            $password = $_POST["password"];
            $password_cf=$_POST["cf_password"];
            $username= $_SESSION['tai_khoan']['username'];
            if($password!=$password_cf){
                    $this->view("layout",[
                        "Page"=>"doimatkhau",
                        "Error"=>"Password không đúng. Vui lòng nhập lại mật khẩu"]);
            } else {

                $md = $this->model("taiKhoanModel");
                $result=$md->suaTaiKhoan($username,$password);
                $result1 = $md->layTaiKhoan($username);
                $this->view("layout",[
                    "Page"=>"setting",
                    "taikhoan"=>$result1
                   ]);
                
            }
        }else{
            $this->view("pages/trangchu/doimatkhau");
        }
    }
    function dangky(){
        if(isset($_POST["btnSubmit"])){
            $password = $_POST["password"];
            $password_cf=$_POST["cf_password"];
            $username=$_POST["username"];
            $md = $this->model("taiKhoanModel");
            if($password!=$password_cf||$password==NULL||$password_cf==NULL){
                    $this->view("layout",[
                        "Page"=>"dangky",
                        "Error"=>"Password không đúng. Vui lòng nhập lại mật khẩu"]);
            } else {
                $result = $md->themTaiKhoan($username, $password);
                if($result==1){
                    $this->view("layout",[
                        "Page"=>"logintk"
                    ]);
                }else{
                    $this->view("layout",[
                        "Page"=>"dangky",
                        "Message"=>$result
                    ]);
                }
            }
        }else{
            $this->view("layout",[
                "Page"=>"dangky",
            ]);
        }
      
    }
    
}
?>