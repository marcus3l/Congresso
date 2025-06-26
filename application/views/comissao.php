<!DOCTYPE html>
<html lang="pt-br">

<!-- HEADER -->
<?php $this->load->view('templates/header'); ?>

<style>
  body {
    font-family: 'FinalSix', sans-serif;
    background-color: #f8f9fa;
    background: linear-gradient(135deg, #0072f5 0%, #004aad 100%);
    color: white;
  }

  .contato-banner {
    background-color: #FFC000;
    color: white;
  }

  .patrocinio-banner {
    background-color: #fefcfb;
    background-image: url('<?= base_url("assets/imagens/17CFMG-Site-HOME.png"); ?>');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
    z-index: 1;
  }

  img {
    -webkit-user-drag: none;
    user-select: none;
    pointer-events: none;
  }

  .mensagem-patrocinio {
    font-size: 1.8rem;
    font-weight: 600;
    line-height: 1.5;
    color: #fff;
    text-align: center;
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .email-box {
    background-color: rgb(155, 113, 224);
    color: white;
    font-weight: bold;
    display: inline-flex;
    align-items: center;
    padding: 15px 25px;
    border-radius: 30px;
    margin: 35px auto 30px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    cursor: pointer;
    text-align: center;
    flex-wrap: wrap;
    max-width: 100%;
  }

  .email-box:hover {
    transform: scale(1.02);
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.25);
  }

  .email-box img {
    height: 24px;
    margin-right: 10px;
  }

  .card-contato {
    background-color: #0084FF;
    color: white;
    border-radius: 15px;
    padding: 25px 20px;
    margin: 15px 0;
    position: relative;
    box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.2);
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    cursor: pointer;
  }

  .card-contato:hover {
    transform: scale(1.02);
    box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.25);
  }

  .card-contato h5 {
    font-weight: bold;
    font-size: 1rem;
    position: absolute;
    top: -18px;
    left: 15px;
    background-color: white;
    color: #FF4DD8;
    padding: 3px 10px;
    border-radius: 10px 10px 0 0;
  }

  .card-contato p {
    margin-bottom: 5px;
    font-size: 1rem;
  }

  .card-contato .whatsapp,
  .card-contato .email {
    display: flex;
    align-items: center;
    gap: 10px;
    word-break: break-word;
  }

  .container-cards {
    max-width: 1100px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .btn-voltar {
    position: fixed;
    bottom: 30px;
    right: 30px;
    z-index: 9999;
    background-color: #FFC000;
    color: white;
    border: none;
    border-radius: 50%;
    width: 70px;
    height: 70px;
    font-size: 28px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    cursor: pointer;
    transition: background-color 0.3s, transform 0.3s;
  }

  .btn-voltar:hover {
    background-color: #e0a800;
    transform: scale(1.1);
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

  @media (max-width: 768px) {
    .btn-voltar {
      width: 55px;
      height: 55px;
      font-size: 22px;
      bottom: 20px;
      right: 20px;
    }
  }

  @media (max-width: 768px) {
    .mensagem-patrocinio {
      font-size: 1.4rem;
      line-height: 1.6;
      padding: 0 16px;
    }
  }

  @media (max-width: 480px) {
    .mensagem-patrocinio {
      font-size: 1.2rem;
      line-height: 1.6;
      padding: 0 12px;
    }
  }

  @media (min-width: 768px) {
    .card-contato {
      padding: 30px;
    }

    .card-contato h5 {
      font-size: 1.1rem;
      top: -20px;
      left: 20px;
      padding: 4px 12px;
    }

    .card-contato p {
      font-size: 1.1rem;
    }
  }

  @media (min-width: 992px) {
    .card-contato {
      padding: 35px;
    }

    .card-contato h5 {
      font-size: 1.2rem;
    }

    .card-contato p {
      font-size: 1.2rem;
    }

    .email-box {
      font-size: 1.1rem;
      padding: 18px 30px;
    }

    .email-box img {
      height: 28px;
    }
  }
</style>

<body>

  <!-- BANNER -->
  <div class="banner">
    <img src="<?= base_url('assets/imagens/banner/comissão-comercial.png'); ?>" class="camada fundo img-fluid" alt="Fundo">
  </div>

  <!-- MENSAGEM DE PATROCÍNIO -->
  <section class="container-fluid py-5 contato-banner">
    <div class="container">
      <p class="mensagem-patrocinio">
        Entre em contato para explorar as possibilidades de patrocínio que podem aumentar a visibilidade de sua marca e solidificar sua presença neste evento singular.
      </p>
    </div>
  </section>

  <!-- CARDS -->
  <section class="container-fluid patrocinio-banner">
    <!-- Email Central -->
    <div class="text-center mb-2">
      <div class="email-box">
        <img src="<?= base_url('assets/imagens/icones/email (1).png'); ?>" alt="Email" width="27">
        <a href="mailto:congresso@crfmg.org.br" style="color: white; text-decoration: none;">
          congresso@crfmg.org.br
        </a>
      </div>
    </div>

    <!-- Cards Contato -->
    <div class="container-cards pb-5">
      <div class="row g-4">

        <div class="col-md-6 col-lg-6">
          <div class="card-contato">
            <h5>APARECIDA OLIVEIRA</h5>
            <p class="whatsapp">
              <img src="<?= base_url('assets/imagens/icones/whatsapp.png'); ?>" alt="WhatsApp" width="28">
              <strong>
                <a href="https://wa.me/5533988027840" target="_blank" rel="noopener noreferrer" style="color: white; text-decoration: none;">
                  33 98802-7840
                </a>
              </strong>
            </p>
            <p class="email">
              <img src="<?= base_url('assets/imagens/icones/email (1).png'); ?>" alt="Email" width="28">
              <a href="mailto:aparecida.oliveira@crfmg.org.br" style="color: white; text-decoration: none;">
                aparecida.oliveira@crfmg.org.br
              </a>
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="card-contato">
            <h5>DENISE SOUSA</h5>
            <p class="whatsapp">
              <img src="<?= base_url('assets/imagens/icones/whatsapp.png'); ?>" alt="WhatsApp" width="28">
              <strong>
                <a href="https://wa.me/5531991432378" target="_blank" rel="noopener noreferrer" style="color: white; text-decoration: none;">
                  31 99143-2378
                </a>
              </strong>
            </p>
            <p class="email">
              <img src="<?= base_url('assets/imagens/icones/email (1).png'); ?>" alt="Email" width="28">
              <a href="mailto:denise.sousa@crfmg.org.br" style="color: white; text-decoration: none;">
                denise.sousa@crfmg.org.br
              </a>
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="card-contato">
            <h5>MAGALY LEITE</h5>
            <p class="whatsapp">
              <img src="<?= base_url('assets/imagens/icones/whatsapp.png'); ?>" alt="WhatsApp" width="28">
              <strong>
                <a href="https://wa.me/5531988690218" target="_blank" rel="noopener noreferrer" style="color: white; text-decoration: none;">
                  31 98869-0218
                </a>
              </strong>
            </p>
            <p class="email">
              <img src="<?= base_url('assets/imagens/icones/email (1).png'); ?>" alt="Email" width="28">
              <a href="mailto:magaly.leite@crfmg.org.br" style="color: white; text-decoration: none;">
                magaly.leite@crfmg.org.br
              </a>
            </p>
          </div>
        </div>

        <div class="col-md-6 col-lg-6">
          <div class="card-contato">
            <h5>RODRIGO MENEZES</h5>
            <p class="whatsapp">
              <img src="<?= base_url('assets/imagens/icones/whatsapp.png'); ?>" alt="WhatsApp" width="28">
              <strong>
                <a href="https://wa.me/5531994522545" target="_blank" rel="noopener noreferrer" style="color: white; text-decoration: none;">
                  31 99452-2545
                </a>
              </strong>
            </p>
            <p class="email">
              <img src="<?= base_url('assets/imagens/icones/email (1).png'); ?>" alt="Email" width="28">
              <a href="mailto:rodrigo.menezes@crfmg.org.br" style="color: white; text-decoration: none;">
                rodrigo.menezes@crfmg.org.br
              </a>
            </p>
          </div>
        </div>

      </div>
    </div>

  </section>

  <!-- BOTÃO DE VOLTAR -->
  <button onclick="history.back()" class="btn-voltar" aria-label="Voltar">
    <i class="fas fa-arrow-left"></i>
  </button>


</body>

<!-- FOOTER -->
<?php $this->load->view('templates/footer'); ?>

</html>