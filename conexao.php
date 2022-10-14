<?php
$conexao=mysqli_connect("localhost","root","","webCantina");
//$conexao=mysqli_connect("sql305.epizy.com:3306","epiz_32700662","COGn1ShB40ct","epiz_32700662_webCantina");
/*if(!$conexao){
    echo "erro";
}*/
?>

<!doctype html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Cantina brsr</title>

        <!-- CSS FILES -->    
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">                    
 
        
        <link rel="stylesheet" href="./css/puro/header/header.css" />

    </head>
    
    <body>
    <header class="header">
      <section class="header-section">
      <div class="header-div-logo-total">
        <div class="header-div-logo">
          <a href="index.php">Cantina brsr</a>
        </div>
      </div>

      <div class="header-nav-total">
        <nav class="header-nav">
          <a href="index.php" class="header-nav-type-2">MENU</a>
          <a href="Selectprod.php" class="header-nav-type-1">PRODUTOS</a>
          <a href="Selectusuario.php" class="header-nav-type-3">PERFIL</a>
          <a href="Contato.php" class="header-nav-type-1">CONTATO</a>
        </nav>
      </div>

      <div class="header-div-botao-total">
        <div class="header-div-botao">
          <a href="Paginadecadastro.php" class="header-div-botao-a-type1">CADASTRAR</a>
        </div>
        <div class="header-div-botao">
          <a href="loginusuario.php" class="header-div-botao-a-type2">LOGAR</a>
        </div>
      </div>
      <section>
    </header>

