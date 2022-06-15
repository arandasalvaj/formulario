<?php require('./header.php') ?>

<!-- Add New User Modal Start -->
<div class="modal fade" tabindex="-1" id="addNewUserModal">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary">Agregar Cultivo</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3">
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Invernadero:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecciona un invernadero</option>
                    <option value="1">MHGlobal</option>
                    <option value="2">Frontera</option>
                </select>
                <div class="invalid-feedback">El invernadero es requerido</div>
              </div>
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
              <input type="email" name="email" class="form-control form-control-lg" placeholder="Ingrese el nombre del cultivo" required>
              <div class="invalid-feedback">El nombre es requerido!</div>
            </div>

            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempMax:</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempMin:</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>
            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">HumedadMax:</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">HumedadMin:</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>
            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempAguaMax:</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempAguaMin:</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>
            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Co2Max:</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Co2Min:</label>
                    <input type="email" name="email" class="form-control form-control-lg" placeholder="" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
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

  <!-- Edit User Modal Start -->
  <div class="modal fade" tabindex="-1" id="eddiModalCultivo1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary">Editar Cultivo</h5>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="add-user-form" class="p-2" novalidate>
            <div class="row mb-3">
              <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Invernadero:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>MHGlobal</option>
                    <option value="1">Frontera</option>
                    <option value="2">Selecciona un invernadero</option>
                </select>
                <div class="invalid-feedback">El invernadero es requerido</div>
              </div>
            </div>

            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre:</label>
              <input type="email" name="email" class="form-control form-control-lg" value="Lechuga" required>
              <div class="invalid-feedback">El nombre es requerido!</div>
            </div>

            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempMax:</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="24" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempMin:</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="7" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>
            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">HumedadMax:</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="80" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">HumedadMin:</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="70" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>
            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempAguaMax:</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="26" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">TempAguaMin:</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="18" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>
            <div class="row mb-3 gx-3">
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Co2Max:</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="2.000" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
                <div class="col">
                    <label for="exampleFormControlInput1" class="form-label">Co2Min:</label>
                    <input type="email" name="email" class="form-control form-control-lg" value="200" required>
                    <div class="invalid-feedback">El nombre es requerido!</div>
                </div>
            </div>

            <div class="mb-3">
              <input type="submit" value="Actualizar" class="btn btn-success btn-block btn-lg" id="add-user-btn">
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
          <h4 class="text-primary">Listado de Cultivos</h4>
        </div>
        <div>
          <button class="btn btn-success" type="button" data-toggle="modal" data-target="#addNewUserModal">Agregar Nuevo Cultivo</button>
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
                <th>Invernadero</th>
                <th>Nombre</th>
                <th>TempMax</th>
                <th>TempMin</th>
                <th>HumedadMax</th>
                <th>HumedadMin</th>
                <th>TempAguaMax</th>
                <th>TempAguaMin</th>
                <th>Co2Max</th>
                <th>Co2Min</th>
                <th>Fecha</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>MHGlobal</td>
                    <td>Lechuga</td>
                    <td>24</td>
                    <td>7</td>
                    <td>80</td>
                    <td>70</td>
                    <td>26</td>
                    <td>18</td>
                    <td>2.000</td>
                    <td>200</td>
                    <td>2022-06-13</td>
                    <td><a href="#" class="text-warning" data-toggle="modal" data-target="#eddiModalCultivo1"><span class="material-symbols-outlined">edit</span></a>
                    <a href="#" class="text-danger" data-toggle="modal" data-target=""><span class="material-symbols-outlined">cancel</span></a>
                    <a href="dashboardLechuga.php" class="text-info"><span class="material-symbols-outlined">visibility</span></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>MHGlobal</td>
                    <td>tomate</td>
                    <td>24</td>
                    <td>7</td>
                    <td>80</td>
                    <td>70</td>
                    <td>26</td>
                    <td>18</td>
                    <td>2.000</td>
                    <td>200</td>
                    <td>2022-06-13</td>
                    <td><a href="#" class="text-warning" data-toggle="modal" data-target="#eddiModalCultivo1"><span class="material-symbols-outlined">edit</span></a>
                    <a href="#" class="text-danger" data-toggle="modal" data-target=""><span class="material-symbols-outlined">cancel</span></a>
                    <a href="dashboardTomate.php" class="text-info"><span class="material-symbols-outlined">visibility</span></a>
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