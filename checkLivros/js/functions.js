/*------------------------------------------------------------------------------------------------------
Nome do projeto: Check Livros
Descrição: 

Autores:

Turma: 3TID
Matheus Felix Carlos                                                         Versão: 1.0                    
Hebert Victor Saravalle                                                      Data:20/06/21
Kaike Santos Coppola 

-----------------------------------------------------------------------------------------------------------*/

function enableMobileNav() {
	var x = document.getElementById("mobileLinks");
	if (x.style.display === "block") {
		x.style.display = "none";
	} else {
		x.style.display = "block";
	}
}

function enableContactForm(x) {
	if (x == 1) {
		document.getElementById("form-1").style.display = "block";
		document.getElementById("contato-container").style.display = "none";
	} else if (x == 2) {
		document.getElementById("form-2").style.display = "block";
		document.getElementById("contato-container").style.display = "none";
	} else {
		document.getElementById("form-1").style.display = "none";
		document.getElementById("form-2").style.display = "none";
		document.getElementById("contato-container").style.display = "block";
	}
}

function mostrarOcultarSenha() {
	var senha = document.getElementById("pwd");

	if(senha.type == "password"){
		senha.type = "text";

	}else{
		senha.type = "password";
	}

	var senha2 = document.getElementById("S3");
	if(senha2.type == "password"){
		senha2.type = "text";
	}else{
		senha2.type = "password";
	}
}



var slideIndex1 = 0;
showSlides1();

function showSlides1() {
	var i;
	var slides = document.getElementsByClassName("mySlides1");
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	slideIndex1++;
	if (slideIndex1 > slides.length) {slideIndex1 = 1}
	slides[slideIndex1-1].style.display = "block";
	setTimeout(showSlides1, 4000); 
}


function checkform(form) {

	if(form.CPF.value !=""){
		var numero = form.CPF.value.replace(/[^0-9]/g,'');
		var cont, soma, dig, resto, dv1, dv2;

		dv1 = parseInt(numero.substring(9,10));
		dv2 = parseInt(numero.substring(10,11));
		soma = 0;
		cont = 0;
		for(cont = 0; cont < numero.length-2; cont++){
			soma = soma + (parseInt(numero.substring(cont,cont+1))*(10-cont));
		}
		resto = soma % 11;
		if(resto == 0 || resto == 1)
			dig = 0;

		else
			dig = 11 - resto;

		if(dig == dv1){
			soma = 0;
			for(cont = 0; cont < numero.length-1; cont++){
				soma = soma + (parseInt(numero.substring(cont,cont+1))*(11-cont));
			}

			resto = soma % 11;

			if(resto == 0 || resto == 1)
				dig = 0;

			else 
				dig = 11 - resto;

			if(dig != dv2){
				alert("CPF Inválido!");
				form.CPF.focus();
				return false;
			}                
		}else{
			alert("CPF Inválido!");
			form.CPF.focus();
			return false;
		}
		if(numero == "11111111111" || numero == "22222222222" || numero == "33333333333" || numero == "44444444444" || numero == "55555555555" || numero == "66666666666" || numero == "77777777777" || numero == "88888888888" || numero == "999999999999" || numero == "00000000000"){
			alert("CPF inválido\nEntre em contato com a Receita Federal!");
			return false;
		}  
	}
	if(form.pwd1.value != form.pwd2.value){
		alert("Senhas não conferem!\nPor favor, vefique se as senhas estão escritas de forma correta e identica  ;)");
		form.pwd1.focus();
		return false;
	}else{
		return true;
	}
}

