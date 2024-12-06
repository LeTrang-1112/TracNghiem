<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
        <a href="admin/danhsachCauHoi">Bài Thi</a>
        </li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-header">
                    <i class="fas fa-book-open"></i>
                    Số lượng bài thi
                </div>
                <div class="card-body"><strong>Tổng số bài thi là <?php echo $data["sl_taikhoan"];?></strong></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="admin/danhsachCauHoi">Xem chi tiết</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-header">
                    <i class="fas fa-book-open"></i>
                    Bài thi đã hoàn thành
                </div>
                <div class="card-body"><strong>Tổng bài thi đã hoàn thành là <?php echo $data["tong_diem"];?></strong></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="admin/lichsu">Xem chi tiết</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    
    
</div>