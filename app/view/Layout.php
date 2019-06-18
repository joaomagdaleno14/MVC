<?php include_once (DIRREQ."/src/class/ClassBreadcrumb.php"); ?>
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
    <nav>
        <?php echo $this->addNav(); ?>
    </nav>

    <header>
        <?php echo $this->addHeader(); ?>
    </header>

   <main>
        <?php echo $this->addMain(); ?>
   </main>

    <footer>
        <?php echo $this->addFooter(); ?>
    </footer>
    
</body>
</html>