<?php

/**
 * Obtener la URL de los CSS
 * @param $filename
 * @return string
 */
function css_url($filename) {
    return base_url('public/'.CODE_VERSION_NAME.'/css/' . $filename);
}

/**
 * Obtener la URL de los JS
 * @param $filename
 * @return string
 */
function js_url($filename) {
    return base_url('public/'.CODE_VERSION_NAME.'/js/' . $filename);
}

/**
 * Obtener la URL de los SRC
 * @param $filename
 * @return string
 */
function img_url($filename) {
    return base_url('public/'.CODE_VERSION_NAME.'/img/' . $filename);
}

/**
 * Obtener documentos
 * @param $filename
 * @return string
 */
function doc_url($filename) {
    return base_url('public/'.CODE_VERSION_NAME.'/doc/' . $filename);
}

/**
 * Obtener JSON
 * @param $filename
 * @return string
 */
function json_url($filename) {
    return base_url('public/'.CODE_VERSION_NAME.'/json/' . $filename . '.json');
}

/**
 * Route URL
 * @param $path
 * @return string
 */
function path_url($path) {
    if (isLocalHost()) {
        return site_url('index.php/' . $path);
    } else {
        return site_url($path);
    }
}

/**
 * Is localhost
 * @return bool
 */
function isLocalHost() {
    $whitelist = array('127.0.0.1', '::1');
    return in_array($_SERVER['REMOTE_ADDR'], $whitelist);
}

?>