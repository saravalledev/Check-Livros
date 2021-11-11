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
	var slides1 = document.getElementsByClassName("mySlides1");
	for (i = 0; i < slides1.length; i++) {
		slides1[i].style.display = "none";
	}
	slideIndex1++;
	if (slideIndex1 > slides1.length) {slideIndex1 = 1}
	slides1[slideIndex1-1].style.display = "block";
	setTimeout(showSlides1, 4000); 
}

function changeBtnCollor(x){
	if (x == 1) {
		document.getElementById("like").style.color = "#12ff00";
	} else {
		document.getElementById("deslike").style.color = "#ED734C";
	}
}



