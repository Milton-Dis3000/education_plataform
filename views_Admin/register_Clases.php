<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Clase</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <main class="w-11/12 sm:w-5/6 md:w-2/3 lg:w-1/2 xl:w-1/3 p-3 bg-white shadow-md rounded-lg">
        <div class="flex justify-between">
            <h1 class="p-3 text-2xl">Registrar Clase</h1>
            <a href="javascript:history.back()" class="text-gray-600 text-lg"><i class="fas fa-times mr-1"></i></a>
        </div>

        <form method="post" action="ruta_a_tu_script_php.php" class="p-1">
            <div class="p-1">
                <label for="nombre_materia" class="form-label">Nombre de la Materia</label>
                <input type="text" id="nombre_materia" class="form-control p-2" name="nombre_materia" required>
            </div>

            <label for="maestros" class="form-label">Maestro Asignado</label>
            <select class="form-select mb-3 p-1" aria-label="Default select example" name="maestros" required>
                <option value="" disabled>Selecciona un Maestro</option>
                <?php
                // Consulta para obtener la lista de maestros
                $query = "SELECT * FROM usuarios_datos WHERE rol_id = 2";
                $stmt = $pdo->query($query);
                while ($maestro = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <option value="<?= $maestro["id_ud"] ?>"><?= $maestro["Nombre"] ?></option>
                <?php
                }
                ?>
            </select>
            <div class="flex justify-end pt-3">
                <a href="maestro_crud.php" class="btn btn-gray p-2 mr-2">Close</a>
                <button type="submit" class="btn btn-primary p-2">Registrar</button>
            </div>
         
        </form>
    </main>
</body>

</html>