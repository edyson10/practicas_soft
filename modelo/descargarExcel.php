<?php

header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=historial.xls');

require_once '../controlador/conexion.php';
?>
<table>
    <thead>
        <tr>
            <th>ID Convenio</th>
            <th>C&oacute;digo</th>
            <th>Nombre</th>
            <th>Fecha del convenio</th>
        </tr>
    </thead>
    <tbody>
        <?php
        try {
            require_once '../controlador/conexion.php';
            $sql = "SELECT crear_convenio.id_convenio, estudiante.codigo, persona.nombre, fechaConvenio FROM crear_convenio 
                                                    INNER JOIN estudiante ON estudiante.codigo = crear_convenio.estudiante INNER JOIN persona ON persona.cedulanit = estudiante.cedula";
            $resultado = $conexion->query($sql);
        } catch (Exception $e) {
            $error = $e->getMessage()();
            echo $error;
        }

        while ($profesor = $resultado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $profesor['id_convenio']; ?></td>
                <td><?php echo $profesor['codigo'] ?></td>
                <td><?php echo $profesor['nombre'] ?></td>
                <td><?php echo $profesor['fechaConvenio'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>