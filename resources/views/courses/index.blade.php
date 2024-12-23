@extends('layouts.app')

@section('title', 'Cursos')

@section('content')
<div class="container py-5">
    <a href="{{ route('welcome') }}" class="btn btn-primary btn-lg mb-4">  
        <i class="bi bi-arrow-left"></i> Volver
    </a>
    <h1 class="text-center mb-4">Gestión de Cursos</h1>

    <form method="GET" action="{{ route('courses.index') }}" class="mb-4 p-4 border rounded shadow-sm" style="background-color: #f8f9fa;">
        <div class="row g-3 align-items-center">
            <!-- Selector de materia con color gris -->
            <div class="col-md-6">
                <select name="subject" class="form-select" aria-label="Filtrar por materia">
                    <option value="">Filtrar por materia</option>
                    @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}" {{ request('subject') == $subject->id ? 'selected' : '' }}>
                            {{ $subject->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Botón de filtro con color gris -->
            <div class="col-md-6">
                <button type="submit" class="btn btn-outline-secondary w-100 mt-2">Filtrar</button>
            </div>
        </div>
    </form>

    <a href="{{ route('courses.create') }}" class="btn btn-outline-success mb-3">Crear Nuevo Curso</a>

    <!-- Tabla de cursos -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Materia</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->name }}</td>
                    <td>{{ $course->subject->name }}</td>
                    <td>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline-block;">
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

    <!-- Paginación -->
    {{ $courses->links() }}
</div>
@endsection