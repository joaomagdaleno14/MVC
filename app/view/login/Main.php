<div class="fundo"></div>
<form name="FormLogin" id="FormLogin" action="<?php echo DIRPAGE.'login/validarLogin' ?>" method="post">
    <div class="login">
        <div class="loginLogo">
            <img src="<?php echo DIRPAGE.'img/logos/Logo1-Angel'; ?>" alt="Logo">
        </div>

        <div class="loginForm">
            <input class="h40 float w100" type="email" name="Email" id="Email" placeholder="Email:" required><br>
            <input class="h40 float w100" type="password" name="Senha" id="Senha" placeholder="Senha:" required><br>
            <input class="h40 float center" type="submit" value="Entrar">
            <div class="loginTextos float "><a href="<?php echo DIRPAGE.'login/esquecisenha';?>"> Esqueci minha senha</a></div>
        </div>
    </div>
</form>