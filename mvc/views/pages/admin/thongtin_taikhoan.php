<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">
        <a href="admin">Dashboard</a>
        </li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-header">
                    <i class="fas fa-graduation-cap mr-1"></i>
                    Số lượng tài khoản
                </div>
                <div class="card-body"><strong>Tổng số tài khoản là <?php echo $data["sl_taikhoan"];?></strong></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="admin/danhsachTaiKhoan">Xem chi tiết</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    <div class="row justify-content-center">
        <div class="col-xl-4">
            <div class="card bg-info text-white mb-4">
                <div class="card-header">
                    <i class="fas fa-globe-asia mr-1"></i>
                    Thống kê số lượt truy cập
                </div>
                <div class="card-body">
                <strong>Đang online là <?php echo $data["sl_truycap"][1];?></strong><br>
                <strong>Tổng số lượt truy cập là <?php echo $data["sl_truycap"][0];?></strong>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-chart-area mr-1"></i>
                    Biểu đồ lượt truy cập
                </div>
                <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
            </div>
            <?php
                if(isset($data["labelChart"])){
                    $labelChart=str_replace("\/", "/", $data["labelChart"]);
                }
            ?>
            <input type="hidden" id="labelChart" value=<?=$labelChart?>>
            <input type="hidden" id="dataChart" value=<?php if(isset($data["dataChart"])){echo $data["dataChart"];}?>>
        </div>
    </div>
</div>