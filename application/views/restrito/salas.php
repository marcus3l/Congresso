<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Gerenciar Salas</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?=base_url()?>restrito/salas/formulario" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar Sala</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td>SALA</td>
                        <td>CAPACIDADE</td>
                    </tr>
                </thead>
                <?php
                if(isset($salas) && !empty($salas)){
                    foreach ($salas as $sala) {
                ?>
                <tr>
                    <td style="vertical-align: middle;"><?=$sala->nome ?? '' ?></td>
                    <td style="vertical-align: middle;"><?=$sala->capacidade ?? '' ?></td>
                    <td style="width: 80px; vertical-align: middle;"><a href="<?=base_url()?>restrito/sala/editar/<?=base64_encode($sala->id ?? '')?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> editar</a></td>
                    <td style="width: 80px; vertical-align: middle;">
                        <a href="javascript:void();" 
                        data-id-excluir="<?=$sala->id?>" 
                        data-url-excluir="<?=base_url()?>restrito/sala/excluir"
                        data-mensagem-excluir="Confirma excluir sala: <?=$sala->nome?>"
                        class="btn btn-sm btn-danger modalExcluir"><i class="fa fa-trash"></i> excluir</a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>