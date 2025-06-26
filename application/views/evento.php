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

    .mensagem-diretoria {
        background: linear-gradient(135deg, #f155c8, #f155c8);
        padding: 70px 20px;
        color: #fff;
    }

    .container-diretoria {
        max-width: 1400px;
        margin: 0 auto;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        gap: 60px;
    }

    .imagem-diretoria {
        flex: 1 1 400px;
        text-align: center;
        position: relative;
        margin-right: 55px;
    }

    .imagem-diretoria img {
        max-width: 110%;
        border-radius: 12px;
        z-index: 2;
        position: relative;
    }

    .texto-diretoria {
        flex: 1 1 500px;
    }

    .texto-diretoria h2 {
        font-size: 52px;
        font-weight: 800;
        margin-bottom: 36px;
        color: #fff;
        line-height: 1.2;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .texto-diretoria h2 .destaque {
        color: #FFC000;
    }

    .texto-diretoria p {
        margin-bottom: 16px;
        font-size: 18px;
        line-height: 1.6;
    }


    @media (max-width: 992px) {
        .container-diretoria {
            flex-direction: column-reverse;
            text-align: center;
            align-items: center;
            gap: 20px;
            padding: 0 15px;
        }

        .imagem-diretoria {
            margin-right: 0;
        }

        .imagem-diretoria {
            margin-right: 0;
            flex: 1 1 200px;
        }

        .imagem-diretoria img {
            max-width: 100%;
            margin-right: 0;
            flex: 1 1 200px;
            height: auto;
            border-radius: 12px;
        }

        .texto-diretoria {
            flex: 1 1 auto;
            padding: 0;
        }

        .texto-diretoria h2 {
            font-size: 28px;
            margin-bottom: 20px;
        }

        .texto-diretoria p {
            font-size: 16px;
            margin-bottom: 12px;
            line-height: 1.5;
        }

        .mensagem-diretoria {
            padding: 40px 15px;
        }
    }

    @media (max-width: 576px) {
        .container-diretoria {
            flex-direction: column-reverse;
            align-items: center;
            text-align: center;
            gap: 16px;
            padding: 0 5px;
        }

        @media (max-width: 576px) {
            .imagem-diretoria {
                margin: 0;
                flex: 1 1 40px;
            }
        }

        .imagem-diretoria {
            margin: 0;
        }

        .imagem-diretoria img {
            max-width: 100%;
            height: auto;
            border-radius: 12px;
        }

        .texto-diretoria {
            padding: 0;
        }

        .texto-diretoria h2 {
            font-size: 26px;
            line-height: 1.2;
            margin-bottom: 20px;
            /* reduzido */
        }

        .texto-diretoria p {
            font-size: 15px;
            line-height: 1.5;
            margin-bottom: 12px;
            /* reduzido */
        }

        .mensagem-diretoria {
            padding: 30px 15px;
        }
    }


    .box_evento {
        margin-top: -1px;
        background: url('<?= base_url() ?>assets/imagens/paginas/fundo_trabalho_cientifico.png') no-repeat;
        background-size: cover;
        background-position: center;
    }

    #eventos-paralelos {
        position: relative;
        padding: 40px 20px;
    }

    #eventos-paralelos .container {
        text-align: center;
        max-width: 1200px;
        margin: 0 auto;
    }

    #eventos-paralelos .titulo-eventos-paralelos {
        font-size: 41px;
        font-weight: 800;
        margin-bottom: 25px;
        color: #FFC000;
        line-height: 1.2;
        text-transform: uppercase;
        letter-spacing: 1px;

    }

    #eventos-paralelos .descricao-grande,
    #eventos-paralelos .descricao-media {
        font-size: 1.2rem;
        margin-bottom: 15px;
    }

    #eventos-paralelos .lista-eventos {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 20px;
        margin-top: 10px;
    }

    #eventos-paralelos .evento-item {
        padding: 15px 30px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        text-align: center;
        flex: 1 1 250px;
        max-width: 300px;
    }

    #eventos-paralelos .evento-item.evento-1 {
        background: #FFC000;
        color: #000;
    }

    #eventos-paralelos .evento-item.evento-2 {
        background: #FC5FCB;
        color: #FFF;
    }

    #eventos-paralelos .evento-item.evento-3 {
        background: #00E0B2;
        color: #FFF;
    }

    #eventos-paralelos .botao-inscricao {
        text-decoration: none;
        background: #FFC000;
        color: #000;
        padding: 15px 30px;
        margin-top: 30px;
        border-radius: 10px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        transition: background-color 0.3s ease;
        width: 100%;
        max-width: 350px;
        margin-left: auto;
        margin-right: auto;
    }

    #eventos-paralelos .botao-inscricao:hover {
        background: #FC5FCB;
        color: #fff;
    }

    @media (max-width: 768px) {
        #eventos-paralelos .titulo-eventos-paralelos {
            font-size: 2rem;
        }

        #eventos-paralelos .descricao-grande,
        #eventos-paralelos .descricao-media {
            font-size: 1rem;
        }

        #eventos-paralelos .evento-item {
            padding: 12px 20px;
            font-size: 0.9rem;
        }
    }

    @media (max-width: 480px) {
        #eventos-paralelos .titulo-eventos-paralelos {
            font-size: 1.5rem;
        }

        #eventos-paralelos .evento-item {
            flex: 1 1 100%;
            max-width: 100%;
            margin: 5px 0;
        }

        #eventos-paralelos .botao-inscricao {
            width: 100%;
            font-size: 0.95rem;
            padding: 12px;
        }
    }
