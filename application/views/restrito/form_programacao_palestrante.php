<div class="container">
    <div class=" d-flex" style="display: flex; justify-content: space-between;">
        <div>
            <h2>Cadastro de Palestrantes para:<br><?=$programacao->nome ?? ''?></h2>
        </div>
        <div>
            <a href="<?=base_url()?>restrito/programacao" class="btn btn-danger"><i class="fa fa-chevron-left"></i> voltar</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Para cadastrar palestrantes para a programação, preencha o formulário abaixo:</div>
                <div class="card-body">
                    <form action="<?=base_url()?>restrito/programacao/palestrante/salvar" method="POST" id="form" autocomplete="off" enctype="multipart/form-data">
                        <input type="hidden" name="id_programacao" value="<?=$id_programacao?>">    
                        <div class="mb-3">
                            <label for="id_palestrante" class="form-label">* Palestrante</label>
                            <select name="id_palestrante" id="id_palestrante" class="form-control <?=(form_error('id_palestrante')) ? 'is-invalid' : ''; ?>">
                                <option value="" selected disabled>-Selecione-</option>
                                <?php
                                if(isset($palestrantes) && !empty($palestrantes)){
                                    foreach ($palestrantes as $palestrante) {

                                        $cadastrado = !empty(array_filter($programacao_palestrantes, function($obj) use (&$palestrante) {
                                            return $obj->id_palestrante == $palestrante->id;
                                        }));

                                        if( $cadastrado ){
                                            continue;
                                        }


                                ?>
                                <option value="<?=$palestrante->id?>"><?=$palestrante->nome?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                            <?=form_error('id_palestrante','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                        </div>
                     
                        <button id="btn-send" type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
    if(isset($programacao_palestrantes)){
    ?>
    <div class="row mt-2">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr><td></td></tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($programacao_palestrantes as $pp) {
                            ?>
                            <tr>
                                <td style="width: 100px;"><img src="<?=$pp->foto ?? '' ?>" alt="><?=$pp->nome ?? '' ?>" width="100px"></td>
                                <td style="vertical-align: middle;"><?=$pp->nome ?? '' ?></td>
                                <td style="width: 80px; vertical-align: middle;">
                                    <a href="javascript:void();" 
                                    data-id-excluir="<?=$pp->id?>" 
                                    data-url-excluir="<?=base_url()?>restrito/programacao/palestrante/excluir"
                                    data-mensagem-excluir="Confirma excluir o(a) palestrante: <?=$pp->nome?>"
                                    class="btn btn-sm btn-danger modalExcluir"><i class="fa fa-trash"></i> excluir</a>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

</div>


<script>
    $(function(){
        $("#form").submit(function(){
            $("#btn-send").prop('disabled',true).html("<i class='fas fa-spinner fa-spin'></i> Aguarde");
        });
    });
</script>
