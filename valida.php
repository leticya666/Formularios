<?php

$nome= $_POST['nome'];
$senha= $_POST['pass'];
$idade= $_POST['idade'];
$telefone= $_POST['fone'];
$mail= $_POST['endEmail'];

echo "Seu Nome:".$nome."<br>";
echo "Sua Senha:".$senha."<br>";
echo "Sua Idade:".$idade."<br>";
echo "Seu Telefon".$telefone."<br>";
echo "Seu Email:".$mail."<br>";
echo "<hr>";

$comidaPref= $_POST['comidaPref'];
echo "Sua Comida Preferida:".$comidaPref."<br>";
echo "<hr>";

$disciplina=array();

	if(isset($_POST["Redes"])){
array_push($disciplina,"Redes de Computadores");
}
	if(isset($_POST["JavaScript"])){
array_push($disciplina,"Javascript");
}
	if(isset($_POST["Java"])){
array_push($disciplina,"Java");
}
	if(isset($_POST["Arquitetura"])){
array_push($disciplina,"Arquitetura e Manuntenção de Computadores");
}

$numDisciplinas=count($disciplina);

echo "Sua(s) Disciplina(s) Favorita(s) É(São): ";

foreach($disciplina as $value){
echo "$value<br>";
}

echo "<hr>";

$carro= $_POST['cars'];
echo "O carro que você preferia viajar é um:".$carro."<br>";

echo "<hr>";

$nota= $_POST['nota'];
echo "Sua satisfação com o curso de informática de uma escala de 0 a 100 é:".$nota."<br>";

echo "<hr>";

$data= $_POST['date'];
echo " A data que você quer ganhar presentes é:".$data."<br>";

echo "<hr>";

$dormir= $_POST['mimi'];
echo "Você vai dormir as:".$dormir;