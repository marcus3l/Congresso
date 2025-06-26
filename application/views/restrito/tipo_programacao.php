<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Gerenciar Tipo de Programação</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?=base_url()?>restrito/tipo-programacao/formulario" class="btn btn-primary"><i class="fa fa-plus"></i> Cadastrar Novo Tipo de Programação</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <td></td>
                        <td>NOME</td>
                        <td>SIGLA</td>
                    </tr>
                </thead>
                <?php
                if(isset($tipo_programacao) && !empty($tipo_programacao)){
                    foreach ($tipo_programacao as $tipo) {
                ?>
                <tr>
                    <td style="vertical-align: middle; background-color: <?=$tipo->cor ?? '' ?>;">&nbsp;</td>
                    <td style="vertical-align: middle;"><?=$tipo->nome ?? '' ?></td>
                    <td style="vertical-align: middle;"><?=$tipo->sigla ?? '' ?></td>
                    <td style="width: 80px; vertical-align: middle;"><a href="<?=base_url()?>restrito/tipo-programacao/editar/<?=base64_encode($tipo->id ?? '')?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> editar</a></td>
                    <td style="width: 80px; vertical-align: middle;">
                        <a href="javascript:void();" 
                        data-id-excluir="<?=$tipo->id?>" 
                        data-url-excluir="<?=base_url()?>restrito/tipo-programacao/excluir"
                        data-mensagem-excluir="Confirma excluir o tipo de programação: <?=$tipo->nome?>"
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