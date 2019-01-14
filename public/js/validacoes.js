$(document).ready(function(){
	$('.validar_email').change(function(){
		if($('.validar_email').val() == ''){
			return false;
		}

		if (!validar_email($('.validar_email').val())) {
			swal("Erro", "Digite um email válido!", "error");
			$('.validar_email').val('');
		}
	});

	$(".somente_numeros").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

    $(".somente_letras").keypress(function(e){
        var inputValue = e.which;

        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
             // let it happen, don't do anything
             return;
        }


        // allow letters and whitespaces only.
        // Letras minusculas, maiusculas sela o que, sei la o que, ç e Ç
        if(!(inputValue >= 97 && inputValue <= 122) && !(inputValue >= 65 && inputValue <= 90) && (inputValue != 199 && inputValue != 231) && (inputValue != 0 && inputValue != 0) && inputValue != 32) {
            e.preventDefault();
        }
    });

    $(".letras_e_numeros").keypress(function(e){
        var inputValue = e.which;

        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
             // let it happen, don't do anything
             return;
        }

        // allow letters and whitespaces only.
        // Letras minusculas, maiusculas sela o que, sei la o que, ç e Ç, @ e _
        if(
            //Letras minusculas
            !(inputValue >= 97 && inputValue <= 122)
            // Letras maiusculas
            && !(inputValue >= 65 && inputValue <= 90)
            //ç e Ç
            && (inputValue != 199 && inputValue != 231)
            // ???
            && (inputValue != 0 && inputValue != 0)
            // numeros
            && !(inputValue >= 48 && inputValue <= 57)
            // @, _ e .
            && (inputValue !=64 && inputValue != 95 && inputValue != 46)
            // espaço
            && inputValue != 32
        ) {
            e.preventDefault();
        }
    });

    $(".remover_caracteres_especiais").change(function(){
        var illegal = ['\\', '"', "¤", "¶", "§", "!", "#", "$", "%", "&", "'", "(", ")", "*", "+", ",", "-", "/", ":", ";", "<", "=", ">", "?", "[", "]", "^", "`", "{", "|", "}", "~", "", "æ", "Æ", "ÿ", "¢", "£", "¥", "ƒ", "ñ", "Ñ", "¿", "¬", "½", "¼", "¡", "«", "»", "¦", "ß", "µ", "±", "°", "•", "²", "€", "„", "…", "†", "‡", "ˆ", "‰", "Š", "‹", "Œ", "‘", "’", "“", "”", "–", "—", "˜", "™", "š", "›", "œ", "Ÿ", "¨", "©", "®", "¯", "³", "´", "¸", "¹", "¾", "Ð", "×", "Ø", "Ý", "Þ", "÷", "ø", "ý", "þ"];
        var string = $(this).val();

        $.each(illegal, function(index, item){
            string = string.replaceAll(item, '');
        });

        $(this).val(string);
    });

    $(".embelezar_string").change(function(){
        var string = $(this).val();
        var palavras = string.split(" ");
        var retorno = "";

        for (i = 0 ; i < palavras.length; i ++){
            to_lower = palavras[i].toLowerCase();
            to_lower = to_lower.trim();

            if(to_lower.length > 3){
                first_to_upper = to_lower.slice(0,1).toUpperCase() + to_lower.slice(1);
            }else{
                first_to_upper = to_lower;
            }

            retorno += first_to_upper;

            if (i != palavras.length-1){
                retorno+=" ";
            }
        }

        retorno[retorno.length-1] = '';
        $(this).val(retorno);
    });

});

function validar_email(email){
	var str = email;
	var filtro = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
	if(filtro.test(str)) {
		return true;
	} else {
		return false;
	}
}

String.prototype.replaceAll = function(search, replacement){
    var target = this;
    return target.split(search).join(replacement);
}



