
<head>
    <link rel="stylesheet" href="./css/puro/perfils/perfils.css">
    <link rel="stylesheet" href="./css/puro/footer/footer.css">
</head>

<?php
require("conexao.php");
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

<footer class="footer">
      <div class="footer-area">
        <div class="footer-div-titulo">
          <h2 class="footer-div-h2">Cantina BRSR</h2>
        </div>
        
        <div class="footer-div-texto">
          <div class="footer-subdiv-texto">
                <p class="footer-subdiv-span">© Localização</p>
                <a href="#" class="footer-subdiv-a">Itapetininga-SP, Brasil</a>
          </div>
        </div>
      </div>
</footer>

