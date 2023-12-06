<?php
use core\Router;
?>
<h1>Notes</h1>
<a href="<?= Router::getUrl('note','create')?>">New note</a>
<ul>
    <?php foreach ($notes as $note):?>
        <li><?= $note['text']?></li>
    <?php endforeach;?>
</ul>