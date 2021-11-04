<header class="col-s-12 col-m-12 col-12">
	<nav id="nav-desktop">
		<ul id="desktopLinks">
			<li><a href="../index.php" class="logo-menu"><img src="../img/LogoSemNome.png" style="width: 100%"></a></li>
			<li class="img_m">
				<a href="../index.php" class="logo-menu">
					<img src="../img/Titulosemfundo.png" class="img_l">
				</a>
			</li>
			<li><a href="generos.php" class="a-desk">Gêneros</a></li>
			<li><a href="fale_conosco.php" class="a-desk">Fale Conosco</a></li>
			<li><a href="quem_somos.php" class="a-desk">Quem Somos</a></li>
			<li>
				<?php
						if($username == ""){
							echo "<a href='cad_log.php' class='a-desk'>Cadastro | Login</a>";
						}else{
							echo "<a href='perfil.php' id='a-1-sub' class='a-desk'>Olá, ".$username."</a>
									<ul class='submenu'>
										<li>
											<a href='sairlog.php' class='a-desk  a-sub'>Sair</a>
										</li>
									</ul>
									";
						}
						?>
			</li>
			<li class="search-container">
				<form action="resultado.php" method="GET">
					<input type="text" placeholder="Buscar livros..." name="search">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</li>
		</ul>
	</nav>

	<nav id="nav-mobile-tablets">
		<a href="../index.php" class="nav-logo" style="padding: 0;"><img src="../img/LogoSemNome.png"
				style="width: 100%"></a>
		<ul id="mobileLinks">
			<li><a href="generos.php" class="a-tablets">Gêneros</a></li>
			<li><a href="fale_conosco.php" class="a-tablets">Fale Conosco</a></li>
			<li><a href="quem_somos.php" class="a-tablets">Quem Somos</a></li>
			<li>
				<?php
						if($username == ""){
							echo "<a href='cad_log.php' class='a-tablets'>Cadastro | Login</a>";
						}else{
							echo "<a href='perfil.php' class='a-tablets'>Olá, ".$username."</a></li>
									<li><a href='sairlog.php' class='a-tablets'>Sair&nbsp;<i class='fas fa-sign-out-alt'></i></a>";
						}
						?>
			</li>
		</ul>
		<a href="#" class="icon-nav-mobile" onclick="enableMobileNav()">
			<i class="fa fa-bars"></i>
		</a>
	</nav>
</header>