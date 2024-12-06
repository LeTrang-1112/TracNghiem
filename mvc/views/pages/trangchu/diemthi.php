<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0"> </h1>
    </div>
</header>
<?php
        if(isset($data['Message'])){
            echo "<div class='alert alert-danger'>";
            echo "<i class='fas fa-exclamation-triangle'></i>";
            echo "{$data['Message']}";
            echo "</div>";
        }
        ?>
       
<div class="card"  style="margin: 15px;">
    <div class="card-body" style="border: 2px solid #808080; border-radius: 10px;">
    <h2 class="text-center"> Bạn Đã Hoàn Thành Bài Thi</h2>
    <?php
    
    $baithi=$data["tong"];
    foreach($baithi as $bthi)
    {
      
    ?>  
        <h4 class="text-center"><?php echo $bthi['tenbaithi']?> </h4>

      <div class="row text-center" style="border-bottom: 2px solid #808080 ; width:95% ;margin: 15px;">
        <div class="col-sm-7">
                <div >
                  <h4>
                 <i class="fas fa-user"></i> Thí Sinh <?php echo ': '.$bthi['username_tk']?> 
                </h4>
                </div>
        </div>
        <div class="col-sm-5"  >
                <div class=""><h4><?php echo 'Tổng Điểm: '.$bthi['diemthi'];
                ?></h4></div>
        </div>
      </div>   
      <div class="row form-group">
          <div class="col text-right">
              <a href="trangchu/index" class="btn btn-primary">Quay Lại</a>
              <a href="trangchu/lambaithi?id=<?php echo $bthi['id_baithi'];?>" onclick="myFunction()" class="btn btn-primary">Làm Lại Bài Thi</a>
          </div>
      </div>
      <?php }?>
    </div>
    </div>
<script>
  function myFunction() {
    <?php 
    $username= $_SESSION['tai_khoan']['username'];
    $id = $_GET["id"];
    $md1=$this->model("DScauhoiModel");
    $result1=$md1->xoaBaiThi($username,$id);
    ?>
}
</script>
           