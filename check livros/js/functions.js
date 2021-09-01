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
	} else {
		document.getElementById("form-2").style.display = "block";
		document.getElementById("contato-container").style.display = "none";
	}
}

function mostrarOcultarSenha(){
	var senha = document.getElementById("pwd");

	if(senha.type == "password"){
		senha.type = "text";

	}else{
		senha.type = "password";
	}

	var senha2 = document.getElementById("pwd2");
	if(senha2.type == "password"){
		senha2.type = "text";
	}else{
		senha2.type = "password";
	}
}