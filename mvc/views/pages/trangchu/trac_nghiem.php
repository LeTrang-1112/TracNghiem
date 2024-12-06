
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0"></h1>
    </div>
</header>
<?php
  $id=$_GET['id'];
  $md = $this->model("DScauhoiModel");
  $result = $md->LayDSCauHoi($id);
?>
<?php
        if(isset($data['Message'])){
            echo "<div class='alert alert-danger'>";
            echo "<i class='fas fa-exclamation-triangle'></i>";
            echo "{$data['Message']}";
            echo "</div>";
        }
        
    ?>  
<div class="container">
  <div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading text-center" style="margin: 15px;"><h3><?php echo $result['ten_baithi']?></h3></div>
      <div class="panel-body" >
      <?php
        $cauhoi = $data["Danhsach"];
        $i=1;
        foreach($cauhoi as $ch){
        ?>
        <div class="card"  style="margin: 15px;">
              <div class="card-body" style="border: 2px solid #808080; border-radius: 10px;">
        <h4><?php echo 'Câu '.$i.": ". $ch['cauhoi']?> </h4>
        <fieldset id="group_<?php echo $i;?>">
        <form action="trangchu/tinhDiem?" >
        <input type="radio"  name="<?php echo $ch['macauhoi'];?>" class="luachon_a"  value="A" checked>
        <label for="luachon_a"><?php echo 'A.'.$ch['luachon_a'];?></label><br>
        <input type="radio"  name="<?php echo $ch['macauhoi'];?>" class="luachon_b"   value="B">
        <label for="luachon_b"><?php echo 'B.'.$ch['luachon_b'];?></label><br>  
        <input type="radio"  name="<?php echo $ch['macauhoi'];?>" class="luachon_c"   value="C">
        <label for="luachon_c"><?php echo 'C.'.$ch['luachon_c'];?></label><br>
        <input type="radio"  name="<?php echo $ch['macauhoi'];?>" class="luachon_d"   value="D">
        <label for="luachon_d"><?php echo 'D.'.$ch['luachon_d'];?></label><br>
        </div>
        </div>
        </fieldset>
        <?php $i++; }?>
        <input type="submit" class="btn btn-primary" value="Submit" style="margin: 15px;"> <br>
        </form>       
      </div>
    </div>
  </div>
</div>