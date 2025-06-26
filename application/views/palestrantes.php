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

    /* PALESTRANTES */
    .palestrantes {
        background-color: #017CEC;
        padding: 4rem 1rem;
        position: relative;
        z-index: 1;
        overflow: hidden;
    }

    #palestrantes .container {
        margin: auto;
        padding: 50px 15px;
    }

    #palestrantes h1 {
        font-weight: 800;
        color: #ffffff;
        font-size: 2.3rem;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
    }

    .palestrante-card {
        width: 100%;
        max-width: 260px;
        padding: 2rem 1rem;
        background: rgba(4, 217, 157, 0.15);
        border: 1.5px solid rgba(4, 217, 157, 0.6);
        border-radius: 20px;
        text-align: center;
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 6px rgba(0, 224, 178, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.6s forwards;
        cursor: pointer;
    }

    .palestrante-avatar {
        width: 160px;
        height: 160px;
        margin: 0 auto 1rem;
        border-radius: 50%;
        overflow: hidden;
        padding: 5px;
        background: conic-gradient(from 0deg, #04d99d, #04d99d);
        animation: spinBorder 4s linear infinite;
        box-shadow: 0 0 20px rgba(4, 217, 157, 0.3);
    }

    .palestrante-avatar img {
        border-radius: 50%;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .palestrante-nome {
        color: #fff;
        font-size: 1.25rem;
        font-weight: 600;
        margin-top: 0.5rem;
        letter-spacing: 0.5px;
    }

    @keyframes fadeInUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes spinBorder {
        0% {
            background: conic-gradient(from 0deg, #04d99d, #04d99d);
        }

        100% {
            background: conic-gradient(from 360deg, #04d99d, #04d99d);
        }
    }

    @media (max-width: 992px) {
        .palestrante-card {
            max-width: 220px;
        }
    }

    @media (max-width: 768px) {
        #palestrantes h1 {
            font-size: 1.9rem;
        }



        .palestrante-card {
            padding: 1.5rem 1rem;
        }
    }

    @media (max-width: 576px) {
        .palestrante-card {
            max-width: 90%;
        }

        .palestrante-avatar {
            width: 130px;
            height: 130px;
        }

        #palestrantes h1 {
            font-size: 1.6rem;
        }


        @media (max-width: 400px) {
            .palestrante-avatar {
                width: 110px;
                height: 110px;
            }

            .palestrante-nome {
                font-size: 1.1rem;
            }

        }
    }
</style>

<body>
    <!-- BANNER -->
    <div class="banner">
        <img src="<?= base_url('assets/imagens/banner/palestrantes.png'); ?>" class="camada fundo img-fluid" alt="Fundo">
    </div>

    <!-- PALESTRANTES -->
    <section id="palestrantes">
        <div class="container">
            <div class="text-center mb-5">
                <h1>Conheça quem vai marcar presença no evento</h1>
            </div>

            <div class="row justify-content-center g-5">
                <?php foreach ($palestrantes as $palestrante) : ?>

                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 d-flex justify-content-center">
                        <div class="card palestrante-card"
                            data-bs-toggle="modal"
                            data-bs-target="#modalPalestrante"
                            data-id_palestrante="<?= $palestrante->id ?? '' ?>"
                            data-nome="<?= $palestrante->nome ?? '' ?>"
                            data-curriculo="<?= $palestrante->curriculo ?? '' ?>"
                            data-foto="<?= $palestrante->foto ?? base_url() . 'assets/imagens/avatar/default.png' ?>"
                            data-url-instagram="<?= $palestrante->instagram ?? '' ?>"
                            data-url-linkedin="<?= $palestrante->linkedin ?? '' ?>"
                            data-url-lates="<?= $palestrante->lates ?? '' ?>">
                            <div class="palestrante-avatar">
                                <img src="<?= $palestrante->foto ?? base_url() . 'assets/imagens/avatar/default.png' ?>"
                                    alt="<?= $palestrante->nome ?? '' ?>">
                            </div>
                            <div class="palestrante-nome">
                                <?= $palestrante->nome ?? '' ?>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php $this->load->view('_componentes/modal-palestrante'); ?>
</body>

<!-- FOOTER -->
<?php $this->load->view('templates/footer'); ?>