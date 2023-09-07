<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="/dist/output.css" rel="stylesheet">
    <!-- Data table plugin-->
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="/Js/main.js" defer></script>
    <link rel="stylesheet" href="/css/style.css">


    <title>Profile Alumno</title>

</head>

<body>

    <main class="flex flex-col md:flex-row h-screen w-full ">
        <section class="flex flex-col w-full md:w-1/5 bg-[#353A40] text-[#B2B2B2]">
            <div class=" p-4 mb-4">
                <div class="flex justify-center items-center border-b border-gray-600 pb-2">
                    <img src="/img/circlelogo.png" alt="Logo" class="w-14 h-14 mr-4">
                    <h2 class="text-xl">Universidad</h2>
                </div>
            </div>

            <div class="p-4 mb-4">
                <div class="flex flex-col border-b border-gray-600 pb-2">
                    <h2 class="text-xl">Alumno</h2>
                    <h2 class="text-xl">Alumno</h2>
                </div>
            </div>

            <div class="p-4 mb-4 flex flex-col ">
                <h2 class="text-lg">MENU ALUMNO</h2>

              
                <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
                    <span class="cursor-pointer"><i class="fa-brands fa-stack-overflow"></i></span>
                    <form action="/views_Alumno/class_Admin.php" method="post">
                        <button class="text-xl">Tus clases</button>
                    </form>
                </div>

            </div>
        </section>

        <section class="w-full md:w-4/5 h-auto bg-[#F5F6FA] text-[#ADADAD] ">

            <!-- toglleBar -->
            <nav>
                <div id="isologotipo" class="">
                    <span class="pl-4 pr-4 mr-2 cursor-pointer"><i class="fa-solid fa-bars"></i></span>
                    <a href="/views_Alumno/alumno.php">Home</a>
                </div>
                <ul>

                    <div id="toggleContainer">
                        <p>Alumno</p>

                        <div id="toggleIcons">

                            <i class="fa-solid fa-sort-down"></i>

                        </div>

                    </div>

                    <div id="toggleBar">

                        <div id="infeText">

                            <div id="profile">
                                <i class="fa-solid fa-circle-user"></i>

                                <a href="profile_alumno.php">My profile</a>
                            </div>

                            <hr>
                            <div id="logout">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>

                                <a href="alumno.php">Logout</a>

                            </div>
                        </div>

                    </div>
                </ul>
            </nav>

            <div class="pl-4  w-full h-auto flex ">
                <div class="pr-4flex-grow flex items-center">

                    <button class="text-[#353A40] text-2xl cursor-pointer">Editar Datos de Perfil</button>

                </div>

            </div>

            <div class="container">
                <div class="table-responsive">
                    <?php
                    require_once("../handle_db/connection.php");
                    $usuario_id = $_SESSION['usuario_id'];

                    // Asegúrate de que el usuario tenga el rol_id igual a 2 (Maestro)
                    if ($_SESSION['rol_id'] == 3) {
                        $query = "SELECT * FROM usuarios_datos WHERE id_ud = :usuario_id";
                        $stmt = $pdo->prepare($query);
                        $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
                        $stmt->execute();

                        if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            // Aquí puedes mostrar los datos del usuario con rol_id igual a 2
                    ?>
                            <form method="post" action="../handle_db/maestro_profile_edit.php" class="p-1">
                                <div class="p-1">
                                    <label for="exampleInputEmail1" class="form-label">Email del Usuario</label>
                                    <input type="email" class="form-control p-1" name="Email" value="<?= $row["Correo"] ?>">
                                </div>

                                <div class="p-1">
                                    <label for="exampleInputEmail1" class="form-label">Contraseña/ ingresa para cambiar la contraseña</label>
                                    <input type="password" class="form-control p-1" name="Contra" value="">
                                </div>

                                <div class="p-1">
                                    <label for="exampleInputEmail1" class="form-label">Nombre(s)</label>
                                    <input type="text" class="form-control p-1" name="Nombre" value="<?= $row["Nombre"] ?>">
                                </div>

                                <div class="p-1">
                                    <label for="exampleInputEmail1" class="form-label">Apellidos(s)</label>
                                    <input type="text" class="form-control p-1" name="Apellido" value="<?= $row["Apellido"] ?>">
                                </div>

                                <div class="p-2">
                                    <label for="exampleInputEmail1" class="form-label">Dirección</label>
                                    <input type="text" class="form-control p-1" name="Direccion" value="<?= $row["Direccion"] ?>">
                                </div>

                                <div class="p-1">
                                    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                                    <input type="date" class="form-control p-2" name="Fecha_Nacimiento" value="<?= $row["Fecha_Nacimiento"] ?>">
                                </div>

                                <div class="flex justify-end pt-3">
                                    <button type="submit" class="btn btn-primary p-2">Actualizar</button>
                                </div>
                            </form>
                    <?php
                        } else {
                            // Maneja el caso en el que el usuario no sea encontrado
                            echo "El usuario no fue encontrado.";
                        }
                    } else {
                        // Maneja el caso en el que el usuario no tiene el rol de Maestro (rol_id no es igual a 2)
                        echo "No tienes permiso para acceder a esta página.";
                    }
                    ?>
                </div>
            </div>





        </section>
    </main>


</body>

</html>