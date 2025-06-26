<h3>Versão Atual: <?=$migrations_versao_atual?></h3>


<table class="table mt-5">
<?php
foreach($migrations_arquivos as $migration => $path){

    $explode = explode('/', $path);
    $desc    = str_replace('.php', '' , str_replace($migration.'_', '' ,end($explode)) );

?>
<tr class="<?=$migration <= $migrations_versao_atual ? 'bg-success-100' : '';?>">
    <td><?=$migration?></td>
    <td><?=$desc?></td>
    <td>
        <?php
        if ( $migration > $migrations_versao_atual ){
        ?>
        <a href="<?=base_url()?>dev/migrate/execute/<?=$migration?>" class="btn btn-success col-md-5">Executar até essa versão</a>
        <?php
        }else{
        ?>
        <!-- <a href="<?=base_url()?>dev/migrate/execute/<?=$migration-1?>" class="btn btn-danger col-md-5">Voltar para a versão anterior</a> -->
        <?php
        }
        ?>
    </td>
</tr>

<?php
}
?>
</table>



<script>


    $("#btn-cabecalho").click(function(e){
        e.preventDefault();

        Swal.fire({
                    title: "<strong>Criar Migration</strong>",
                    html: "<form>"+
                          " <div class='form-group'>"+
                          "     <input type='text' id='migration_nome_arquvio' placeholder='Nome do arquivo. Ex.: criar_tabela_usuarios' class='form-control' required>"+
                          " </div>"+

                          " <div class='form-group'>"+
                          "     <input type='text' id='migration_nome_tabela' placeholder='Nome da Tabela' class='form-control'>"+
                          " </div>"+

                          "</form>",
                    showCloseButton: true,
                    showCancelButton: true,
                    focusConfirm: false,
                    confirmButtonText: 'Cadastrar',
                    cancelButtonText: 'Cancelar',
                }).then(function(e){
                    if ( e.value ){
                        console.log('a', $("#migration_nome_tabela").val() );
                        swal.fire({type: 'success', title: 'ok'});
                    }
                });

    });


    $("#form-cadastrar-migration").submit(function(e){
        e.preventDefault();

        console.log('aqui');

    })

</script>