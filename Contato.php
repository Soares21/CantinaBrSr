<?php 
    require("./conexao.php");
    require("./components/header.php");
?>

<head>
    <link rel="stylesheet" href="./css/puro/contato/contato.css">
    <link rel="stylesheet" href="./css/puro/footer/footer.css">
</head>

<section class="section-contatos">
    <div class="section-div-forms">
        <form class="section-form-contato">
            <div class="div-titulo-contatos">
                <h1>CONTATO</h1>
            </div>
            <input 
            type="text" 
            name="" 
            id="" 
            placeholder="seu nome" 
            />

            <input 
            type="e-mail" 
            name="" 
            id="" 
            placeholder="seu e-mail"
            />

            <input 
            type="number"
            name="" 
            id="" 
            placeholder="ID Publico"
            />

            <textarea
            style="resize: vertical" 
            name="" 
            placeholder="MENSAGEM"></textarea>

            <button 
            type="submit">
            &#8594;</button>

        </form>

        <form class="section-form-feedback">
            <div class="div-titulo-contatos">
                <h1>FEEDBACK</h1>
            </div>

            <input 
            type="text" 
            name="" 
            id="" 
            placeholder="seu nome" 
            />

            <input 
            type="e-mail" 
            name="" 
            id="" 
            placeholder="seu e-mail"
            />

            <input 
            type="number"
            name="" 
            id="" 
            placeholder="ID Publico"
            />

            <textarea 
            style="resize: vertical" 
            name="" 
            placeholder="MENSAGEM"></textarea>

            <button 
            type="submit">
            &#8594;</button>
        </form>
    </div>
</section>

<section class="sec-img-maps">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.3142055043554!2d-48.01867627960446!3d-23.59306182604345!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94c5cbf41ebfcf31%3A0xa65e4fb6d75446bf!2sInstituto%20Federal%20de%20Educa%C3%A7%C3%A3o%2C%20Ci%C3%AAncia%20e%20Tecnologia%20de%20S%C3%A3o%20Paulo%2C%20Campus%20Itapetininga!5e0!3m2!1spt-BR!2sbr!4v1665789457079!5m2!1spt-BR!2sbr" width="800px" height="300px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php require("./components/footer.php"); ?>