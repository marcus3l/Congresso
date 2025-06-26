<div class="container">
    <div class=" d-flex" style="display: flex; justify-content: space-between;">
        <div>
            <h2>Cadastro de Sala</h2>
        </div>
        <div>
            <a href="<?=base_url()?>restrito/salas" class="btn btn-danger"><i class="fa fa-chevron-left"></i> voltar</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Para cadastrar uma nova sala, preencha o formulário abaixo:</div>
                <div class="card-body">
                    <?php
                    if(isset($edit)){
                        $edit = $edit[0];
                    }
                    ?>
                    <form action="<?=base_url()?>restrito/salas/salvar" method="POST" id="form" autocomplete="off" enctype="multipart/form-data">
                        <?php
                        if(isset($edit) && !is_null($edit)){
                        ?>
                        <input type="hidden" value="<?=$edit->id?>" name="id">
                        <?php
                        }
                        ?>
                        <div class="row">
                            <div class="col-10">
                                <div class="mb-3">
                                    <label for="nome" class="form-label">* Nome da Sala</label>
                                    <input type="text" class="form-control <?=(form_error('nome')) ? 'is-invalid' : ''; ?>" id="nome" name="nome" placeholder="Nome da sala (campo obrigatório)" value="<?=set_value('nome', isset($edit) && !is_null($edit) ? $edit->nome ?? '' : '')?>">
                                    <?=form_error('nome','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="capacidade" class="form-label">Capacidade</label>
                                    <input type="number" class="form-control <?=(form_error('capacidade')) ? 'is-invalid' : ''; ?>" id="capacidade" name="capacidade" placeholder="Capacidade" value="<?=set_value('capacidade', isset($edit) && !is_null($edit) ? $edit->capacidade ?? '' : '')?>">
                                    <?=form_error('capacidade','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
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