</style>

<body>
    <!-- BANNER -->
    <div class="banner">
        <!-- Imagem de fundo -->
        <img src="<?= base_url('assets/imagens/banner/Evento.png'); ?>" class="camada fundo" alt="Fundo">
    </div>

    <!-- MENSAGEM DA DIRETORIA -->
    <section class="mensagem-diretoria">
        <div class="container-diretoria">
            <div class="imagem-diretoria">
                <img src="<?= base_url('assets/imagens/diretoria_crfmg-3.png'); ?>" alt="Foto da diretoria">
            </div>
            <div class="texto-diretoria">
                <h2>MENSAGEM DA <span class="destaque">DIRETORIA</span></h2>
                <p>
                    A preparação de nosso Congresso está a todo vapor. São muitas mãos preparando o melhor para você, congressista!
                    Lá nos reuniremos com especialistas renomados que compartilharão suas experiências, fomentando o conhecimento e estimulando a produção científica.
                </p>
                <p>
                    Que aproveitemos ao máximo esses dias de aprendizado, trocas e networking, fortalecendo nossa rede de profissionais comprometidos com a saúde e o bem-estar da população.
                </p>
                <p>
                    Desejamos a todos um excelente Congresso e que as discussões iniciadas neste fórum reverberem em nossas ações diárias, promovendo avanços significativos na assistência farmacêutica em Minas Gerais.
                </p>
                <p><strong>A diretoria</strong></p>
            </div>
        </div>
    </section>

    <!-- EVENTOS PARALELOS-->
    <section class="box_evento" id="eventos-paralelos">
        <div class="container  text-center">
            <div class="row">
                <div class="col d-flex justify-content-center">
                    <h2 class="titulo-eventos-paralelos">EVENTOS PARALELOS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="descricao-grande">O Congresso Mineiro de Farmácia chega em sua sexta edição com o compromisso de honrar a tradição e proporcionar uma experiência ainda mais enriquecedora aos participantes.</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="descricao-media">Para além dos cursos práticos e teóricos, palestras envolventes, oficinas interativas, mesas-redondas de alto nível e workshops, a programação científica engloba prestigiados eventos como:</div>
                </div>
            </div>
            <div class="row my-3 lista-eventos">
                <div class="col evento-item evento-1">I ENCONTRO DO VAREJO FARMACÊUTICO</div>
                <div class="col evento-item evento-2">II ENLAC – ENCONTRO DE LABORATÓRIOS DE ANÁLISES CLÍNICAS</div>
                <div class="col evento-item evento-3">VI FÓRUM DE FARMÁCIA CLÍNICA NO SUS</div>
            </div>

            <div class="row text-center d-flex justify-content-center">
                <a href="#" class="botao-inscricao my-2 text-center">GARANTA SEU INGRESSO</a>
            </div>
        </div>
    </section>
</body>

</html>
<!-- FOOTER -->
<?php $this->load->view('templates/footer'); ?>