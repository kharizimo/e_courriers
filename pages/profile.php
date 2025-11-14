<?php 
$title="Profil";
?>
<div class="row"><div class="col-md-7 m-auto"><div class="card card-body"><form action="">
    <div class="form-group">
        <label for="">Nom</label>
        <input type="text" value="<?= $user->nom ?> " class="form-control">
    </div>
    <div class="form-group">
        <label for="">Email</label>
        <input type="text" value="<?= $user->email ?> " class="form-control">
    </div>
    <div class="form-group">
        <label for="">Mot de passe</label>
        <input type="password" value="<?= $user->pwd ?> " class="form-control">
    </div>
    <div class="form-group">
        <label for="">Confirmation</label>
        <input type="password" value="<?= $user->pwd ?> " class="form-control">
    </div>
    <div class="form-group">
        <label for="">Service</label>
        <input type="text" value="<?= $user->service_lib ?> " class="form-control" disabled>
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-success">Soumettre</button>
    </div>
</form></div></div></div>