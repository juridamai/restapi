<?php

function dd($data) {
    highlight_string("<?php \n" . var_export($data, true) . ";\n ?>");
    die();
}

function ifnull($var, $change) {
    return ($var == NULL) ? $change : $var;
}
