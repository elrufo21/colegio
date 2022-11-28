<?php
session_start();
include_once "../../model/asistencia_empleado.php";
$obj_asistencia_empleado = new asistencia_empleado();
$rs = $obj_asistencia_empleado->read();
$count =0;

$obj_asistencia_empleado->nro_documento="12345678";
$obj_asistencia_empleado->consultDNI();
echo $obj_asistencia_empleado->id_empleado;
?>
<table id="table_asistencia_empleado" class="table table-bordered table-striped table-sm" style="font-size: 12px;">
    <thead>
        <tr>
            <th>N°</th>
            <th>ID</th>
            <th>Empleado</th>
            <th>Asistencia</th>
            <th>Fecha</th>
            <th>Estado</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        <?php while ($fila = mysqli_fetch_assoc($rs)) {
            $count++;
            if ($fila["estado"] == 0) {
                $accion = '<button data-id="' . $fila["id_asistencia_empleado"] . '" 
                title="Activar" class="btn btn-xs btn-success activar-item" id="btn_item' . $fila["id_asistencia_empleado"] . '">
                <i class="fas fa-user-check" id="icon_item' . $fila["id_asistencia_empleado"] . '"></i></button>';
            } else {
                $accion = '<button data-id="' . $fila["id_asistencia_empleado"] . '"     
                title="Inactivar" class="btn btn-xs btn-danger desactivar-item" id="btn_item' . $fila["id_asistencia_empleado"] . '">
                <i class="far fa-trash-alt" id="icon_item' . $fila["id_asistencia_empleado"] . '"></i></button>';
            }
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
                <td><?php echo $fila['fehca'] ?></td>
                
                <td style="color: <?php if ($fila["estado"] == 0) {
                                        echo "red";
                                    } else {
                                        echo "green";
                                    } ?>;">
                    <?php if ($fila["estado"] == 0) {
                        echo "Inactivo";
                    } else {
                        echo "Activo";
                    } ?>
                </td>
                <td>
                    <?php
                    echo $btn_editar;
                    echo $accion; ?>
                    <button data-id="<?php echo $fila['id_asistencia_empleado'] ?>" title="Modificar" class="btn btn-xs btn-primary new-modal-show-asistencia_empleado"><i class="far fa-eye"></i></button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<!--
<script>
    $(function() {

        $("#table_empleados").DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": false,
            "info": true,
            "autoWidth": false,
        });

    });
</script> -->
