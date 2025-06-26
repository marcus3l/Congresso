<?php
    if(isset($programacao) && !empty($programacao)){
        foreach ($programacao as $aux) {
            
            $pr = $aux->programacaoCompleta;

            $palestrantes = "";
            if(!empty($pr->palestrantes)){
                foreach ($pr->palestrantes as $key => $palestrante) {
                    $palestrantes .= $palestrante->nome;
                    $palestrantes .= (sizeof($pr->palestrantes)-1 == $key) ? '' : ', ';
                }
            }

            $id_areas = "";
            $label_areas = "";
            if(!empty($pr->areas)){
                foreach ($pr->areas as $key => $area) {
                    $id_areas .= $area->id_area.",";
                    $label_areas .= "<label class='px-2 py-1' style='margin-right:5px; background:".$area->cor_area."; color:#FFF'>".$area->area."</label>";
                }
            }
    ?>
    <div style="width: 90%; border: 1px solid #6a2b82; min-height: 130px; margin: 0 auto;" class="row mb-2 resultado" data-id-sala="<?=$pr->id_sala?>" data-id-areas="<?=$id_areas?>" data-dia="<?=date('d', strtotime($pr->data_inicio))?>">
        <div class="col-1" style="width: 10px; background: #6a2b82;"></div>
        <div class="col py-2">
            <div class=""><span><?=$pr->nome ?? ''?></span></div>
            <div class=""><?=date('d/m', strtotime($pr->data_inicio))?> - <?=date('H\hi', strtotime($pr->data_inicio))?> <?=date('d/m', strtotime($pr->data_inicio)) == date('d/m', strtotime($pr->data_fim)) ? 'às' : ' até '.date('d/m -', strtotime($pr->data_fim))?> <?=date('H\hi', strtotime($pr->data_fim))?></div>
            <div class="">Palestrante(s): <?=$palestrantes?></div>
            <div class=""><?=$pr->sala?> - <?=$pr->tipo_programacao ?? ''?></div>
            <div class=""><?=$label_areas?></div>
        </div>
    </div>
    <?php
        }
    }
?>