<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>CITAS APP / REGISTRO</title>
    <!-- Tailwind CSS-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    @if (session('success'))
    <div class="lg:max-w-screen-md m-auto">
        <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-700 px-4 py-3 shadow-md mt-5" role="alert">
            <div class="flex">
                <svg class="h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg>
                <div>
                    <p class="font-bold capitalize">enhorabuena {{ session('success')[0] }}</p>
                    <p class="text-sm">{{ session('success')[1] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if (session('error'))
    <div class="lg:max-w-screen-md m-auto">
        <div class="bg-red-100 border-t-4 border-red-500 rounded-b text-red-700 px-4 py-3 shadow-md mt-5" role="alert">
            <div class="flex">
                <svg class="h-6 w-6 text-red-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                </svg>
                <div>
                    <p class="font-bold">Lo sentimos</p>
                    <p class="text-sm">{!! session('error') !!}</p>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="flex items-center min-h-screen p-4 bg-white lg:justify-center">
        <div class="flex flex-col overflow-hidden bg-white rounded-md shadow-2xl max md:flex-row md:flex-1 lg:max-w-screen-md">
            <div class="p-4 py-6 text-white bg-indigo-400 md:w-80 md:flex-shrink-0 md:flex md:flex-col md:items-center md:justify-evenly">
                <div class="my-3 text-4xl font-bold tracking-wider text-center">
                    <a href="#" class="uppercase">citas-app</a>
                </div>
                <p class="mt-6 font-normal text-center text-white md:mt-0">
                    Ofrecer un incentivo económico equivalente al valor mensual de la Unidad de Medida y Actualización, hasta por 2 meses. Además de fomentar la reinserción laboral de las personas a través de capacitación y bolsa de trabajo.
                </p>
                <p class="mt-6 text-sm text-center text-white">
                    <a href="{{ route('home') }}" class="hover:underline font-bold">Regresar</a>
                </p>
            </div>
            <div class="p-5 bg-gray-100 md:flex-1">
                <h3 class="my-4 text-2xl text-purple-800 uppercase font-bold">Registro de citas</h3>
                <form action="{{ route('registroCita') }}" method="POST" class="flex flex-col space-y-5" id="frm-registro-cita" autocomplete="off">
                    <div class="flex flex-col space-y-1">
                        <label for="names" class="text-sm font-semibold text-gray-500">Nombre(s)</label>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="text" name="names" id="names" autofocus class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                    </div>
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-center justify-between">
                            <label for="surnames" class="text-sm font-semibold text-gray-500">Apellidos</label>
                        </div>
                        <input type="text" name="surnames" id="surnames" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                    </div>
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-center justify-between">
                            <label for="email" class="text-sm font-semibold text-gray-500">Correo electrónico</label>
                        </div>
                        <input type="email" name="email" id="email" class="px-4 py-2 transition duration-300 border border-gray-300 rounded focus:border-transparent focus:outline-none focus:ring-4 focus:ring-blue-200" />
                    </div>
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-center justify-between">
                            <label for="sede" class="text-sm font-semibold text-gray-500">Sede</label>
                        </div>
                        <select name="sede" id="sede" data-route="{{ route('consultaCitas') }}" class="block w-full border border-gray-300 text-grey-darker py-2 px-4 pr-8 rounded">
                            <option value="0">-- Selecciona una sede --</option>
                            @foreach ($sedes as $sede)
                            <option value="{{ $sede->id }}">{{ $sede->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <div class="flex items-center justify-between">
                            <label for="date" class="text-sm font-semibold text-gray-500">Fecha y hora de la cita</label>
                        </div>
                        <select name="date" id="date" class="block w-full border border-gray-300 text-grey-darker py-2 px-4 pr-8 rounded">
                            <option value="0">-- Selecciona una fecha --</option>
                        </select>
                    </div>
                    <div>
                        <button type="submit" class="w-full px-4 py-2 text-lg font-semibold text-white transition-colors duration-300 bg-indigo-400 rounded-md shadow hover:bg-indigo-500 focus:outline-none focus:ring-blue-200 focus:ring-4">
                            Registrarme
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/registro.js') }}"></script>
</body>

</html>