<?php
use core\Router;
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <header>
            <a href="/"><div>Site name</div></a>
        </header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="<?= Router::getUrl('index','about')?>">About</a></li>
                <li><a href="<?= Router::getUrl('index','contacts')?>">Contacts</a></li>
                <li><a href="<?= Router::getUrl('note','index')?>">Notes</a></li>
            </ul>
        </nav>
        <?php include_once $this->getPagePath()?>
    </body>
</html>