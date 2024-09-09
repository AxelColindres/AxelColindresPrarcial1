<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Clientes</h1>
    <a class="btn btn-primary btn-block" href="<?=base_url('insertar_cliente/')?>">Nuevo Cliente</a><br><br>
                    
    <table class="table fs-3">
        <thead>
            <tr>
                <th>ID Cliente</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Fecha Subcripción</th>
                <th>Correo Electrónico</th>
                <th>Teléfono Móvil</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($datos as $clientes):
            ?>
            <tr>
                <td><?php echo $clientes['cliente_id'];?></td>
                <td><?php echo $clientes['nombre'];?></td>
                <td><?php echo $clientes['apellido'];?></td>
                <td><?php echo $clientes['fecha_nacimiento'];?></td>
                <td><?php echo $clientes['fecha_sucripcion'];?></td>
                <td><?php echo $clientes['correo_electronico'];?></td>
                <td><?php echo $clientes['telefono_movil'];?></td>
                <td>
                    <a class="btn btn-danger" href="<?=base_url('eliminar_cliente/').$clientes['cliente_id']?>">Eliminar</a><br>
                    <a class="btn btn-secondary" href="<?=base_url('actualizar_cliente/').$clientes['cliente_id']?>">Actualizar</a>
                </td>
            </tr>
            <?php
                endforeach;
            ?>
        </tbody>
    </table>
