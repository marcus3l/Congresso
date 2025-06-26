<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Gerenciar Áreas</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?=base_url()?>restrito/areas/formulario" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar Nova Área</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td></td>
                        <td>ÁREA</td>
                        <td>SIGLA</td>
                        <td>DESCRIÇÃO</td>
                    </tr>
                </thead>
                <?php
                if(isset($areas) && !empty($areas)){
                    foreach ($areas as $area) {
                ?>
                <tr>
                    <td style="vertical-align: middle; background-color: <?=$area->cor ?? '' ?>;">&nbsp;</td>
                    <td style="vertical-align: middle;"><?=$area->nome ?? '' ?></td>
                    <td style="vertical-align: middle;"><?=$area->sigla ?? '' ?></td>
                    <td style="vertical-align: middle;"><?=$area->descricao ?? '' ?></td>
                    <td style="width: 80px; vertical-align: middle;"><a href="<?=base_url()?>restrito/area/editar/<?=base64_encode($area->id ?? '')?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> editar</a></td>
                    <td style="width: 80px; vertical-align: middle;">
                        <a href="javascript:void();" 
                        data-id-excluir="<?=$area->id?>" 
                        data-url-excluir="<?=base_url()?>restrito/area/excluir"
                        data-mensagem-excluir="Confirma excluir a área: <?=$area->nome?>"
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