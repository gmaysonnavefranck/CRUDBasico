    <?php

function dd ($value): void
{
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}