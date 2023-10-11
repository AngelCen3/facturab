@extends('template')

@section('content')
<div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8  gap-10 py-12">
    <div class="mt-4 flex justify-center">
        <!--Botones-->
        <button class="px-4 py-2 bg-slate-500 text-white font-bold rounded-md ml-2">Crear</button>
    </div>
    <div class="flex">
        <div class="w-64">
            <!--Dashboard-->
            <a href=""
                class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
                Emisores
            </a>
            <ul>
                <li class="mb-2">
                    <a href=""
                        class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                        <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                        Nueva Factura
                    </a>
                </li>
                <li class="mb-2">
                    <a href=""
                        class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                        <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                        Facturas
                    </a>
                </li>
                <li class="mb-2">
                    <a href=""
                        class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                        <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                        Clientes
                    </a>
                </li>
                <li class="mb-2">
                    <a href=""
                        class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                        <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                        Productos Servicios
                    </a>
                </li>
                <li class="mb-2">
                    <a href=""
                        class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                        <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                        Unidad de Medida
                    </a>
                </li>
                <li class="mb-2">
                    <a href=""
                        class="p-2 rounded-md flex bg-slate-800 items-center gap-2 text-white/60 hover:text-white font-semibold text-xs">
                        <span class="w-2 h-2 rounded-full" style="background-color: brown"></span>
                        Razon Social
                    </a>
                </li>
            </ul>
    
            <a href=""
                class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
                Configuracion
            </a>
            <a href=""
                class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
                Usuario
            </a>
            <a href=""
                class="block w-full py-4 mb-10 bg-gradient-to-r from-blue-600 to-blue-700 hover:to-blue-600 text-white/90 font-bold text-xs text-center rounded-md">
                Salir del Sistema
            </a>
        </div>
        <div class="w-full overflow-x-auto mx-5">
            <!--Tabla de contenido-->
            <h1 class="text-2xl font-bold text-white mb-4">Tabla de Clientes</h1>
            <table class="min-w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Id
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Nombre
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Contacto
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Form. Pago
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Met. Pago
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Tel. Cel
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Tel. Loc
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Correo 1
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Correo 2
                        </th>
                        <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                            Direccion
                        </th>
                        <!-- Agrega más encabezados de columna según tus necesidades -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>
                            <td class="px-6 py-4 bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->id }}
                            </td>
                            <td class="px-6 py-4 bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->nombre }}
                            </td>
                            <td class="px-6 py-4m bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->contacto }}
                            </td>
                            <td class="px-6 py-4m bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->forma_pago }}
                            </td>
                            <td class="px-6 py-4m bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->metodo_pago }}
                            </td>
                            <td class="px-6 py-4m bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->tel_celular }}
                            </td>
                            <td class="px-6 py-4m bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->tel_local }}
                            </td>
                            <td class="px-6 py-4m bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->correouno }}
                            </td>
                            <td class="px-6 py-4m bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->correodos }}
                            </td>
                            <td class="px-6 py-4m bg-gray-600 text-white whitespace-nowrap">
                                {{ $cliente->direccion }}
                                    <a href="{{ route('clientes.edit', $cliente) }}" class="text-indigo-600">Editar</a> 
                                                         
                            </td>
    
                            <!-- Agrega más columnas según tus necesidades -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
      
</div>
