<?php
// Jorge Arriarán Saldías
// 2014

function ffError($errno, $errstr, $errfile, $errline){
  //$ddf = fopen('error_log','a');
  $ddf = fopen($_SERVER['DOCUMENT_ROOT'].'/error_log','a');
  $sMensaje = '['.$errno.']('.date('d-m-Y H:i:s').') '.$errstr.' '.$errfile.":".$errline."\r\n\n";
  fwrite($ddf, $sMensaje);
  fclose($ddf);
}
set_error_handler('ffError');