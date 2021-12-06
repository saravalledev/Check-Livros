<?php
	if(isset($_POST['Publicar'])){

		$resenha = addslashes($_POST['nova_resenha']);

		if(!empty($resenha)){

			if($u->cad_resenha($id, $username, $resenha)){
				
				?>
				<div class="msg-geral msg-sucesso">
					<p>Resenha Editada com sucesso :)</p>
				</div>
				<?php
				
			}else{
				?>
				<div class="msg-geral mgs-erro">
					<p>Perdão, houve um erro ao enviar sua resenha... </p>
				</div>
				<?php
			}
		}else{
			?>
			<div class="msg-geral mgs-erro">
				<p> Preencha todos os campos! </p>
			</div>
			<?php
		}
	}

	if(isset($_POST['Editar'])){
		 
		$ed_resenha = addslashes($_POST['nova_resenha']);

		if(!empty($ed_resenha)){

			if($u->ed_resenha($ed_resenha)){
				
				header("location: resenhas.php?livro=$livro");
				
			}else{
				?>
				<div class="msg-geral mgs-erro">
					<p>Perdão, houve um erro ao enviar sua resenha... </p>
				</div>
				<?php
			}
		}else{
			?>
			<div class="msg-geral mgs-erro">
				<p> Preencha todos os campos! </p>
			</div>
			<?php
		}
	}

?>