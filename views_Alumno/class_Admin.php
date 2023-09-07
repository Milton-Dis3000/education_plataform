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
                        <p>Administrador</p>

                        <div id="toggleIcons">

                            <i class="fa-solid fa-sort-down"></i>

                        </div>

                    </div>

                    <div id="toggleBar">

                        <div id="infeText">

                            <div id="profile">
                                <i class="fa-solid fa-circle-user"></i>

                                <a href="/views_Alumno/profile_alumno.php">My profile</a>
                            </div>

                            <hr>
                            <div id="logout">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i>

                                <a href="../index.php">Logout</a>

                            </div>
                        </div>

                    </div>
                </ul>
            </nav>

            <div class="pl-4  w-full h-auto flex ">
                <div class="pr-4flex-grow flex items-center">

                    <button class="text-[#353A40] text-2xl cursor-pointer">Esquema de Clases</button>

                </div>

                <div class="pl-4 pr-4 ml-auto">
                    <a href="/views_Alumno/alumno.php" class="underline hover:no-underline">Home</a>
                    <a href="/views_Alumno/class_Admin.php" class="underline hover:no-underline">Clases</a>
                </div>
            </div>

            <!-- TABLE XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX-->

            <div class="pl-4 w-full h-auto flex flex-col md:flex-row">
                <!-- Columna Izquierda (Tabla de Materias Inscritas) -->
                <div class="w-full md:w-3/4 pr-4 mb-4">
                    <form action="procesar.php" method="post">
                        <div class="table-responsive">
                            <table id="tabla-materias-inscritas" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th class="py-2">#</th>
                                        <th class="py-2">Materia</th>
                                        <th class="py-2">Darse de Baja</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Aquí se mostrarán las materias inscritas dinámicamente -->
                                    <?php
                                    require_once("../handle_db/connection.php");
                                    $query = "SELECT * FROM materias"; // Reemplaza esto con tu consulta SQL real

                                    $stmt = $pdo->query($query);

                                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                        echo '<tr>';
                                        echo '<td class="text-sm text-gray-500">' . $row["id_materia"] . '</td>';
                                        echo '<td class="text-sm text-gray-500">' . $row["nombre_materia"] . '</td>';
                                        echo '<td>';
                                        echo '<a href="#"><button class="text-gray-600 font-bold py-1 px-2 rounded text-xs"><i class="fa-solid fa-trash-can text-red-500 hover:text-red-600"></i></button></a>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <!-- Columna Derecha (Materias Disponibles) -->
                <div class="w-full md:w-1/4 pl-4 mb-4 md:mb-0 rounded-md bg-white">
                    <h2 class="text-lg font-semibold">Materias Disponibles</h2>
                    <div class="bg-slate-600" id="materias-disponibles">
                        <?php
                        require_once("../handle_db/connection.php");
                        $query = "SELECT * FROM materias"; // Reemplaza esto con tu consulta SQL real

                        $stmt = $pdo->query($query);
                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                            echo '<button class="materia-disponible" data-nombre-materia="' . $row["nombre_materia"] . '">' . $row["nombre_materia"] . '</button>';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="flex justify-end p-3">
                <button type="submit" class="btn btn-primary p-2">Inscribir</button>
            </div>

            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const materiasDisponibles = document.getElementById('materias-disponibles');
                    const tablaMateriasInscritas = document.querySelector('#tabla-materias-inscritas tbody');
                    materiasDisponibles.addEventListener('click', function(e) {
                        if (e.target.classList.contains('materia-disponible')) {
                            const nombreMateria = e.target.dataset.nombreMateria;
                            const newRow = document.createElement('tr');
                            newRow.innerHTML = `
                <td></td>
                <td>${nombreMateria}</td>
                <td>
                    <a href="#">
                        <button class="text-gray-600 font-bold py-1 px-2 rounded text-xs">
                            <i class="fa-solid fa-trash-can text-red-500 hover:text-red-600"></i>
                        </button>
                    </a>
                </td>
            `;
                            tablaMateriasInscritas.appendChild(newRow);
                            e.target.remove();
                        }
                    });

                    tablaMateriasInscritas.addEventListener('click', function(e) {
                        if (e.target.classList.contains('fa-trash-can')) {
                            const row = e.target.closest('tr');
                            const nombreMateria = row.querySelector('td:nth-child(2)').textContent;

                            const newButton = document.createElement('button');
                            newButton.classList.add('materia-disponible');
                            newButton.dataset.nombreMateria = nombreMateria;
                            newButton.textContent = nombreMateria;
                            materiasDisponibles.appendChild(newButton);

                            row.remove();
                        }
                    });
                });
            </script>

        </section>
    </main>




</body>

</html>