<?php
require_once '../config.php';

set_include_path(get_include_path().PATH_SEPARATOR.
    '../model'.PATH_SEPARATOR.
    '../controller'.PATH_SEPARATOR
);

function __autoload($name)
{
    $p = $name.'.php';
    if(!include_once($p)){
        throw new Exception();
    }
}
(new Application($config))->run();