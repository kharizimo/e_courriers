<?php 
$rows=$cn->query("select * from classeur")->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="col-md-6"><div class="card">
        <div class="card-header"><div class="card-tools"><button class="btn btn-sm btn-primary"><span class="fa fa-plus"></span></button></div></div>
        
        <div class="card-body p-0"><table class="table table-sm">
            <?php foreach($rows as $r): ?>
            <tr>
                <td>
                    <span class="fa fa-angle-right text-dark"></span>
                    <span class="fa fa-folder text-warning"></span>
                    <a href=""><?=$r['lib'] ?></a>
                </td>
                <td width="1%">
                    <a href="" class="btn-link pl-2"><span class="fa fa-times text-danger"></span></a>
                </td>
            </tr>
            <?php endforeach?>
        </table></div>
    </div></div>
    <div class="col"><div class="card">
        <div class="card-header"><div class="card-tools">
            <button class="btn btn-sm btn-primary"><span class="fa fa-plus"></span></button>
        </div></div>
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