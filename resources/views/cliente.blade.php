@extends('template')

@section('content')
    Cliente.blade
    <div class="max-w-3xl mx-auto">
        <h1 class="text-5xl mb-8">{{ $cliente->nombre }}</h1>
        <p class="leading-loose text-lg text-gray-700">
            {{$cliente->direccion}}
        </p>
    </div>
@endsection