<footer  class="col-s-12 col-m-12 col-12 footer">
			<aside class="col-s-12 col-m-4 col-3 logo-container">
				<img class="img_logo_foot" src="../img/Check-LivrosB.png">
			</aside>
			<nav class="col-s-12 col-m-8 col-5 footer-nav">
				<ul>
					<li><a href="../index.php" class="a-footer">HOME</a></li>
					<li><a href="generos.php" class="a-footer">GÊNEROS</a></li>
				</ul>
				<ul>
					<li><a href="quem_somos.php" class="a-footer">SOBRE</a></li>
					<li><a href="fale_conosco.php" class="a-footer">CONTATO</a></li>
				</ul>	
				<ul>
					<?php
						//------------------ Verifica a Existencia de Usernames ------------------//
							if($username == ""){
								echo "<li> <a href='php/CheckLogin.php' class='a-footer'>CADASTRO | LOGIN</a> </li>";
							}else{
								echo "<li><a href='php/perfil.php' class='a-footer'>MINHA CONTA</a></li>";
							}
						?>
				</ul>
			</nav>
			<aside class="col-s-12 col-m-12 col-4 redes-container">
				<br/>
				<!------------------ Redes Sociais ------------------>
				<a href="https://www.facebook.com/Check-Livros-100464832481149"><i class="fab fa-facebook-square"></i></a>&nbsp;&nbsp;
				<a href="https://instagram.com/check.livros?utm_medium=copy_link"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
				<a href="https://www.linkedin.com/in/check-livros-719a5a226/"><i class="fab fa-linkedin-in"></i></a>&nbsp;&nbsp;
				<a href="https://github.com/Kira01010110/Check-Livros.git"><i class="fab fa-github"></i></a>
			</aside>
		</footer>