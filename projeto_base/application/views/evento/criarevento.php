<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
<div class="homebody">
  <form  method="post" action="<?= base_url()?>Evento/adicionar">          
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-12 form-group">
          <input class="form-control" id="eventonome" name="eventonome" placeholder="Nome do Evento" type="text" required>
        </div>
      </div>
      <div class="row">
        	<div class="col-sm-12 form-group">
            <input class="form-control" id="eventoendereco" name="eventoendereco" placeholder="Endereco" type="text" required>
        	</div>
      </div> 
      <div class="row">
        	<div class="col-sm-6 form-group">
            <input class="form-control" id="eventocidade" name="eventocidade" placeholder="Cidade" type="text" required>
          </div>
          <div class="col-sm-2 form-group">
            <input class="form-control" id="eventoestado" name="eventoestado" placeholder="Estado" type="text" required>
          </div>
          <div class="col-sm-4 form-group">
            <input class="form-control" id="eventopais" name="eventopais" placeholder="Pais" type="text" required>
          </div>
      </div>
      <div class="row">
      	<div class="col-sm-3 form-group">
            <input class="form-control" id="eventoinicio" name="eventoinicio" placeholder="Data de Inicio" type="date" required>
          </div>
          <div class="col-sm-3 form-group">
            <input class="form-control" id="eventohini" name="eventohini" placeholder="Horário de Início" type="time" required>
          </div>

          <div class="col-sm-3 form-group">
            <input class="form-control" id="eventofim" name="eventofim" placeholder="Data de Fim" type="date" required>
          </div>	
          <div class="col-sm-3 form-group">
            <input class="form-control" id="eventohfim" name="eventohfim" placeholder="Horário de Término" type="time" required>
          </div>
      </div>

      <div class="row">
      	<div class="col-sm-6 form-group">
      		<input class="form-control" id="nmax" min="0" name="nmax" placeholder="Nº Máximo de Participantes" type="number" required>
      	</div>	
        <div class="col-sm-4 form-group">
          <input class="form-control" id="valor" min="0" name="valor" placeholder="Valor Ingresso" type="number" step="0.01" required>
        </div>  
      </div>
      <div class="row">
      	<div class="col-sm-12 form-group">
      		<textarea class="form-control" rows = "5" id= "descricao" name="descricao" placeholder="Descrição"></textarea>
      	</div>	
      </div>

      <div class="row">
      	<label class="control-label col-sm-4">Inserir Imagens</label>
        <input id="input-b5" name="input-b5[]" type="file" multiple>
      </div>

      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn btn-primary pull-right" type="submit">Criar Evento</button>
        </div>
      </div>
    </div>
  </form>
</div>