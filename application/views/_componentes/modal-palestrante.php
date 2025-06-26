<!-- Modal -->
<div class="modal fade" id="modalPalestrante" tabindex="-1" aria-labelledby="modalPalestranteLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalPalestranteLabel" style="display: flex; align-items: center;">
          <div class="card" style="width: 100px; height: 100px; display: flex; align-items: center; overflow: hidden;">
            <img src="#" id="modalFoto" class="border" style="width: 100%; object-fit: cover;">
          </div>
          <div class="mx-2">
            <span id="modalNome"></span>
            <br>
            <a href="#" target="_blank" id="modalLates" class="btn btn-sm btn-outline-primary d-none">Lates</a>
            <a href="#" target="_blank" id="modalInstagram" class="btn btn-sm btn-outline-primary d-none">Instagram</a>
            <a href="#" target="_blank" id="modalLinkedin" class="btn btn-sm btn-outline-primary d-none">Linkedin</a>
          </div>
        </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="modalCurriculo"></div>
        <hr>
        <div id="modalPalestras"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    var modalPalestrante = document.getElementById('modalPalestrante');

    modalPalestrante.addEventListener('show.bs.modal', async function(event) {
      var button = event.relatedTarget;

      var id = button.getAttribute('data-id_palestrante');
      var nome = button.getAttribute('data-nome');
      var foto = button.getAttribute('data-foto');
      var curriculo = button.getAttribute('data-curriculo');
      var linkedin = button.getAttribute('data-url-linkedin');
      var instagram = button.getAttribute('data-url-instagram');
      var lates = button.getAttribute('data-url-lates');

      var modalFoto = modalPalestrante.querySelector('#modalFoto');
      var modalNome = modalPalestrante.querySelector('#modalNome');
      var modalBody = modalPalestrante.querySelector('#modalCurriculo');
      var modalPalestras = modalPalestrante.querySelector('#modalPalestras');
      var modalLinkedin = modalPalestrante.querySelector('#modalLinkedin');
      var modalInstagram = modalPalestrante.querySelector('#modalInstagram');
      var modalLates = modalPalestrante.querySelector('#modalLates');

      modalBody.innerHTML = curriculo;
      modalNome.innerHTML = nome;
      modalFoto.src = foto;

      modalLinkedin.href = '';
      modalInstagram.href = '';
      modalLates.href = '';

      modalLinkedin.classList.add('d-none');
      modalInstagram.classList.add('d-none');
      modalLates.classList.add('d-none');

      if (linkedin != "") {
        modalLinkedin.href = linkedin;
        modalLinkedin.classList.remove('d-none');
      }

      if (instagram != "") {
        modalInstagram.href = instagram;
        modalInstagram.classList.remove('d-none');
      }

      if (lates != "") {
        modalLates.href = lates;
        modalLates.classList.remove('d-none');
      }

      try {

        const result = await $.ajax({
          type: "POST",
          method: 'POST',
          url: `<?= base_url() ?>programacao/palestrante/${id}`,
          dataType: 'html',
          contentType: 'application/json',
          processData: false,

          beforeSend: function() {
            console.log('carregando');
          },
          success: function(res) {
            // console.log(res);
          }
        }).done(function(res) {
          // console.log('done',res);
        }).fail(function(res) {

        }).always(function(res) {
          modalPalestras.innerHTML = res;
        });

        return result;

      } catch (error) {
        console.log('error', error);
        return false;
      }

    });

  });
</script>