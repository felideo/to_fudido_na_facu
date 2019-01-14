<script type="text/javascript">
$(document).ready(function(){
	$('#recuperar_senha').on('click', function(){
		swal({
		  title: "Recuperação de Senha!",
		  text: "Digite seu Email",
		  type: "input",
		  showCancelButton: true,
		  closeOnConfirm: false,
		  animation: "slide-from-top",
		  inputPlaceholder: "email@email.com.br",
		  showLoaderOnConfirm: true,
		},
		function(inputValue){
			if(!validar_email(inputValue)){
				 swal.showInputError("Digite um email válido!");
		    	return false
			};


		  	if (inputValue === false) return false;

			if (inputValue === "") {
				swal.showInputError("Digite um email válido!");
				return false
			}

			$.ajax({
                type: 'POST',
                url: "<?php echo URL; ?>senha/recuperar_senha",
                data: {
                    email: inputValue
                },
                dataType: 'json',
                async: false,
                success: function(dados) {
                	window.location = "<?php echo URL . 'login'; ?>";
                }
            });
		});
	});
});
</script>