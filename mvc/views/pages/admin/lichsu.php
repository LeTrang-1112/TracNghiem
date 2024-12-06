<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="admin">HOME</a>
        </li>
        <li class="breadcrumb-item">
            <a href="admin/danhsachCauHoi">Danh Sách Bài Thi</a>
        </li>
        <li class="breadcrumb-item">
        Danh Sách Bài Thi       
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
    <form action="admin/xoadanhsachCauHoi" method="post" id="formXoaSinhvien">
       
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table mr-1"></i>
               Lịch Sử Bài Thi
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="sinhvienTable" class="table table-hover table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th class='text-center'>STT</th>
                                <th>Tên Thí Sinh</th>
                                <th>ID Bài Thi</th>
                                <th>Tên Bài Thi</th>
                                <th>Tổng Điểm</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $dsCauHoi = $data["Danhsach"];
                                $i=1;
                                foreach($dsCauHoi as $ds){
                                    echo "<tr>";
                                    echo "<th class='text-center'>{$i}</th>";
                                    $i++;
                                    echo "<td>{$ds['username_tk']}</td>";
                                    echo "<td>{$ds['tenbaithi']}</td>";
                                    echo "<td>{$ds['id_baithi']}</td>";
                                    echo "<td>{$ds['diemthi']}</td>";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            
        </div>
    </form>  
                            </div>