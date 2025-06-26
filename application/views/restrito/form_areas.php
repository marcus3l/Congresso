<div class="container">
    <div class=" d-flex" style="display: flex; justify-content: space-between;">
        <div>
            <h2>Cadastro de Área</h2>
        </div>
        <div>
            <a href="<?=base_url()?>restrito/areas" class="btn btn-danger"><i class="fa fa-chevron-left"></i> voltar</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Para cadastrar uma nova área, preencha o formulário abaixo:</div>
                <div class="card-body">
                    <?php
                    if(isset($edit)){
                        $edit = $edit[0];
                    }
                    ?>
                    <form action="<?=base_url()?>restrito/areas/salvar" method="POST" id="form" autocomplete="off" enctype="multipart/form-data">
                        <?php
                        if(isset($edit) && !is_null($edit)){
                        ?>
                        <input type="hidden" value="<?=$edit->id?>" name="id">
                        <?php
                        }
                        ?>
                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="nome" class="form-label">* Nome</label>
                                    <input type="text" class="form-control <?=(form_error('nome')) ? 'is-invalid' : ''; ?>" id="nome" name="nome" placeholder="Nome da área (campo obrigatório)" value="<?=set_value('nome', isset($edit) && !is_null($edit) ? $edit->nome ?? '' : '')?>">
                                    <?=form_error('nome','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="sigla" class="form-label">Sigla</label>
                                    <input type="text" class="form-control <?=(form_error('sigla')) ? 'is-invalid' : ''; ?>" id="sigla" name="sigla" placeholder="Sigla da área" value="<?=set_value('sigla', isset($edit) && !is_null($edit) ? $edit->sigla ?? '' : '')?>">
                                    <?=form_error('sigla','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="cor" class="form-label">Cor de exibição</label>
                                    <input type="color" style="height: 40px;" class="form-control <?=(form_error('cor')) ? 'is-invalid' : ''; ?>" id="cor" name="cor" placeholder="cor da área" value="<?=set_value('cor', isset($edit) && !is_null($edit) ? $edit->cor ?? '' : '')?>">
                                    <?=form_error('cor','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="descricao" class="form-label">Descrição</label>
                            <textarea class="form-control <?=(form_error('descricao')) ? 'is-invalid' : ''; ?>" id="descricao" rows="5" name="descricao" placeholder="Descrição"><?=set_value('descricao', isset($edit) && !is_null($edit) ? $edit->descricao ?? '' : '')?></textarea>
                            <?=form_error('descricao','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                        </div>
                     
                        <button id="btn-send" type="submit" class="btn btn-primary"><i class="fa fa-check"></i> Salvar</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(function(){
        $("#form").submit(function(){
            $("#btn-send").prop('disabled',true).html("<i class='fas fa-spinner fa-spin'></i> Aguarde");
        });
    });
</script>
