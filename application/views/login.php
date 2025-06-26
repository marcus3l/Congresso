<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/imagens/logo/logo.png">

    <!-- Bootstrap  v5.3.3 -->
    <link href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- sweetalert2 -->
    <link href="<?= base_url() ?>assets/plugins/sweetalert/css/sweetalert2.min.css" rel="stylesheet">

    <!-- select2 -->
    <link href="<?= base_url() ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">

    <!-- fontawesome -->
    <link href="<?= base_url() ?>assets/fontawesome/css/all.min.css" rel="stylesheet">

    <!-- toast -->
    <link href="<?= base_url() ?>assets/plugins/toast/css/jquery.growl.css" rel="stylesheet" type="text/css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --backgroud: #f8f8fc;
        }
    </style>
    <title>17º Congresso de Farmácia</title>
</head>

<body style="background-color: var(--backgroud); display: flex; flex-direction: column; min-height: 100vh; ">

    <header class="container-fluid py-3 border-bottom bg-white">
        <div class="container">
            <div class="d-flex" style="justify-content: center; align-items: center;">
                <div>
                    <a href="<?= base_url() ?>login">
                        <img src="<?= base_url() ?>assets/imagens/logo/17cf.png" class="img-fluid" alt="CRFMG" width="200">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <main style="flex: 1;">
        <div class="mb-4"></div>

        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2>Acesso Restrito</h2>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <div class="col-4 bg-white p-5 ">
                    <form action="<?= base_url() ?>entrar" method="POST" id="form">
                        <div class="input-group mb-3">
                            <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                            <div class="form-floating">
                                <input type="text" name="usuario" class="form-control <?= (form_error('usuario')) ? 'is-invalid' : ''; ?>" id="usuario" placeholder="Usuário de rede" value="<?= set_value('usuario') ?>">
                                <label for="usuario">Usuário</label>
                            </div>
                            <?= form_error('usuario', '<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                                <i id="iconToggle" class="fa-solid fa-eye"></i>
                            </span>
                            <div class="form-floating">
                                <input type="password" name="senha" class="form-control <?= (form_error('senha')) ? 'is-invalid' : ''; ?>" id="senha" placeholder="Senha de rede" value="<?= set_value('senha') ?>">
                                <label for="senha">Senha</label>
                            </div>
                            <?= form_error('senha', '<small class="text-danger pull-right w-100" style="text-align:right">', '</small>'); ?>
                        </div>

                        <div class="d-grid gap-2">
                            <button id="btn-send" type="submit" class="btn btn-success btn-sm"><i class="fa fa-check"></i> Entrar</button>
                        </div>
                        <div class="text-center mt-4">
                            <small>Utilize seu Login e senha de rede.</small>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <footer class="bg-light text-center pt-2 border-top" style="font-size: 12px;">
        <p>17º Congresso de Farmácia<br>02, 03 e 04 de Outubro de 2025<br>Conselho Regional de Farmácia do Estado de Minas Gerais</p>
    </footer>

    <!-- jquery-3.7.1 -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery-3.7.1.min.js"></script>

    <!-- Bootstrap  v5.3.3 -->
    <script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- sweetalert2 -->
    <script src="<?= base_url() ?>assets/plugins/sweetalert/js/sweetalert2.all.min.js"></script>

    <!-- select2 -->
    <script src="<?= base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>

    <!-- fontawesome -->
    <script src="<?= base_url() ?>assets/fontawesome/js/all.min.js"></script>

    <!-- toast -->
    <script src="<?= base_url() ?>assets/plugins/toast/js/jquery.growl.js" type="text/javascript"></script>


    <?php
    $this->load->view('_componentes/toast');
    $this->load->view('_componentes/sweet-alert');
    ?>

    <script>
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('senha');
            const toggleIcon = document.getElementById('iconToggle');
            const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordField.setAttribute('type', type);
            toggleIcon.classList.toggle('fa-eye');
            toggleIcon.classList.toggle('fa-eye-slash');
        });

        $(function() {
            $("#form").submit(function() {
                $("#btn-send").prop('disabled', true).html("<i class='fas fa-spinner fa-spin'></i> Aguarde");
            });
        });
    </script>

</body>

</html>