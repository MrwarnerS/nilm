<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>

<body class="bg-white">
    <div class="w-3/5 relative top-16 left-1/4 py-4 px-8 bg-black shadow-lg rounded-lg my-20">
        <div>
            <h2 class="text-white text-6xl font-semibold text-center">Registrar Usuario</h2>
            <form action="" method="post" class="mt-2 text-gray-600 grid grid-cols-2 gap-4">
                <div class="mb-6">
                    <label for="nombre" class="text-sm font-medium text-white block mb-2">Nombre</label>
                    <input type="text" id="nombre" name="nombre"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required="true">
                </div>
                <div class="mb-6">
                    <label for="correo" class="text-sm font-medium text-white block mb-2">Correo</label>
                    <input type="email" id="correo" name="correo"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="example@gmail.com" required="true">
                </div>
                <div class="">
                    <label for="direccion" class="text-sm font-medium text-white block mb-2">Direccion</label>
                    <input type="text" id="direccion" name="direccion"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="" required="true">
                </div>

                <!-- component -->
                <div class="mb-6 rounded overflow-hidden shadow-lg">
                    <label for="email" class="text-sm font-medium text-white block mb-2 ">Pais</label>
                    <select name="pais" id="" class="text-sm font-medium text-white block mb-2 w-full p-2.5 rounded-lg ">
                        <option value="" class="w-full p-2.5 rounded-lg ">Colombia</option>

                    </select>
                </div>
                <div class="mb-6">
                    <label for="email" class="text-sm font-medium text-white block mb-2">Contraseña</label>

                    <div class="inline-flex items-center space-x-40 rounded-md p-2 bg-gray-50 w-full"
                    x-data="{ isVisible: false }">
                    <input type="password" placeholder="password" name="contraseña"
                        class="focus:outline-none text-lg text-gray-900"
                        @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">

                    <button class="rounded-md pl-0 "
                        @click="$dispatch('visibility'); isVisible = !isVisible;">
                        <div x-show="isVisible">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                </path>
                            </svg>
                        </div>

                        <div x-show="!isVisible">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                </path>
                            </svg>
                        </div>
                    </button>
                </div>
                </div>
                <div class="mb-6">
                    <label for="email" class="text-sm font-medium text-white block mb-2">Confirmacion Contraseña</label>
                    <!-- component -->
                    <div class="inline-flex items-center space-x-40 rounded-md p-2 bg-gray-50 w-full"
                        x-data="{ isVisible: false }">
                        <input type="password" placeholder="password" name="cotraseñaConfirmacion" class="focus:outline-none text-lg text-gray-900"
                            @visibility.window="$el.type = ($el.type == 'password') ? 'text' : 'password' ">

                        <button class="rounded-md px-1 block" @click="$dispatch('visibility'); isVisible = !isVisible;">
                            <div x-show="isVisible">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </div>

                            <div x-show="!isVisible">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21">
                                    </path>
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>

            </form>
        </div>
        <div class="justify-end mt-4 grid grid-cols-2 gap-4">
            <a href="" class="bg-data-1 text-white text-center text-3xl p-2 rounded-lg">Cancelar</a> <input type="submit"
                class="bg-data-1 text-white text-center text-3xl p-2  rounded-lg" value="Registrarse">
        </div>
    </div>
</body>

</html>
