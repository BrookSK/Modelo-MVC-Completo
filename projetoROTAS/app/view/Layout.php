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
        <?php echo $this->addHead();?>
    </head>
    <body>
        <div class="page-container">
            <div class="content-wrap">
                <div class="Nav">
                    <a href="<?php echo DIRPAGE; ?>">Home</a>
                    <a href="<?php echo DIRPAGE.'cadastro' ?>">Cadastro</a>
                </div>
                <div class="Header">
                    <img src="<?php echo DIRIMG.'banner.png'; ?>" alt="Banner" width="100%" height="200">
                    TEL: XXX
                    <?php echo $this->addHeader(); ?>
                </div>
                <div class="Main">
                    <?php echo $this->addMain(); ?>
                </div>
            </div>
            <footer class="Footer">
                <h4>2023 - Todos os direitos reservados Lucas Vacari</h4><br>
                <?php echo $this->addFooter(); ?>
            </footer>
        </div>
    </body>
</html>