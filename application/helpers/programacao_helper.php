<?php

if ( ! function_exists('getProgramacaoCompleta') ){
    function getProgramacaoCompleta(  $id_programacao = null ) {
        $ci =& get_instance();
        $ci->load->model('Programacao_model', 'programacao_model');
        $ci->load->model('Programacao_areas_model', 'programacao_areas_model');
        $ci->load->model('Programacao_subareas_model', 'programacao_subareas_model');
        $ci->load->model('Programacao_palestrantes_model', 'programacao_palestrantes_model');

        $joins = array();
        $joins[0]['table']          = "salas";
        $joins[0]['relationship']   = "salas.id = programacao.id_sala";
        $joins[0]['type']           = "left";

        $joins[1]['table']          = "ref_tipo_programacao";
        $joins[1]['relationship']   = "ref_tipo_programacao.id = programacao.id_tipo_programacao";
        $joins[1]['type']           = "left";

        $select = <<<SELECT
                    ,salas.id AS "id_sala"
                    ,salas.nome AS "sala"
                    ,ref_tipo_programacao.id AS "id_tipo_programacao"
                    ,ref_tipo_programacao.nome AS "tipo_programacao"
        SELECT;

        $programacao = $ci->programacao_model->list(['programacao.id'=>$id_programacao], $joins, $select);

        foreach ($programacao  as $pr) {
            
            $joins_area = array();
            $joins_area[0]['table']          = "areas";
            $joins_area[0]['relationship']   = "areas.id = programacao_areas.id_area";
            $joins_area[0]['type']           = "left";
            
            $select_area = 	<<<SELECT
                    ,areas.id AS "id_area"
                    ,areas.nome AS "area"
                    ,areas.cor AS "cor_area"
            SELECT;
            
            $pr->areas = $ci->programacao_areas_model->list( ['programacao_areas.id_programacao' => $id_programacao, 'programacao_areas.status' => 1], $joins_area, $select_area );
            
            #---

            $joins_subarea = array();
            $joins_subarea[0]['table']          = "subareas";
            $joins_subarea[0]['relationship']   = "subareas.id = programacao_subareas.id_subarea";
            $joins_subarea[0]['type']           = "left";
            
            $select_subarea = 	<<<SELECT
                    ,subareas.id AS "id_subareas"
                    ,subareas.nome AS "subarea"
                    ,subareas.cor AS "cor_subarea"
            SELECT;
            
            $pr->subareas = $ci->programacao_subareas_model->list( ['programacao_subareas.id_programacao' => $id_programacao, 'programacao_subareas.status' => 1], $joins_subarea, $select_subarea );


            #---
            $joins_palestrante = array();
            $joins_palestrante[0]['table']          = "palestrantes";
            $joins_palestrante[0]['relationship']   = "palestrantes.id = programacao_palestrantes.id_palestrante";
            $joins_palestrante[0]['type']           = "left";
            
            $select_palestrante = 	<<<SELECT
                    ,palestrantes.id AS "id_palestrante"
                    ,palestrantes.nome AS "nome"
                    ,palestrantes.foto AS "foto"
                    ,palestrantes.curriculo AS "curriculo"
                    ,palestrantes.instagram AS "instagram"
                    ,palestrantes.lates AS "lates"
                    ,palestrantes.linkedin AS "linkedin"
            SELECT;


            $pr->palestrantes = $ci->programacao_palestrantes_model->list( ['programacao_palestrantes.id_programacao' => $id_programacao, 'programacao_palestrantes.status' => 1], $joins_palestrante, $select_palestrante );
        }

        return $programacao[0];
    }
}

