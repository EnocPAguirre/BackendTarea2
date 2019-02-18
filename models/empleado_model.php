<?php
  class Empleado_model {

    private $empleados = array(
      array('id' => 1, 'nombre' => 'Enoc Pineda Aguirre', 'fecha_ingreso' =>'03/10/15'),
      array('id' => 2, 'nombre' => 'Adiene Pineda Aguirre', 'fecha_ingreso' =>'03/10/15'),
      array('id' => 3, 'nombre' => 'Paloma Pineda Aguirre', 'fecha_ingreso' =>'03/10/15'),
      array('id' => 4, 'nombre' => 'Eneida Aguirre Pineda', 'fecha_ingreso' =>'03/10/15')
    );

    public function get_empleados() {
      return $this->empleados;
    }
    public function get_empleado_by_id($id){
      $empleados = $this->empleados;
      for ($i=0; $i < count($empleados); $i++) {
        if ($empleados[$id]['id'] == $id) {
          return $empleados[$i];
        }
      }
      return NULL;
    }


  }

 ?>
