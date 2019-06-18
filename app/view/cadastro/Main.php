<div class="fundo" id="main"></div>
<form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/cadastrar';?>" method="post">
    <div class="cadastro">

    <div class="Logo float ">
            <img src="<?php echo DIRPAGE.'public/img/Logo0-frayHord-B-G.png'; ?>" alt="Logo">
    </div>
    <h1>Cadastrar</h1>
    <input class="h40 float w100" type="text" name="Nome" id="Nome" placeholder="Nome:" required><br>
    <input class="h40 float w100" type="email" id="Email" name="Email" placeholder="Email:" required><br>
    <input class="h40 float w100" type="text" name="CPF" id="CPF" placeholder="CPF:" required><br>
    <input class="h40 float w100" type="date" name="Dt_Nascimento" id="Dt_Nascimento" placeholder="Data de Nascimento:" required><br>
    <input class="h40 float w100" type="password" name="Senha" id="Senha" placeholder="Senha:" required><br>
    <input class="h40 float w100" type="password" name="SenhaConf" id="SenhaConf" placeholder="Confirmação da Senha:" required><br>
    <input class="h40 floatR center" type="submit" value="Cadastrar">
    <div class="loginTextos float ">Já tem conta? <a href="<?php echo DIRPAGE.'login';?>">Faça o login</a></div>
    </div>
</form>


<!-- <br><br>
<hr>
<br><br>
<h1>Seleção de dados</h1>

<form name="FormSelect" id="FormSelect" action="<?php //echo DIRPAGE.'cadastro/seleciona';?>" method="post">
    Nome:<input type="text" name="Nome" id="Nome"><br>
    <select name="Sexo" id="Sexo">
        <option value="">Selecione...</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    Cidade:<input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Pesquisar">
</form>

Responsavel por receber a table pesquisa
<div class="Resultado" style="width: 100%; height:300px; background: green;">
</div>

<br><br>
<hr>
<br><br>
<h1>Formulario de atualizações</h1>
<div class="ResultadoFormulario"></div> -->