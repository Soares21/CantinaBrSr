
CREATE TABLE IF NOT EXISTS usuario(
 idusuario INT NOT NULL AUTO_INCREMENT,
 Nome VARCHAR(100) NOT NULL,
 Cpf VARCHAR(11) NOT NULL,
 Email VARCHAR(50) NOT NULL,
 Senha VARCHAR(20) NOT NULL,
 Dtnasc DATE NOT NULL,
 PRIMARY KEY(idusuario)
);

CREATE TABLE IF NOT EXISTS produto(
idproduto INT NOT NULL AUTO_INCREMENT,
Descricao VARCHAR(300) NOT NULL,
Nomeprod VARCHAR(50) NOT NULL,
     Vlrprod DECIMAL(9,2) NOT NULL,
    PRIMARY KEY(idproduto)
);

CREATE  TABLE IF NOT EXISTS venda(
       idvenda INT NOT NULL auto_increment,
        Data DATE NOT NULL,
        valortotal DECIMAL(9,2) NOT NULL,
        idusuario INT NOT NULL,
        PRIMARY KEY (idvenda),
        CONSTRAINT fk_venda_usuario
        FOREIGN KEY (idusuario)
        REFERENCES webCantina.usuario (idusuario)
);
CREATE TABLE IF NOT EXISTS Img(
    idimg INT NOT NULL AUTO_INCREMENT,
    Nomeprod VARCHAR(50)NOT NULL,
    UrL VARCHAR(100) NOT NULL,
    Data DATE NOT NULL,
    idproduto INT NOT NULL,
    PRIMARY KEY(idimg),
    CONSTRAINT fk_Img_produto
        FOREIGN KEY (idproduto)
        REFERENCES webCantina.produto (idproduto)
);
