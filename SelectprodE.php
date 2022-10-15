
<?php 
require("conexao.php");
require("./components/header.php");
$id=$_GET['id'];
$sql="SELECT*FROM produto WHERE idproduto=$id";
$resultado=mysqli_query($conexao,$sql);
if($registro=mysqli_fetch_assoc($resultado))?>
<body><table>
<nav>
    ID
    Nome do produto
    Valor
    Descricao
</h3>
</nav>
<td scope='row'><?=$registro['idproduto']?></td>
<td scope='row'><?=$registro['Nomeprod']?></td>
<td scope='row'>$<?=$registro['Vlrprod']?></td>
<td scope='row'><?=$registro['Descricao']?></td>