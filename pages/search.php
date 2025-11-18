<?php 
$rows=$cn->query("select * from classeur")->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="col-md-4">
        <div class="card card-body">
            <?php if($_q):?>
            <b>Mot clé recherché :</b> <h3 class="text-primary"><?=$_q ?></h3>
            <b class="text-danger"><?=$n??0?> résultat(s) Trouvé(s)</b>
            <hr>
            <?php endif?>
            <form action="">
                <div class="form-group">
                    <label for="">Type de recherche</label>
                    <select name="option" id="option" class="form-control form-control-sm">
                        <option>Objet</option>
                        <option>Destinataire/Expéditeur</option>
                        <option>N° lettre</option>
                        <option>N° Réf</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Mot clé</label>
                    <input type="text" name="_q" class="form-control form-control-sm">
                </div>
                <div class="text-right"><button class="btn btn-sm btn-success">Rechercher</button></div>
            </form>
        </div>
    </div>
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