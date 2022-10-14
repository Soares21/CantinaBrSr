<?php 
Require("conexao.php");
?>
<?php 
$sql="SELECT*FROM produto ";
$resultado=mysqli_query($conexao,$sql);
while($registro=mysqli_fetch_assoc($resultado)):
?>
<?php endwhile?>

<h2> Cadastro de produto</h2>

<form action="insertprod.php" method="Post" class="section-fazer-cadastro-div-form">
   <input 
              type="text" 
              name="Nomeprod"
              placeholder="Nome:"
              required>

            <input 
              type="text" 
              name="vlr"
              placeholder="Valor do produto:"
              required>


            <textarea
              style="resize: vertical"
              name="desc"  
              placeholder="Mensagem" 
              required></textarea><br>
            
              <form action="insertprod.php" method="POST" enctype="multipart/form-data">
  Selecione img: <input type="file"  name="img"><br>

        <input type="image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIIAAACCCAMAAAC93eDPAAAAZlBMVEX///9D/wA6/wCP/36T/4Pl/+BJ/xkx/wD6//j8//r4//Xx/+3i/9xg/zz0//DP/8bs/+je/9ip/5m6/657/19l/0XX/8+//7Om/5Sg/46W/4d9/2hW/y/p/+Ou/59V/ziM/3bJ/79066RQAAACaElEQVR4nO3bi07CQBAF0M4UGEDQKuCLIvj/P+kkGijt7pak9F4inQ8wJ7GO89osG2KIIf5XTNmALFus6YixbtiG8cSWj2yC6GTBJrjhlU1wxBOdIPZGJ4i90wliH3SC2OeMTRDbcgwVguhyziaIbgo2QbTcsQmi9swm+EcJT5QNgig6UTYJYl90gtiIThDLkUkqSMAmyjBBbIMzRAiie1iSihHcgEpSUYJXlCBDnOAfBKaqTRFAFWWRIlyYKItRpzikBBdWlGPtFmmC2OECQsvP6BrW3nr3TZD21rt3gieplta7f0JrkgIQ3JCs5hAEr2pTiRJCSCdKEEHshU5IJEoYwVtvOsETZbiaAxI8UQZbbyTB2/8HNsGTVKD9xxJEtZmkwITQjBJOaCZKPKFRURII9dabQXDDjE3wqnbKJnjrPWcTvKIs2ATRcswmnKpaHuE4o2QS/hIll7BiE+i/CBX256jlgvxHqSU7NfETtG0rtTTnn3VeHXtQSpacXbLUO9x7LF/tOyMTAhs8dEMXWFNg29qS3dZG9urQEUd4Dgsc9MTWl7hxV2zUhBv6xe9t7mb0mTwpuI8xOH8ZoPtQSkQSIvNOIMHWrcdOfS8Jt22ALCvyTnGNVWnH2KUXxvE9yPUivTZfAQTp4wHMldUtn1DwD0mAN38RAvJMPXZaBTyUDx+YHdgHZrXGmUCApMQkQSEpMUVoNs5gQvpQAUE4DfhZBF2yT7F1zz5Ij90G4Ajniz8GId44owi8RyLH5zrolNggKDwl1ggqzGdTvw/Y8G8izgnhWSKSQHqjU4kbeNJJBwwxxBDXjh9AGS8E8n2grwAAAABJRU5ErkJggg==" alt="Submit" width="75" height="75">
</form>            




<?php

