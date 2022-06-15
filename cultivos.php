<?php require('./header.php') ?>
<section class="container py-5">
      <div class="row">
          <div class="col-md-12 pt-2">
            <h1>Cultivos</h1>  
          </div>
          <div class="col-md-12">
            <table class="table text-center">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Código</th>
                  <th scope="col">Producto</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">TempMaxima</th>
                  <th scope="col">TempMinima</th>
                  <th scope="col">HumMaxima</th>
                  <th scope="col">HumMiniima</th>
                  <th scope="col">TempMax Agua</th>
                  <th scope="col">TempMin Agua </th>
                  <th scope="col">CO2 Max</th>
                  <th scope="col">CO2 Min</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td scope="row"><input type="checkbox"></td>
                  <th>1</th>
                  <td><img src="images/lechuga.jpg" alt="Arroz con Pollo" class="img-fluid" width="100px"></td>
                  <td>Lechuga</td>
                  <td>25.0</td>
                  <td>1</td>
                  <td>40%</td>
                  <td>10%</td>
                  <td>25.2</td>
                  <td>10</td>
                  <td>20</td>
                  <td>1</td>
                  <td>
                    <button class="btn btn-link text-danger p-0 align-middle">
                      <span class="material-icons">cancel</span>
                    </button>
                    <button class="btn btn-link text-dark p-0 align-middle">
                      <span class="material-icons">edit</span>
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
      </div>
      
      <section class="fixed-bottom bg-green shadow-lg">
        <div class="container-fluid">
          <row>
            <div class="col-md-12">
              <div class="float-right py-2">
                <button class="btn btn-danger btn-lg">ELIMINAR SELECCIONADOS</button>
                <button class="btn btn-danger btn-lg">ELIMINAR TODOS</button>
              </div>
            </div>
          </row>
        </div>
      </section>
      


</section> 
</body>
</html>