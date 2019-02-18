<?php
#pagina principal formulario con un input y un boton de buscar
#la pagina debe ir asi misma
#por url debe recibir los parametro
#tener una base de datos a partir de un arreglo(empleados, nombre, un id y fecha de ingreso )
#buscador que a partir del numero
#traer el empleado que tenga ese NumberFormatter
#si recibo una cadena Juan lo buscar a todos los empleados que cumplan con esa caracteristica
#si yo pongo una fecha que devuelva a todos lo empleados que ingresaron antes de esa fecha

#Condiciones
#Solo hay una vista de resultados
#No codigo de más de 20 lineas
#Dia/Mes/Año
require_once 'models/empleado_model.php';
  $empleados_model = new Empleado_model();
  $empleados = $empleados_model->get_empleados();
  

 require_once 'views/header.php';
 require_once 'views/footer.php';
 require_once 'views/body_view.php';
 require_once 'views/empleado_view.php';
 ?>
