@extends('layouts.app')

@section('title', 'Materias')

@section('content')
<div class="container py-5">
    <a href="{{ route('welcome') }}" class="btn btn-primary btn-lg mb-4">  
        <i class="bi bi-arrow-left"></i> Volver
    </a>
    <h1 class="text-center mb-4">Gestión de Materias</h1>
    <a href="{{ route('subjects.create') }}" class="btn btn-outline-success mb-3">Crear Nueva Materia</a>

    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($subjects as $subject)
                <tr>
                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>
                        <a href="{{ route('subjects.edit', $subject->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('subjects.destroy', $subject->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection