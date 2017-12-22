<div id="homebody" onload="showMsg('Mensagem')" >

	<div class="alinhado-centro borda-base espaco-vertical">
		<?php 
		//echo "<h3> Projeto Base </h3>";
		echo heading("Projeto Base",3);
		echo heading("Editar pessoa",4);
		?>


	</div>



	<?php foreach($pessoa as $p) { ?>
	<div class="col-md-12">
		<form method="POST" action="<?php echo base_url('pessoa/editar/'.$p->id); ?>">
			<div class="row">
				<div class="col-md-6">
					<input type="text" class="form-control" placeholder="Nome" name="nome" id="nome" value="<?= $p->nome ?>" >
				</div>

				<div class="col-md-6">
					<div class="col-sm-12 form-group">
						<input type="text" class="form-control" placeholder="CPF" name="cpf" id="cpf" value="<?= $p->cpf ?>">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<input type="email" class="form-control" name="email" placeholder="Email" id="email" value="<? $p->email ?>">
				</div>
			</div>




			<div class="col-md-12">
				<br>
				
		
				<a class="btn btn-info" href="<?= base_url('cadastrar_usuario') ?>">Voltar</a>
				
				<input type="submit" class="btn btn-success" value="Editar">
			</div>
		</form>
	</div>
	<?php } ?>

</div>
