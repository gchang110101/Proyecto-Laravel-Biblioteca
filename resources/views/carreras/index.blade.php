@extends('layouts.app')

@section('content')

<div class="container">
    <h2>Listado de Carreras</h2>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>descripcion</th>
                <th>Facultad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carreras as $carrera)
                <tr>
                    <td>{{ $carrera->codigo}}</td>
                    <td>{{ $carrera->nombre }}</td>
                    <td>{{ $carrera->descripcion }}</td>
                    <td>{{ $carrera->facultad }}</td>
                    <td>
                        <a href="{{ route('carreras.show', $carrera->id) }}">Ver</a>
                        <a href="{{ route('carreras.edit', $carrera->id) }}">Editar</a>
                        <form action="{{ route('carreras.destroy', $carrera->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form> 
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection