<?php
// Header
include_once 'includes/header.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo Veículo </h3>
		<form action="php_action/createveiculo.php" method="POST" enctype="multipart/form-data">
			<div class="input-field col s12">
			<i class="material-icons prefix">account_circle</i>
				<input type="text" name="nome" id="nome" value="xiru">
				<label for="nome">Marca</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">child_care</i>
				<input type="text" name="login" id="login">
				<label for="login">Modelo</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">email</i>
				<input type="password" name="senha" id="senha">
				<label for="senha">Ano</label>
			</div>

			<div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="text" name="fone" id="fone">
				<label for="fone">Cor</label>
			</div>
			<div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="text" name="fone" id="fone">
				<label for="fone">Placa</label>
			
			</div>
			<div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="date" name="data" id="datanasc">
				<label for="datanasc">Motor</label>
			</div>

            <div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="date" name="data" id="datanasc">
				<label for="datanasc">Km</label>
			</div>

            <div class="input-field col s12">
			<i class="material-icons prefix">insert_emoticon</i>
				<input type="date" name="data" id="datanasc">
				<label for="datanasc">Valor Fipe</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="veiculo.php" class="btn green"> Lista de veiculos </a>
		</form>
		
	</div>
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
