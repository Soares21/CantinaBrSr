<?php
       require("conexao.php");
       require("./components/header.php");
?>

<html>
       <head>    
              <meta charset="UTF-8">
              <meta http-equiv="X-UA-Compatible" content="IE=edge">
              <meta name="viewport" content="width=device-width, initial-scale=1.0">
              <title>CADASTRO DE USUARIO</title>

              <link rel="stylesheet" href="./css/puro/login/login.css">
       </head>
       <main>
              <section class="section-fazer-cadastro-section">
                     <div class="section-fazer-cadastro-div">
                            <div class="section-fazer-cadastro-section-h1">
                                   <h1>LOGIN</h1>
                            </div>

                            <form action="inserirusuario.php" method="Post" class="section-fazer-cadastro-div-form">
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

                                   <button 
                                   type="submit">
                                   &#8594;</button>

                                    <div>
                                        <a href="#">Recuperar senha</a>
                                        <a href="#">Recuperar e-mail</a>
                                    </div>
                            </form>
                     </div>
                     <img src="./css/img/security.gif"> 
              </section>
       </main>
       
       <?php require("./components/footer.php"); ?>
</html>
    