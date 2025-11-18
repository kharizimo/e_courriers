<?php 
$classeurs=$cn->query("select * from classeur")->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="col-md-4"><div class="card">
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="">Mouvement</label>
                    <select name="" id="" class="form-control form-control-sm">
                        <option>Tout</option>
                        <option>Reçu</option>
                        <option>Envoyé</option>
                    </select>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Chronologie</label>
                    <select name="" id="" class="form-control form-control-sm">
                        <option>Récent</option>
                        <option>Aujourd'hui</option>
                        <option>Ce mois</option>
                        <option>Période</option>
                    </select>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md"><div class="form-group">
                        <label for="">Du</label>
                        <input type="date" name="" id="" class="form-control form-control-sm">
                    </div></div>
                    <div class="col-md"><div class="form-group">
                        <label for="">Au</label>
                        <input type="date" name="" id="" class="form-control form-control-sm">
                    </div></div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="">Etat</label>
                    <select name="" id="" class="form-control form-control-sm">
                        <option>Tout</option>
                        <option>En cours</option>
                        <option>Cloturé</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Classeur</label>
                    <select name="" id="" class="form-control form-control-sm">
                        <?php foreach($classeurs as $r):?>
                        <option value="<?= $r['id'] ?>"><?= $r['lib'] ?></option>
                        <?php endforeach?>
                    </select>
                </div>
                <div class="text-right"><button type="submit" class="btn btn-sm btn-success">Rechercher</button></div>
            </form>
        </div>
    </div></div>
    <div class="col"><div class="card">
        <div class="card-body p-0"><table class="table table-sm">
            <tr>
                <td width="1%"><a href="#"><span class="fa fa-file"></span></a></td>
                <td>
                    <a href="#"><b>2025-00011</b></a> <span class="float-right">2026-01-01</span>
                    <div>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dicta accusantium, provident et asperiores cumque tempore velit similique ex fuga molestiae non, tempora magnam vero impedit error eos nobis commodi praesentium.</div>
                    <a href="">Lorem ipsum dolor sit ame aut autem nobis veritatis error </a>
                </td>
                <td>
                    <div class="badge badge-primary">En cours</div>
                    <div class="badge badge-primary">En cours</div>
                </td>
                <td width="1%">
                    <a href="" class="btn-link pl-2"><span class="fa fa-times text-danger"></span></a>
                </td>
            </tr>
        </table></div>
    </div></div>
</div>