const btnguardarUsuario = document.querySelector("#guardarUsuario");

eventListener();

function eventListener() {
// cuando el formulario de crear o editar se ejecuta
    //btnIngresoconductores.addEventListener('click', cargardatos);
    btnguardarUsuario.addEventListener('click', insertClick);
}
function insertClick() {
    // obtengo los dartos del usuario.
    var rut = document.getElementById('rut').value;
    var nombre = document.getElementById('nombre').value;
    var apellido = document.getElementById('apellido').value;
    var email = document.getElementById('email').value;
    var direccion = document.getElementById('direccion').value;
    var perfil = document.getElementById('perfil').value;
    var estado = document.getElementById('estado').value;

    /* var Estado = $("input[name=estado]:checked").val();*/
    var accion = 'ingresar';

    const usuarioIngreso = new FormData();
    usuarioIngreso.append('accion', accion);
    usuarioIngreso.append('rut', rut);
    usuarioIngreso.append('nombre', nombre);
    usuarioIngreso.append('apellido', apellido);
    usuarioIngreso.append('email', email);
    usuarioIngreso.append('direccion', direccion);
    usuarioIngreso.append('perfil', perfil);
    usuarioIngreso.append('estado', estado);
    
    InserUsuario(usuarioIngreso);
}

function InserUsuario(datos) {
     console.log(...datos);

    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../modelos/modelo-usuario.php', true);
    xhr.onload = function () {
        if (this.status === 200) {
            const respuesta = JSON.parse(xhr.responseText);
            console.log(respuesta);
        } 
    };
    xhr.send(datos);
    
}