<?php
session_start();
include_once "../../model/asistencia_empleado.php";
ini_set('date.timezone','America/Lima');
$obj_asistencia_empleado = new asistencia_empleado();
$rs = $obj_asistencia_empleado->read();
$count =0;


?>
<table id="table_asistencia_empleado" class="table table-bordered table-striped table-sm" style="font-size: 12px;">
    <thead>
        <tr>
            <th>N°</th>
            <th>ID</th>
            <th>Empleado</th>
            <th>Asistencia</th>
            <th>Fecha</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php while ($fila = mysqli_fetch_assoc($rs)) {
            $count++;
           
            if ($_SESSION['rango'] == "admin") {
                $btn_editar = '<button data-id="' . $fila["id_asistencia_empleado"] . '"
                 title="Mas detalle" class="btn btn-xs btn-warning new-modal-empleado"><i class="far fa-edit"></i></button>';
            } else {
                $btn_editar = "";
            }
            if ($_SESSION['rango'] != "admin") {
                $accion = "";
            } ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $fila["id_asistencia_empleado"] ?></td>
                <td><?php echo $fila["nombres"] . " " . $fila['apellido_paterno'] . " " . $fila['apellido_materno'] ?></td>
                <td><?php echo $fila['asistencia'] ?></td>
                <td><?php echo $fila['fecha'] ?></td>
                
                <td>
                    <?php
                    echo $btn_editar;
                    echo $accion; ?>
                    <button data-id="<?php echo $fila['id_asistencia_empleado'] ?>" title="Modificar" class="btn btn-xs btn-primary new-modal-show-asistencia_profesor"><i class="far fa-eye"></i></button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>