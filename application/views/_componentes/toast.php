<script>
$(function(){
   'use strict'

    <?php
    if(!empty($this->session->flashdata('show_toast'))){
        $type = $this->session->flashdata('type') ?? 'default';
        if($type == 'danger'){
            $type = 'error';
        }
        if($type == 'success'){
            $type = 'notice';
        }
    ?>
    $.growl({
      title: `<?=$this->session->flashdata('title') ?? 'Atenção!'?>`,
      message:`<?=$this->session->flashdata('text') ?? '-'?>`,
      style: `<?=$type?>`,
    });
    <?php
    }
    ?>
    
});
</script>