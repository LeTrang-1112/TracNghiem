<?php
class TaiKhoan extends Controller{
    protected $taikhoanModel;
    

    function __construct(){
        $this->taikhoanModel = $this->model("taiKhoanModel");
    }
    

}
?>