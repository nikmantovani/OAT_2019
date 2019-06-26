<br>
<?php
	$email = $_POST["email"];
	$senha = $_POST["senha"];
	$sql = "SELECT * FROM user WHERE email = '$email' AND senha = '$senha'";
	$query = mysqli_query($link, $sql);
	
	if($row = mysqli_fetch_assoc($query)){
		
		$sql2 = "SELECT * FROM usuarios";

		$query = mysqli_query($link, $sql2);
		echo "<div id='div_tab'>";
		echo "<table>";
		?>
			<thead>
				<th> id </th>
				<th>nome</th>
				<th>email</th>
				<th>telefone</th>
				<th>endereço</th>
				<th>Descrição</th>
			</thead>
		<?php 

	while($row2 = mysqli_fetch_assoc($query)){

	?>

		<tr>
			<td>
				<?= $row2["id"] ?>
			</td>
			<td>
				<?= $row2["nome"] ?>
			</td>
			<td>			
				<?= $row2["email"] ?>
			</td>
			<td>			
				<?= $row2["telefone"] ?>
			</td>
			<td>			
				<?= $row2["endereco"] ?>
			</td>
			<td>			
				<?= $row2["descricao"] ?>
			</td>
			
		</tr>

	<?php 

	}

	echo "</table>";
	echo "</div>";
	?>
<br>
<?php 
	}
	else{
		?>
		<h2>Login</h2>

			<div class="row">
				<div class="col-md-3">
				</div>

				<div class="col-md-6">

					<form action="?pg=listagem" method="POST">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Username</label>
					    <input type="name" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail" value="<?= $email ?>">		    
					  </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Senha</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" name="senha" placeholder="Digite sua senha" value="<?= $senha ?>">
					  </div>
					  <button type="submit" class="btn btn-primary">Enviar</button>
					</form>

				</div>

				<div class="col-md-3">
				</div>
			</div>
	<?php 
}
?>


