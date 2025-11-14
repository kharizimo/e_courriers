<?php 
$user_block_display=!isset($_SESSION["user-id"])?'d-none':'';
?>
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">
              <a style="color: inherit;" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              <?=$title?>
            </h1>
          </div>
          <?php if(isset($_SESSION['user-id'])):?>
          <div class="col-sm-6">
            <ul class="breadcrumb float-sm-right">
              <li class="breadcrumb-item text-bold text-info">
                <span class="fa fa-users"></span> <?= $user->service_lib??'' ?>
              </li>
              <li class="breadcrumb-item">
                <a href="/profile"><span class="fa fa-user"></span> <?= $user->nom??'' ?></a> |
                <a href="/logout"><span class="fa fa-power-off text-danger"></span></a>
              </li>
            </ol>
          </div>
          <?php endif?>
        </div>
      </div>
    </div>