<?php
       require("conexao.php");
?>

<html>
       <head>    
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>CADASTRO DE USUARIO</title>

              <link rel="stylesheet" href="./css/puro/cadastro/Fazer_cadastro.css">
       </head>
       <main>
              <section class="section-fazer-cadastro-section">
                     <img src="./css/img/cadastro.gif"> 
                     <div class="section-fazer-cadastro-div">
                            <div class="section-fazer-cadastro-section-h1">
                                   <h1>CADASTRO DE USUARIO</h1>
                            </div>

                            <form action="inserirusuario.php" method="Post" class="section-fazer-cadastro-div-form">
                                   <input 
                                   type="text" 
                                   name="nome" 
                                   placeholder="insira seu nome:" 
                                   required>

                                   <input 
                                   type="text" 
                                   name="cpf"
                                   placeholder="insira seu Cpf:" 
                                   required>

                                   <input 
                                   type="email" 
                                   name="email" 
                                   placeholder="insira seu Email:"
                                   required>

                                   <input 
                                   type="password" 
                                   name="senha" 
                                   placeholder="insira sua senha"
                                   required>

                                   <input
                                   class="section-cadastro-input-date" 
                                   type="date" 
                                   name="data" 
                                   placeholder="D"
                                   required>

                                   <button 
                                   type="submit">
                                   &#8594;</button>
                            </form>
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
</html>
    