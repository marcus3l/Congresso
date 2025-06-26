<!DOCTYPE html>
<html lang="pt-br">

<!-- HEADER -->
<?php $this->load->view('templates/header'); ?>

<style>

    /* ======= LOTES ======= */

    .table td:nth-child(2) {
        background-color: #04D99D;
        color: white;
        font-weight: 700;
        text-align: center !important;
        white-space: nowrap;
        padding-left: 1rem;
        padding-right: 1rem;
        max-width: 150px;
        overflow: hidden;
        text-overflow: ellipsis;
    }


    .table thead th {
        background-color: #ffca28;
        color: #000;
        font-weight: 700;
        text-transform: uppercase;
        border: none;
    }

    .lotes-bg {
        position: relative;
        background-color: #0072f5;
        color: white;
        overflow: hidden;
    }

    .subtitulo-lote {
        font-size: 1.7rem;
        font-weight: 500;
    }

    .lotes-bg::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('assets/imagens/17CFMG-Site-HOME.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.30;
        z-index: 1;
    }

    .table {
        border-collapse: collapse;
        width: 100%;
        min-width: 320px;
    }

    .table th,
    .table td {
        border: none;
    }

    .lotes-bg>* {
        position: relative;
        z-index: 2;
    }

    .rounded-table {
        border-radius: 16px;
        overflow: hidden;
        margin: 0 auto;
        max-width: 1000px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.25);
    }

    .table tbody tr:nth-child(even) {
        background-color: rgba(255, 255, 255, 0.08);
    }

    .table tbody tr:hover {
        background-color: rgba(255, 255, 255, 0.15);
        transition: background-color 0.3s ease;
    }

    .table th,
    .table td {
        padding: 1rem 1.5rem;
        vertical-align: middle;
        border-color: rgba(255, 255, 255, 0.25);
        font-size: 1.05rem;
        letter-spacing: 0.35px;
    }

    .btn-inscricao {
        background-color: #04D99D;
        color: #fff;
        font-weight: 700;
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

    .btn-inscricao:hover {
        background-color: rgb(0, 189, 135);
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
        color: #FFF;
    }

    .btn-inscricao:focus {
        outline: none;
    }

    .table-responsive {
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        max-width: 100%;
    }

    .text-end2 {
        color: #4e4d4d !important; 
    }


    @media (max-width: 575.98px) {
        .lotes-bg h1 {
            font-size: 1.8rem;
        }

        .subtitulo-lote {
            font-size: 1.1rem;
        }

        .table th,
        .table td {
            padding: 0.6rem 0.8rem;
            font-size: 0.9rem;
        }

        .btn-inscricao {
            font-size: 1rem;
            padding: 0.8rem 2rem;
            width: auto;
            min-width: 150px;
            display: inline-block;
            white-space: nowrap;
            border-radius: 999px;
        }

        .lotes-bg {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
    }

    @media (min-width: 576px) and (max-width: 767.98px) {
        .lotes-bg h1 {
            font-size: 2.2rem;
        }

        .subtitulo-lote {
            font-size: 1.3rem;
        }

        .table th,
        .table td {
            padding: 0.8rem 1rem;
            font-size: 1rem;
        }

        .btn-inscricao {
            font-size: 1.3rem;
            padding: 1.1rem 2.8rem;
            width: auto;
        }
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .lotes-bg h1 {
            font-size: 2.5rem;
        }

        .subtitulo-lote {
            font-size: 1.5rem;
        }

        .btn-inscricao {
            font-size: 1.4rem;
            padding: 1.2rem 3rem;
        }
    }

    @media (min-width: 992px) {
        .lotes-bg h1 {
            font-size: 2.8rem;
        }

        .subtitulo-lote {
            font-size: 1.7rem;
        }

        .btn-inscricao {
            font-size: 1.5rem;
            padding: 1.2rem 3rem;
        }
    }
</style>


<body>
    <!-- BANNER -->
    <div class="banner">
        <!-- Imagem de fundo -->
        <img src="<?= base_url('assets/imagens/banner/17CFMG_Site_Banner.png'); ?>" class="camada fundo" alt="Fundo">

        <!-- Bloco Azul -->
        <div class="bloco-azul">
            <h4><span class="destaque-data-2">2, 3 e 4 de outubro</span></h4>
            <h3>BELO HORIZONTE</h3>
            <p>CENTERMINAS</p>
            <a href="#" class="botao-ingresso">GARANTA SEU INGRESSO</a>
        </div>

        <!-- Imagem sobreposta -->
        <div class="bloco-imagem">
            <img src="<?= base_url('assets/imagens/Ativo 22.png'); ?>" alt="CenterMinas">
        </div>
    </div>

    <!-- FUNDO AZUL -->
    <div class="fundo-gradiente">

        <!-- Inscreva-se -->
        <section class="bg-azul-full text-center pt-2 pb-4 pt-sm-3 pb-sm-5">
            <div class="container">
                <h2 class="cta-title mb-4">
                    Transformar o futuro começa <br class="d-none d-md-block"> com um passo. <strong>O seu.</strong>
                </h2>
                <a href="#" class="btn cta-button px-5 py-3">INSCREVA-SE!</a>
            </div>
        </section>

        <!-- Benefícios -->
        <section class="bg-azul-full text-center pt-2 pb-4 pt-sm-3 pb-sm-5">
            <div class="container-narrow">
                <div class="benefits-box bg-white p-5 rounded-5 shadow">
                    <div class="row justify-content-center g-4">
                        <!-- Ícone 1 -->
                        <div class="col-6 col-md-3 text-center">
                            <img src="assets/imagens/Ativo 25.png" alt="Kit congressista" class="benefit-icon mb-3 ms-2">
                            <p class="benefit-text"><b>Kit<br>congressista</b></p>
                        </div>
                        <!-- Ícone 2 -->
                        <div class="col-6 col-md-3 text-center">
                            <img src="assets/imagens/Ativo 26.png" alt="Acesso à Expofarma" class="benefit-icon mb-3">
                            <p class="benefit-text"><b>Acesso à<br>Expofarma</b></p>
                        </div>
                        <!-- Ícone 3 -->
                        <div class="col-6 col-md-3 text-center">
                            <img src="assets/imagens/Ativo 27.png" alt="Jantar de abertura" class="benefit-icon mb-3">
                            <p class="benefit-text"><b>Jantar<br>de abertura</b></p>
                        </div>
                        <!-- Ícone 4 -->
                        <div class="col-6 col-md-3 text-center">
                            <img src="assets/imagens/Ativo 28.png" alt="Certificado" class="benefit-icon mb-3">
                            <p class="benefit-text"><b>Certificado<br>de participação</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contador -->
        <section class="contador bg-azul-full text-center pt-2 pb-4 pt-sm-3 pb-sm-5">
            <div class="container-narrow text-center">
                <h2 class="cta-title mb-4">
                    Números da última edição
                </h2>
                <div class="row justify-content-center">
                    <!-- Contadores -->
                    <!--<div class="col-6 col-md-3 mb-3">
                        <div class="box-contador">
                            <div class="titulo_circulo_contador"><span class="valor_contador">17</span></div>
                            <div class="texto_circulo_contator">anos de tradição</div>
                        </div>
                    </div>-->
                    <div class="col-6 col-md-4 mb-3">
                        <div class="box-contador">
                            <div class="titulo_circulo_contador">+<span class="valor_contador">120</span></div>
                            <div class="texto_circulo_contator">palestrantes</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <div class="box-contador">
                            <div class="titulo_circulo_contador">+<span class="valor_contador">2800</span></div>
                            <div class="texto_circulo_contator">participantes</div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 mb-3">
                        <div class="box-contador">
                            <div class="titulo_circulo_contador">+<span class="valor_contador">140</span></div>
                            <div class="texto_circulo_contator">trabalhos</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cards -->
        <section class="bg-azul-full text-center pt-2 pb-4 pt-sm-3 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center g-4">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-4">
                        <div class="card custom-card h-100 shadow">
                            <img src="assets/imagens/Ativo 8.png" class="card-img-top" alt="Imagem 1">
                            <div class="card-body text-white text-center card-content">
                                <h5 class="card-title fw-bold">ATUALIZAÇÃO E INOVAÇÃO</h5>
                                <p class="card-text small">
                                    Palestrantes renomados
                                    apresentando os principais avanços
                                    da atuação farmacêutica
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-12 col-md-4">
                        <div class="card custom-card h-100 shadow">
                            <img src="assets/imagens/Ativo 9.png" class="card-img-top" alt="Imagem 2">
                            <div class="card-body text-white text-center card-content">
                                <h5 class="card-title fw-bold">CONEXÃO E RELACIONAMENTO</h5>
                                <p class="card-text small">
                                    Oportunidade de networking entre
                                    especialistas, profissionais, empresas e
                                    instituições.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-12 col-md-4">
                        <div class="card custom-card h-100 shadow">
                            <img src="assets/imagens/Ativo 11.png" class="card-img-top" alt="Imagem 3">
                            <div class="card-body text-white text-center card-content">
                                <h5 class="card-title fw-bold">TROCA DE EXPERIÊNCIA</h5>
                                <p class="card-text small">
                                    Programação técnico-científica
                                    e de negócios estimulando reflexões e
                                    práticas sustentáveis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- SUSTENTABILIDADE -->
    <section class="sustentabilidade-section py-5 position-relative bg-white overflow-hidden">
        <div class="container-narrow position-relative text-center" style="z-index: 1;">
            <!-- Título -->
            <h2 class="titulo-sustentavel mb-4">Sustentabilidade</h2>

            <!-- Subtítulo -->
            <p class="subtitulo-sustentavel mb-2 mb-md-5 mx-auto">
                Esta é uma oportunidade de repensar <br> práticas, ampliar perspectivas e fazer <br> parte da transformação.
            </p>

            <!-- Bloco Central -->
            <div class="row justify-content-center align-items-center gy-4">
                <!-- Texto da Esquerda -->
                <div class="col-12 col-md-5 text-center text-md-end">
                    <p class="pergunta-sustentavel m-3">
                        Você já pensou
                        como sua área
                        pode ser mais
                        sustentável?
                    </p>
                </div>

                <!-- Caixa Verde -->
                <div class="col-12 col-md-7">
                    <div class="caixa-sustentavel bg-verde text-white p-4 p-md-4 rounded-4 shadow-lg text-start position-relative">
                        <span class="fw-semibold d-block mb-1">
                            Farmacêuticos podem liderar essa transformação,
                        </span>
                        <span>
                            promovendo um setor mais inovador, sustentável e humanizado.
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SUBMISSÃO DE TRABALHOS -->
    <section class="submissao-section text-white py-5">
        <div class="container text-center">
            <h2 class="titulo-submissao mb-4">SUBMISSÃO DE TRABALHOS</h2>
            <p class="data-submissao mb-4">Inscrição até <span class="destaque-data">21/07/2025</span></p>
            <p class="descricao-submissao mb-4">
                É obrigatória a participação de, pelo menos, 1 (um)
                dos autores no Congresso, sendo permitida a submissão de até 3 (três)
                resumos por inscrição.
            </p>
            <a href="#" class="btn btn-submissao px-5 py-2 fw-bold">EM BREVE</a>
        </div>
    </section>

    <!-- INFORMAÇÕES -->
    <div class="container-fluid px-0">
        <div class="row g-0">
            <div class="col-12 col-md-4 col_imagens_inicio">
                <div class="image-wrapper">
                    <a href="#mensagem-diretoria">
                        <img src="assets/imagens/Ativo 3.png" alt="Mensagem da Diretoria">
                        <div class="overlay">
                            <!--<h3>Mensagem <br>da Diretoria</h3>-->
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 col_imagens_inicio">
                <div class="image-wrapper">
                    <a href="#programacao">
                        <img src="assets/imagens/Ativo 5.png" alt="Programação Científica">
                        <div class="overlay">
                            <!--<h3>Programação <br>Científica</h3>-->
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-md-4 col_imagens_inicio">
                <div class="image-wrapper">
                    <a href="#eventos-paralelos">
                        <img src="assets/imagens/Ativo 4.png" alt="Eventos Paralelos">
                        <div class="overlay">
                            <!--<h3>Eventos <br>Paralelos</h3>-->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- LOTES -->
    <section class="container-fluid py-5 lotes-bg">
        <div class="container text-center">
            <h1 class="fw-bold mb-4 mt-2">VALORES DE INSCRIÇÃO POR LOTE</h1>
            <h3 class="subtitulo-lote fw-semibold mb-5 mt-4">Confira as Condições dos Lotes</h3>
            <div class="table-responsive">
                <table class="table table-bordered rounded-table text-white shadow">
                    <thead style="font-weight: 700;">
                        <tr>
                            <th class="text-start">Categoria</th>
                            <th class="text-end prelote-coluna">LOTE ATUAL</th>
                            <th class="text-end2">PRÓXIMO LOTE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="lateral-yellow">
                            <td class="text-start">Farmacêutico inscrito no CRF/MG</td>
                            <td class="text-end prelote-coluna">R$ 400</td>
                            <td class="text-end2">R$ 460</td>
                        </tr>
                        <tr>
                            <td class="text-start">Meia-entrada para estudantes de Farmácia</td>
                            <td class="text-end prelote-coluna">R$ 200</td>
                            <td class="text-end2">R$ 230</td>
                        </tr>
                        <tr>
                            <td class="text-start">SUS</td>
                            <td class="text-end prelote-coluna">R$ 200</td>
                            <td class="text-end2">R$ 230</td>
                        </tr>
                        <tr>
                            <td class="text-start">Outras especialidades / Farmacêuticos não-inscritos no CRF/MG</td>
                            <td class="text-end prelote-coluna">R$ 550</td>
                            <td class="text-end2">R$ 632</td>
                        </tr>
                        <tr>
                            <td class="text-start">Estudantes de outras especialidades</td>
                            <td class="text-end prelote-coluna">R$ 275</td>
                            <td class="text-end2">R$ 315</td>
                        </tr>
                    </tbody>

                </table>
            </div>
            <a href="#" class="btn-inscricao mt-5">INSCREVA-SE</a>
        </div>
    </section>
    
    <!-- JS -->
    <script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            // Função para animar o contador
            function animateCounter(element, endValue, duration) {
                let startValue = 0;
                const stepTime = Math.abs(Math.floor(duration / endValue));
                const timer = setInterval(() => {
                    startValue += 1;
                    element.textContent = startValue;
                    if (startValue >= endValue) {
                        clearInterval(timer);
                    }
                }, stepTime);
            }

            // Função para iniciar a animação quando a div contador estiver visível
            function startCounters(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Seleciona todos os elementos com a classe '.valor_contador'
                        const counters = document.querySelectorAll('.valor_contador');

                        // Define a duração da animação em milissegundos
                        const animationDuration = 1000; // 2 segundos, por exemplo

                        // Obtém o valor máximo de todos os contadores para definir a duração
                        const maxEndValue = Math.max(...Array.from(counters).map(counter => parseInt(counter.textContent, 10)));

                        // Inicia a animação para cada contador
                        counters.forEach(counter => {
                            const endValue = parseInt(counter.textContent, 10); // Obtém o valor final do contador
                            counter.textContent = '0'; // Inicializa o contador com 0
                            animateCounter(counter, endValue, animationDuration); // Inicia a animação
                        });

                        // Desativa o observer após a animação começar
                        observer.unobserve(entry.target);
                    }
                });
            }

            // Cria um Intersection Observer
            const observer = new IntersectionObserver(startCounters, {
                root: null, // Usa a viewport como root
                rootMargin: '0px', // Margem de raiz (pode ser ajustada se necessário)
                threshold: 0.1 // Percentual de visibilidade para ativar o callback
            });

            // Seleciona o elemento que deve acionar a animação
            const target = document.querySelector('.contador');

            if (target) {
                // Adiciona o elemento ao observer
                observer.observe(target);
            }
        });
    </script>

</body>

<!-- FOOTER -->
<?php $this->load->view('templates/footer'); ?>

</html>