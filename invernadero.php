<?php require('./header.php') ?>

<!-- Add New User Modal Start -->
<div class="modal fade" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary">Agregar Nuevo Invernadero</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3">
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
                <input type="text" name="lname" class="form-control form-control-lg" placeholder="Ingrese el nombre del invernadero" required>
                <div class="invalid-feedback">El nombre es requerido</div>
              </div>
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ubicacion:</label>
              <input type="email" name="email" class="form-control form-control-lg" placeholder="Ingrese la ubicacion del invernadero" required>
              <div class="invalid-feedback">La ubicacion es requerido!</div>
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Capacidad:</label>
              <input type="tel" name="phone" class="form-control form-control-lg" placeholder="Ingrese la capacidad de cultivo" required>
              <div class="invalid-feedback">la capacidad es requerido!</div>
            </div>

            <div class="mb-3">
              <input type="submit" value="Agregar" class="btn btn-success btn-block btn-lg" id="add-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Add New User Modal End -->

  <!-- Edit User Modal 1 Start -->
  
  <div class="modal fade" tabindex="-1" id="editUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary">Editar Invernadero</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3">
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
                <input type="text" name="lname" class="form-control form-control-lg" value="MHGlobal" required>
                <div class="invalid-feedback">El nombre es requerido</div>
              </div>
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ubicacion:</label>
              <input type="email" name="email" class="form-control form-control-lg" value="ChiuChiu 3040" required>
              <div class="invalid-feedback">La ubicacion es requerido!</div>
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Capacidad:</label>
              <input type="tel" name="phone" class="form-control form-control-lg" value="4" required>
              <div class="invalid-feedback">la capacidad es requerido!</div>
            </div>

            <div class="mb-3">
              <input type="submit" value="Actualizar" class="btn btn-outline-success btn-block btn-lg" id="add-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit User Modal End -->
  <!-- Edit User Modal 2 Start -->
  
  <div class="modal fade" tabindex="-1" id="editUserModal2">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary">Editar Invernadero</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3">
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
                <input type="text" name="lname" class="form-control form-control-lg" value="Frontera" required>
                <div class="invalid-feedback">El nombre es requerido</div>
              </div>
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Ubicacion:</label>
              <input type="email" name="email" class="form-control form-control-lg" value="ChiuChiu 3050" required>
              <div class="invalid-feedback">La ubicacion es requerido!</div>
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Capacidad:</label>
              <input type="tel" name="phone" class="form-control form-control-lg" value="2" required>
              <div class="invalid-feedback">la capacidad es requerido!</div>
            </div>

            <div class="mb-3">
              <input type="submit" value="Actualizar" class="btn btn-outline-success btn-block btn-lg" id="add-user-btn">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Edit User Modal End -->
  
  <div class="container py-5">
    <div class="row mt-4">
      <div class="col-lg-12 d-flex justify-content-between align-items-center">
        <div>
          <h4 class="text-primary">Listado de Invernaderos</h4>
        </div>
        <div>
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addNewUserModal">Agregar Nuevo invernadero</button>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <div id="showAlert"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="table-responsive">
          <table class="table table-striped table-bordered text-center">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Ubicacion</th>
                <th>Capacidad Cultivo</th>
                <th>Fecha</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>MHGlobal</td>
                    <td>ChiuChiu 3040</td>
                    <td>4</td>
                    <td>2022-06-13</td>
                    <td><a href="#" class="text-warning" data-toggle="modal" data-target="#editUserModal"><span class="material-symbols-outlined">edit</span></a>
                    <a href="#" class="text-danger" data-toggle="modal" data-target=""><span class="material-symbols-outlined">cancel</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Frontera</td>
                    <td>ChiuChiu 3050</td>
                    <td>2</td>
                    <td>2022-06-13</td>
                    <td><a href="#" class="text-warning" data-toggle="modal" data-target="#editUserModal2"><span class="material-symbols-outlined">edit</span></a>
                    <a href="#" class="text-danger" data-toggle="modal" data-target=""><span class="material-symbols-outlined">cancel</span></a>
                    </td>
                </tr>

            </tbody>
          </table>
          
        </div>
      </div>
    </div>
    
  </div>
  
  <script src="main.js"></script>

</body>
</html>