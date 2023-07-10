<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Lucas Rodrigues Vacari">
    <meta name="description" content="<?php echo $this->getDescription(); ?>">
    <meta name="keywords" content="<?php echo $this->getKeywords(); ?>">
    <title><?php echo $this->getTitle(); ?></title>
    <link rel="stylesheet" href="<?php echo DIRCSS.'Style.css' ?>">
    <?php if(file_exists(DIRREQ."app/view/{$this->getDir()}/Head.php")){$this->addHead();}else{$this->addHeadCabecalhos();}?>
</head>
<body>
    <div class="Nav">
        <a href="<?php echo DIRPAGE; ?>">Home</a>
        <a href="<?php echo DIRPAGE.'cadastro' ?>">Cadastro</a>
    </div>
    <div class="Header">
        <!--<img src="<?php //echo DIRIMG.'banner.png'; ?>" alt="Banner">-->
        <?php if(file_exists(DIRREQ."app/view/{$this->getDir()}/Header.php")){$this->addHeader();}else{$this->addHeaderCabecalhos();}?>
    </div>
    <div class="Main">
    <?php echo $this->addMain(); ?>
    </div>
    <div class="Footer">
    <?php if(file_exists(DIRREQ."app/view/{$this->getDir()}/Footer.php")){$this->addFooter();}else{$this->addFooterCabecalhos();}?>
    </div>

</body>
</html>