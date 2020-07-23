<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba/cnxPrueba.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba/classes/Usuario.php';
    require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba/classes/Perfil.php';
    $Usuario = new Usuario($db);
    $Perfil = new Perfil($db);
?>
<html lang="es">
<head>
    <meta name="author" content="mecheverria"/>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title> Genesis  </title>
    <!--Referencia a la creacion de css personalizado-->
    <link rel="stylesheet" href="/prueba/css/estilosCss.css">
    <!-- esto relacion de la escala al celular -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="/jquery/jquery-ui.js"  type="text/javascript"> </script>
   <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba/include/header.html';
   ?>
   <script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip(); 
    });
    </script>  
</head>
<body>
<div class="container">
    <div class="col-md-8 col-md-offset-2">
        <h1>Usuarios
            <a id="btn_ingreso" class="btn btn-primary pull-right menu"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;Nuevo usuario</a>
        </h1>  
    </div>
    <div class="col-10">    
    <table id="tablaUsuario" class="display table table-sm table-responsive" style="width:100%">
        <thead>
            <tr>
                <th>nombre</th>
                <th>apellido</th>
                <th>email</th>
                <th>dirección</th>
                <th>perfil</th>
                <th>estado</th>
                <th>acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
                <td>
                    <div class="row">
                        <button class="btn tbn-sm btn-secondary botonMargen" >
                            EDITAR
                        </button>
                        <button class="btn tbn-sm btn-secondary botonMargen">
                            ELIMINAR
                        </button>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>     
    </div>
</div>

<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/prueba/layout/modal-ingreso.php';
?>

<script>
    $(document).ready(function() {
        $('#tablaUsuario').DataTable();
        $('#btn_ingreso').click(function(){
            $('#modalFormulario').modal('show')
        });
    } );
</script>
<script src="js/ingreso-usuario.js"></script>
</body>
</html>

