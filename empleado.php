<?php
  require_once 'models/empleado_model.php';
  $id = $_GET['id'];
  


  $empleados_model = new Empleado_model();
  $empleados = $empleados_model->get_empleados();
  $empleado = $empleados_model->get_empleado_by_id($id);

  foreach ($empleados as $empleado) {
    echo $empleado;
  }

 ?>
