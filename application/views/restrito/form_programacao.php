<div class="container">
    <div class=" d-flex" style="display: flex; justify-content: space-between;">
        <div>
            <h2>Cadastro de Programação Científica</h2>
        </div>
        <div>
            <a href="<?=base_url()?>restrito/programacao" class="btn btn-danger"><i class="fa fa-chevron-left"></i> voltar</a>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">Para cadastrar uma nova programação, preencha o formulário abaixo:</div>
                <div class="card-body">
                    <?php
                    if(isset($edit)){
                        $edit = $edit[0];
                    }
                    ?>
                    <form action="<?=base_url()?>restrito/programacao/salvar" method="POST" id="form" autocomplete="off" enctype="multipart/form-data">
                        <?php
                        if(isset($edit) && !is_null($edit)){
                        ?>
                        <input type="hidden" value="<?=$edit->id?>" name="id">
                        <?php
                        }
                        ?>

                        <div class="mb-3">
                            <label for="nome" class="form-label">* Nome</label>
                            <input type="text" class="form-control <?=(form_error('nome')) ? 'is-invalid' : ''; ?>" id="nome" name="nome" placeholder="Nome da área (campo obrigatório)" value="<?=set_value('nome', isset($edit) && !is_null($edit) ? $edit->nome ?? '' : '')?>">
                            <?=form_error('nome','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label for="id_sala" class="form-label">* Sala</label>
                                    <select name="id_sala" id="id_sala" class="form-control <?=(form_error('id_sala')) ? 'is-invalid' : ''; ?>">
                                        <option value="" selected disabled>-Selecione-</option>
                                        <?php
                                        if(isset($salas) && !empty($salas)){
                                            foreach ($salas as $sala) {
                                        ?>
                                        <option value="<?=$sala->id?>" <?=set_select('id_sala', $sala->id, (isset($edit) && $edit->id_sala == $sala->id ? true : false) )?>><?=$sala->nome?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <?=form_error('id_sala','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3">
                                    <label for="id_tipo_programacao" class="form-label">* Tipo Programação</label>
                                    <select name="id_tipo_programacao" id="id_tipo_programacao" class="form-control <?=(form_error('id_tipo_programacao')) ? 'is-invalid' : ''; ?>">
                                        <option value="" selected disabled>-Selecione-</option>
                                        <?php
                                        if(isset($tipo_programacao) && !empty($tipo_programacao)){
                                            foreach ($tipo_programacao as $tipo) {
                                        ?>
                                        <option value="<?=$tipo->id?>" <?=set_select('id_tipo_programacao', $tipo->id, (isset($edit) && $edit->id_tipo_programacao == $tipo->id ? true : false) )?>><?=$tipo->nome?></option>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </select>
                                    <?=form_error('id_sala','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="mb-3">
                                    <label for="data_inicio" class="form-label">Data/Hora INICIO</label>
                                    <input type="datetime-local" class="form-control <?=(form_error('data_inicio')) ? 'is-invalid' : ''; ?>" id="data_inicio" name="data_inicio" value="<?=set_value('data_inicio', isset($edit) && !is_null($edit) ? $edit->data_inicio ?? '' : '')?>">
                                    <?=form_error('data_inicio','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-3">
                                    <label for="data_fim" class="form-label">Data/Hora FIM</label>
                                    <input type="datetime-local" class="form-control <?=(form_error('data_fim')) ? 'is-invalid' : ''; ?>" id="data_fim" name="data_fim" value="<?=set_value('data_fim', isset($edit) && !is_null($edit) ? $edit->data_fim ?? '' : '')?>">
                                    <?=form_error('data_fim','<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <hr>
                        
                        <div class="row mb-3">
                            <label for="id_areas" class="form-label">* Área(s)</label>
                            <select class="select_id_areas" name="id_areas[]" multiple="multiple">
                                <?php
                                if(isset($areas) && !empty($areas)){
                                    foreach ($areas as $area) {
                                        $select = !empty(array_filter($programacao_areas, function($obj) use (&$area) {
                                            return $obj->id_area == $area->id;
                                        }));
                                ?>
                                <option value="<?=$area->id?>" <?=$select ? "selected" : ""?> ><?=$area->nome?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>

                        <div class="row mb-3">
                            <label for="id_subareas" class="form-label">* Sub Área(s)</label>
                            <select class="select_id_subareas" name="id_subareas[]" multiple="multiple">
                                <?php
                                if(isset($subareas) && !empty($subareas)){
                                    foreach ($subareas as $subarea) {
                                        $select = !empty(array_filter($programacao_subareas, function($obj) use (&$subarea) {
                                            return $obj->id_subarea == $subarea->id;
                                        }));
                                ?>
                                <option value="<?=$subarea->id?>" <?=$select ? "selected" : ""?> ><?=$subarea->nome?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
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

        $(document).ready(function() {
            $('.select_id_areas').select2({
                placeholder: "Selecione (a)s área(s) desta programação",
            });

            $('.select_id_subareas').select2({
                placeholder: "Selecione (a)s Sub Área(s) desta programação",
            });

        });
    });
</script>
