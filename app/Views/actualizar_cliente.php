<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Actualizar Cliente</h1>
    <form action="<?php echo base_url('modificar_cliente')?>" method="post">
        <div class="mb-3">
            <label for="cliente_id" class="form-label">ID Cliente</label>
            <input type="text" name="txtClienteID" id="txtClienteID" aria-describedby="emailHelp" 
            value="<?=$datos['cliente_id']?>" readonly>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="txtNombre" id="txtNombre" aria-describedby="emailHelp" 
            value="<?=$datos['nombre']?>">  
        </div>
        <div class="mb-3">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="txtApellido" id="txtApellido" aria-describedby="emailHelp" 
            value="<?=$datos['apellido']?>">  
        </div>
        <div class="mb-3">
            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
            <input type="date" name="txtFechaNac" id="txtFechaNac" aria-describedby="emailHelp"
            value="<?=$datos['fecha_nacimiento']?>">     
        </div>
        <div class="mb-3">
            <label for="fecha_sucripcion" class="form-label">Fecha Subcripción</label>
            <input type="date" name="txtFechaSub" id="txtFechaSub" aria-describedby="emailHelp"
            value="<?=$datos['fecha_sucripcion']?>">     
        </div>
        <div class="mb-3">
            <label for="correo_electronico" class="form-label">Correo Electrónico</label>
            <input type="email" name="txtCorreo" id="txtCorreo" aria-describedby="emailHelp"
            value="<?=$datos['correo_electronico']?>">     
        </div>
        <div class="mb-3">
            <label for="telefono_movil" class="form-label">Teléfono Móvil</label>
            <input type="number" name="txtTelefono" id="txtTelefono" aria-describedby="emailHelp"
            value="<?=$datos['telefono_movil']?>">     
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>