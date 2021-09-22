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

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
	showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
	showSlides(slideIndex = n);
}

function showSlides(n) {
	var i;
	var slides = document.getElementsByClassName("mySlides");
	var dots = document.getElementsByClassName("dot");
	if (n > slides.length) {slideIndex = 1}
	if (n < 1) {slideIndex = slides.length}
	for (i = 0; i < slides.length; i++) {
		slides[i].style.display = "none";
	}
	for (i = 0; i < dots.length; i++) {
		dots[i].className = dots[i].className.replace(" active1", "");
	}
	slides[slideIndex-1].style.display = "block";
	dots[slideIndex-1].className += " active1";
}