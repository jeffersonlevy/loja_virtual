<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu site</title>
</head>
<body>
    <h1>Este é o topo</h1>
    <a href="<?php echo BASE_URL;?>">Home</a>
    <a href="<?php echo BASE_URL;?>galeria">Galeria</a>
    <hr/>
    <?php $this->loadViewInTemplate($viewName, $viewData);?>
</body>
</html>