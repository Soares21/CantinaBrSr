<?php 
require("conexao.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Cantina brsr</title>

    <!-- CSS FILES -->
   
    <link rel="stylesheet" href="./css/puro/index/pesquisa.css">
    <link rel="stylesheet" href="./css/puro/index/principal.css">
    <link rel="stylesheet" href="./css/puro/index/user_produtos.css">
    <link rel="stylesheet" href="./css/puro/index/grid_produtos.css">
    <link rel="stylesheet" href="./css/puro/footer/footer.css">
    

  </head>

  <body>
    <div class="nav-button-scroll"> <!-- BOTAO DE SUBIR !-->
      <a href="#">&#8593;</a>
    </div>

  <!--<section class="section-block">                 BARRA DE PESQUISA (SALVAR)
    <div class="barra-de-pesquisa-area-total">
      <div class="barra-de-pesquisa-area">
        <div class="barra-de-pesquisa-itens">
          <label>></label>
          <div class="barra-de-pesquisa-itens-input-total">
            <input type="text" name="" id="" class="barra-de-pesquisa-itens-input" placeholder="PROCURE UM PRODUTO AQUI!">
          </div>
          <div class="barra-de-pesquisa-itens-submit-total">
            <input type="submit" value="PESQUISAR" class="barra-de-pesquisa-itens-submit">
          </div>
        </div>
      </div>
    </div>
  </section>!-->

    <section class="section-block"> <!-- BARRA PRETA !-->
            <div class="barra-de-pesquisa-area-total">
              <div class="barra-de-pesquisa-area">
                </div>
              </div>
            </div>
    </section>
  
  <main>
    <section class="section-one"> <!-- ABERTURA DO SITE / APRESENTAÇÃO !-->
          <div class="section-one-imagem">
            <img src="./img/logotipo1.jpg" />
          </div>

          <div class="section-one-conteudo">
          <div class="section-one-titulo">
              <h1>COMECE A COMPRAR AGORA!!</h1>
          </div>
            <div class="section-one-conteudo-texto">
              <p>CRIE UMA CONTA</p>
              <label>JA TEM UM CONTA? <a href="#">LOGUE AGORA</a>!</label>
            </div>

            <div class="section-one-conteudo-texto">
              <p>ADICIONE PRODUTOS AO <a href="#">CARRINHO</a></p>
            </div>

            <div class="section-one-conteudo-texto">
              <p>COMPRE OS <a href="Selectprod.php">PRODUTOS</a> E RECEBA RAPIDAMENTE</p>
            </div>
        </div>
      </section>

      <section class="section-block"> <!-- BARRA PRETA !-->
            <div class="barra-de-pesquisa-area-total">
              <div class="barra-de-pesquisa-area">
                </div>
              </div>
            </div>
      </section>

      <div class="section-div-user-produts-logo"><h1>SEUS PRODUTOS<h1></div> <!-- TITULO DOS SEUS PRODUTOS !-->

      <section class="section-user-produts"> <!-- SEUS PRODUTOS !-->
        <section class="sectionsec-user-produts">
          <div class="section-div-user-produts">
            <img src="./css/img/pao-index.jpg">
            <div><h3>NOME:</h3></div>
            <div><h3>PREÇO:</h3></div>
            <div><p>DESCRIÇÃO</p></div>
          </div>
        </section>
      </section>
      
      <div class="section-div-grid-produts-logo"><h1>PRINCIPAIS PRODUTOS<h1></div> <!-- TITULO DOS PRINCIPAIS PRODUTOS !-->

        <section class="section-div-grid-produts"> <!-- PRINCIPAIS PRODUTOS !-->
          <div class="section-div-grid-produts-unic-maior"> <!-- EXEMPLOS DOS PRINCIPAIS PRODUTOS !-->
            <img src="./css/img/pao-index.jpg">
            <div><h3>NOME:</h3></div>
            <div><h3>PREÇO:</h3></div>
            <div><p>DESCRIÇÃO</p></div>
          </div>

          <div class="section-div-grid-produts-unic-maior2"> <!-- EXEMPLOS DOS PRINCIPAIS PRODUTOS !-->
           <img src="./css/img/coxinha-index.jpg">
           <div><h3>NOME:</h3></div>
            <div><h3>PREÇO:</h3></div>
            <div><p>DESCRIÇÃO</p></div>
          </div>

          <div class="section-div-grid-produts-unic1"> <!-- EXEMPLOS DOS PRINCIPAIS PRODUTOS !-->
           <img src="./css/img/coca-index.jpg">
           <div><h3>NOME:</h3></div>
            <div><h3>PREÇO:</h3></div>
            <div><p>DESCRIÇÃO</p></div>
          </div>

          <div class="section-div-grid-produts-unic2"> <!-- EXEMPLOS DOS PRINCIPAIS PRODUTOS !-->
            <img src="./css/img/cachorro_quente-index.jpg">
            <div><h3>NOME:</h3></div>
            <div><h3>PREÇO:</h3></div>
            <div><p>DESCRIÇÃO</p></div>
          </div>

          <div class="section-div-grid-produts-unic3"> <!-- EXEMPLOS DOS PRINCIPAIS PRODUTOS !-->
            <img src="./css/img/sorvete.jpg">
            <div><h3>NOME:</h3></div>
            <div><h3>PREÇO:</h3></div>
            <div><p>DESCRIÇÃO</p></div>
          </div>

          <div class="section-div-grid-produts-unic4"> <!-- EXEMPLOS DOS PRINCIPAIS PRODUTOS !-->
            <img src="./css/img/bolo-index.jpg">
            <div><h3>NOME:</h3></div>
            <div><h3>PREÇO:</h3></div>
            <div><p>DESCRIÇÃO</p></div>
          </div>
        </section>

        <section class="section-block"> <!-- BARRA PRETA !-->
            <div class="barra-de-pesquisa-area-total">
              <div class="barra-de-pesquisa-area">
                </div>
              </div>
            </div>
        </section>

      <section class="section-two"> <!-- MENU INICIAL (NÃO CONCLUIDO) !-->
        <div class="section-two-div-titulo"><p>MENU ESPECIAL</p></div>
        <div class="section-two-div-lista">
          <ul class="section-two-div-lista-ul">
      <?php 

$conexao=mysqli_connect("localhost","root","","webCantina");
//$conexao=mysqli_connect("sql305.epizy.com:3306","epiz_32700662","COGn1ShB40ct","epiz_32700662_webCantina");
$sqli="SELECT*FROM Img";
$query=mysqli_query($conexao,$sqli);
While($rgimg=mysqli_fetch_assoc($query));
$sql="SELECT*FROM produto ";
$resultado=mysqli_query($conexao,$sql);
while($registro=mysqli_fetch_assoc($resultado)):
?>
<img src="<?=$rgimg['Url']?>" height='50'>
    <ul>
            <li class="section-two-div-lista-li"><a href="SelectprodE.php?id=<?=$registro["idproduto"]?>"><?=$registro['Nomeprod']?></a></li>
            <a href="SelectprodE.php?id=<?=$registro["idproduto"]?>"><small>$</small><?=$registro['Vlrprod']?></span></a></li><br>
  Descriçao:<?=$registro['Descricao']?></a></li><br>
  <a href="SelectprodE.php?id=<?=$registro["idproduto"]?>">Veja mais
</a></li>
          </ul><br>
          <?php endwhile?>
        </div>
      </section>
    </main>
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
  </body>
</html>
