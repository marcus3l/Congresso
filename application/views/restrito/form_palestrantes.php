<div class="container">
    <div class=" d-flex" style="display: flex; justify-content: space-between;">
        <div>
            <h2>Cadastro de Palestrante</h2>
        </div>
        <div>
            <a href="<?=base_url()?>restrito/palestrantes" class="btn btn-danger"><i class="fa fa-chevron-left"></i> voltar</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Para cadastrar o palestrante, preencha o formulário abaixo:</div>
                <div class="card-body">
                    <?php
                    if(isset($edit)){
                        $edit = $edit[0];
                    }
                    ?>
                    <form action="<?=base_url()?>restrito/palestrantes/salvar" method="POST" id="form" autocomplete="off" enctype="multipart/form-data">
                        <?php
                        if(isset($edit) && !is_null($edit)){
                        ?>
                        <input type="hidden" value="<?=$edit->id?>" name="id">
                        <?php
                        }
                        ?>
                        <div class="mb-3">
                            <label for="nome" class="form-label">* Nome</label>
                            <input type="text" class="form-control <?=(form_error('nome')) ? 'is-invalid' : ''; ?>" id="nome" name="nome" placeholder="Nome do palestrante (campo obrigatório)" value="<?=set_value('nome', isset($edit) && !is_null($edit) ? $edit->nome ?? '' : '')?>">
                            <?=form_error('nome','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                        </div>

                        <div class="mb-3">
                            <label for="curriculo" class="form-label">Mini-currículo</label>
                            <textarea class="form-control <?=(form_error('curriculo')) ? 'is-invalid' : ''; ?>" id="curriculo" rows="5" name="curriculo" placeholder="Mini currículo/apresentação (campo obrigatório)"><?=set_value('curriculo', isset($edit) && !is_null($edit) ? $edit->curriculo ?? '' : '')?></textarea>
                            <?=form_error('curriculo','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="linkedin" class="form-label">Linkedin</label>
                                    <input type="text" class="form-control <?=(form_error('linkedin')) ? 'is-invalid' : ''; ?>" id="linkedin" name="linkedin" placeholder="Linkedin" value="<?=set_value('linkedin', isset($edit) && !is_null($edit) ? $edit->linkedin ?? '' : '')?>">
                                    <?=form_error('linkedin','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="lates" class="form-label">Lates</label>
                                    <input type="text" class="form-control <?=(form_error('lates')) ? 'is-invalid' : ''; ?>" id="lates" name="lates" placeholder="Lates" value="<?=set_value('lates', isset($edit) && !is_null($edit) ? $edit->lates ?? '' : '')?>">
                                    <?=form_error('lates','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control <?=(form_error('instagram')) ? 'is-invalid' : ''; ?>" id="instagram" name="instagram" placeholder="Instagram" value="<?=set_value('instagram', isset($edit) && !is_null($edit) ? $edit->instagram ?? '' : '')?>">
                                    <?=form_error('instagram','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row">
                                <div class="col">
                                    <label for="foto" class="form-label">Foto</label>
                                    <input class="form-control <?=(form_error('foto')) ? 'is-invalid' : ''; ?>" type="file" id="foto" name="foto" accept="image/png, image/jpeg">
                                    <?=form_error('foto','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                                <div style="width: 200px; height: 200px; border-radius: 50%;" >
                                    <!-- exibir foto aqui -->
                                    <img id="preview" src="#" style="border-radius: 50%; width: 100%;">
                                    <?php
                                    if(isset($edit) && !is_null($edit) && !empty($edit->foto)){
                                    ?>
                                    <img id="preview" src="<?=$edit->foto?>" style="border-radius: 50%; width: 100%;">
                                    <?php
                                    }
                                    ?>
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
    // Script para exibir a foto antes do upload
    document.getElementById('foto').addEventListener('change', function(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
    });
    
    $(function(){
        $("#form").submit(function(){
            $("#btn-send").prop('disabled',true).html("<i class='fas fa-spinner fa-spin'></i> Aguarde");
        });
    });
</script>
