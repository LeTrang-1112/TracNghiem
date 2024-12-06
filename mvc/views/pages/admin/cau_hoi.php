<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="admin">HOME</a>
        </li>
        <li class="breadcrumb-item">
            <a href="admin/danhsachCauHoi">Danh Sách Câu Hỏi</a>
        </li>
        <li class="breadcrumb-item">
        Danh Sách Câu Hỏi      
    </li>
    </ol>
    <?php
        if(isset($data['Message'])){
            echo "<div class='alert alert-danger'>";
            echo "<i class='fas fa-exclamation-triangle'></i>";
            echo "{$data['Message']}";
            echo "</div>";
        }
        $id = $_GET["id"];
        $md = $this->model("cauhoiModel");
        $result = $md->id($id);
    ?>
  
    <form action="admin/xoaCauHoi?id=<?php echo $id ?>" method="GET" id="formXoaSinhvien">
    <div class="row form-group">
            <div class="col text-center">
                <a class="btn btn-primary mt-1" href="admin/themcauhoi?id=<?php echo $id ?>">Thêm Câu Hỏi</a>
                <input disabled class="btn btn-primary button mt-1" name="btnSubmitXoaSV" id="btnSubmitXoaSV" placeholder="Xóa Câu Hỏi"  value="<?php echo $id;?>"  data-toggle="modal" data-target="#exampleModalCenter">
                <input type="hidden" name="ds_mssv_hidden" id="ds_mssv_hidden" value="[]">
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Danh sách Câu Hỏi
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="sinhvienTable" class="table table-hover table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class='text-center'><input type="checkbox" name="checkAllSV" id="checkAllSV"></th>
                                <th class='text-center'>STT</th>
                                <th>ID</th>
                                <th>Mã Số Câu Hỏi</th>
                                <th>Câu Hỏi</th>
                                <th>Lựa Chọn a</th>
                                <th>Lựa Chọn b</th>
                                <th>Lựa Chọn c</th>
                                <th>Lựa Chọn d</th>
                                <th>Đáp Án Đúng</th>
                                <th>TT</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $CauHoi = $data["Danhsach"];
                                $i=1;
                                foreach($CauHoi as $ds){
                                    echo "<tr>";
                                    echo "<th class='text-center'><input type='checkbox' class='checkItemSV' value='{$ds['macauhoi']}'></th>";
                                    echo "<th class='text-center'>{$i}</th>";
                                    $i++;
                                    echo "<td>{$ds['id']}</td>";
                                    echo "<td>{$ds['macauhoi']}</td>";
                                    echo "<td>{$ds['cauhoi']}</td>";
                                    echo "<td>{$ds['luachon_a']}</td>";
                                    echo "<td>{$ds['luachon_b']}</td>";
                                    echo "<td>{$ds['luachon_c']}</td>";
                                    echo "<td>{$ds['luachon_d']}</td>";
                                    echo "<td>{$ds['dapan_dung']}</td>";
                                    echo "<td>";
                                    ?>
                                    <div class="row form-group">
                                        <div class="col text-right">
                                        <a href="admin/suaCauHoi?macauhoi=<?php echo $ds['macauhoi']; ?>" class="btn btn-outline-primary">Sửa</a>
                                       </div>
                                   </div>
                                  </td>
                                   </tr>
                                   <?php
                               }
                           ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </form>  
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Xác nhận</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="modalBodyXoaSV1">
                 <?php
                    echo "Bạn có chắc muốn xóa danh sách";
                ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                <button class='btn btn-primary' id="modalSubmitXoa">Xóa</button>
            </div>
            
            </div>
        </div>
    </div>  
</div>