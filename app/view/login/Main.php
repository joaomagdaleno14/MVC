<div class="fundo"></div>
<form name="FormLogin" id="FormLogin" action="<?php echo DIRPAGE.'login/validarLogin' ?>" method="post">
    <div class="login">
        <div class="loginForm">
            <input type="email" name="Email" id="Email" placeholder="Email:" required><br>
            <input type="password" name="Senha" id="Senha" placeholder="Senha:" required><br>
            <input type="submit" value="Entrar">
        </div>

        <div class="loginTextos">
            Esqueci minha senha
        </div>
    </div>
</form>