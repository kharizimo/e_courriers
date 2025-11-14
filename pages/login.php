<?php 
$title="Connexion";
$auth=false;
?>
<div class="row"><div class="col-md-6 m-auto"><div class="card card-body"><form action="engine/user/login">
    <h3 class="text-center">
        <span class="fa fa-user-circle fa-3x"></span><br>
        Connexion
    </h3>
    <div class="form-group">
        <label for="">Email</label>
        <input name="email" type="text" class="form-control">
    </div>
    <div class="form-group">
        <label for="">mot de passe</label>
        <input name="pwd" type="password" class="form-control">
    </div>
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Connexion</button>
    </div>
</form></div></div></div>