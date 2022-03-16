<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista = $usuarioDao->findAll();
?>

<a href="adicionar.php">ADICIONAR USUÁRIO</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>EMAIL</th>
        <th>AÇÕES</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario->getId();?></td>
            <td><?=$usuario->getNome();?></td>
            <td><?=$usuario->getEmail();?></td>
            <td>
                <a href="editar.php?id=<?=$usuario->getId();?>">[ Editar ]</a>
                <a href="excluir.php?id=<?=$usuario->getId();?>" onclick="return confirm('Tem certeza que deseja excluir?')">[ Excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>


<h6>teste de versão</h6> <h5>07-12-2021 as 23:46</h5>

<h1>Deus é mais!!!</h1>
<h2>Jesus é o caminho</h2>
<h3></h3>    