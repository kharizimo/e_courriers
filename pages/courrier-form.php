<?php 
if($id){

}
?>
<div class="row">
    <div class="col-md-8">
        <div class="card card-body">
            <form class="form">
                <input type="hidden" id="mvt" name="mvt" value="">
            <div class="row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="">Année</label>
                        <select name="annee" id="annee" class="form-control">
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                        </select>
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="">Numéro</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md">
                    <div class="form-group">
                        <label for="">Nature</label>
                        <select name="" id="" class="form-control"><?=
                        array_reduce(
                            $cn->query("select * from nature")->fetchAll(PDO::FETCH_ASSOC),function($carry,$item){
                                return $carry.'<option value="'.$item['id'].'">'.$item['lib'].'</option>';
                            },''
                            )
                        ?></select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Sujet</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Objet</label>
                <textarea class="form-control" name="" id=""></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" name="annexe"  id="annexe">&nbsp; <label for="annexe">Annexes</label>
            </div>
            <div class="row">
                <div class="col-md"><div class="form-group">
                    <label for="">Classeur</label>
                    <select name="" id="" class="form-control"><?=array_reduce(
                        $cn->query('select * from classeur')->fetchAll(PDO::FETCH_ASSOC),
                        function($carry,$item){
                            return $carry.'<option value="'.$item['id'].'">'.$item['lib'].'</option>';
                        },''
                    )?></select>
                </div></div>
                <div class="col"><div class="form-group">
                    <label for="">Etat</label>
                    <select name="" id="" class="form-control"><?=array_reduce(
                        ['EN COURS','CLOTURE'],
                        function($carry,$item){
                            return $carry.'<option value="'.$item.'">'.$item.'</option>';
                        },''
                    )?></select>
                </div></div>
            </div>
            <div class="form-group">
                <label for="">Observation</label>
                <textarea name="" id="" class="form-control"></textarea>
            </div>
            <div class="text-right"><button class="btn btn-primary">Appliquer</button></div>
            </form>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">Accessibilité</div>
                <div class="card-tools"><button class="btn btn-success btn-sm"><span class="fa fa-plus"></span></button></div>
            </div>
            <div class="card-body p-0"><table class="table">
                <tr>
                    <td width="1%"><span class="fa fa-users text-danger"></span></td>
                    <td class="text-bold">S.G Peel</td>
                    <td>Editeur</td>
                    <td width="1%"><a href="" class="btn btn-outline-danger btn-sm"><span class="fa fa-times"></span></a></td>
                </tr>
                <tr>
                    <td width="1%"><span class="fa fa-users text-danger"></span></td>
                    <td class="text-bold">S.G Peel</td>
                    <td>Editeur</td>
                    <td width="1%"><a href="" class="btn btn-outline-danger btn-sm"><span class="fa fa-times"></span></a></td>
                </tr>
                <tr>
                    <td width="1%"><span class="fa fa-users text-danger"></span></td>
                    <td class="text-bold">S.G Peel</td>
                    <td>Editeur</td>
                    <td width="1%"><a href="" class="btn btn-outline-danger btn-sm"><span class="fa fa-times"></span></a></td>
                </tr>
            </table></div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title">Référence</div>
                <div class="card-tools"><button class="btn btn-success btn-sm"><span class="fa fa-plus"></span></button></div>
            </div>
            <div class="card-body p-0"><table class="table">
                <tr>
                    <td width="1%"><span class="fa fa-arrow-up fa-2x text-success"></span></td>
                    <td class="text-bold"><label for="" class="text-primary">Lettre</label> <br> 2025-001 </td>
                    <td><label for="">S.G PEEL</label> <br> <div class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi ipsa, mollitia cum nam assumenda ullam beatae vero iste</div> </td>
                    <td width="1%"><div class="btn-group">
                        <a href="" class="btn btn-default text-info btn-sm"><span class="fa fa-eye"></span></a>
                        <a href="" class="btn btn-default text-danger btn-sm"><span class="fa fa-times"></span></a>
                    </div></td>
            </table></div>
        </div>
    </div>
    <div class="col-md">
        <div class="form-group">
            <div class="row" id="btn-mvt">
                <div class="col-md"><button data-mvt="ENVOYE" id="btn-envoye" class="btn btn-lg btn-block btn-success">Envoyé <span class="fa fa-arrow-up"></span></button></div>
                <div class="col-md"><button data-mvt="RECU" id="btn-recu" class="btn btn-lg btn-block btn-outline-success">Reçu <span class="fa fa-arrow-up"></span></button></div>
            </div>
        </div>
        <div class="form-group">
            <div class="btn-group w-100">
                <button class="btn btn-outline-info">
                    Charger le fichier
                    <span class="fa fa-file"></span>
                </button>
                <button class="btn btn-outline-info disabled"><span class="fa fa-download"></span></button>
                <button class="btn btn-outline-info disabled"><span class="fa fa-trash"></span></button>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="card-title text-bold">Annotations</div>
                <div class="card-tools"><button class="btn btn-primary btn-sm"><span class="fa fa-plus"></span></button></div>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="text-bold text-primary text-sm">S.G PEEL > DRH</div>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi qui, magnam molestiae ratione quae illum odio minus adipisci facilis dolorum officiis esse numquam obcaecati nisi debitis ad dolorem sint similique!
                    <div class="text-right text-secondary text-bold text-sm">23/11/2025 12:00:12</div>
                </li>
                <li class="list-group-item">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi qui, magnam molestiae ratione quae illum odio minus adipisci facilis dolorum officiis esse numquam obcaecati nisi debitis ad dolorem sint similique!
                </li>
                <li class="list-group-item">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi qui, magnam molestiae ratione quae illum odio minus adipisci facilis dolorum officiis esse numquam obcaecati nisi debitis ad dolorem sint similique!
                </li>
            </ul>
        </div>
    </div>
</div>
<script>
    const btn_mvt=document.querySelectorAll('#btn-mvt button')

    btn_mvt.forEach(e=>{
        e.addEventListener('click',()=>{
            btn_mvt.forEach(ee=>{
                ee.classList.toggle('btn-success')
                ee.classList.toggle('btn-outline-success')
            })
            document.getElementById('mvt').value=e.dataset.mvt
        })
    })
</script>