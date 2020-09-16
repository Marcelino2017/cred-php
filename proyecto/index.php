<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>Crud PHP</title>
</head>
<body>
<div class="row">

    <!--Formulario registro-->
    <div class="col l4" style="position: absolute; top:15%">
    <h4 class="blue-text ">Registros de Alumnos</h4> <br> <br>
        <form action="control.php" method="post" accept-charset="utf-8">

        <div class="input-field col l4">
            <input type="text" name="fecha" value="" placeholder="">
            <label for="">Fecha</label>
        </div>

        <div class="input-field col l12">
            <input type="text" name="nombre" value="" placeholder="">
            <label for="">Nombre</label>
        </div>
        <div class="input-field col l12">
            <input type="text" name="apellido" value="" placeholder="">
            <label for="">Apellido</label>
        </div>

        <div class="input-field col l4">
            <input type="text" name="edad" value="" placeholder="">
            <label for="">Edad</label>
        </div>

        <div class="input-field col l4">
            <input type="text" name="grado" value="" placeholder="">
            <label for="">Grado</label>
        </div>

        <div class="input-field col l4">
            <input type="text" name="turno" value="" placeholder="">
            <label for="">Turno</label>
        </div>

        <div class="input-field">
            <button type="submit" class="blue btn-small">Guardar</button>
        </div>
        </form>
    </div>

    <!--tabla-->
    <div class="col l7 offset-l5" style="position: absolute; top:15%">

        <table>
             <h4 class="blue-text ">Lista</h4> <br> <br>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Fecha de registro</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Edad</th>
                    <th>Grado</th>
                    <th>Turno</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>Alvin</td>
                    <td>Eclair</td>
                    <td>$0.87</td>
                    <td>$0.87</td>
                    <td>
                        <a href="#" class="btn btn-small">editar</a>
                    </td>
                </tr>
                
             </tbody>
        </table>
    </div>
</div>


















    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>