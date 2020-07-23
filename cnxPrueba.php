<?php

try {
    // Produccion
    $db = new PDO('mysql:host=localhost;dbname=prueba', 'root', '');


} catch (Exception $ex) {
    echo $ex->getMessage();
    #echo 'Error interno. Ya se inform&oacute; esta situaci&oacute;n.';
    trigger_error($ex->getMessage());
    exit;
}
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, true);
$db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);