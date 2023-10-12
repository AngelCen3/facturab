<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('FacturaHome.blade') }}
        </h2>
    </x-slot>

    <div class="flex">
        <div class="w-64">
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
    </div>
</x-app-layout>
