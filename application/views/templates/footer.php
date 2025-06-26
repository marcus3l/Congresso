<style>
    .fundo-rodape {
        margin-top: -1px;
        background-image:
            url('<?= base_url("assets/imagens/Ativo 2.png"); ?>'),
            linear-gradient(135deg, #f760b3, #f554ca);
        background-repeat: no-repeat, no-repeat;
        background-size: cover, cover;
        background-position: center, center;
        color: #fff;
        text-align: center;
    }

    .titulo-rodape {
        font-size: 2rem;
        font-weight: 700;
        line-height: 1.4;
        color: #ffffff;
        text-align: center;
    }

    .fundo-rodape a.btn {
        background-color: #007BFF;
        color: white;
        font-weight: bold;
        border-radius: 50px;
        padding: 12px 26px;
        font-size: 1.1rem;
    }

    .fundo-rodape a.btn:hover {
        background-color: #0056b3;
        color: white;
    }

    .fundo-rodape img {
        max-height: 60px;
    }

    .fundo-rodape .col-auto i {
        font-size: 1.3rem;
        margin: 0 8px;
    }

    .social-icons {
        gap: 1px;
        font-size: 1rem;
    }

    .social-icons a {
        text-decoration: none;
        color: white;
    }

    .social-icons a:hover {
        color: #FFD54F;
    }

    .social-icons span {
        display: flex;
        align-items: center;
        gap: 4px;
        margin-right: 35px;
    }

    .pergunta-sustentavel {
        color: #017CEC;
        font-size: 1.6rem;
        font-weight: 800;
        line-height: 1.6;
    }

    .btn-patrocinador {
        background-color: #0072F5;
        color: white;
        font-weight: 800;
        text-transform: uppercase;
        border-radius: 999px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        border: none;
        padding: 10px 30px;
        font-size: 1rem;
        white-space: nowrap;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .btn-patrocinador:hover {
        background-color: #0058c9;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
        color: white;
    }

    @media (min-width: 768px) {
        .titulo-rodape {
            font-size: 2.3rem;
        }
    }

    @media (min-width: 1200px) {
        .titulo-rodape {
            font-size: 2.5rem;
        }
    }

    @media (max-width: 768px) {
        .pergunta-sustentavel {
            font-size: 1.2rem;
            text-align: center;
            margin-bottom: 1rem;
        }
    }

    @media (max-width: 991px) {
        .titulo-rodape {
            font-size: 1.7rem;
        }

        .fundo-rodape a.btn {
            font-size: 1.05rem;
            padding: 10px 22px;
        }

        .fundo-rodape img {
            max-height: 45px;
        }

        .fundo-rodape .col-auto i {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 767px) {
        .titulo-rodape {
            font-size: 1.4rem;
        }

        .fundo-rodape a.btn {
            font-size: 1rem;
            padding: 9px 20px;
        }

        .fundo-rodape img {
            max-height: 40px;
        }
    }

    @media (max-width: 575px) {
        .titulo-rodape {
            font-size: 1.1rem;
        }

        .fundo-rodape a.btn {
            font-size: 0.95rem;
            padding: 8px 18px;
        }

        .fundo-rodape .col-auto i {
            font-size: 0.9rem;
        }

        .fundo-rodape img {
            max-height: 35px;
        }

        .fundo-rodape small {
            font-size: 0.8rem;
        }

        .fundo-rodape .col-auto.d-flex {
            gap: 10px;
            justify-content: center;
        }
    }
</style>

<!-- RODAPÉ -->
<div class="container-fluid fundo-rodape py-5 text-white text-center">
    <div class="row">
        <div class="col">
            <h4 class="titulo-rodape mb-4">
                Conecte sua marca com o maior evento<br>
                farmacêutico de Minas Gerais!
            </h4>
            <?php if ($this->uri->uri_string() !== 'comissao'): ?>
                <a href="<?= site_url('comissao'); ?>" class="btn btn-patrocinador">
                    QUERO SER PATROCINADOR
                </a>
            <?php endif; ?>
        </div>
    </div>

    <!-- Logos -->
    <div class="row my-5 justify-content-center align-items-center">
        <div class="col-auto">
            <img src="<?= base_url('assets/imagens/Ativo 23.png'); ?>" alt="Congresso" class="img-fluid logo-rodape">
        </div>
        <div class="col-auto">
            <img src="<?= base_url('assets/imagens/Ativo 24.png'); ?>" alt="CRF/MG" class="img-fluid logo-rodape">
        </div>
    </div>

    <!-- Redes sociais e contatos -->
    <div class="row justify-content-center mb-5">
        <div class="col-auto d-flex align-items-center flex-wrap justify-content-center social-icons">
            <a href="https://x.com/crfminas" class="text-white" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a>
            <a href="https://www.instagram.com/crfmg/" class="text-white" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/crfminas/" class="text-white" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://www.youtube.com/user/crfminasgerais" class="text-white" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
            <a href="https://api.whatsapp.com/send?phone=5531932181039" target="_blank" class="text-white" style="text-decoration: none;">
                <i class="fab fa-whatsapp"></i> 31 9 3218-1039
            </a>
            <span><a href="mailto:congresso@crfmg.org.br" class="text-white"><i class="fas fa-envelope"></i> congresso@crfmg.org.br</a></span>
        </div>
    </div>

    <!-- Endereço -->
    <div class="row">
        <div class="col">
            <small>
                Rua Rodrigues Caldas, 493 | CEP 30190-120 | Santo Agostinho<br>
                Belo Horizonte | Minas Gerais
            </small><br><br>
            <small>
                Conselho Regional de Farmácia do Estado de Minas Gerais – CRF/MG 2025 – Todos os direitos reservados.
            </small>
        </div>
    </div>
</div>

<!-- jquery-3.7.1 -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery-3.7.1.min.js"></script>

<!-- Bootstrap  v5.3.3 -->
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>