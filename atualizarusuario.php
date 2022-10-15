
<head><link rel="stylesheet" href="./css/puro/update/update.css"></head>

<?php
Require("conexao.php");
require("./components/header.php");
$id=$_GET['id'];
$sql="SELECT*FROM usuario WHERE idusuario=$id";
$resultado=mysqli_query($conexao,$sql);
while($registro=mysqli_fetch_assoc($resultado)):?>
 
   
<main>
    <section class="section-fazer-cadastro-section">
        <img src="./css/img/update.gif">
        <div class="section-fazer-cadastro-div">
            <div class="section-fazer-cadastro-section-h1">
                    <h1>UPDATE</h1>
            </div>

            <form action="updateusuario.php" method="Post" class="section-fazer-cadastro-div-form">
                    <input 
                    type=hidden 
                    name=id 
                    VALUE= <?=$registro['idusuario']?>
                    />

                    <input 
                    type="text" 
                    name="nome" 
                    VALUE= <?=$registro['Nome']?> 
                    required 
                    />

                    <input 
                    type="text" 
                    name="cpf" 
                    VALUE= <?=$registro['Cpf']?> 
                    required
                    />
                        
                    <input 
                    type="email" 
                    name="email" 
                    VALUE= <?=$registro['Email']?>
                    required 
                    />

                    <input
                    type="password" 
                    name="senha" 
                    VALUE= <?=$registro['Senha']?>
                    required 
                    />
                    
                    <input 
                    type="date" 
                    name="data" 
                    VALUE= <?=$registro['Dtnasc']?>
                    required 
                    />
                    

                    <button 
                    type="submit">
                    &#8594;</button>

                </form>
            </div>
    </section>
</main>
<?php endwhile?>

<?php require("./components/footer.php"); ?>