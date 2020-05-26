<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <title>Actualizar datos</title>
</head>

<body>
  <div class="text-center">
    <h1>Actualizar datos</h1>
  </div>
   <br><br><br>


   
<div class="container">
<form method="POST" action="<?= site_url('pacientes/update') ?>">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nombre</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre.." value="<?= $model['nombre'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido paderno</label>
      <input type="text" class="form-control" name="apellido_p" placeholder="Apellido paterno.." value="<?= $model['apellido_p'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Apellido materno</label>
      <input type="text" class="form-control" name="apellido_m" placeholder="Apellido materno.." value="<?= $model['apellido_m'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Teléfono</label>
      <input type="text" class="form-control" name="telefono" placeholder="Teléfono.." value="<?= $model['telefono'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Edad</label>
      <input type="text" class="form-control" name="edad" placeholder="Edad.." value="<?= $model['edad'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Sexo</label>
      <input type="text" class="form-control" name="sexo" placeholder="Sexo.." value="<?= $model['sexo'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Tipo de sangre</label>
      <input type="text" class="form-control" name="tipo_sangre" placeholder="Tipo desangre.." value="<?= $model['tipo_sangre'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Área</label>
      <input type="text" class="form-control" name="area" placeholder="Área.." value="<?= $model['area'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Cuarto</label>
      <input type="text" class="form-control" name="cuarto" placeholder="Cuarto.." value="<?= $model['cuarto'] ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Padecimiento</label>
      <input type="text" class="form-control" name="padecimiento" placeholder="Padecimiento.." value="<?= $model['padecimiento'] ?>">
    </div>
</div>
<br>
<div class="text-center">
<button type="submit" class="btn btn-warning col-md-3">Actualizar datos</button> 
<input type="hidden" name="id_pacientes" id="id_pacientes" value="<?= $model['id_pacientes'] ?>" >
</div>
  
  
</form>
</div>





  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>