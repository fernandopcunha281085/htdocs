<?php
require('../php/template/header.php');

$nome = filter_input(INPUT_POST,'nome' );
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$endereco = filter_input(INPUT_POST, 'endereco');

if($nome && $email) {
    echo 'Nome: '.$nome."<br/>";
    echo 'Idade: '.$idade.' anos'."<br/>";
    echo 'Email: '.$email."<br/>";
    echo 'Endereço: '.$endereco."<br/>"."<br/>";
    
    echo 'Cadastrado com Sucesso!!!';

} else {
    header("Location: index.php");
    exit;
}