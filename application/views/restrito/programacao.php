     
<!-- datatables -->
<script src="<?=base_url()?>assets/plugins/datatables/datatables.min.js" type="text/javascript"></script>


<div class="container">
    <div class="row">
        <div class="col text-center">
            <h3>Gerenciar Programação</h3>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <a href="<?=base_url()?>restrito/programacao/formulario" class="btn btn-primary"><i class="fa fa-plus"></i> Criar Programação</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col">
            <label for="2" class="btn btn-outline-primary position-relative me-3">
                <input type="checkbox" checked name="chk_dia" value="2" id="2" class="toggleResultado" data-tipo="dia"> Dia 02
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    0
                </span>
            </label>

            <label for="3" class="btn btn-outline-primary position-relative me-3">
                <input type="checkbox" checked name="chk_dia" value="3" id="3" class="toggleResultado" data-tipo="dia"> Dia 03
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    0
                </span>
            </label>

            <label for="4" class="btn btn-outline-primary position-relative me-3">
                <input type="checkbox" checked name="chk_dia" value="4" id="4" class="toggleResultado" data-tipo="dia"> Dia 04
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    0
                </span>
            </label>

        </div>
    </div>

    <?php
    if(isset($salas)){
    ?>
    <div class="row mt-3">
        <div class="col">
            <?php
            foreach ($salas as $sala) {
            ?>
            <label for="<?=$sala->id?>" class="btn btn-outline-primary position-relative me-3">
                <input type="checkbox" checked name="chk_salas" value="<?=$sala->id?>" id="<?=$sala->id?>" class="toggleResultado" data-tipo="id-sala"> <?=$sala->nome?>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-success">
                    0
                </span>
            </label>
            <?php
            }
            ?>
        </div>
    </div>
    <?php
    }
    ?>

    <div class="row">
        <div class="col">
            <table class="table table-striped table-bordered" id="table_programacao">
                <thead>
                    <tr>
                        <td>PROGRAMAÇÃO</td>
                        <td>TIPO</td>
                        <td>SALA</td>
                        <td>DATA INCIO</td>
                        <td>DATA FIM</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                <?php
                if(isset($programacao) && !empty($programacao)){
                    foreach ($programacao as $pr) {
                ?>
                <tr class="tr_resultado" data-id-sala="<?=$pr->id_sala?>" data-dia="<?=date('d', strtotime($pr->data_inicio))?>">
                    <td style="vertical-align: middle;"><h6><?=$pr->nome ?? '' ?></h6>Área(s): <?=$pr->areas ?? '-'?><br>SubÁrea(s): <?=$pr->subareas ?? '-'?><br> </td>
                    <td style="vertical-align: middle;"><?=$pr->tipo_programacao ?? '' ?></td>
                    <td style="vertical-align: middle;"><?=$pr->sala ?? '' ?></td>
                    <td style="vertical-align: middle;"><?=date('d/m', strtotime($pr->data_inicio) ) ?? '' ?><br><?=date('H:i', strtotime($pr->data_inicio) ) ?? '' ?>h</td>
                    <td style="vertical-align: middle;"><?=date('d/m', strtotime($pr->data_fim) ) ?? '' ?><br><?=date('H:i', strtotime($pr->data_fim) ) ?? '' ?>h</td>
                    <td style="width: 80px; vertical-align: middle;"><a href="<?=base_url()?>restrito/programacao/<?=base64_encode($pr->id ?? '')?>/palestrantes" class="btn btn-sm btn-info"><i class="fa fa-users"></i> palestrantes</a><br><?=$pr->qtdPalestrantes?> Palestante(s) </td>
                    <td style="width: 80px; vertical-align: middle;"><a href="<?=base_url()?>restrito/programacao/editar/<?=base64_encode($pr->id ?? '')?>" class="btn btn-sm btn-primary"><i class="fa fa-pencil"></i> editar</a></td>
                    <td style="width: 80px; vertical-align: middle;">
                        <a href="javascript:void();" 
                        data-id-excluir="<?=$pr->id?>" 
                        data-url-excluir="<?=base_url()?>restrito/programacao/excluir"
                        data-mensagem-excluir="Confirma excluir a programação: <?=$pr->nome?>"
                        class="btn btn-sm btn-danger modalExcluir"><i class="fa fa-trash"></i> excluir</a>
                    </td>
                </tr>
                <?php
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
   new DataTable('#table_programacao', {
        info: false,
        ordering: false,
        paging: true
    });


    $(function(){

        $(".toggleResultado").change(function(){
            toggleResultado( $(this), $(this).data('tipo') );
        });

        function toggleResultado( element, tipo ){
            
            var value = element.val(); 
            var isChecked = element.is(":checked");

            console.log(tipo, value, isChecked);

            $(".tr_resultado").each(function(){
                if ($(this).data(tipo) == value) {
                    if (isChecked) {
                        $(this).show(); // Exibir o TR se o checkbox estiver ativo
                    } else {
                        $(this).hide(); // Ocultar o TR se o checkbox estiver desativado
                    }
                }
            });

        }
        

    });
    

</script>