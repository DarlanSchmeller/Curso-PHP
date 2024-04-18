<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">
<div class="title">Formulário Básico</div>

<h2 class="cadastro">Cadastro</h2>

<hr>
<form action="#" method="post">
    <div class="form-row">
        <div class="formgroup col-md-9">
            <label for="nome">Nome</label>
            <input type="text" class="form-control"
            id="nome" name="nome" placeholder="Nome" 
            value="<?= $_POST['nome'] ?>"> <!-- Salva os valores dentro do array POST -->
        </div>

    <div class="formgroup col-md-3">
        <label for="nascimento">Nascimento</label>
        <input type="text" class="form-control"
        id="nascimento" name="nascimento" placeholder="Nascimento"
        value="<?= $_POST['nascimento'] ?>">
    </div>

    </div>

    <div class="form-row">
        <div class="formgroup col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control"
            id="email" name="email" placeholder="E-mail"
            value="<?= $_POST['email'] ?>">
        </div>
        <div class="formgroup col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control"
            id="site" name="site" placeholder="Site"
            value="<?= $_POST['site'] ?>">
        </div>
    </div>
    
    <div class="form-row">
        <div class="formgroup col-md-4">
            <label for="filhos">Quantid. Filhos</label>
            <input type="text" class="form-control"
            id="filhos" name="filhos" placeholder="Quantid. Filhos"
            value="<?= $_POST['filhos'] ?>">
        </div>
        <div class="formgroup col-md-8">
            <label for="salario">Salário</label>
            <input type="text" class="form-control"
            id="salario" name="salario" placeholder="Salário"
            value="<?= $_POST['salario'] ?>">
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Cadastrar</button>
</form>
<hr>

<?php

// Ao enviar o formulário o mesmo redireciona para #, sendo o próprio site, isso acontece 
// por causa do form action="#"
// então como o $_POST > 0 o código abaixo roda.

if(count($_POST) > 0) { // Count() conta a quantidade de valores, se for maior que 0 significa
    
    if(!filter_input(INPUT_POST, "nome")) { // que foi criado valores dentro de post
        echo '<p class="error">Nome é obrigatório', '<br></p>';
    }
    
    if(!filter_input(INPUT_POST, "nascimento")) { // que foi criado valores dentro de post
        echo '<p class="error">Nascimento é obrigatório', '<br></p>';
    }

    if(!filter_input(INPUT_POST, "E-mail")) { // que foi criado valores dentro de post
        echo '<p class="error">E-mail é obrigatório', '<br></p>';
    }

    if(!filter_input(INPUT_POST, "site")) { // que foi criado valores dentro de post
        echo '<p class="error">Site é obrigatório', '<br></p>';
    }
    
    if(!filter_input(INPUT_POST, "filhos")) { // que foi criado valores dentro de post
        echo '<p class="error">Quantid. Filhos é obrigatório', '<br></p>';
    }
    
    if(!filter_input(INPUT_POST, "salario")) { // que foi criado valores dentro de post
        echo '<p class="error">Salário é obrigatório', '<br></p>';
    }

}

?>

<style>
    #message {
    color: grey;
    text-align: center;
    font-family: 'Times New Roman', Times, serif;
    font-weight: 300;
    padding: 0px 0px 0px 0px;
    margin: 0px;
    padding-top: 10px;
    }
    header {
        padding-top: 10px;
    }
    .cadastro {
        text-align: center;
        text-decoration: underline;
    }
    button {
        margin-top: 20px;
        margin-left: 42%;
    }
    form > * {
        font-size: 20px;
        padding: 5px
    }
    form {
        padding-right: 20px;
        padding-left: 20px;
    }
    .error {
        font-size: 14px;
        color: red;
        margin: 0px;
        padding: 0px;
        text-align: center;
    }
</style>