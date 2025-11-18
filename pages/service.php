<?php 
$classeurs=$cn->query("select * from classeur")->fetchAll(PDO::FETCH_ASSOC);
$services=$cn->query("select * from service")->fetchAll(PDO::FETCH_ASSOC);
?>
<div class="row">
    <div class="col-md-4"><div class="card card-body">
        <form action="">
            <div class="form-group">
                <label for="">Service</label>
                <select name="" id="" class="form-control form-control-sm"><?= 
                array_reduce($services,function($carry,$item){
                    return $carry."<option value=>{$item['lib']}</option>";
                },'')
                ?></select>
            </div>
            <div class="text-right">
                <button type="button" data-target="#modal" data-toggle="modal" class="btn btn-primary btn-sm">Ajouter</button>
                <button type="button" class="btn btn-primary btn-sm">Modifier</button>
            </div>
        </form>
    </div></div>
    <div class="col"><div class="card">
        <div class="card-header">
            <div class="card-tools"><select name="" id="" class="form-control form-control-sm">
                <option>Page 1</option>
                <option>Page 2</option>
                <option>Page 3</option>
            </select></div>
        </div>
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

<div class="modal fade" id="modal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Ajouter</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="">
                <div class="form-group">
                    <label for="">Service</label>
                    <input type="text" class="form-control">
                </div>
                <div class="text-right"><button class="btn btn-success">Proceder</button></div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>