<form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/cadastrar';?>" method="post">
    <div class="cadastro">
    <input type="text" name="Nome" id="Nome" placeholder="Nome:" required><br>
    <input type="email" id="Email" name="Email" plaaceholder="Email:" required><br>
    <input type="text" name="CPF" id="CPF" placeholder="CPF:" required><br>
    <input type="text" name="Dt_Nascimento" id="Dt_Nascimento" placeholder="Data de Nascimento:" required><br>
    <input type="password" name="Senha" id="Senha" placeholder="Senha:" required><br>
    <input type="password" name="SenhaConf" id="SenhaConf" placeholder="Confirmação da Senha:" required><br>
    <input type="submit" value="Cadastrar">
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