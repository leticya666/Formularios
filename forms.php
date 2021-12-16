<!DOCTYPE html>
<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Validação de Formulário PHP </title>
</head>
<body>
	<main>
		<div>
			<h2> Validando tipos diversos de campos de formulário </h2>
			<form action="valida.php" method="post">
				<p> Nome: <input type="text" name="nome"> </p>
				<p> Senha: <input type="password" name="pass"> </p>
				<p> Idade: <input type="number" name="idade"> </p>
				<p> Telefone: <input type="tel" name="fone"> </p>
				<p> E-mail: <input type="email" name="endEmail"> </p>
				<hr>
				<h4> Uma forma de organizar melhor o fomulário com PHP </h4>
				<fieldset>
					<legend>
						Tipo 'radio' escolha uma opção entre várias - campo "name" é igual em todas as opções
					</legend>
					<p>	
						<input type="radio" name="comidaPref" value="Arroz com Feijão e Carne">
						<label for="comidaPref"> Arroz com Feijão e Carne </label>
					</p>
					<p>
						<input type="radio" name="comidaPref" value="Arroz com Macarrão e Carne">
						<label for="comidaPref"> Arroz com Macarrão e Carne </label>
					</p>
					<p>
						<input type="radio" name="comidaPref" value="Baião e Carne">
						<label for="comidaPref"> Baião e Carne </label>
					</p>
					<p>
						<input type="radio" name="comidaPref" value="Baião, Salada e Ovo">
						<label for="comidaPref"> Baião, Salada e Ovo </label>
					</p>
				</fieldset>
				<fieldset>
					<legend>
						Tipo: 'checkbox' - Escolha mais de uma opção - Disciplinas
					</legend>
					<p>
						<input type="checkbox" name="redes"> 
						<label for="redes"> Redes de Computadores </label>
					</p>
					<p>
						<input type="checkbox" name="javaScript"> 
						<label for="JavaScript"> JavaScript </label>
					</p>
					<p>
						<input type="checkbox" name="Java"> 
						<label for="Java"> Programação em Java</label>
					</p>
					<p>
						<input type="checkbox" name="Arquitetura"> 
						<label for="Arquitetura"> Arquitetura e Manutenção de PC </label>
					</p>
				</fieldset>
				<fieldset>
					<legend> Em qual carro gostaria de viajar? </legend>
					<label for="cars"> Choose car: </label>
					<select name="cars">
							<option value="volvo"> Onix Plus </option>
							<option value="saab"> Toro </option>
							<option value="opel"> Corola </option>
							<option value="audi"> Polo </option>
					</select>
				</fieldset>
				<fieldset>
					<legend> Qual sua nota de satisfação para o Curso de Informática? </legend>
					<label for="nota"> Valores de 0 a 100 </label>
					<input type="range" name="nota" min="0" max="100">
				</fieldset>
				<fieldset>
					<legend> Qual a data do seu aniversário? </legend>
					<label for="date"> Quando você deve ganhar presentes? </label>
					<input type="date" name="date">
				</fieldset>
				<fieldset>
					<legend> Qual horário que você geralmente vai dormir? </legend>
					<label for="mimi"> Que horas você geralmente capota? </label>
					<input type="time" name="mimi">
				</fieldset>
				<hr>
				<button type="submit"> Enviar e Mostrar </button>
			</form>
		</div>
	</main>
</body>
</html>