<x-app-layout>
    <x-slot name="header">
       

        </h2>
    </x-slot>

    <!--Tabla Clientes-->
        <div class="w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Index.blade
                    <!--Tabla de contenido-->
                    <div class="flex justify-between items-center py-4">
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            {{ __('Clientes') }} 
                        </h2>
                        <a href="{{ route('clientes.create') }}"
                            class="text-xs bg-gray-800 text-white rounded px-4 py-2">
                            Nuevo Cliente
                        </a>
                    </div>
                    <table class="min-w-full">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Id
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Nombre
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Contacto
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Form. Pago
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Met. Pago
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Tel. Cel
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Tel. Loc
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Correo 1
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Correo 2
                                </th>
                                <th
                                    class="px-6 py-3 bg-gray-50 text-left text-xs font-medium uppercase tracking-wider">
                                    Direccion
                                </th>
                                <!-- Agrega más encabezados de columna según tus necesidades -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('clientes.edit', $cliente) }}" class="text-indigo-600">Editar</a>
    
                                    </td>
                                    <td class="px-6 py-4">
                                        <form action=" {{ route('clientes.destroy', $cliente) }}" method="POST">
                                            <!--Hace que nuestro formulario sea seguro genera un token de seguridad-->
                                            @csrf
                                            <!--Le decimos que nuestra intencion es eliminar-->
                                            @method('DELETE')
    
                                            <input type="submit" value="Eliminar"
                                                class="bg-gray-800 text-white rounded px-4 py-2"
                                                onclick="return confirm('Desea eliminar?')">
                                        </form>
                                    </td>
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
                                    </td>

                                    <!-- Agrega más columnas según tus necesidades -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
