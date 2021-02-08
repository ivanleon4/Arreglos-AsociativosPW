<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/bar.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Lista de Empleados</title>
</head>
<body>
<header>
        <div class="contenedor">
            <input type="checkbox" id="menu-bar"></input>
            <label class="icon-menu" for="menu-bar"></label>
            <nav class="menu">
                <a href="index.html">Registro de Empleados</a>
                <a href="index.html">inicio</a>
                <a href="index.html">Regresar</a>
            </nav>
        </div>
    </header>
<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $ci = $_POST['ci'];
    $campo = $_POST['nacionalidad'];
    $lugarTrabajo = $_POST['lugarTrabajo'];
    $departamento = $_POST['departamento'];
    $sueldo = $_POST['sueldo'];

    $nombre2 = $_POST['nombre2'];
    $apellido2 = $_POST['apellido2'];
    $ci2 = $_POST['ci2'];
    $campo2 = $_POST['nacionalidad2'];
    $lugarTrabajo2 = $_POST['lugarTrabajo2'];
    $departamento2 = $_POST['departamento2'];
    $sueldo2 = $_POST['sueldo2'];

    $nombre3 = $_POST['nombre3'];
    $apellido3 = $_POST['apellido3'];
    $ci3 = $_POST['ci3'];
    $campo3 = $_POST['nacionalidad3'];
    $lugarTrabajo3 = $_POST['lugarTrabajo3'];
    $departamento3 = $_POST['departamento3'];
    $sueldo3 = $_POST['sueldo3'];

    $empelados = array (
        array("nombre" => $_POST['nombre'],"apellido" => $_POST['apellido'], "nacionalidad" =>$_POST['nacionalidad'], "ci" =>$_POST['ci'], "lugarTrabajo" =>$_POST['lugarTrabajo'], "departamento" =>$_POST['departamento'], "sueldo" =>$_POST['sueldo']),
        array("nombre" => $_POST['nombre2'],"apellido" => $_POST['apellido2'], "nacionalidad" =>$_POST['nacionalidad2'], "ci" =>$_POST['ci2'], "lugarTrabajo" =>$_POST['lugarTrabajo2'], "departamento" =>$_POST['departamento2'], "sueldo" =>$_POST['sueldo2']),
        array("nombre" => $_POST['nombre3'],"apellido" => $_POST['apellido3'], "nacionalidad" =>$_POST['nacionalidad3'], "ci" =>$_POST['ci3'], "lugarTrabajo" =>$_POST['lugarTrabajo3'], "departamento" =>$_POST['departamento3'], "sueldo" =>$_POST['sueldo3'])
    );

    for($i=0; $i <=2; $i++){
    };

echo"<div class='container'>
    <div class='row'>
        <div class='col-md-12'>
            <div class='well well-sm'>
                    <fieldset>
                        <legend class='text-center header'>Resultado</legend>
                        <table class='table table-dark'>
                            <thead>
                              <tr>
                                <th scope='col'>Nombre</th>
                                <th scope='col'>Apellido</th>
                                <th scope='col'>Nacionalidad</th>
                                <th scope='col'>Cedula</th>
                                <th scope='col'>Lugar de Trabajo</th>
                                <th scope='col'>Departamento</th>
                                <th scope='col'>Sueldo</th>
                              </tr> 
                            </thead>
                            <tbody>
                              <tr>
                                <td> $nombre</td>
                                <td> $apellido </td>
                                <td> $campo </td>
                                <td> $ci </td>
                                <td> $lugarTrabajo </td>
                                <td> $departamento </td>
                                <td> $sueldo </td>
                              </tr>
                              <tr>
                                <td> $nombre2</td>
                                <td> $apellido2 </td>
                                <td> $campo2 </td>
                                <td> $ci2 </td>
                                <td> $lugarTrabajo2 </td>
                                <td> $departamento2 </td>
                                <td> $sueldo2 </td>
                              </tr>
                              <tr>
                                <td> $nombre3</td>
                                <td> $apellido3 </td>
                                <td> $campo3 </td>
                                <td> $ci3 </td>
                                <td> $lugarTrabajo3 </td>
                                <td> $departamento3 </td>
                                <td> $sueldo3 </td>
                              </tr>
                            </tbody>
                          </table>
                    </fieldset>
                </div>
            </div>
        </div> 
"?>
 <div><a class= 'btn btnregresar btn-dark' href='index.html'>Regresar</a> </div>
</body>
</html>