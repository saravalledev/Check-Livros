<?php
if(isset($_POST['Publicar'])){

	$resenha = addslashes($_POST['nova_resenha']);

	if(!empty($resenha)){

		if($u->cad_resenha($id, $username, $resenha)){
	?>
	<div class="msg-geral msg-sucesso">
		<p>Sugestão enviada com sucesso :)</p>
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
?>