<header class="col-s-12 col-m-12 col-12">
			<nav id="nav-desktop">
				<ul id="desktopLinks">
					<li><a href="../index.php" class="logo-menu"><img src="../img/LogoSemNome.png" style="width: 100%"></a></li>
					<li class="li-titulo">
						<a href="../index.php" class="logo-menu">
							<img src="../img/Titulosemfundo.png" class="img_titulo">
						</a>
					</li>
					<li><a href="generos.php" class="a-desk">GÊNEROS</a></li>
					<li><a href="fale_conosco.php" class="a-desk">CONTATO</a></li>
					<li><a href="quem_somos.php" class="a-desk">SOBRE</a></li>
					<li>
						<?php
						if($username == ""){
							echo "<a href='CheckLogin.php' class='a-desk'>CONTA</a>";
						}else{
							if($type_cont == "adm"){
								echo "
									<a href='perfil.php' id='a-1-sub' class='a-desk'>Olá, ".$username."</a>
									<ul class='submenu'>
										<li>
											<a href='adm.php' class='a-desk a-sub'>Administrativa</a>
										<li>
										<li>
											<a href='sairlog.php' class='a-desk a-sub'>Sair</a>
										</li>
									</ul>
									";
							}else{
								echo "
									<a href='perfil.php' id='a-1-sub' class='a-desk'>Olá, ".$username."</a>
									<ul class='submenu'>
										<li>
											<a href='sairlog.php' class='a-desk a-sub'>Sair</a>
										</li>
									</ul>
									";
							}
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
				<a href="../index.php" class="nav-mobile-logo" style="padding: 0;"><img src="../img/LogoSemNome.png" style="width: 100%"></a>
				<ul id="mobileLinks">
					<li class="search-container">
						<form action="resultado.php" method="get">
							<input type="text" placeholder="Buscar livros..." name="search">
						</form>
					</li>
					<li><a href="generos.php" class="a-tablets">GÊNEROS</a></li>
					<li><a href="fale_conosco.php" class="a-tablets">CONTATO</a></li>
					<li><a href="quem_somos.php" class="a-tablets">SOBRE</a></li>
					<li>
						<?php
						if($username == ""){
							echo "<a href='CheckLogin.php' class='a-tablets'>CONTA</a>";
						}else{
							if($type_cont == "adm"){
								echo "
									<a href='perfil.php' id='a-1-sub' class='a-tablets'>Olá, ".$username."</a>
									<ul class='submenu'>
										<li>
											<a href='adm.php' class='a-tablets'>Administrativa</a>
										<li>
										<li>
											<a href='sairlog.php' class='a-tablets'>Sair</a>
										</li>
									</ul>
									";
							}else{
								echo "
									<a href='perfil.php' id='a-1-sub' class='a-tablets'>Olá, ".$username."</a>
									<ul class='submenu'>
										<li>
											<a href='sairlog.php' class='a-tablets'>Sair</a>
										</li>
									</ul>
									";
							}
						}
						?>
					</li>
				</ul>
				<a href="#" class="icon-nav-mobile" onclick="enableMobileNav()">
					<i class="fa fa-bars"></i>
				</a>
			</nav>
		</header>