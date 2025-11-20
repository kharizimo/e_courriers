<?php 
$cRecu=$cn->query("SELECT COUNT(*) c FROM courrier")->fetch(PDO::FETCH_NUM)[0];
$cEnvoye=$cn->query("SELECT COUNT(*) c FROM courrier")->fetch(PDO::FETCH_NUM)[0];
$cEnCours=$cn->query("SELECT COUNT(*) c FROM courrier")->fetch(PDO::FETCH_NUM)[0];
$cCloture=$cn->query("SELECT COUNT(*) c FROM courrier")->fetch(PDO::FETCH_NUM)[0];
?>
<div class="row">
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Courriers reçus</span>
        <span class="info-box-number"><?= $cRecu ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Courriers envoyés</span>
        <span class="info-box-number"><?= $cEnvoye ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Courriers en cours</span>
        <span class="info-box-number"><?= $cEnCours ?></span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-3">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>
      <div class="info-box-content">
        <span class="info-box-text">Courriers cloturés</span>
        <span class="info-box-number"><?= $cCloture ?></span>
      </div>
    </div>
  </div>
</div>

<h2 class="text-center display-4 mt-5">Recherche</h2>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <form action="search">
            <div class="input-group">
              <input type="hidden" name="_a" value="tout">
                <input type="search" name="_q" class="form-control form-control-lg" placeholder="Tapez votre mot-clé . . .">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-lg btn-default">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php 
$title='Accueil'
?>