<footer class="col-s-12 col-m-12 col-12 footer">
    <aside class="col-s-12 col-m-4 col-3 logo-container">
        <img class="img_f" src="../img/Check-LivrosB.png">
    </aside>
    <nav class="col-s-12 col-m-8 col-5 footer-nav">
        <ul>
            <li>
                <p class="p-footer">Início</p>
            </li>
            <li><a href="../index.php" class="a-footer">Home</a></li>
            <li><a href="generos.php" class="a-footer">Gêneros</a></li>
        </ul>
        <ul>
            <li>
                <p class="p-footer">Sobre</p>
            </li>
            <li><a href="quem_somos.php" class="a-footer">Quem Somos</a></li>
            <li><a href="fale_conosco.php" class="a-footer">Fale Conosco</a></li>
        </ul>
        <ul>
            <li>
                <p class="p-footer">Minha Conta</p>
            </li>
            <li><a href="perfil.php" class="a-footer">Perfil</a></li>
            <li>
                <?php
						if($username == ""){
							echo "<a href='cad_log.php' class='a-footer'>Cadastro | Login</a>";
						}
						?>
            </li>
        </ul>
    </nav>
    <aside class="col-s-12 col-m-12 col-4 redes-container">
        <br />
        <a href="#"><i class="fab fa-facebook-square"></i></a>&nbsp;&nbsp;
        <a href="#"><i class="fab fa-instagram"></i></a>&nbsp;&nbsp;&nbsp;
        <a href="#"><i class="fab fa-linkedin-in"></i></a>&nbsp;&nbsp;
        <a href="https://github.com/Kira01010110/Check-Livros.git"><i class="fab fa-github"></i></a>
    </aside>
</footer>