<?php 
    include("Includes/Header.php");
    include("Class/ClassCrud.php");
?>

<div class="Content">
    <div class="Resultado"></div>
    <table class="TabelaCrud">
        <tr>
            <td>Nome</td>
            <td>Sexo</td>
            <td>Cidade</td>
            <td>Ações</td>
        </tr>

        <!---- Estrutura de Loop ------>

        <?php $Crud= new ClassCrud();
            $BFetch=$Crud->selectDB(
                "*",
                "cliente",
                "",
                array()
            );
            while ($Fetch=$BFetch->fetch(PDO::FETCH_ASSOC)) {
        ?>
        <tr>
            <td><?php echo $Fetch['Nome'];?></td>
            <td><?php echo $Fetch['Sexo']; ?></td>
            <td><?php echo $Fetch['Cidade']; ?></td>
            <td>
                <a href="<?php echo "Visualizar.php?id={$Fetch['ID']}"; ?>"><img src="Images/search.png" alt="Visualizar"></a>
                <a href="<?php echo "Cadastro.php?id={$Fetch['ID']}"; ?>"><img src="Images/edit.png" alt="Editar"></a>
                <a class="Deletar" href="<?php echo "Controllers/ControllerDelete.php?id={$Fetch['ID']}"; ?>"><img src="Images/delete.png" alt="Deletar"></a>
            </td>
        </tr>

        <?php   
            }
        ?>
    </table>
</div>
<?php include("Includes/Footer.php");?>