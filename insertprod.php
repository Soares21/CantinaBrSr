<?Php
require("conexao.php");
require("./components/header.php");
?>

<?php
$nomeprod=$_POST['Nomeprod'];
$imagem=$_POST['img'];
$Vlr=$_POST['vlr'];
$desc=$_POST['desc'];
$sql="INSERT INTO produto(Descricao,Nomeprod,Vlrprod)VALUES('$desc','$nomeprod','$Vlr')";
$resultado=mysqli_query($conexao,$sql);
if($resultado){
    echo"Registro inserido";
    
}

$sql2="SELECT idproduto From produto";
$r=mysqli_query($conexao,$sql2);
if($registro=mysqli_fetch_assoc($r))
$idproduto=$registro['idproduto'];
?>

        <?php
if(isset($_FILES['img'])){}
  $imagem=$_FILES['img'];

  if($imagem['error'])
  die ("falha ao fazer upload");
  
  if ($imagem['size'] >20097152) 
    die("Arquivo png ou jpg muito longo");

    $Pastaimg="img/";

    $nomearquivo=$imagem["name"];
    $novonome=uniqid();
    $ext=strtolower(pathinfo($nomearquivo, PATHINFO_EXTENSION));
$caminho=$Pastaimg . $novonome . "." . $ext;
    if($ext !="jpg" && $ext!="png" && $ext="Jfif")
    die("arquivo não aceito");
   $inserido= move_uploaded_file($imagem["tmp_name"],$caminho);
   if($inserido);
    echo"<h4>Arquivo enviado</h4><a href='img/$novonome.$ext'>acesse</a>";
$sql="INSERT INTO img(Nomeprod,Url,idproduto,Data)VALUES('$nomearquivo','$caminho','$idproduto',NOW())";
$result=mysqli_query($conexao,$sql);
if($result){
  echo"Imagem inserida";
}
?>


