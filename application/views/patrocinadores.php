<!DOCTYPE html>
<html lang="pt-br">

<!-- HEADER -->
<?php $this->load->view('templates/header'); ?>

<style>
    /* BANNER */
    .banner img {
        width: 100%;
        height: auto;
        object-fit: cover;
        display: block;
        min-height: 250px;
    }

    .banner {
        position: relative;
    }

    /*.banner::after {
        content: "";
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 135px;
        background: linear-gradient(to bottom, rgba(238, 30, 30, 0), rgba(254, 252, 251, 0.87));
        z-index: 2;
    }*/

    @media (max-width: 768px) {
        .banner img {
            min-height: 165px;
        }
    }

    /* SEÇÃO DE PATROCINADORES */
    .patrocinadores-bg {
        background-color: #ffffff;
        color: #333;
        padding: 60px 20px;
    }

    .patrocinio-banner {
        background-color: #fefcfb;
        background-image: url('<?= base_url("assets/imagens/17CFMG-Site-HOME.PNG"); ?>');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        z-index: 1;
    }

    h2 {
        text-align: center;
        font-size: 2.2rem;
        font-weight: 800;
        color: #0078D4;
        margin-bottom: 10px;
    }

    .hr_custom {
        border: 2px solid #0078D4;
        width: 80px;
        margin: 0 auto 30px auto;
    }

    .imagens_png {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 25px;
        margin-bottom: 30px;
    }

    .imagens_png img {
        width: 260px;
        height: auto;
        filter: drop-shadow(2px 4px 6px rgba(0, 0, 0, 0.2));
        transition: transform 0.3s ease;
        background-color: #fff;
        padding: 13px;
        border-radius: 12px;
    }

    .imagens_png img:hover {
        transform: scale(1.05);
    }

    .btn_box_patrocionadores {
        display: inline-block;
        font-size: 1rem;
        border: 2px solid #0078D4;
        color: #0078D4;
        background-color: transparent;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        transition: all 0.3s ease;
        text-align: center;
    }

    .btn_box_patrocionadores:hover {
        background-color: #0078D4;
        color: #fff;
    }

    @media (max-width: 576px) {
        h2 {
            font-size: 1.6rem;
        }

        .imagens_png img {
            width: 180px;
        }
    }
</style>


<body>
    <!-- BANNER -->
    <div class="banner">
        <img src="<?= base_url('assets/imagens/banner/Patrocinadores.png'); ?>" class="camada fundo img-fluid" alt="Fundo">
    </div>

    <!-- PATROCINADORES -->
    <!--<section class="container-fluid patrocinio-banner patrocinadores-bg py-5">
        <h2>PLATINUM</h2>
        <hr class="hr_custom">
        <div class="imagens_png">
            <img src="assets/imagens/logo_patrocinadores/LOGOS-SITE_ICTQ.png">
            <img src="assets/imagens/logo_patrocinadores/LOGOS-SITE_PARDINI.png">
            <img src="assets/imagens/logo_patrocinadores/LOGOS-SITE_ALLCARE.png">
        </div> <br> <br>

        <h2>DIAMOND</h2>
        <hr class="hr_custom">
        <div class="imagens_png">
            <img src="<?= base_url() ?>assets/imagens/logo_patrocinadores/LOGOS-SITE_REDE INOVA.png">
            <img src="<?= base_url() ?>assets/imagens/logo_patrocinadores/LOGOS-SITE_CHRIS MEDIC.png">
        </div> <br> <br>

        <h2>SILVER</h2>
        <hr class="hr_custom">
        <div class="imagens_png">
            <img src="<?= base_url() ?>assets/imagens/logo_patrocinadores/LOGOS-SITE_REDEFARMA.png">
        </div> <br> <br>

        <h2>GOLD</h2>
        <hr class="hr_custom">
        <div class="imagens_png">
            <img src="<?= base_url() ?>assets/imagens/logo_patrocinadores/LOGOS-SITE_UBERPHARMA.png">
        </div> <br> <br>

        <h2>APOIO INSTITUCIONAL</h2>
        <hr class="hr_custom">
        <div class="imagens_png">
            <img src="<?= base_url() ?>assets/imagens/logo_patrocinadores/LOGOS-SITE_CFF.png">
            <img src="<?= base_url() ?>assets/imagens/logo_patrocinadores/LOGOS-SITE_CRFRN.png">
            <img src="<?= base_url() ?>assets/imagens/logo_patrocinadores/LOGOS-SITE_SINFRAMIG.png">
        </div> <br> <br> <br>

        <div class="bg-white">
            <div class="container">
                <div class="row">
                    <div class="col"></div>
                </div>
            </div>
        </div>

    </section>-->

</body>

<!-- FOOTER -->
<?php $this->load->view('templates/footer'); ?>