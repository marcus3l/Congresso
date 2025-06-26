<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Gerenciar Sub Áreas</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?=base_url()?>restrito/subareas/formulario" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar Nova Sub Área</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td></td>
                        <td>ÁREA</td>
                        <td></td>
                        <td>SUB-ÁREA</td>
                        <td>SIGLA</td>
                        <td>DESCRIÇÃO</td>
                    </tr>
                </thead>
                <?php
                if(isset($subareas) && !empty($subareas)){
                    foreach ($subareas as $subarea) {
                ?>
                <tr>
                    <td style="vertical-align: middle; background-color: <?=$subarea->area_cor ?? '' ?>;">&nbsp;</td>
                    <td style="vertical-align: middle;"><?=$subarea->area ?? '' ?></td>
                    <td style="vertical-align: middle; background-color: <?=$subarea->cor ?? '' ?>;">&nbsp;</td>
                    <td style="vertical-align: middle;"><?=$subarea->nome ?? '' ?></td>
                    <td style="vertical-align: middle;"><?=$subarea->sigla ?? '' ?></td>
                    <td style="vertical-align: middle;"><?=$subarea->descricao ?? '' ?></td>
                    <td style="width: 80px; vertical-align: middle;"><a href="<?=base_url()?>restrito/subarea/editar/<?=base64_encode($subarea->id ?? '')?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> editar</a></td>
                    <td style="width: 80px; vertical-align: middle;">
                        <a href="javascript:void();" 
                        data-id-excluir="<?=$subarea->id?>" 
                        data-url-excluir="<?=base_url()?>restrito/subarea/excluir"
                        data-mensagem-excluir="Confirma excluir a subárea: <?=$subarea->nome?>"
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