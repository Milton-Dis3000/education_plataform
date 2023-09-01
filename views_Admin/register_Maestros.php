<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Nuevo Maestro</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <main class="w-11/12 sm:w-5/6 md:w-2/3 lg:w-1/2 xl:w-1/3 p-3 bg-white shadow-md rounded-lg">
        <div class="flex justify-between">
            <h1 class="p-3 text-2xl">Registrar Nuevo Maestro</h1>
            <a href="javascript:history.back()" class="text-gray-600 text-lg"><i class="fas fa-times mr-1"></i></a>
        </div>

        <form method="post" action="../handle_db/register_Maestrosdb.php" class="p-1">
            <div class="p-1">
                <label for="nombre" class="form-label">Nombre(s)</label>
                <input type="text" class="form-control p-1" name="nombre" id="nombre" required>
            </div>

            <div class="p-1">
                <label for="apellido" class="form-label">Apellido(s)</label>
                <input type="text" class="form-control p-1" name="apellido" id="apellido" required>
            </div>

            <div class="p-1">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control p-1" name="email" id="email" required>
            </div>

            <div class="p-2">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control p-1" name="direccion" id="direccion" required>
            </div>

            <div class="p-1">
                <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" class="form-control p-2" name="fecha_nacimiento" id="fecha_nacimiento" required>
            </div>

            <div class="p-1">
                <label for="materias" class="form-label">Clase Asignada</label>
                <select class="form-select p-1" aria-label="Default select example" name="materias" id="materias" required>
                    <option value="" selected disabled>Seleccionar Clase Asignada</option>
                    <?php
                    require_once("../handle_db/connection.php");
                    $query = "SELECT * FROM materias";
                    $stmt = $pdo->query($query);
                    while ($materia = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    ?>
                        <option value="<?= $materia["id_materia"] ?>"><?= $materia["nombre_materia"] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <div class="flex justify-end pt-3">
                <a href="maestro_crud.php" class="btn btn-gray p-2 mr-2">Close</a>
                <button type="submit" class="btn btn-primary p-2">Registrar</button>
            </div>
        </form>
    </main>
</body>

</html>