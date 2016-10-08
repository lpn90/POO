<?php
/**
 * User: Leonardo
 * Date: 07/10/2016
 * Time: 16:01
 */

define('CLASS_DIR', 'src/');
set_include_path((get_include_path().PATH_SEPARATOR.CLASS_DIR));
spl_autoload_register(function($class) {
    require_once(str_replace('\\','/',$class .'.php'));
});