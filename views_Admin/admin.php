<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <script src="/Js/main.js" defer></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Vista Admin</title>
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
                    <h2 class="text-xl">Admin</h2>
                    <h2 class="text-xl">Administrador</h2>
                </div>
            </div>

            <div class="p-4 mb-4 flex flex-col ">
                <h2 class="text-lg">MENU ADMINISTRACIÓN</h2>

                <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
                    <span class="cursor-pointer"><i class="fa-solid fa-user-gear mr-2"></i></span>
                    <form action="./permiso_crud.php" method="post">
                        <button type="submit" class="text-xl">Permisos</button>
                    </form>
                </div>

                <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
                    <span class="cursor-pointer"><i class="fa-solid fa-chalkboard-user mr-2"></i></span>
                    <form action="./maestro_crud.php" method="post">
                        <button class="text-xl">Maestros</button>
                    </form>
                </div>


                <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
                    <span class="cursor-pointer"><i class="fa-solid fa-graduation-cap mr-2"></i></span>
                    <form action="/views_Admin/permiso_crud.php" method="post">
                        <button class="text-xl">Alumnos</button>
                    </form>
                </div>

                <div class="flex flex-row items-center border-b border-gray-600 pb-2 cursor-pointer hover:bg-gray-100">
                    <span class="cursor-pointer"><i class="fa-solid fa-laptop-code mr-2"></i></span>
                    <form action="/views_Admin/permiso_crud.php" method="post">
                        <button class="text-xl">Clases</button>
                    </form>
                </div>



            </div>
        </section>

        <section class="w-full md:w-4/5 h-auto bg-[#F5F6FA] text-[#ADADAD] ">

            <!-- toglleBar -->
            <nav>
                <div id="isologotipo" class="">
                    <span class="pl-4 pr-4 mr-2 cursor-pointer"><i class="fa-solid fa-bars"></i></span>
                    <a href="/views_Admin/admin.php">Home</a>
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

                                <a href="admin.php">My profile</a>
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

                    <button class="text-[#353A40] text-2xl cursor-pointer">Dashboard</button>
                </div>
            </div>

            <div class="bg-[#ffffff] p-4 mb-4 w-1/2 h-auto rounded-lg pb">
                <h2 class="text-sm">Bienvenido/a</h2>
                <h3 class="text-xs">Selecciona la acción que quieras realizar en las pestañas del menú de la izquierda</h3>
            </div>


        </section>
    </main>

</body>

</html>