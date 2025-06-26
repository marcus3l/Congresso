<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>17° Congresso de Farmácia</title>
    <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/fontawesome/css/all.css'); ?>">
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/imagens/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/plugins/sweetalert/css/sweetalert2.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?> -->
</head>

<style>
    /* ======= FONTES ======= */
    @font-face {
        font-family: 'FinalSix';
        src: url('<?= base_url("assets/fonts/FinalSix Hairline.ttf"); ?>') format('truetype');
        font-weight: 100;
    }

    @font-face {
        font-family: 'FinalSix';
        src: url('<?= base_url("assets/fonts/FinalSix Thin.ttf"); ?>') format('truetype');
        font-weight: 200;
    }

    @font-face {
        font-family: 'FinalSix';
        src: url('<?= base_url("assets/fonts/FinalSix Light.ttf"); ?>') format('truetype');
        font-weight: 300;
    }

    @font-face {
        font-family: 'FinalSix';
        src: url('<?= base_url("assets/fonts/FinalSix Book.ttf"); ?>') format('truetype');
        font-weight: 400;
    }

    @font-face {
        font-family: 'FinalSix';
        src: url('<?= base_url("assets/fonts/FinalSix Medium.ttf"); ?>') format('truetype');
        font-weight: 500;
    }

    @font-face {
        font-family: 'FinalSix';
        src: url('<?= base_url("assets/fonts/FinalSix Bold.ttf"); ?>') format('truetype');
        font-weight: 700;
    }

    @font-face {
        font-family: 'FinalSix';
        src: url('<?= base_url("assets/fonts/FinalSix ExtraBold.ttf"); ?>') format('truetype');
        font-weight: 800;
    }

    @font-face {
        font-family: 'FinalSix';
        src: url('<?= base_url("assets/fonts/FinalSix Heavy.ttf"); ?>') format('truetype');
        font-weight: 900;
    }

    @font-face {
        font-family: 'FinalSix';
        src: url('<?= base_url("assets/fonts/FinalSix Black.ttf"); ?>') format('truetype');
        font-weight: 900;
    }


    /* ======= GERAIS ======= */
    body {
        font-family: 'FinalSix', sans-serif;
        background-color: #0072f5;
        color: white;
    }

    .container {
        width: 100%;
        padding-left: 1rem;
        padding-right: 1rem;
        margin-left: auto;
        margin-right: auto;
    }

    .container-narrow {
        max-width: 1000px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .fundo-gradiente {
        background: #0072f5;
        color: white;
        width: 100%;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .fundo-gradiente section {
        background: transparent !important;
    }

    .shadow-sm {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .text-pink {
        color: #FF67D5;
    }

    /* ======= BOTÕES ======= */
    .btn-pink {
        background-color: #ff49c5;
        border-radius: 14px;
        border: none;
    }

    .btn-pink:hover {
        background-color: #f0398b;
    }

    .btn-outline-light {
        border-radius: 14px;
    }

    .btn-pink-cta {
        background-color: #FF67D5;
        color: white;
        padding: 20px 80px;
        border: none;
        border-radius: 30px;
        font-weight: bold;
        font-size: 2.4rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        transition: background-color 0.3s ease;
        white-space: nowrap;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .btn-pink-cta:hover {
        background-color: #e456bb;
    }

    @media (max-width: 768px) {
        .btn-pink-cta {
            font-size: 1.8rem;
            padding: 16px 40px;
        }
    }


    /* ======= NAVBAR ======= */

    .navbar-nav .nav-link {
        color: white;
        transition: all 0.4s ease;
        position: relative;
        background-clip: text;
        -webkit-background-clip: text;
        -webkit-text-fill-color: white;
        text-decoration: none;
    }

    .navbar-nav .nav-link:hover {
        background-image: linear-gradient(135deg, #fceabb, #ebc565);
        -webkit-background-clip: text;
        background-clip: text;
        -webkit-text-fill-color: transparent;
        transform: translateY(-1px);
    }

    .bg-azul-full {
        background: linear-gradient(#0072f5);
        color: white;
        width: 100%;
    }

    .hamburger-lines {
        width: 24px;
        height: 18px;
        position: relative;
        display: inline-block;
    }

    .hamburger-lines .line {
        display: block;
        position: absolute;
        height: 3px;
        width: 100%;
        background-color: white;
        border-radius: 4px;
        transition: all 0.3s ease-in-out;
    }

    .hamburger-lines .line:nth-child(1) {
        top: 0;
    }

    .hamburger-lines .line:nth-child(2) {
        top: 7.5px;
    }

    .hamburger-lines .line:nth-child(3) {
        top: 15px;
    }

    .navbar-toggler[aria-expanded="true"] .line:nth-child(1) {
        transform: rotate(45deg);
        top: 7.5px;
    }

    .navbar-toggler[aria-expanded="true"] .line:nth-child(2) {
        opacity: 0;
    }

    .navbar-toggler[aria-expanded="true"] .line:nth-child(3) {
        transform: rotate(-45deg);
        top: 7.5px;
    }


    /* ======= BANNER ======= */
    .banner {
        position: relative;
        width: 100%;
        height: auto;
        overflow: hidden;
        margin: 0;
        padding: 0;
    }

    .banner .fundo {
        width: 100%;
        height: auto;
        display: block;
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

    .bloco-azul {
        position: absolute;
        top: 48%;
        left: 15%;
        background: #0072f5;
        padding: 63px;
        color: white;
        border-radius: 25px;
        width: 780px;
        z-index: 1;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .bloco-azul h2 span {
        color: #ffcb05;
        font-weight: bold;
        font-size: 45px;
    }

    .bloco-azul h3 {
        margin-top: 15px;
        margin-left: 105px;
        font-size: 30px;
        font-weight: 700;
    }

    .bloco-azul p {
        font-size: 21px;
        margin-left: 160px;
    }

    .destaque-data-2 {
        transform: translateY(-16px);
        display: inline-block;
        padding: 10px 25px;
        border: 2px solid #ffffff;
        border-radius: 50px;
        margin-left: 32px;
        color: #ffcb05;
        font-weight: bold;
        font-size: 40px;
        background-color: #0072f5;
    }

    .botao-ingresso {
        display: inline-block;
        margin-top: 10px;
        padding: 16px 47px;
        background-color: #FC5FCB;
        background-size: 200% 200%;
        background-position: left center;
        color: white;
        font-weight: 900;
        font-size: 30px;
        text-transform: uppercase;
        text-decoration: none;
        border-radius: 40px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        white-space: nowrap;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .botao-ingresso:hover {
        background-position: right center;
        background-color: #ff3992;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
        color: white;
    }



    .bloco-imagem {
        position: absolute;
        top: 50%;
        right: 0;
        width: 1030px;
        height: auto;
        z-index: 2;
    }

    .bloco-imagem img {
        width: 100%;
        height: auto;
        display: block;
    }

    @media (max-width: 1024px) {
        .banner {
            padding: 0px;
        }

        .bloco-azul {
            position: relative;
            top: auto;
            left: auto;
            width: 85%;
            padding: 30px 100px;
            margin: 0 auto;
            margin-top: 30px !important;
            text-align: center;
            border-radius: 20px;
            background-color: #04D99D;
            color: #0072f5;
        }

        .bloco-azul h4,
        .bloco-azul h3,
        .bloco-azul p {
            margin: 0 auto;
        }

        .destaque-data-2 {
            font-size: 40pxx;
            padding: 16px 28px;
            margin: 12px auto 0;
            display: inline-block;
            border-radius: 50px;
            color: #ff4fc1;
            border: 2px solid #ffffff;
        }

        .bloco-azul h3 {
            font-size: 25px;
            margin-top: 0;
        }

        .bloco-azul p {
            font-size: 16px;
            margin-top: 8px;
        }

        .botao-ingresso {
            font-size: 19px;
            padding: 22px 45px;
            margin-top: 20px;
            background: linear-gradient(135deg, #ff4fc1, #f973c4);
            color: white;
        }

        .botao-ingresso:hover {
            background: linear-gradient(135deg, #f82fb9, #ff66c3);
        }

        .bloco-imagem {
            display: none;
        }
    }

    @media (max-width: 768px) {
        .bloco-azul {
            background-color: #04D99D;
            color: #ffffff;
            margin-top: 30px !important;
        }

        .destaque-data-2 {
            color: #ff4fc1;
            border: none;

        }

        .botao-ingresso {
            background: linear-gradient(135deg, #ff4fc1, #f973c4);
            color: white;
        }

        .botao-ingresso:hover {
            background: linear-gradient(135deg, #f82fb9, #ff66c3);
        }
    }

    @media (max-width: 768px) {

        .bloco-azul {
            position: relative;
            top: auto;
            left: auto;
            width: 85%;
            padding: 30px 20px;
            margin: 0 auto;
            text-align: center;
            border-radius: 20px;
        }

        .bloco-azul h4,
        .bloco-azul h3,
        .bloco-azul p {
            margin: 0 auto;
        }

        .destaque-data-2 {
            font-size: 25px;
            padding: 12px 20px;
            margin-left: 0;
            transform: none;
            border: none;
        }

        .bloco-azul h3 {
            font-size: 20px;
            margin-top: 15px;
        }

        .bloco-azul p {
            font-size: 16px;
            margin-top: 8px;
        }

        .botao-ingresso {
            font-size: 18px;
            padding: 12px 35px;
            margin-top: 20px;
        }

        .bloco-imagem {
            display: none;
        }
    }

    @media (max-width: 480px) {

        .destaque-data-2 {
            font-size: 25px;
            padding: 12px 19px;
            border: none;
        }

        .botao-ingresso {
            font-size: 16px;
            padding: 10px 28px;
        }

        .bloco-azul h3 {
            font-size: 18px;
        }

        .bloco-azul p {
            font-size: 15px;
        }
    }


    /* ======= CTA SEÇÃO ======= */
    .cta-section {
        background-color: #0072f5;
        color: white;
        position: relative;
    }

    .cta-title {
        font-size: 2.85rem;
        font-weight: 700;
        line-height: 1.4;
    }

    .cta-button {
        background-color: #FC5FCB;
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

    .cta-button:hover {
        background-color: #ff3992;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
        color: white;
    }


    @media (max-width: 991px) {

        .btn-congressista:active,
        .cta-button:active {
            background-color: #ff3992 !important;
            color: #fff !important;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }
    }

    @media (max-width: 991px) {
        .cta-title {
            font-size: 2.2rem;
            line-height: 1.3;
        }

        .cta-button {
            font-size: 1.8rem;
            padding: 0.9rem 2.5rem;
        }
    }

    @media (max-width: 767px) {
        .cta-title {
            font-size: 1.9rem;
            line-height: 1.3;
        }

        .cta-button {
            font-size: 1.5rem;
            padding: 0.8rem 2rem;
        }
    }

    @media (max-width: 575px) {
        .cta-title {
            font-size: 1.6rem;
            line-height: 1.2;
        }

        .cta-button {
            font-size: 1.25rem;
            padding: 0.7rem 1.6rem;
        }
    }

    /* ======= BENEFÍCIOS ======= */
    /* Caixa geral */
    .benefits-box-custom {
        background: #ffffff;
        border-radius: 1.5rem;
        padding: 2rem 1.5rem;
        box-shadow: 0 12px 32px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }

    .benefits-box-custom:hover {
        transform: translateY(-6px);
        box-shadow: 0 16px 40px rgba(0, 0, 0, 0.12);
    }

    /* Ícones com sombra */
    .benefit-icon {
        height: 65px;
        width: 65px;
        object-fit: contain;
        filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.15));
        transition: transform 0.3s ease;
    }

    /* Texto geral do benefício */
    .benefit-text {
        color: #FF67D5;
        font-size: 1.1rem;
        line-height: 1.4;
        font-weight: 500;
        margin: 0;
    }

    /* Destaque em negrito */
    .benefit-text b {
        font-family: 'FinalSix', sans-serif;
        font-weight: 800;
        font-size: 1.2rem;
        display: block;
        margin-bottom: 0.2rem;
        color: #FF67D5;
    }

    @media (min-width: 1200px) {
        .benefit-icon {
            height: 75px;
            width: 75px;
        }

        .benefit-text {
            font-size: 1.2rem;
        }

        .benefit-text b {
            font-size: 1.3rem;
        }
    }

    @media (min-width: 768px) and (max-width: 1199px) {
        .benefit-icon {
            height: 65px;
            width: 65px;
        }

        .benefit-text {
            font-size: 1.05rem;
        }

        .benefit-text b {
            font-size: 1.15rem;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .benefit-icon {
            height: 60px;
            width: 60px;
        }

        .benefit-text {
            font-size: 1rem;
        }

        .benefit-text b {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 575px) {
        .benefit-icon {
            height: 50px;
            width: 50px;
        }

        .benefit-text {
            font-size: 0.95rem;
        }

        .benefit-text b {
            font-size: 1rem;
        }

        .benefits-box {
            padding: 1.5rem 1rem;
        }
    }


    /* ======= CONTADOR ======= */
    .box-contador {
        border: 2px solid white;
        border-radius: 16px;
        padding: 20px 5px;
        color: white;
        background-color: transparent;
        font-weight: bold;
    }

    .titulo_circulo_contador {
        font-size: 2.5rem;
        font-weight: 700;
    }

    .texto_circulo_contator {
        font-size: 1rem;
        text-transform: lowercase;
    }

    @media (min-width: 1200px) {
        .titulo_circulo_contador {
            font-size: 2.7rem;
        }

        .texto_circulo_contator {
            font-size: 1.1rem;
        }

        .box-contador {
            padding: 25px 10px;
        }
    }

    @media (min-width: 768px) and (max-width: 1199px) {
        .titulo_circulo_contador {
            font-size: 2.4rem;
        }

        .texto_circulo_contator {
            font-size: 1rem;
        }

        .box-contador {
            padding: 20px 8px;
        }
    }

    @media (min-width: 576px) and (max-width: 767px) {
        .titulo_circulo_contador {
            font-size: 2.2rem;
        }

        .texto_circulo_contator {
            font-size: 0.95rem;
        }

        .box-contador {
            padding: 18px 6px;
        }
    }

    @media (max-width: 575px) {
        .titulo_circulo_contador {
            font-size: 2rem;
        }

        .texto_circulo_contator {
            font-size: 0.9rem;
        }

        .box-contador {
            padding: 16px 4px;
        }
    }



    /* ======= CARDS ======= */
    .custom-card {
        border-radius: 25px;
        overflow: hidden;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
        background-color: white;
        border: none;
    }

    .custom-card:hover {
        transform: translateY(-10px) scale(1.03);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    }

    .custom-card img {
        height: 200px;
        object-fit: cover;
        width: 100%;
        display: block;
        border: none;
    }

    .card-content {
        background: linear-gradient(135deg, rgb(255, 82, 206), rgb(248, 131, 199));
        padding: 1.2rem;
        color: white;
        text-align: center;
    }

    .card-content h5 {
        margin-bottom: 0.5rem;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 1rem;
        letter-spacing: 1px;
    }

    .card-content p {
        margin: 0;
        font-size: 0.9rem;
    }



    /* ======= SUSTENTABILIDADE ======= */
    .sustentabilidade-section {
        position: relative;
        background-color: #ffffff;
        background-image: url('assets/imagens/17CFMG-Site-HOME.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        z-index: 0;
    }

    .titulo-sustentavel {
        color: #00E0B2;
        font-size: 2rem;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 2rem;
    }

    .subtitulo-sustentavel {
        color: #00E0B2;
        font-size: 1.1rem;
        font-weight: 500;
    }

    .pergunta-sustentavel {
        color: #017CEC;
        font-size: 1rem;
        font-weight: 800;
        line-height: 1.5;
        text-align: center;
        margin: 1rem 0;
    }

    .caixa-sustentavel {
        border-left: 4px solid #003366;
        background-color: #00E0B2;
        color: #ffffff;
        font-size: 1rem;
        line-height: 1.6;
        padding: 1.5rem;
        text-align: center;
    }

    .caixa-sustentavel span.fw-semibold {
        color: #017CEC;
        font-size: 1.2rem;
        font-weight: 700;
        display: block;
        margin-bottom: 0.5rem;
    }

    .caixa-sustentavel span:not(.fw-semibold) {
        color: #ffffff;
        font-size: 1.1rem;
        text-shadow: 0.5px 0.5px 2px rgba(0, 0, 0, 0.25);
    }

    .container-narrow {
        padding-left: 1rem;
        padding-right: 1rem;
    }


    @media (min-width: 576px) {
        .titulo-sustentavel {
            font-size: 2.4rem;
            margin-bottom: 3rem;
        }

        .subtitulo-sustentavel {
            font-size: 1.3rem;
        }

        .caixa-sustentavel {
            font-size: 1.1rem;
        }

        .caixa-sustentavel span.fw-semibold {
            font-size: 1.3rem;
        }
    }

    @media (min-width: 768px) {
        .titulo-sustentavel {
            font-size: 2.6rem;
            margin-bottom: 4rem;
        }

        .subtitulo-sustentavel {
            font-size: 1.5rem;
        }

        .pergunta-sustentavel {
            font-size: 1.3rem;
            text-align: end;
        }

        .caixa-sustentavel {
            font-size: 1.2rem;
            text-align: left;
            padding: 2rem;
            border-left: 6px solid #017CEC;
        }

        .caixa-sustentavel span.fw-semibold {
            font-size: 1.5rem;
        }

        .caixa-sustentavel span:not(.fw-semibold) {
            font-size: 1.3rem;
        }

        .container-narrow {
            padding-left: 2rem;
            padding-right: 2rem;
        }
    }

    /* Telas grandes (≥992px) */
    @media (min-width: 992px) {
        .titulo-sustentavel {
            font-size: 2.7rem;
            margin-bottom: 5rem;
        }

        .subtitulo-sustentavel {
            font-size: 1.7rem;
        }

        .pergunta-sustentavel {
            font-size: 1.5rem;
        }

        .caixa-sustentavel {
            font-size: 1.3rem;
        }

        .caixa-sustentavel span.fw-semibold {
            font-size: 1.6rem;
        }
    }

    @media (min-width: 1200px) {
        .titulo-sustentavel {
            font-size: 2.9rem;
            margin-bottom: 6rem;
        }

        .subtitulo-sustentavel {
            font-size: 2rem;
        }

        .pergunta-sustentavel {
            font-size: 1.6rem;
        }

        .caixa-sustentavel {
            font-size: 1.4rem;
        }

        .caixa-sustentavel span.fw-semibold {
            font-size: 1.7rem;
        }

        .caixa-sustentavel span:not(.fw-semibold) {
            font-size: 1.4rem;
        }
    }



    /* ======= SUBMISSÃO ======= */

    .btn-submissao {
        background-color: #FC5FCB;
        color: white;
        border: none;
        border-radius: 30px;
        font-size: 1.5rem;
        font-weight: 800;
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        padding: 20px 80px;
        white-space: nowrap;
        text-decoration: none;
        display: inline-block;
        text-align: center;
    }

    .btn-submissao:hover {
        background-color: #ff3992;
        box-shadow: 0 12px 28px rgba(0, 0, 0, 0.35);
        color: white;
    }

    .submissao-section {
        position: relative;
        overflow: hidden;
        background-image:
            url('assets/imagens/Ativo 2.png'),
            linear-gradient(135deg, rgb(131, 55, 253), rgb(107, 59, 248));
    }

    .titulo-submissao {
        font-size: 2.9rem;
        font-weight: 700;
        text-transform: uppercase;
        color: white;
    }

    .data-submissao {
        font-size: 1.9rem;
        font-weight: 500;
    }

    .destaque-data {
        color: #FFD54F;
        font-weight: 700;
    }

    .destaque-data-2 {
        color: #FFD54F;
        font-weight: 700;
    }

    .descricao-submissao {
        max-width: 720px;
        margin: 0 auto;
        font-size: 1.1rem;
        line-height: 1.6;
        color: #ffffffcc;
    }

    @media (max-width: 991px) {

        .btn-submissao:active,
        .cta-button:active {
            background-color: #ff3992 !important;
            color: #fff !important;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.25);
        }
    }

    @media (max-width: 991px) {
        .titulo-submissao {
            font-size: 2.4rem;
        }

        .data-submissao {
            font-size: 1.6rem;
        }

        .descricao-submissao {
            font-size: 1rem;
        }

        .btn-submissao {
            font-size: 1.1rem;
            padding: 10px 20px;
        }
    }

    @media (max-width: 767px) {
        .titulo-submissao {
            font-size: 2rem;
        }

        .data-submissao {
            font-size: 1.4rem;
        }

        .descricao-submissao {
            font-size: 0.95rem;
            padding: 0 10px;
        }

        .btn-submissao {
            font-size: 1rem;
            padding: 10px 18px;
        }
    }

    @media (max-width: 575px) {
        .titulo-submissao {
            font-size: 1.7rem;
        }

        .data-submissao {
            font-size: 1.2rem;
        }

        .descricao-submissao {
            font-size: 0.9rem;
        }

        .btn-submissao {
            font-size: 0.95rem;
            padding: 8px 16px;
        }
    }


    /* ======= INFORMAÇÕES ======= */
    .image-wrapper {
        position: relative;
        width: 100%;
        height: 450px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }

    .image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease, filter 0.5s ease;
    }

    .image-wrapper:hover img {
        transform: scale(1.05);
        filter: brightness(0.85);
    }

    .overlay {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: #FFF;
        font-size: 2rem;
        text-align: center;
        pointer-events: none;
        text-transform: uppercase;
        text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
        transition: opacity 0.3s ease;
    }

    .image-wrapper:hover .overlay {
        opacity: 1;
    }

    .col_imagens_inicio {
        padding: 0;
        margin: 0;
    }
</style>

<!-- NAV -->
<nav class="navbar navbar-expand-lg bg-azul-full py-2">
    <div class="container px-1 d-flex align-items-center justify-content-between">

        <!-- LOGO -->
        <a class="navbar-brand me-5 p-4" href="<?= base_url() ?>">
            <img src="<?= base_url('assets/imagens/Ativo 23.png'); ?>" alt="Logo" height="45">
        </a>

        <!-- BOTÃO MOBILE -->
        <button class="navbar-toggler custom-toggler border-0 px-3 py-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-label="Toggle navigation" aria-expanded="false">
            <span class="hamburger-lines">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex flex-column flex-lg-row flex-grow-1 align-items-center gap-5 py-3 py-lg-">
                <ul class="navbar-nav flex-column flex-lg-row align-items-center gap-3 text-center">
                    <!--<li class="nav-item">
                        <a class="btn btn-pink text-white fw-bold px-3 py-1" href="<?= base_url() ?>">INSCRIÇÃO</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white px-2" href="<?= base_url('evento') ?>">O Evento</a></li>
                    <li class="nav-item"><a class="nav-link text-white px-2" href="<?= base_url('palestrantes') ?>">Palestrantes</a></li>
                    <li class="nav-item"><a class="nav-link text-white px-2" href="<?= base_url('programacao') ?>">Programação</a></li>
                    <li class="nav-item"><a class="nav-link text-white px-2" href="<?= base_url('trabalhos') ?>">Trabalhos Científicos</a></li>
                    <li class="nav-item"><a class="nav-link text-white px-2" href="<?= base_url('patrocinadores') ?>">Patrocinadores</a></li>-->
                </ul>
                <div class="d-none d-lg-block ms-5 ms-auto">
                    <a class="btn btn-outline-light px-3 py-1" href="#">LOGIN</a>
                </div>
            </div>
        </div>
    </div>
</nav>

</head>