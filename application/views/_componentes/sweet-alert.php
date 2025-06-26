<script>
$(function(){
   'use strict'

    <?php
    if(!empty($this->session->flashdata('show_sweetalert'))){
        $type = $this->session->flashdata('type') ?? 'info';
        if($type == 'danger'){
            $type = 'error';
        }
    ?>
    Swal.fire({
        title: `<?=$this->session->flashdata('title') ?? 'Atenção!'?>`,
        icon: `<?=$type?>`,
        html: `<?=$this->session->flashdata('text') ?? ''?>`,
        showCloseButton: true,
        showCancelButton: `<?=$this->session->flashdata('showCancelButton') ?? false?>`,
        focusConfirm: false,
        confirmButtonText: `<?=$this->session->flashdata('confirmButtonText') ?? 'Ok'?>`,
        confirmButtonAriaLabel: "OK",
        cancelButtonText:  `<?=$this->session->flashdata('cancelButtonText') ?? 'Cancelar'?>`,
        cancelButtonAriaLabel: "Cancelar"
    });
    <?php
    }
    ?>

});
</script>