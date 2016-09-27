<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//PT-BR" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" xml:lang="pt-br" lang="pt-br">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
</html>
<?php

$nome = $_POST["nome"];
$rg = $_POST["rg"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];
$tempodealer = $_POST["tempodealer"];
$modalidades = $_POST["modalidades"];
$ondetrabalhou = $_POST["ondetrabalhou"];
$falaingles = $_POST["falaingles"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$observacoes = $_POST["observacoes"];

if(isset($_FILES['fileUpload']))
{
  date_default_timezone_set("Brazil/East"); //Definindo timezone padrão

  $ext = strtolower(substr($_FILES['fileUpload']['name'],-4)); //Pegando extensão do arquivo
  $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
  $dir = 'uploads/'; //Diretório para uploads

  move_uploaded_file($_FILES['fileUpload']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
}

$msg = file_get_contents('http://wsopbr.com/email.php');

$msg = str_replace('{nome}', $_POST['nome'], $msg);
$msg = str_replace('{rg}', $_POST['rg'], $msg);
$msg = str_replace('{cpf}', $_POST['cpf'], $msg);
$msg = str_replace('{endereco}', $_POST['endereco'], $msg);
$msg = str_replace('{cidade}', $_POST['cidade'], $msg);
$msg = str_replace('{estado}', $_POST['estado'], $msg);
$msg = str_replace('{tempodealer}', $_POST['tempodealer'], $msg);
$msg = str_replace('{modalidades}', $_POST['modalidades'], $msg);
$msg = str_replace('{ondetrabalhou}', $_POST['ondetrabalhou'], $msg);
$msg = str_replace('{falaingles}', $_POST['falaingles'], $msg);
$msg = str_replace('{telefone}', $_POST['telefone'], $msg);
$msg = str_replace('{email}', $_POST['email'], $msg);
$msg = str_replace('{observacoes}', $_POST['observacoes'], $msg);
$msg = str_replace('{new_name}', $new_name, $msg);

$quebra_linha = "\n"; 
$emaildestinatario = "dealers@wsopbr.com";
$emailsender = "dealers@wsopbr.com";
$assunto = "Pré Cadastro do Dealer ". $nome;
$headers = "MIME-Version: 1.1".$quebra_linha;
$headers .= "Content-type: text/html; charset=utf-8".$quebra_linha;
$headers .= "From: ".$emailsender.$quebra_linha;
$headers .= "Return-Path: " . $emailsender . $quebra_linha;
$headers .= "Reply-To: ".$emailsender.$quebra_linha;
mail($emaildestinatario, $assunto, $msg, $headers,  "-r". $emailsender);
echo("<script>document.location='contato-sucesso.php';</script>"); 
?>