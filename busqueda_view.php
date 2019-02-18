
<ul>
<?php
require_once 'views/body_view.php';
require_once 'models/empleado_model.php';
require_once 'empleado.php';

foreach ($empleados as $empleado) {?>
  <li>
      <?php
      echo (int)$_GET['id'];
      ?>
    </li>

    <li>
      <?php
      echo $_GET['nombre'];
      ?>
    </li>

    <li>
      <?php
      echo $_GET['fecha_ingreso'];
      ?>
    </li>

<?php } ?>
</ul>
