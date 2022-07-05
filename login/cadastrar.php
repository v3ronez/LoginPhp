<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/login/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Cadastrar</title>
</head>

<body>
    <form action="#">
        <h2>Cadastrar</h2>
        <div class="erro-geral animate__animated animate__fadeInDown"></div>
        <div class="input-group">
            <img class="input-icon" src="images/carteira-de-identidade.png" alt="nome-image">
            <input type="text" name="nome" placeholder="Digite seu nome: " id="">
            <div class="erro-input"></div>
        </div>
        <div class="input-group">
            <img class="input-icon" src="images/perto.png" alt="email-image">
            <input type="email" name="email" placeholder="Digite seu email: exemplo@contato.com.br" id="">
        </div>
        <div class="input-group">
            <img class="input-icon" src="images/chave.png" alt="login-image">
            <input type="password" name="password" placeholder="Digite sua senha" id="">
        </div>
        <div class="input-group">
            <img class="input-icon" src="images/chave.png" alt="login-image">
            <input type="password" name="password-repeated" placeholder="Digite sua senha novamente" id="">
        </div>
        <div class="input-group">
            <input type="checkbox" name="termos" id="termos">
            <label for="termos" class="label-termos">Ao se cadastrar você está concordando com nossos <a href="#">Termos
                    de uso </a> e nossa
                <a href="#">Política de privacidade</a>.</label>
        </div>
        <button class="btn-login" type="submit">Login</button>
        <p>Já tem cadastro? <a href="index.php">Fazer login.</a></p>
    </form>
</body>

</html>