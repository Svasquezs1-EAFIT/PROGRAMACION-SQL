<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <link rel="stylesheet" href="./crudd.css">
</head>
<body>
    <div>
    <a href="http://localhost/PROGRAMACION-SQL/colegio/index.php">Regresar</a>
    </div>
        <div class="crud">
        
            <h1>CRUD DE ALUMNOS</h1>
        </div>
        <div class="crud_alumnos">
            <form action="crudalumdata.php" method="POST" class="eliminara">
                <h3>Eliminar</h3>
                <input type="text" name="codigoa" placeholder="Ingresa el Documento"> <br/>
                <input type="submit" value="Eliminar registro" name="eliminara" class="btn1"><br/>
            </form>

            <form action="crudalumdata.php" method="POST" class="actualizara">
                <h3>Actualizar</h3>
                <input type="text" name="codigoa" placeholder="Ingresa el Documento"> <br/>
                <input type="text" name="nombre" placeholder="Ingresa el Nombre"> <br/>
                <input type="text" name="programa" placeholder="Ingresa el Programa"> <br/>
                <input type="text" name="sexo" placeholder="Ingresa el sexo"> <br/>
                <input type="submit" value="Actualizar registro" name="actualizara" class="btn2"><br/>
            </form>

            <form action="crudalumdata.php" method="POST" class="buscara">
                <h3>Buscar</h3>
                <input type="text" name="codigoa" placeholder="Ingresa el Documento"> <br/>
                <input type="submit" value="Buscar registro" name="buscara" class="btn2"><br/>
            </form>
        </div>

        <div class="crud">
            <h1>CRUD DE NOTAS</h1>
        </div>
        <div class="crud_notas">
            <form action="crudnotadata.php" method="POST" class="eliminarn">
                <h3>Eliminar</h3>
                <input type="text" name="numeroregistro" placeholder="Ingresa el ID"> <br/>
                <input type="submit" value="Eliminar registro" name="eliminarn" class="btn1"><br/>
            </form>

            <form action="crudnotadata.php" method="POST" class="buscarn">
                <h3>Buscar</h3>
                <input type="text" name="numeroregistro" placeholder="Ingresa el ID"> <br/>
                <input type="submit" value="Buscar registro" name="buscarn" class="btn2"><br/>
            </form>
        </div>

        <div class="crud">
            <h1>CRUD DE MATERIAS</h1>
        </div>

        <div class="crud_materias">
            <form action="crudmatedata.php" method="POST" class="eliminarm">
                <h3>Eliminar</h3>
                <input type="text" name="codigom" placeholder="Ingresa el ID"> <br/>
                <input type="submit" value="Eliminar registro" name="eliminarm" class="btn1"><br/>
            </form>

            <form action="crudmatedata.php" method="POST" class="actualizarm">
                <h3>Actualizar</h3>
                <input type="text" name="codigom" placeholder="Ingresa el ID"> <br/>
                <input type="text" name="nombrem" placeholder="Nombre de la Materia"> <br/>
                <input type="text" name="grado" placeholder="Ingresa el Grado"> <br/>
                <input type="text" name="profesor" placeholder="Nombre del Docente"> <br/>
                <input type="submit" value="Actualizar registro" name="actualizarm" class="btn2"><br/>
            </form>

            <form action="crudmatedata.php" method="POST" class="buscarm">
                <h3>Buscar</h3>
                <input type="text" name="codigom" placeholder="Ingresa el ID"> <br/>
                <input type="submit" value="Buscar registro" name="buscarm" class="btn2"><br/>
            </form>
        </div>
</body>
</html>