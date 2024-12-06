<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="admin">HOME</a>
        </li>
        <li class="breadcrumb-item">
            <a href="admin/danhsachTaiKhoan">Quản lý Tài Khoản</a>
        </li>
        <li class="breadcrumb-item">
            Danh sách Tài Khoản
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
    <form action="admin/xoadanhsachTaiKhoan" method="post" id="formXoaSinhvien">
        <div class="row form-group">
            <div class="col text-center">
                <a class="btn btn-primary mt-1" href="admin/themTaiKhoan">Thêm Danh Sách Tài Khoản</a>
                <input disabled class="btn btn-primary button mt-1" name="btnSubmitXoaSV" id="btnSubmitXoaSV" value="Xóa tài khoản" data-toggle="modal" data-target="#exampleModalCenter">
                <input type="hidden" name="ds_mssv_hidden" id="ds_mssv_hidden" value="[]">
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
                Danh sách tài khoản
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="sinhvienTable" class="table table-hover table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class='text-center'><input type="checkbox" name="checkAllSV" id="checkAllSV"></th>
                                <th class='text-center'>STT</th>
                                <th>Username</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $dsTaiKhoan = $data["Danhsach"];
                                $i=1;
                                foreach($dsTaiKhoan as $taikhoan){
                                    echo "<tr>";
                                    echo "<th class='text-center'><input type='checkbox' class='checkItemSV' value='{$taikhoan['username']}'></th>";
                                    echo "<th class='text-center'>{$i}</th>";
                                    $i++;
                                    echo "<td>";
                                    echo "<a href='admin/suataikhoan?username={$taikhoan['username']}'>{$taikhoan['username']}</a>";
                                    echo "</td>";
                                    echo "<td>{$taikhoan['password']}</td>";
                                   
                                    echo "</tr>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
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
            <div class="modal-body" id="modalBodyXoaSV1">
                 <?php
                    echo "Bạn có chắc muốn xóa tài khoản ";
                    $dsTaiKhoan = $data["Danhsach"];
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