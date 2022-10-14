
  <?php 
  require("conexao.php");
  ?>

            

                  

                                        <div class="reviews-stars">
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star-fill reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                            <i class="bi-star reviews-icon"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="menu section-padding bg-white">
                <div class="container">
                    <div class="row">

                        <div class="col-12">
                            <h2 class="mb-lg-5 mb-4">Bebidas</h2>
                        </div>

                    
<?php 
$sql="SELECT*FROM produto ";
$resultado=mysqli_query($conexao,$sql);
while($registro=mysqli_fetch_assoc($resultado)):
?>
                        <table><div class="col-lg-6 col-12">
                            <div class="menu-thumb">
                                
                            <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                              

                                <div class="menu-info d-flex flex-wrap align-items-center">
                                  <td scope="row" > <h4 class="mb-0">NOME:<?=$registro['Nomeprod']?></h4></td><br>

                                    <br><span class="price-tag bg-white shadow-lg ms-4"><small>$</small><?=$registro['Vlrprod']?></span>
                                    <div class="menu-info d-flex flex-wrap align-items-center"><br>
                                    <td scope="row">  <h4 class="mb-0">Descrição:<?=$registro['Descricao']?></h4></td>
                                    <br>
                                    <td scope ='row'><a href="deletarprod.php?id=<?=$registro["idproduto"]?>">Apagar prod</a></td>
                                    <td scope ='row'><a href="atualizarprod.php?id=<?=$registro["idproduto"]?>">Atualizar prod</a></td>
                                    
        

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
              </div>
              <?php endwhile?>


 
