<link rel="stylesheet" 
href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
crossorigin="anonymous">
<div class="title">Formulário Básico</div>

<h2 class="cadastro">Cadastro</h2>

<hr>

<?php
// Ao enviar o formulário o mesmo redireciona para #, sendo o próprio site, isso acontece 
// por causa do form action="#"
// então como o $_POST > 0 o código abaixo roda.

if(count($_POST) > 0) { // Count() conta a quantidade de valores, se for maior que 0 significa
// que foi criado valores dentro de post

    $erros = []; // Define um array responsável por armazenar os erros.

    if(!filter_input(INPUT_POST, "nome")) {
        $erros['nome'] = 'Nome inválido.';
    }
    
    if(!filter_input(INPUT_POST, "nascimento")) { // que foi criado valores dentro de post
        $data = DateTime::createFromFormat( // função estática nativa do PHP
            'd/m/Y', $_POST["nascimento"]);
        if(!$data) {
            $erros['nascimento'] = 'Data deve estar no padrão dd/mm/aaaa.';
        }
    }
   
     /* filter_input() -> utilizada para recuperar uma variável externa específica e, 
     opcionalmente, aplicar um ou mais filtros a ela. Essa função é comumente usada 
     para obter dados do ambiente externo, como entradas do usuário (por exemplo, dados
     de formulário enviados via POST ou GET) e filtrá-los para garantir que estejam em 
     um formato desejado ou seguro antes de serem usados em sua aplicação. */

     /* filter_var() -> também aplica regras para verificar se a variável
     está no formato correto. */

     /* Uma função estática, também conhecida como método estático, 
     é uma função dentro de uma classe em programação que pode ser invocada 
     sem a necessidade de criar uma instância dessa classe. */

    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $erros['email'] = 'E-mail inválido.';
    } // FILTER_VALIDATE_EMAIL é algo nativo do PHP para validar

    if(!filter_var($_POST['site'], FILTER_VALIDATE_URL)) { 
        $erros['site'] = 'Site inválido.';
    }

    $filhosConfig = ["options" => ["min_range"=>0, "max_range"=>20]];
    
    if(!filter_var($_POST["filhos"], FILTER_VALIDATE_INT, $filhosConfig) && $_POST['filhos'] != 0) { 
        $erros['filhos'] = 'Quantid. Filhos inválida. (0/20)';
    }
    
    $salarioConfig = ['options' => ['decimal' => ',']];
    if (!filter_var($_POST['salario'], FILTER_VALIDATE_FLOAT, $salarioConfig)) {
        $erros['salario'] = 'Salário inválido.';
    }

}

?>

<form action="#" method="post">
    <div class="form-row">
        <div class="formgroup col-md-8">
            <label for="nome">Nome</label>
            <input type="text" class="form-control <?= $erros['nome'] ? 'is-invalid' : '';?>"
            id="nome" name="nome" placeholder="Nome" 
            value="<?= $_POST['nome'] ?>"> <!-- Salva os valores dentro do array POST -->
            <div class="invalid-feedback"><?= $erros['nome'] ?></div>
        </div>

    <div class="formgroup col-md-4">
        <label for="nascimento">Nascimento</label>
        <input type="text" class="form-control <?= $erros['nascimento'] ? 'is-invalid' : '';?>"
        id="nascimento" name="nascimento" placeholder="Nascimento"
        value="<?= $_POST['nascimento'] ?>">
        <div class="invalid-feedback"><?= $erros['nascimento'] ?></div>
    </div>

    </div>

    <div class="form-row">
        <div class="formgroup col-md-6">
            <label for="email">E-mail</label>
            <input type="text" class="form-control <?= $erros['email'] ? 'is-invalid' : '';?>"
            id="email" name="email" placeholder="E-mail"
            value="<?= $_POST['email'] ?>">
            <div class="invalid-feedback"><?= $erros['email'] ?></div>
        </div>

        <div class="formgroup col-md-6">
            <label for="site">Site</label>
            <input type="text" class="form-control <?= $erros['site'] ? 'is-invalid' : '';?>"
            id="site" name="site" placeholder="Site"
            value="<?= $_POST['site'] ?>">
            <div class="invalid-feedback"><?= $erros['site'] ?></div>
        </div>
    </div>
    
    <div class="form-row">
        <div class="formgroup col-md-4">
            <label for="filhos">Quantid. Filhos</label>
            <input type="number" class="form-control <?= $erros['filhos'] ? 'is-invalid' : '';?>"
            id="filhos" name="filhos" placeholder="Quantid. Filhos"
            value="<?= $_POST['filhos'] ?>" max=20>
            <div class="invalid-feedback"><?= $erros['filhos'] ?></div>
        </div>

        <div class="formgroup col-md-8">
            <label for="salario">Salário</label>
            <input type="text" class="form-control <?= $erros['salario'] ? 'is-invalid' : '';?>"
            id="salario" name="salario" placeholder="Salário"
            value="<?= $_POST['salario'] ?>">
            <div class="invalid-feedback"><?= $erros['salario'] ?></div>
        </div>
    </div>
    <button class="btn btn-primary btn-lg">Cadastrar</button>
</form>
<hr>


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
        padding: 5px;
    }
    form {
        padding-right: 20px;
        padding-left: 20px;
    }
    .alert {
    font-size: 18px;
    padding: 5px;
    width: 50%;
    text-align: center;
    margin-left: 24%;
    }
</style>