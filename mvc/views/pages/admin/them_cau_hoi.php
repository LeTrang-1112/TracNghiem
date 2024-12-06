<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="admin">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            <a href="admin/danhsachCauHoi">Danh sách câu hỏi</a>
        </li>
        <li class="breadcrumb-item">
            Thêm Danh Sách Câu Hỏi
        </li>
    </ol>
    <?php
        if(isset($data['Message'])){
            echo "<div class='alert alert-danger'>";
            echo "<i class='fas fa-exclamation-triangle'></i>";
            echo "{$data['Message']}";
            echo "</div>";
        }
       
    ?>
    <?php
    $id = $_GET["id"];
    ?>
<form id="themsinhvien" action="admin/themcauhoi" method="GET" class="form-horizontal">
       
            <div class="row form-group">
                <label for="id" class="col-sm-2 control-label">ID</label>
                <div class="col-md-10">
                <input type="text"  class="form-control" id="id" name="id" value="<?php echo $id; ?>" placeholder="<?php echo $id; ?>" readonly>
                </div>
            </div>
            <div class="row form-group">
                <label for="macauhoi" class="col-sm-2 control-label">MÃ CÂU HỎI</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="macauhoi" name="macauhoi">
                </div>
            </div>
            <div class="row form-group">
                <label for="password" class="col-sm-2 control-label">CÂU HỎI</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="cauhoi" name="cauhoi">
                </div>
            </div>
            <div class="row form-group">
                <label for="password" class="col-sm-2 control-label">Đáp ÁN A</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="luachon_a" name="luachon_a">
                </div>
            </div>
            <div class="row form-group">
                <label for="password" class="col-sm-2 control-label">Đáp ÁN B</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="luachon_b" name="luachon_b">
                </div>
            </div>
            <div class="row form-group">
                <label for="password" class="col-sm-2 control-label">Đáp ÁN C</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="luachon_c" name="luachon_c">
                </div>
            </div>
            <div class="row form-group">
                <label for="password" class="col-sm-2 control-label">Đáp ÁN D</label>
                <div class="col-md-10">
                    <input type="text" class="form-control" id="luachon_d" name="luachon_d">
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
        </div>
            <div class="row form-group">
                <div class="col text-right">
                    <button type="submit" class="btn btn-primary" name="btnSubmit">Thêm</button>
                    <a href="admin/CauHoi?id=<?php echo $id; ?>" style="background-color: #007bff ; color:white" class="btn btn-outline-primary">Quay Lại</a>
                </div>
            </div>
    </form>
    </div