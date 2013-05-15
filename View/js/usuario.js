/*
	nome: user_name
	email: user_email
	password: pwd
	confirmacao: cpwd
	gender: male female
	register
*/


$(document).ready( function() {
	$("#register").validate({
		/* REGRAS DE VALIDAÇÃO DO FORMULÁRIO */
		rules:{
			user_name:{
				required: true, /* Campo obrigatório */
                                minlength: 10    /* No mínimo 10 caracteres */
			},
			user_email:{
				required: true, /* Campo obrigatório */
                                email: true     /* Deverá ser um email válido */
			},
			pwd:{
				required: true, /* Campo obrigatório */
					minlength: 6      /* No mínimo 6 caracteres */
			},
			
			cpwd:{
				required: true, /* Campo obrigatório */
					minlength: 6      /* No mínimo 6 caracteres */
			},	
		},

		/* DEFINIÇÃO DAS MENSAGENS DE ERRO */
		messages:{
			user_name:{
				required: "Preencha o campo <u>Nome</u>",
				minlength: "O campo <u>Nome</u> deve conter no m&iagudo;nimo 6 caracteres"
			},
			user_email:{
				required: "Preencha o campo <u>Email</u>",
				email: "O campo <u>Email</u> s&oacute; aceita emails v&aacute;lidos"
			},
			
			pwd:{
				required: "Preencha o campo <u>Senha</u>",
				minlength: "O campo <u>Senha</u> deve conter no m&iacute;nimo 6 caracteres"
			},
			
			cpwd:{
				required: "Preencha o campo <u>Confirma&ccedil;&atilde;o de Senha</u>",
				minlength: "O campo <u>Confirma&ccedil;&atilde;o de Senha</u> deve conter no m&iacute;nimo 6 caracteres"
			},
		}
	});
});

$(document).ready( function() {
	$("#login").validate({
		/* REGRAS DE VALIDAÇÃO DO FORMULÁRIO */
		rules:{
			username:{
				required: true, /* Campo obrigatório */
                                minlength: 6    /* No mínimo 6 caracteres */
			},
			password:{
				required: true, /* Campo obrigatório */
                                minlength: 6     /* No mínimo 6 caracteres */
			},
		},

		/* DEFINIÇÃO DAS MENSAGENS DE ERRO */
		messages:{
			username:{
				required: "Preencha o campo <u>Usu&aacute;rio</u>",
				minlength: "O campo <u>Usu&aacute;rio</u> deve conter no m&iacute;nimo 6 caracteres"
			},
			password:{
				required: "Preencha o campo <u>Senha</u>",
				minlength: "O campo <u>Senha</u> deve conter no m&iacute;nimo 6 caracteres"
			},
		}
	});
});