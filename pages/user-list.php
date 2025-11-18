<?php 
$rows=$cn->query("select * from user u join service s on u.service_id=s.id")->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="row"><div class="col">
    <div class="card">
        <div class="card-header">
            <div class="card-title"><select name="" id="" class="form-control">
                <option value="SG">SG</option>
            </select></div>
            <div class="card-tools"><a href="" class="btn btn-primary">Ajouter</a></div>
        </div>
        <div class="card-body p-0">
            <table class="table">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Date creation</th>
                <th>Dernière édition</th>
                <th width="1%"></th>
            </tr>
            <?php foreach($rows as $r):?>
            <tr>
              <td><?= $r['nom']?></td>
              <td><?= $r['email']?></td>
              <td><?= $r['create_at']?></td>
              <td><?= $r['update_at']?></td>
              <td><div class="btn-group">
                <button class="btn btn-sm btn-default"><span class="fa fa-eye"></span></button>
                <button class="btn btn-sm btn-default"><span class="fa fa-times"></span></button>
              </div></td>
            </tr>
            <?php endforeach?>
            </table>
        </div>
    </div>
</div></div>