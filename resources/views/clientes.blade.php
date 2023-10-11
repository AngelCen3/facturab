@extends('template')

@section('content')
    <h1>Clientes Creo que no lo usamos BORRALO</h1>
    @foreach ($clientes as $cliente)
        <p>
            <strong>{{ $cliente->id }}</strong>
            <a href="{{ route('cliente', $cliente->id) }}">{{ $cliente->nombre }}
            </a>
            <br>
            <span>{{ $cliente->user->name }}</span>
        </p>           
    @endforeach
    {{ $clientes->links() }}
@endsection