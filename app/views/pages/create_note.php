<?php
use core\Router;
?>
<form action="<?= Router::getUrl('note','store')?>" method="post">
    <label for="note">Note</label>
    <input type="text" name="note" id="note"/>
    <input type="submit" value="Create"/>
</form>