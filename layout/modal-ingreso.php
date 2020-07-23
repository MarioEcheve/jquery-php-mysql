<div class="modal fade" id="modalFormulario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="rut" class="col-form-label">Rut:</label>
            <input type="text" class="form-control" id="rut">
            <label for="nombre" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre">
            <label for="apellido" class="col-form-label">Apellido:</label>
            <input type="text" class="form-control" id="apellido">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="email">
            <label for="direccion" class="col-form-label">Dirección:</label>
            <input type="text" class="form-control" id="direccion">
            <label for="perfil" class="col-form-label">Perfil:</label>
            <input type="text" class="form-control" id="perfil">
            <label for="estado" class="col-form-label">estado:</label>
            <input type="text" class="form-control" id="estado">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardarUsuario">Guardar</button>
      </div>
    </div>
  </div>
</div>