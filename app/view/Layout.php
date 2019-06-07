<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="João Magdaleno">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css' ?>">
    <?php echo $this->addHead(); ?>
</head>
<body>
    <div class="Nav">
        <a href="<?php echo DIRPAGE; ?>">Home</a>
        <a href="<?php echo DIRPAGE.'contato'?>">Contato</a>
        <a href="<?php echo DIRPAGE.'cadastro'?>">Cadastro</a>
    </div>
     <div class="Header">
        <img src="<?php echo DIRIMG.'banner.jpg'?>" alt="Banner"><br>
        <?php 
            $Breadcrumb=new Src\Classes\ClassBreadcrumb();
            $Breadcrumb->addBreadcrumb();
        ?>
        <br><br><hr>
        <?php echo $this->addHeader(); ?>
     </div>

     <div class="Main">
     <?php echo $this->addMain(); ?>
     </div>

     <div class="Footer">
         2019 - Todos os direitos reservados Magdaleno <br>
        <?php echo $this->addFooter(); ?>
     </div>
</body>
</html>