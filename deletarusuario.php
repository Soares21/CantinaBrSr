<?php
Require("conexao.php");
require("./components/header.php");
$id=$_GET['id'];
$sql="DELETE FROM usuario WHERE idusuario=$id";
$resultado=mysqli_query($conexao,$sql);
if($resultado){
    echo"    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
        .insert-user{
            width: 100%;
            height: 50%;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
        }

        .insert-user h1{
            font-size: 4em;
            font-family: Bebas Neue, sans-serif;
            letter-spacing: 3px;
        }

        .insert-user-a{
            font-size: 1.5em;
            text-decoration: none;
            font-family: Bebas Neue, sans-serif;
            border: 1px solid black;
            padding: 3px 8px;
            color: black;
            transition: .5s ease;
        }

        .insert-user-a:hover{
            border: 1px solid rgb(255, 55, 55);
            transition: .5s ease;
            color: rgb(255, 55, 55);
        }

        @media (max-width: 730px) {
            .insert-user h1{
                font-size: 3em;
            }
        }

        @media (max-width: 560px) {
            .insert-user h1{
                font-size: 2em;
                text-align: center;
            }
        }

    </style>

    <div class='insert-user'>
        <h1>REGISTRO APAGADO</h1>
        <a href='Selectusuario.php' class='insert-user-a'>VOLTAR</a>
    </div>
";
}