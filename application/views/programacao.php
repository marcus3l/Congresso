<!DOCTYPE html>
<html lang="pt-br">

<!-- HEADER -->
<?php $this->load->view('templates/header'); ?>

<style>
    .banner {
        position: relative;
        width: 100%;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .banner img {
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
        min-height: 250px;
        margin: 0;
        padding: 0;
    }

    @media (max-width: 768px) {
        .banner img {
            min-height: 165px;
        }
    }

    .select_filtro {
        width: 100%;
        background-color: #0583F2;
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 12px;
        font-weight: bold;
        text-align: center;
        font-size: 16px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease;
    }

    .box_trabalho_cientifico {
        margin-top: -1px;
        background-repeat: no-repeat;
        margin-bottom: -25px;
    }

    .box_container_trabalho_cientifico {
        background: linear-gradient(135deg, #FFC000, #FFC000);
        margin-bottom: -50px;
        padding: 40px 20px;
    }

    .titulo-programacao {
        color: #ffffff;
        font-weight: 800;
        font-size: 39px;
        text-align: center;
        margin-bottom: 25px;
    }

    .filtros-dias {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
        margin-bottom: 32px;
    }

    .filtros-dias .btn-filtro {
        padding: 18px 32px;
        border-radius: 15px;
        font-weight: bold;
        text-align: center;
        cursor: pointer;
        min-width: 140px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        border: none;
        font-size: 20px;
    }

    .filtros-dias .btn-filtro.azul {
        background-color: #0583F2;
        color: #fff;
    }

    .filtros-dias .btn-filtro.roxo {
        background-color: #8f73e0;
        color: #fff;
    }

    .filtros-dias .btn-filtro.amarelo {
        background-color: #FFC000;
        color: #fff;
    }

    .filtros-dias .btn-filtro.rosa {
        background-color: #FC5FCB;
        color: #fff;
    }

    .filtros-dias .btn-filtro:hover {
        transform: scale(1.05);
        box-shadow: 0 0 0 4px rgba(0, 0, 0, 0.05);
    }

    .bg-azul {
        background-color: #0583F2;
        color: #fff;
    }

    .bg-roxo {
        background-color: #8f73e0;
        color: #fff;
    }

    .bg-rosa {
        background-color: #FC5FCB;
        color: #fff;
    }

    .bg-amarelo {
        background-color: #FFC000;
        color: #2B2B2B;
    }

    .card-programacao {
        border-left: 6px solid #8f73e0;
        background: white;
        border-radius: 12px;
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        padding: 20px;
        margin-bottom: 25px;
        transition: transform 0.3s ease;
        font-size: 18px;
    }

    .card-programacao:hover {
        transform: translateY(-5px);
    }

    /* === RESPONSIVIDADE === */

    @media (max-width: 1024px) {
        .titulo-programacao {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .box_container_trabalho_cientifico {
            padding: 30px 15px;
            margin-bottom: -40px;
        }

        .filtros-dias {
            gap: 10px;
        }

        .filtros-dias .btn-filtro {
            padding: 10px 18px;
            min-width: 120px;
            font-size: 15px;
        }

        .card-programacao {
            font-size: 16px;
            padding: 18px 16px;
            margin-bottom: 20px;
        }
    }

    @media (max-width: 768px) {
        .filtros-dias {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
        }

        .filtros-dias .btn-filtro {
            width: calc(50% - 10px);
            text-align: center;
            font-size: 16px;
            padding: 15px 8px;
            box-sizing: border-box;
        }
    }

    @media (max-width: 400px) {
        .titulo-programacao {
            font-size: 20px;
            margin-bottom: 15px;
        }

        .select_filtro {
            font-size: 14px;
            padding: 10px;
        }

        .filtros-dias .btn-filtro {
            font-size: 16px;
            padding: 12px 10px;
        }

        .card-programacao {
            font-size: 14px;
            padding: 12px 10px;
        }
    }
</style>

<body>
    <!-- BANNER -->
    <div class="banner">
        <img src="<?= base_url('assets/imagens/banner/programacao.png'); ?>" class="camada fundo" alt="Fundo">
    </div>

    <!-- PROGRAMAÇÃO CIENTÍFICA -->
    <div class="box_container_trabalho_cientifico">
        <div class="container pt-0 pb-2">
            <!--<div class="col text-center">
                <h3 class="titulo-programacao">
                    <span class="titulo-destaque">Programação</span> Científica
                </h3>
            </div> -->

            <div class="row justify-content-center">
                <div class="col-auto">
                    <input type="radio" name="filtro_dia" value="all" id="todos" hidden checked>
                    <input type="radio" name="filtro_dia" value="02" id="dia_02" hidden>
                    <input type="radio" name="filtro_dia" value="03" id="dia_03" hidden>
                    <input type="radio" name="filtro_dia" value="04" id="dia_04" hidden>

                    <div class="filtros-dias d-flex flex-wrap justify-content-center gap-3 mt-3">
                        <label for="todos" class="btn-filtro rosa">
                            Todos os <br> dias
                        </label>
                        <label for="dia_02" class="btn-filtro roxo">
                            02/10 <br> Quinta-Feira
                        </label>
                        <label for="dia_03" class="btn-filtro roxo">
                            03/10 <br> Sexta-Feira
                        </label>
                        <label for="dia_04" class="btn-filtro roxo">
                            04/10 <br> Sábado
                        </label>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gap-2">
                <div class="col-md-3 col-10">
                    <select name="area" id="area" class="form-control select_filtro">
                        <option value="all">Todas as áreas</option>
                        <?php
                        if (isset($areas) && !empty($areas)) {
                            foreach ($areas as $area) {
                                echo "<option value=\"{$area->id}\">{$area->nome}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-4 col-10">
                    <select name="auditorio" id="auditorio" class="form-control select_filtro">
                        <option value="all">Todos os auditórios</option>
                        <?php
                        if (isset($salas) && !empty($salas)) {
                            foreach ($salas as $sala) {
                                echo "<option value=\"{$sala->id}\">{$sala->nome}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>

                <div class="col-md-3 col-10">
                    <select name="tipo_programacao" id="tipo_programacao" class="form-control select_filtro">
                        <option value="all">Tipos de programação</option>
                        <?php
                        if (isset($tipo_programacao) && !empty($tipo_programacao)) {
                            foreach ($tipo_programacao as $tipo) {
                                echo "<option value=\"{$tipo->id}\">{$tipo->nome}</option>";
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="py-4">
                <?php if (isset($programacao) && !empty($programacao)): ?>
                    <?php
                    foreach ($programacao as $pr):
                    ?>
                        <?php
                        // Montar palestrantes
                        $palestrantes = "";
                        if (!empty($pr->palestrantes)) {
                            foreach ($pr->palestrantes as $key => $palestrante) {
                                $palestrantes .= "<a href='javascript:void();' 
                        data-bs-toggle='modal' 
                        data-bs-target='#modalPalestrante'
                        data-id_palestrante='" . ($palestrante->id_palestrante ?? '') . "' 
                        data-nome='" . ($palestrante->nome ?? '') . "' 
                        data-curriculo='" . ($palestrante->curriculo ?? '') . "' 
                        data-foto='" . ($palestrante->foto ?? base_url() . 'assets/imagens/avatar/default.png') . "' 
                        data-url-instagram='" . ($palestrante->instagram ?? '') . "' 
                        data-url-linkedin='" . ($palestrante->linkedin ?? '') . "' 
                        data-url-lates='" . ($palestrante->lates ?? '') . "' 
                    >" . htmlspecialchars($palestrante->nome) . "</a>";
                                $palestrantes .= (sizeof($pr->palestrantes) - 1 == $key) ? '' : ', ';
                            }
                        }

                        // Montar áreas
                        $id_areas = "";
                        $label_areas = "";
                        if (!empty($pr->areas)) {
                            foreach ($pr->areas as $key => $area) {
                                $id_areas .= $area->id_area . ",";
                                $label_areas .= "<label class='px-2 py-1' style='margin-right:5px; background:" . htmlspecialchars($area->cor_area) . "; color:#FFF'>" . htmlspecialchars($area->area) . "</label>";
                            }
                        }
                        $id_areas = empty($id_areas) ? "0" : rtrim($id_areas, ',');
                        ?>

                        <div class="card-programacao mb-3 p-3 resultado"
                            data-id-sala="<?= htmlspecialchars($pr->id_sala) ?>"
                            data-id-tipo-programacao="<?= htmlspecialchars($pr->id_tipo_programacao) ?>"
                            data-id-areas="<?= htmlspecialchars($id_areas) ?>"
                            data-dia="<?= date('d', strtotime($pr->data_inicio)) ?>">

                            <h5 class="mb-1 text-primary"><?= htmlspecialchars($pr->nome ?? '') ?></h5>
                            <p class="mb-1 text-muted">
                                <?= date('d/m H\hi', strtotime($pr->data_inicio)) ?>
                                <?= date('d/m', strtotime($pr->data_inicio)) === date('d/m', strtotime($pr->data_fim))
                                    ? 'às'
                                    : 'até ' . date('d/m', strtotime($pr->data_fim)) ?>
                                <?= date('H\hi', strtotime($pr->data_fim)) ?>
                            </p>
                            <p class="mb-1 text-dark">Palestrante(s): <?= $palestrantes ?></p>
                            <p class="mb-1 text-dark"><?= htmlspecialchars($pr->sala) ?> - <?= htmlspecialchars($pr->tipo_programacao ?? '') ?></p>
                            <div><?= $label_areas ?></div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php
    $this->load->view('_componentes/modal-palestrante');
    ?>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            const labels = document.querySelectorAll('label[for]');
            const radios = document.querySelectorAll('input[name="filtro_dia"]');

            radios.forEach(radio => {
                radio.addEventListener('change', function() {
                    labels.forEach(label => {
                        label.classList.remove('rosa');
                        label.classList.add('roxo');
                    });

                    const selectedLabel = document.querySelector(`label[for="${this.id}"]`);
                    selectedLabel.classList.toggle('roxo');
                    selectedLabel.classList.toggle('rosa');

                    filtroResultado();
                });
            });


            document.getElementById("area").addEventListener("change", filtroResultado);
            document.getElementById("auditorio").addEventListener("change", filtroResultado);
            document.getElementById("tipo_programacao").addEventListener("change", filtroResultado);

            function filtroResultado() {

                const rows = document.querySelectorAll(".resultado");

                const selectedArea = document.getElementById("area").value;
                const selectedAuditorio = document.getElementById("auditorio").value;
                const selectedDay = document.querySelector("input[name='filtro_dia']:checked").value;
                const selectedTipoProg = document.getElementById("tipo_programacao").value;

                rows.forEach(row => {
                    const idAreas = row.getAttribute("data-id-areas").split(",");
                    const idSala = row.getAttribute("data-id-sala");
                    const day = row.getAttribute("data-dia");
                    const tipoProg = row.getAttribute("data-id-tipo-programacao");

                    const areaMatches = selectedArea === "all" || idAreas.includes(selectedArea);
                    const salaMatches = selectedAuditorio === "all" || idSala == selectedAuditorio;
                    const dayMatches = selectedDay === "all" || day == selectedDay;
                    const tipoMatches = selectedTipoProg === "all" || tipoProg == selectedTipoProg;

                    if (areaMatches && salaMatches && dayMatches && tipoMatches) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            }

        });
    </script>

</body>

<!-- FOOTER -->
<?php $this->load->view('templates/footer'); ?>

</html>