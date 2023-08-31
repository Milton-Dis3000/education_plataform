<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Permisos</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-1/2 p-4 bg-white shadow-md rounded-lg">
        <div class="flex justify-between mb-4">
            <h1 class="text-2xl">Editar Permiso</h1>
            <a href="javascript:history.back()" class="text-gray-600 text-lg"><i class="fas fa-times mr-1"></i></a>
        </div>

        <form method="post" action="EditarForm.php" class="p-4">

            <div class="mb-3 p-2">
                <label for="exampleInputEmail1" class="form-label">Email del Usuario</label>
                <input type="email" class="form-control p-2" name="Email" value="">
            </div>

            <select class="form-select mb-3 p-2" aria-label="Default select example" name="rol">
                <option selected disabled>Seleccionar Rol</option>

            </select>

            <input type="hidden" name="id_ud" value="">

            <div class="flex justify-end">
                <button type="button" class="btn btn-gray p-2 mr-2">Close</button>
                <button type="submit" class="btn btn-primary p-2">Guardar Cambios</button>
            </div>
        </form>

    </div>
</body>

</html>

</html>