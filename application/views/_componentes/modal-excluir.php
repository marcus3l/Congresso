<script>
    $(".modalExcluir").click(function(e){
        e.preventDefault();
       
        var id      = $(this).data('id-excluir');
        var url     = $(this).data('url-excluir');
        var text    = $(this).data('mensagem-excluir');

        Swal.fire({
            title: "Confirma exclusão?",
            html:  `${text ?? ''}<br>Essa operação não poderá ser desfeita.`,
            icon: "warning",
            showCancelButton: true,
            cancelButtonColor: "#d33",
            cancelButtonText: "Cancelar",
            confirmButtonColor: "#3085d6",
            confirmButtonText: "Excluir",
            preConfirm: async (login) => {
                try {

                    var fd = new FormData();
                    fd.append('id', id);

                    const resultAjax = await $.ajax({
                        type: "POST",
                        method: 'POST',
                        url: url,
                        data: fd,
                        dataType: 'html',
                        enctype:"multipart/form-data",
                        contentType: false,
                        processData: false,
                        beforeSend: function(){
                            // loading btn
                        },
                    });
                    return JSON.parse(resultAjax);

                } catch (error) {
                    Swal.showValidationMessage(`Falha na requisição: ${error}`);
                }
            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {
                console.log(result);
                Swal.fire({
                    title: `${result.value.title ?? 'Erro inesperado' }`,
                    text: `${result.value.message ?? '' }`,
                    icon: `${result.value.type ?? '' }`,
                }).then( (result) => {
                    if (result.isConfirmed) {
                        window.location.reload();
                    }
                });
            }
        });

    });
</script>