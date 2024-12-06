<div class="container-fluid">

    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="admin">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="admin/CauHoi?id=<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["id"];}?>">Danh Sách Câu Hỏi</a>
        </li>
        <li class="breadcrumb-item">
            Sửa Câu Hỏi
        </li>
    </ol>
    
    <form action="admin/suaCauHoi" method="GET" class="form-horizontal">
        <div class="row form-group">
            <label class="col-sm-2 control-label">ID</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="id" name="id" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["id"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">MÃ CÂU HỎI</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="macauhoi" name="macauhoi" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["macauhoi"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">CÂU HỎI</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="cauhoi" name="cauhoi" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["cauhoi"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">ĐÁP ÁN A</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="luachon_a" name="luachon_a" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["luachon_a"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">ĐÁP ÁN B</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="luachon_b" name="luachon_b" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["luachon_b"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">ĐÁP ÁN C</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="luachon_c" name="luachon_c" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["luachon_c"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label class="col-sm-2 control-label">ĐÁP ÁN D</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="luachon_d" name="luachon_d" value="<?php if(!empty($data["dscauhoi"])){echo $data["dscauhoi"]["luachon_d"];}?>">
            </div>
        </div>
        <div class="row form-group">
            <label for="capdo" class="col-sm-2 control-label">ĐÁP ÁN ĐÚNG</label>
            <div class="col-md-10">
                <input type="radio"  name="dapan_dung" class="luachon_a"  value="A">
                <label for="luachon_a">Đáp Án A</label>
                <input type="radio"  name="dapan_dung" class="luachon_b"   value="B">
                <label for="luachon_b">Đáp Án B</label>  
                <input type="radio"  name="dapan_dung" class="luachon_c"   value="C">
                <label for="luachon_c">Đáp Án C</label>
                <input type="radio"  name="dapan_dung" class="luachon_d"   value="D">
                <label for="luachon_d">Đáp Án D</label>
            </div>
        </div>
        
        <div class="row form-group">
            <div class="col text-right">
                <button type="submit" class="btn btn-primary" name="btnSubmit">Sửa</button>
                <a href="admin/danhsachCauHoi" class="btn btn-primary">Hủy</a>
            </div>
        </div>
    </form>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php if(!empty($data["cauhoi"])){
                    echo "Bạn có  xóa câu hỏi  ";
                }
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <a class='btn btn-primary' href=<?php if(!empty($data["cauhoi"])){echo "admin/xoacau_hoi?id=".$data["cauhoi"]["macauhoi"];}?>>Xóa</a>
            </div>
            </div>
        </div>
    </div>
</div>