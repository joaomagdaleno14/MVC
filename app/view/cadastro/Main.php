<form name="FormCadastro" id="FormCadastro" action="<?php echo DIRPAGE.'cadastro/cadastrar';?>" method="post">
    Nome:<input type="text" name="Nome" id="Nome"><br>
    <select name="Sexo" id="Sexo">
        <option value="">Selecione...</option>
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
    </select><br>
    Cidade:<input type="text" name="Cidade" id="Cidade"><br>
    <input type="submit" value="Cadastrar">
</form>