<?php 
    include("Includes/Header.php");
    include("Class/ClassCrud.php");

?>

<div class="Content">
    <div class="Resultado"></div>
    <form name="FormAvaliacoes" id="FormAvaliacoes" action="Controllers/ControllerAvaliacao.php" method="post" >
        Você gostou do livro:<br>
        <input type="radio" name="Radio" value="Sim"> Sim<br>
        <input type="radio" name="Radio" value="Não"> Não<br>
        <input type="submit" value="Votar">
        <div class="qtd"></div>
    </form>
</div>

    <div>
        <?php 
            $Crud=new ClassCrud();
            $BSim=$Crud->selectDB("*","avaliacao","where Voto=?",array("Sim"));
            $BNao=$Crud->selectDB("*","avaliacao","where Voto=?",array("Não"));

            $FSim=$BSim->rowCount();
            $FNao=$BNao->rowCount();

            $qtd = $FSim + $FNao;
            $MdSim = $FSim/$qtd;

            $MdNao = $FNao/$qtd;

            echo "Votaram sim: ".$MdSim." pessoas <br>";
            echo "Votaram não: ".$MdNao." pessoas <br>";
        ?>
    </div>

<?php include("Includes/Footer.php");?>