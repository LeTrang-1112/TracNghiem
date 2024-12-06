<div class="container-fluid">
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item">
            <a href="gv-admin">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
            Admin
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
    <form action="admin/setting" method="post" class="form-horizontal">
        <div class=" form-group">
            <label class="col-sm-2 control-label">UserName</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="username" name="username" value="<?php if(!empty($data["admin"])){echo $data["admin"]["username"];}?>">
            </div>
        </div>
        <div class=" form-group">
            <label for="" class="col-sm-2 control-label">Password</label>
            <div class="col-md-10">
                <input type="text" readonly class="form-control" id="password" name="password" value="<?php if(!empty($data["admin"])){echo $data["admin"]["password"];}?>">
            </div>
        </div>
        <div class=" form-group text-center">
            <div class="col ">
                <a href="admin" class="btn btn-primary">Quay về Dashboard</a>
            </div>
        </div>
    </form>
</div>