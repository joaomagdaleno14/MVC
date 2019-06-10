<form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/cadastrar';?>" method="post">
    <div class="cadastro">
    <input type="text" name="Nome" id="Nome" placeholder="Nome:" required><br>
    <select name="Sexo" id="Sexo">
        <option value="">Selecione...</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    Cidade:<input type="text" name="Cidade" id="Cidade"><br>
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