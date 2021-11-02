<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesión</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>
</head>

<body class="h-screen bg-white relative flex flex-col space-y-10 justify-center items-center">

    <div class="bg-black md:shadow-lg shadow-none rounded-lg p-6 w-96" >
        <h1 class="text-3xl font-bold text-white text-center" >Iniciar Sesión</h1>

        <form class="space-y-5 mt-5">
            <div class="mb-4 relative">
                <label for="correo" class="text-sm font-bold text-white block mb-2">Correo</label>
                    <input type="email" id="correo" name="correo"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="example@gmail.com" required="true">
            </div>
            <div class="mb-4">
                <label for="email" class="text-sm font-bold text-white block mb-2 ">Contraseña</label>

                    <div class="inline-flex items-center space-x-20 rounded-md p-2 bg-gray-50 w-full"
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
            <div class="m-2">
                {{-- <a class="font-bold text-white hover:p-5 p-2 rounded-full  text-center " href="#">Forgot password?</a> --}}
            </div>
            <button class="w-full text-center bg-data-1 hover:bg-data-2 rounded-full text-white py-3 font-medium">Ingresar</button>
        </form>
    </div>
  {{--   <p>New to LinkedIn?<a class="text-blue-700 font-bold hover:bg-blue-200 hover:underline hover:p-5 p-2 rounded-full" href="#">Join now</a></p> --}}
</body>

</html>
