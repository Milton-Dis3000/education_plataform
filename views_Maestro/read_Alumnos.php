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


    <title>Maestros</title>

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
                    <h2 class="text-xl">Maestro</h2>
                    <h2 class="text-xl">Maestro</h2>
                </div>
            </div>

            <div class="p-4 mb-4 flex flex-col ">
                <h2 class="text-lg">MENU MAESTROS</h2>



                <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
                    <span class="cursor-pointer"><i class="fa-solid fa-graduation-cap mr-2"></i></span>
                    <form action="/views_Maestro/read_Alumnos.php" method="post">
                        <button class="text-xl">Alumnos</button>
                    </form>
                </div>



            </div>
        </section>

        <section class="w-full md:w-4/5 h-auto bg-[#F5F6FA] text-[#ADADAD] ">

            <!-- toglleBar -->
            <nav>
                <div id="isologotipo" class="">
                    <span class="pl-4 pr-4 mr-2 cursor-pointer"><i class="fa-solid fa-bars"></i></span>
                    <a href="/views_Maestro/maestro.php">Home</a>
                </div>
                <ul>

                    <div id="toggleContainer">
                        <p>Maestro</p>

                        <div id="toggleIcons">

                            <i class="fa-solid fa-sort-down"></i>

                        </div>

                    </div>

                    <div id="toggleBar">

                        <div id="infeText">

                            <div id="profile">
                                <i class="fa-solid fa-circle-user"></i>

                                <a href="/views_Maestro/profile_maestro.php">My profile</a>
                            </div>

                            <hr>
                            <div id="logout">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>

                                <a href="/views_Maestro/maestro.php">Logout</a>

                            </div>
                        </div>

                    </div>
                </ul>
            </nav>

            <div class="pl-4  w-full h-auto flex ">
                <div class="pr-4flex-grow flex items-center">

                    <button class="text-[#353A40] text-2xl cursor-pointer">Alumnos de la Clase de Ciencias</button>

                </div>

                <div class="pl-4 pr-4 ml-auto">
                    <a href="/views_Maestro/maestro.php" class="underline hover:no-underline">Home</a>
                    <a href="/views_Admin/maestro_crud.php" class="underline hover:no-underline">Ciencias</a>
                </div>
            </div>


            <div class="p-3 flex justify-between items-center">
                <h2 class="text-lg font-semibold">Alumnos de la Clase de Ciencias</h2>

            </div>



            <!-- TABLE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

            <div class="container">
                <div class="table-responsive">
                    <table id="example" class="table table-striped">
                        <thead>
                            <tr>
                                <th class="py-2">#</th>
                                <th class="py-2">Nombre del Alumno</th>
                                <th class="py-2">Calificación</th>
                                <th class="py-2">Mensaje</th>
                                <th class="py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php

                            require_once($_SERVER["DOCUMENT_ROOT"] . "/handle_db/connection.php");
                            $query = "SELECT * 
                            FROM usuarios_datos 
                            INNER JOIN roles ON usuarios_datos.rol_id = roles.id_rol
                            INNER JOIN maestro_materia ON maestro_materia.maestro_id = usuarios_datos.id_ud
                            INNER JOIN materias ON maestro_materia.materia_id = materias.id_materia
                            WHERE usuarios_datos.rol_id = 3";
                            $stmt = $pdo->query($query);


                            if ($stmt) {
                                $rowNumber = 1; // Inicializar el contador

                                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                    // var_dump($row);
                            ?>
                                    <tr>
                                        <th class="text-sm text-gray-500">
                                            <?= $rowNumber ?>
                                        </th>

                                        <th class="text-sm text-gray-500">
                                            <?= $row["Nombre"] ?>
                                        </th>

                                        <th class="text-sm text-gray-500">
                                            <?= $row["calificacion"] ?>
                                        </th>

                                        <th class="text-sm text-gray-500">
                                            <?= $row["mensaje"] ?>
                                        </th>

                                        <th>
                                            <a href="/views_Maestro/edit_Calif.php ?id=<?= $row['id_mm'] ?>">
                                                <button class="text-gray-600 font-bold py-1 px-2 rounded text-xs">
                                                    <i class="far fa-pen-to-square text-blue-500 hover:text-blue-600"></i>
                                                </button>
                                            </a>
                                         
                                        </th>



                                    </tr>
                            <?php
                                    $rowNumber++; // Incrementar el contador
                                }
                            } else {
                                echo "Error en la consulta.";
                            }
                            ?>


                        </tbody>
                    </table>
                </div>
            </div>

            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>

        </section>
    </main>


</body>

</html>