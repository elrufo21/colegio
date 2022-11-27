<?php
session_start();
include_once "../../model/asistencia_profesor.php";
$obj_asistencia_profesor = new asistencia_profesor();
$rs = $obj_asistencia_profesor->read();
$count =0;
?>
<table id="table_asistencia_profesor" class="table table-bordered table-striped table-sm" style="font-size: 12px;">
    <thead>
        <tr>
            <th>N°</th>
            <th>ID</th>
            <th>Profesor</th>
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
                $accion = '<button data-id="' . $fila["id_asistencia_profesor"] . '" 
                title="Activar" class="btn btn-xs btn-success activar-item" id="btn_item' . $fila["id_asistencia_profesor"] . '">
                <i class="fas fa-user-check" id="icon_item' . $fila["id_asistencia_profesor"] . '"></i></button>';
            } else {
                $accion = '<button data-id="' . $fila["id_asistencia_profesor"] . '"     
                title="Inactivar" class="btn btn-xs btn-danger desactivar-item" id="btn_item' . $fila["id_asistencia_profesor"] . '">
                <i class="far fa-trash-alt" id="icon_item' . $fila["id_asistencia_profesor"] . '"></i></button>';
            }
            if ($_SESSION['rango'] == "admin") {
                $btn_editar = '<button data-id="' . $fila["id_asistencia_profesor"] . '"
                 title="Mas detalle" class="btn btn-xs btn-warning new-modal-profesor"><i class="far fa-edit"></i></button>';
            } else {
                $btn_editar = "";
            }
            if ($_SESSION['rango'] != "admin") {
                $accion = "";
            } ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $fila["id_asistencia_profesor"] ?></td>
                <td><?php echo $fila["nombres"] . " " . $fila['apellido_paterno'] . " " . $fila['apellido_materno'] ?></td>
                <td><?php echo $fila['asistencia'] ?></td>
                <td><?php echo $fila['fecha'] ?></td>
                
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
                    <button data-id="<?php echo $fila['id_asistencia_profesor'] ?>" title="Modificar" class="btn btn-xs btn-primary new-modal-show-asistencia_profesor"><i class="far fa-eye"></i></button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>