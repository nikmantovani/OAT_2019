<h2>Cadastro</h2>

<div class="row">
	<div class="col-md-3">
	</div>

	<div class="col-md-6">

		<form action="?pg=processar<?= $actionEditar ?>" method="POST">
		<div class="form-group">
		    <label for="inputNome">Nome</label>
		    <input type="text" class="form-control" id="inputNome" name="nome" aria-describedby="emailHelp" placeholder="Digite seu nome" >		    
		 </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" >		    
		  </div>
		<div class="form-group">
		    <label for="inputNome">Telefone</label>
		    <input type="text" class="form-control" id="inputTEL" name="tel" aria-describedby="emailHelp" placeholder="Digite seu Numero">		    
		 </div>
		 <div class="form-group">
		    <label for="inputNome">Endereço</label>
		    <input type="text" class="form-control" id="inputEND" name="end" aria-describedby="emailHelp" placeholder="Digite seu Endereço">		    
		 </div>
		 <div class="form-group">
		    <label for="inputNome">Descrição</label>
		    	<textarea type="text" class="form-control" id="inputDesc" name="desc" aria-describedby="emailHelp" placeholder="Digite o que você vai doar !">
		    	</textarea>
		 </div>
		  <button type="submit" class="btn btn-primary">Enviar</button>
		</form>
		<br>
	</div>

	<div class="col-md-3">
	</div>
	
</div>