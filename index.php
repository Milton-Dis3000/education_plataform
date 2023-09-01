<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/dist/output.css" rel="stylesheet">

    <title>Login</title>

</head>

<body>

    <main class="bg-[#FFF5D2] h-screen flex flex-col justify-center items-center">
        <div class="flex flex-col items-center">
            <img src="img/login.png" alt="" class="self-center w-40 h-40 mb-4">

            <form action="./handle_db/LoginController.php" method="post" class="max-w-sm mx-auto my-4 p-4 bg-gray-100 shadow-md rounded">
                <label for="correo" class="block">Correo</label>
                <input type="email" id="correo" name="correo" class="w-full border border-gray-300 rounded px-3 py-2 mb-2">
                <label for="pass" class="block">Contraseña</label>
                <input type="password" id="pass" name="pass" class="w-full border border-gray-300 rounded px-3 py-2 mb-2">
                <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">Ingresar</button>
            </form>
        </div>
        <div class="bg-white mt-1 p-4 rounded">
            <h2 class="text-sm">Informacion Acceso <br></h2>
            <h2 class="text-sm">Admin <br> </h2>
            <h2 class="text-sm">User:admin@admin <br> pass:admin</h2>
            <h2 class="text-sm">Maestro <br> </h2>
            <h2 class="text-sm">User:maestro@maestro <br> pass:maestro</h2>
            <h2 class="text-sm">Alumno <br> </h2>
            <h2 class="text-sm">User:alumno@alumno <br> pass:alumno</h2>
        </div>

    </main>


</body>

</html>