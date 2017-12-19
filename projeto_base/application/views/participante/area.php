<div id="homebody">
<!-- Uma table padrão. Acustume-se, sempre usamos table para listar dados e é sempre assim -->
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>local</th>
				<th>Data</th>
				<th>Mais</th>
			</tr>
		</thead>
		<tbody>
		<!-- Aquele foreach basico para percorrer o array de eventos e preencher cada linha da tabela -->
			<?php
			foreach($eventos as $evento){
				echo "<tr>";
				echo "<td>".$evento->id_evento."</td>";
				echo "<td>".$evento->nome_evento."</td>";
				echo "<td>".$evento->local_evento."</td>";
				echo "<td>".$evento->data_evento."</td>";
				echo "<td><a href=".base_url('evento/registrar_participante')." class='btn btn-primary'>Participar</a></td>";
			}
			?>
		</tbody>
	</table>


<div class="row">
	<form  method="post" action="<?= base_url()?>evento/index">
		<button class="btn-primary pull-right" type="submit"> Criar Evento</button>
	</form>
</div>




</div>

