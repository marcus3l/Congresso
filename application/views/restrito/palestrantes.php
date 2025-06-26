<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Gerenciar Palestrantes</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?=base_url()?>restrito/palestrantes/formulario" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar Palestrante</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td></td>
                        <td>PALESTRANTE</td>
                        <td>CURRÍCULO</td>
                    </tr>
                </thead>
                <?php
                if(isset($palestrantes) && !empty($palestrantes)){
                    foreach ($palestrantes as $palestrante) {
                ?>
                <tr>
                    <td style="width: 100px;"><img src="<?=$palestrante->foto ?? '' ?>" alt="><?=$palestrante->nome ?? '' ?>" width="100px"></td>
                    <td style="vertical-align: middle;"><?=$palestrante->nome ?? '' ?></td>
                    <td style="vertical-align: middle;"><?=$palestrante->curriculo ?? '' ?></td>
                    <td style="width: 80px; vertical-align: middle;"><a href="<?=base_url()?>restrito/palestrante/editar/<?=base64_encode($palestrante->id ?? '')?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> editar</a></td>
                    <td style="width: 80px; vertical-align: middle;">
                        <a href="javascript:void();" 
                        data-id-excluir="<?=$palestrante->id?>" 
                        data-url-excluir="<?=base_url()?>restrito/palestrante/excluir"
                        data-mensagem-excluir="Confirma excluir o(a) palestrante: <?=$palestrante->nome?>"
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