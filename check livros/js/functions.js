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