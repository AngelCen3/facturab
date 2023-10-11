@csrf

<label class="uppercase text-gray-700 text-xs"> Cliente</label>
<span class="text-xs text-red-600">@error('nombre'){{ $message }}@enderror</span>

<input type="text" name="nombre" class="rounded border-gray-200 w-full" 
value="{{ old('nombre', $cliente->nombre) }}">

<label class="uppercase text-gray-700 text-xs"> Correo Uno</label>
<span class="text-xs text-red-600">@error('correouno'){{ $message }}@enderror</span>

<input type="text" name="correouno" class="rounded border-gray-200 w-full" 
value="{{ old('correouno', $cliente->correouno) }}">

<label class="uppercase text-gray-700 text-xs"> Direccion</label>
<span class="text-xs text-red-600">
    @error('direccion')
        {{ $message }}
    @enderror
</span>

<textarea name="direccion" rows="5" class="rounded border-gray-200 w-full mb-4">{{ old('direccion', $cliente->direccion) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('clientes.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
