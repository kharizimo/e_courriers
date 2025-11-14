<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">E-Courrier</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent nav-flat flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <?php foreach ($menu as $item):?>
          <li class="nav-item">
            <a href="<?=$item['url']??'#'?>" class="nav-link">
              <i class="nav-icon fas fa-angle-right"></i>
              <p>
                <?=$item['title']?>
                <?=isset($item['children'])?'<i class="right fas fa-angle-left"></i>':''?>
              </p>
            </a>
            <?php 
            if(isset($item['children'])):
              ?>
              <ul class="nav nav-treeview">
                <?php foreach($item['children'] as $item2):?>
                  <li class="nav-item">
                    <a href="<?=$item2['url']?>" class="nav-link">
                      <i class="nav-icon fas fa-angle-right"></i>
                      <p><?=$item2['title']?></p>
                    </a>
                  </li>
                <?php endforeach?>
              </ul>
              <?php 
            endif;
            ?>
          </li>
          <?php endforeach?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>