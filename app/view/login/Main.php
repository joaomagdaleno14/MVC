<div class="fundo" id="main"></div>
<form name="FormLogin" id="FormLogin" action="<?php echo DIRPAGE.'login/validarLogin' ?>" method="post">
    <div class="login">
        <div class="loginLogo float w100 ">
            <img src="<?php echo DIRPAGE.'img/Logo0-frayHord-B.php'; ?>" alt="Logo">
        </div>

        <div class="loginForm">
            <input class="h40 float w100" type="email" name="Email" id="Email" placeholder="Email:" required><br>
            <input class="h40 float w100" type="password" name="Senha" id="Senha" placeholder="Senha:" required><br>
            <input class="h40 float center" type="submit" value="Entrar">
            <div class="loginTextos float "><a href="<?php echo DIRPAGE.'login/esquecisenha';?>"> Esqueci minha senha</a></div>
        </div>
    </div>
</form>