
<head>
    <link rel="stylesheet" href="./css/puro/perfils/perfils.css">
    <link rel="stylesheet" href="./css/puro/footer/footer.css">
</head>

<?php
require("conexao.php");
require("./components/header.php");
?>
<div class="div-titulo-perfils">
    <h1>PERFIS DE USUÁRIO</h1>
</div>

<section class="section-perfils-area-total">

<?php
$sql="SELECT*FROM usuario";
$result=mysqli_query($conexao,$sql);
while($registro=mysqli_fetch_assoc($result)):?>


<form method="Post" action="index.php" class="section-perfils-area">    
    <div class="section-perfils-area-divs">
        <div class="section-perfils-area-divs-titulos">
            <h4>NOME</h4>
            <p><?=$registro['Nome']?></p>
        </div>

        <div class="section-perfils-area-divs-titulos">
            <h4>CPF</h4>
            <p><?=$registro['Cpf']?></p>
        </div>

        <div class="section-perfils-area-divs-titulos">
            <h4>E-MAIL</h4>
            <p><?=$registro['Email']?></p>
        </div>

        <div class="section-perfils-area-divs-titulos">
            <h4>SENHA</h4>
            <p><?=$registro['Senha']?></p>
        </div>

        <div class="section-perfils-area-divs-titulos">
            <h4>DATA DE NASCIMENTO</h4>
            <p><?=$registro['Dtnasc']?></p>
        </div>
    </div>

    <div class="section-perfils-area-divs-select">
        <div class="section-perfils-area-divs-select-type1">
            <a href="deletarusuario.php?id=<?=$registro["idusuario"]?>">Apagar usuário</a>
            <a href="atualizarusuario.php?id=<?=$registro["idusuario"]?>">Atualizar usuário</a>
        </div>

        <div class="section-perfils-area-divs-select-type2">
            <button type="submit">Selecionar</button>
        </div>
    </div>
 <?php endwhile?>
</section>

<?php require("./components/footer.php"); ?>

