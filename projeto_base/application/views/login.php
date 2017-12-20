<div class="homebody">

	<div class="alinhado-centro borda-base espaco-vertical">
		<h2> Login </h2>
	</div>	
	<form method="POST" action="<?= base_url()?>Pessoa/logar">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 form-group">
					<input class="form-control" type="text" name="email" placeholder="Email">
				</div>
				
			</div>
			<div class="row">
				<div class="col-sm-4 form-group">
					<input class="form-control" type="password" name="senha" placeholder="Senha">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4 form-group">
					<button type="submit" class="btn btn-primary pull-right">Entrar</button>
				</div>
			</div>
		</div>
	</form>


</div>