<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Hospital</title>

  <style>
 #table {
  -webkit-box-shadow: -1px 5px 23px -1px rgba(189, 179, 189, 1);
  -moz-box-shadow: -1px 5px 23px -1px rgba(189, 179, 189, 1);
  box-shadow: -1px 5px 23px -1px rgba(189, 179, 189, 1);
}
@media screen and (max-width: 600px) {
       table {
           width:100%;
       }
       thead {
           display: none;
       }
       tr:nth-of-type(2n) {
           background-color: inherit;
       }
       tr td:first-child {
           background: #f0f0f0;
           font-weight:bold;
           font-size:1.3em;
       }
       tbody td {
           display: block;
           text-align:center;
       }
       tbody td:before {
           content: attr(data-th);
           display: block;
           text-align:center;
       }
}


  </style>
</head>

<body>
  <div class="text-center">
    <h1>Hospital</h1>
  </div>
  <br>
  <div class="container-fluid">  
    <table  id="table" class="table table-hover table-bordered table-sm" cellspacing="0" width="100%" id="sombra">
      <thead>
        <tr class="table-primary">
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido Paterno</th>
          <th scope="col">Apellido Materno</th>
          <th scope="col">Teléfono</th>
          <th scope="col">Edad</th>
          <th scope="col">Sexo</th>
          <th scope="col">Tipo de sangre</th>
          <th scope="col">Área</th>
          <th scope="col">Cuarto</th>
          <th scope="col">Padecimiento</th>
          <th scope="col"> </th>
        </tr>
      </thead>
      <tbody>
        <?php $no = 1 ?>
        <?php foreach ($pacientes as $paciente) { ?>
          <tr>
            <th scope="row"><?= $no++ ?></th>
            <td><?= $paciente['nombre'] ?></td>
            <td><?= $paciente['apellido_p'] ?></td>
            <td><?= $paciente['apellido_m'] ?></td>
            <td><?= $paciente['telefono'] ?></td>
            <td><?= $paciente['edad'] ?></td>
            <td><?= $paciente['sexo'] ?></td>
            <td><?= $paciente['tipo_sangre'] ?></td>
            <td><?= $paciente['area'] ?></td>
            <td><?= $paciente['cuarto'] ?></td>
            <td><?= $paciente['padecimiento'] ?></td>
            <td><a href="<?= site_url('pacientes/editar/' . $paciente['id_pacientes']) ?>" class="btn btn-warning">Editar</a>
            <a href="<?= site_url('pacientes/eliminar/' . $paciente['id_pacientes']) ?>" class="btn btn-danger">Delete</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  <br>
  <div class="container-fluid">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
      Agregar pacientes
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title " id="exampleModalLabel">Agregar pacientes</h5>
            <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
          </div>
          <div class="modal-body">
            <!-- Form -->
            <form method="POST" action="<?= site_url('pacientes/guardar') ?>">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombres">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="apellido_p" placeholder="Apellido Paterno">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="apellido_m" placeholder="Apellido Materno">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="telefono" placeholder="teléfono">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="edad" placeholder="Edad">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="sexo" placeholder="Sexo">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="tipo_sangre" placeholder="Tipo de sangre">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="area" placeholder="Área">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="cuarto" placeholder="Cuarto">
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="padecimiento" placeholder="Padecimiento">
                </div>

                <div class="modal-footer">
                  <button type="submit" class="btn btn-warning" name="save">Guardar</button>                
                </div>
                <br>
                
            </form>
                

          </div>
                

        </div>
      </div>
    </div>
  </div>
  
  <script>
$(document).ready(function () {
$('#dtHorizontalVerticalExample').DataTable({
"scrollX": true,
"scrollY": 200,
});
$('.dataTables_length').addClass('bs-select');
});
</script>
<script>
     $('#websendeos').stacktable();
</script>
<script>
     $('table').stacktable();
</script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>