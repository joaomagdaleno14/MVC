<?php 
include("Class/ClassCrud.php");
    # Edicão de dados
    if(isset($_GET['id'])){
        $Acao="Editar";
        

        $Crud=new ClassCrud();
        $BFetch=$Crud->selectDB("*","cliente","where Id=?", array($_GET['id']));
        $Fetch=$BFetch->fetch(PDO::FETCH_ASSOC);
        $ID=$Fetch['ID'];
        $Nome=$Fetch['Nome'];
        $Sexo=$Fetch['Sexo'];
        $Cidade=$Fetch['Cidade'];
        $Acao1=$Sexo;

    }
    #Cadastro novo
    else{
        $Acao="Cadastrar";
        $ID=0;
        $Nome="";
        $Acao1="Selecione...";
        $Cidade="";

    }
?>


<div class="Resultado"></div>

    <div class="Formulario">
        <h1>Cadastro</h1>

        <form name="FormCadastro" id="FormCadastro" action="Controllers/ControllerCadastro.php" method="post">
            <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
            <input type="hidden" id="ID" name="ID" value="<?php echo $ID; ?>">


            <div class="FormularioInput">
                <input type="text" name="Nome" id="Nome" placeholder="Nome" value="<?php echo $Nome; ?>">
            </div>

            <div class="FormularioInput">
                Sexo: <br>
               <select name="Sexo" id="Sexo" >
                <option value="<?php echo $Acao1; ?>"><?php echo $Acao1; ?></option>
                <option value="Masculino">Masculino</option>
                <option value="Feminino">Feminino</option>
               </select>
            </div>

            <div class="FormularioInput">
                <input type="text" name="Cidade" id="Cidade" placeholder="Cidade" value="<?php echo $Cidade; ?>">
            </div>

            <div class="FormularioInput FormularioInput100 Center">
                <input type="submit" value="<?php echo $Acao; ?>">
            </div>
        </form>

    </div>