<?php 
require("conexao.php");
require("./components/header.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de cadastro</title>

    <link rel="stylesheet" href="./css/puro/cadastro/cadastro.css">
    <link rel="stylesheet" href="./css/puro/medias/media_cadastro.css">
</head>
<body>
    <section class="section-cadastro-area">
        <div class="section-cadastro-area-cadastro-usuario">
            <a href="Formcadastrousuario.php"><img src="data:image/png;base64,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" class="cadastrar-image"></a>
            <p> CADASTRAR USUARIO</p>
        </div>

        <div class="section-cadastro-area-cadastro-produto">
            <a href="Formprod.php"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQ_0Ph2kLBdLJi6uH2DBC_xEpEXcDlOvdbRbCewBBL2g&s" class="cadastrar-image"></a>
            <p> CADASTRAR PRODUTO</p>
        </div>
    </section>

    <?php require("./components/footer.php"); ?>
</body>
</html>
