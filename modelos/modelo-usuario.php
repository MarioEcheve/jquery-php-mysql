<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba/cnxPrueba.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba/classes/Usuario.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba/classes/Perfil.php';
    $Usuario = new Usuario($db);
    $Perfil = new Perfil($db);

    if (isset($_POST)) {
        if ($_POST['accion'] == 'ingresar') {
                $rut= $_POST['rut'];
                $nombre =$_POST['nombre'];
                $apellido =$_POST['apellido'];
                $email=$_POST['email'];
                $direccion=$_POST['direccion'];
                $perfil=$_POST['perfil'];
                $estado=$_POST['estado'];
                $Usuario->insert_usuario($rut,$nombre, $apellido, $email, $direccion, $perfil, $estado);
            }
            elseif($_POST['accion']=='eliminar'){}
            elseif($_POST['accion']=='editar'){}
            elseif($_POST['accion']=='consultar'){}
        }

