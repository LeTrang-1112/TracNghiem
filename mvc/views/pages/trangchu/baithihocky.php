<!DOCTYPE html>
<html lang="en">
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">ĐỀ THI HỌC KỲ</h1>
    </div>
</header>
<style>
  #left_sidebar{
    float:left;
    width: 300px;
}
 
#right_sidebar{
    float:right;
    width: 300px;
}
#content{
  margin: 15px;
} 
</style>
<?php
  $md = $this->model("DScauhoiModel");
  $result = $md->LayDanhSachCauHoi_HK();
  ?>
    <?php
        if(isset($data['Message'])){
            echo "<div class='alert alert-danger'>";
            echo "<i class='fas fa-exclamation-triangle'></i>";
            echo "{$data['Message']}";
            echo "</div>";
        }
        
    ?>  
    <div id="main_content">
        <div id="content">          
          <form action="trangchu/lamBaiThi?id=<?php echo $ds['id'];?>" method="GET">
          <?php
              $i=1;
              foreach($result as $ds){
                if( $ds['trangthai']=='ON'){
              ?>
            <div class="card"  style="margin: 15px;">
              <div class="card-body" style="border: 2px solid #808080; border-radius: 10px;">
              <a href="#"> <h4><?php echo $ds['ten_baithi']?></h4></a>
                <div class="row" style="border-bottom: 2px solid #808080 ; width:95% ;margin: 15px;">
                  <div class="col-sm-3">
                          <div >
                          <p><i class="fas fa-calendar"></i><?php echo ' '.$ds['ngay_tao']?></p>
                          </div>
                  </div>
                  <div class="col-sm-2" >
                          <div class=""> <i class="fas fa-user"></i><?php $sl=$md->tinhSoLuotLamBai($ds['id']);
                          foreach($sl as $dem){
                            echo " ". $dem['sl']." lượt thi";
                          }
                          ?></div>
                  </div>
                </div>   
                <div class="row form-group">
                    <div class="col text-right">
                        <a href="trangchu/lamBaiThi?id=<?php echo $ds['id'];?>" style="margin-right: 50px;" class="btn btn-outline-primary">Làm bài thi</a>
                    </div>
                </div>
              </div>
            </div>
            <?php }
                }?>
          </form>
    </div>
    
</div>
</html>
