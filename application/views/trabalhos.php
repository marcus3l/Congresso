<!DOCTYPE html>
<html lang="pt-br">

<!-- HEADER -->
<?php $this->load->view('templates/header'); ?>

<style>
    .trabalhos-bg {
        background:
            linear-gradient(135deg, #9253f8, #a384ff);
        background-size: contain, cover;
        background-blend-mode: lighten;
        color: white;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
    }

    .btn-congressista {
        background-color: #ffc107;
        color: #000;
        font-weight: 800;
        font-size: 1.4rem;
        text-transform: uppercase;
        border-radius: 999px;
        padding: 1.2rem 3rem;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        transition: background-color 0.3s ease, box-shadow 0.3s ease, color 0.3s ease;
        border: none;
        white-space: nowrap;
        text-decoration: none;
        display: inline-block;
        text-align: center;

        -webkit-tap-highlight-color: transparent;
        -webkit-touch-callout: none;
        user-select: none;
    }

    .btn-congressista:hover {
        background-color: #ffe600;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
        color: #000;
    }

    .btn-congressista:focus {
        outline: none;
    }

    .cta-button {
        background-color: #FF67D5;
        color: white;
        font-weight: 800;
        font-size: 2.2rem;
        text-transform: uppercase;
        border-radius: 999px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        border: none;
        padding: 20px 80px;
        white-space: nowrap;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

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

    @media (max-width: 991px) {

        .btn-congressista:active,
        .cta-button:active {
            background-color: #ffe600 !important;
            color: #000 !important;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }
    }

    @media (max-width: 575.98px) {
        .trabalhos-bg h1 {
            font-size: 1.8rem;
        }

        .trabalhos-bg p.fs-3 {
            font-size: 1.1rem;
        }

        .trabalhos-bg p.fs-4 {
            font-size: 1rem;
        }

        .btn-congressista {
            font-size: 1rem;
            padding: 0.8rem 2rem;
        }
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
        .trabalhos-bg h1 {
            font-size: 2.2rem;
        }

        .trabalhos-bg p.fs-3 {
            font-size: 1.3rem;
        }

        .trabalhos-bg p.fs-4 {
            font-size: 1.1rem;
        }

        .btn-congressista {
            font-size: 1.2rem;
            padding: 1rem 2.5rem;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .trabalhos-bg h1 {
            font-size: 2.5rem;
        }

        .btn-congressista {
            font-size: 1.3rem;
        }
    }

    @media (min-width: 992px) {
        .trabalhos-bg h1 {
            font-size: 2.8rem;
        }

        .btn-congressista {
            font-size: 1.4rem;
            padding: 1.2rem 3rem;
        }
    }
</style>

<body>

    <!-- BANNER -->
    <div class="banner">
        <img src="<?= base_url('assets/imagens/banner/trabalhos.png'); ?>" class="camada fundo img-fluid" alt="Fundo">
    </div>

    <!-- SUBMISSÃO DE TRABALHOS -->
    <section class="container-fluid py-5 trabalhos-bg">
        <div class="container text-center">
            <!--<h1 class="fw-bold mb-4">SUBMISSÃO DE TRABALHOS</h1>-->
            <p class="fs-3">
                Vai até o dia <span class="text-warning fw-bold">21/07/2025</span>,
                o prazo para submissões dos resumos de trabalhos científicos ou relatos
                de experiência para o Congresso.
            </p> <br>
            <p class="fs-4">
                Para se inscrever, é só acessar a <strong>ÁREA DO CONGRESSISTA</strong>.
                É obrigatória a inscrição de pelo menos 1 (um) dos autores no Congresso,
                sendo permitida a submissão de até 3 (três) resumos por inscrição.
            </p>
            <a href="#" class="btn btn-congressista fw-bold mt-3 px-5 py-3">
                ÁREA DO CONGRESSISTA
            </a>
        </div>
    </section>

</body>

<!-- FOOTER -->
<?php $this->load->view('templates/footer'); ?>