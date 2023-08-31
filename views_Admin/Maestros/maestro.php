<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
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
                    <h2 class="text-xl">Maestro</h2>
                    <h2 class="text-xl">maestro maestro</h2>
                </div>
            </div>

            <div class="p-4 mb-4 flex flex-col ">
                <h2 class="text-lg">MENU MAESTRO</h2>

                <div class="flex flex-row items-center border-b border-gray-600 pb-2 pt-3 cursor-pointer hover:bg-gray-100">
                    <span class="cursor-pointer"><i class="fa-solid fa-user-gear mr-2"></i></span>


                    <div class="flex flex-row items-center cursor-pointer hover:bg-gray-100">
                        <span class="cursor-pointer"><i class="fa-solid fa-graduation-cap mr-2"></i></span>
                        <button class="text-xl">Alumnos</button>
                    </div>


                </div>
            </div>
        </section>

        <section class="w-full md:w-4/5 h-auto bg-[#F5F6FA] text-[#ADADAD] ">

            <div class="p-4 mb-4 bg-[#ffffff] w-full h-auto flex md:shadow-sm">
                <div class="pb-2 flex-grow flex items-center">
                    <span class="mr-2 cursor-pointer"><i class="fa-solid fa-bars"></i></span>
                    <button class="text-xl cursor-pointer">Home</button>
                </div>

                <div class="pb-2 ml-auto">
                    <button class="text-xl cursor-pointer">maestro maestro v</button>
                </div>
            </div>


            <div class="p-4 mb-4  w-full h-auto flex ">
                <div class="pb-2 flex-grow flex items-center">

                    <button class="text-[#353A40] text-2xl cursor-pointer">Dashboard</button>

                </div>

                <div class="pb-2 ml-auto">
                    <button>Home /</button>
                    <button>Dashboard</button>

                </div>
            </div>

            <div class="bg-[#ffffff] p-4 mb-4 w-1/2 h-auto rounded-lg">
                <h2>Bienvenido/a</h2>
                <h3>Selecciona la acción que quieras realizar en las pestañas del menú de la izquierda</h3>
            </div>

        </section>
    </main>

</body>

</html>