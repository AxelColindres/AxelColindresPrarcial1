<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nuevo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1>Nuevo Cliente</h1>
    <form action="<?php echo base_url('guardar_cliente')?>" method="post">
        <div class="mb-3">
            <label for="txtNombre" class="form-label">Nombre</label>
            <input type="text" name="txtNombre" id="txtNombre" aria-describedby="emailHelp">  
        </div>
        <div class="mb-3">
            <label for="txtApellido" class="form-label">Apellido</label>
            <input type="text" name="txtApellido" id="txtApellido" aria-describedby="emailHelp">  
        </div>
        <div class="mb-3">
            <label for="txtFechaNac" class="form-label">Fecha de nacimiento</label>
            <input type="date" name="txtFechaNac" id="txtFechaNac" aria-describedby="emailHelp">     
        </div>
        <div class="mb-3">
            <label for="txtFechaSub" class="form-label">Fecha de Subcripción</label>
            <input type="date" name="txtFechaSub" id="txtFechaSub" aria-describedby="emailHelp">     
        </div>
        <div class="mb-3">
            <label for="txtCorreo" class="form-label">Correo Electrónico</label>
            <input type="email" name="txtCorreo" id="txtCorreo" aria-describedby="emailHelp">     
        </div>
        <div class="mb-3">
            <label for="txtTelefono" class="form-label">Teléfono móvil</label>
            <input type="number" name="txtTelefono" id="txtTelefono" aria-describedby="emailHelp">     
        </div>



        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

</body>

</html>