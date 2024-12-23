@extends('layouts.app')

@section('content')
<div class="container py-5">
    <a href="{{ route('welcome') }}"  class="btn btn-primary btn-lg mb-4">  
        <i class="bi bi-arrow-left"></i> Volver
    </a>
    <h1 class="mb-4 text-center">Lista de Estudiantes</h1>

    <form method="GET" action="{{ route('students.index') }}" class="mb-4 p-4 border rounded shadow-lg" style="background-color: #e9f7fe;">
        <div class="row g-3 align-items-center">
            <!-- Campo de búsqueda por nombre -->
            <div class="col-md-4">
                <input type="text" name="name" class="form-control form-control-lg" placeholder="Buscar por nombre" value="{{ request('name') }}">
            </div>
            
            <!-- Selector de curso -->
            <div class="col-md-4">
                <select name="course" class="form-select form-select-lg">
                    <option value="">Todos los cursos</option>
                    @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ request('course') == $course->id ? 'selected' : '' }}>
                            {{ $course->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Botón de filtro -->
            <div class="col-md-4">
                <button type="submit" class="btn btn-success w-100 btn-lg">Filtrar</button>
            </div>
        </div>
    </form>

    <a href="{{ route('students.create') }}" class="btn btn-outline-primary mb-3">Crear Estudiante</a>

    <!-- Tabla de estudiantes -->
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline-block;">
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
    <div class="d-flex justify-content-center">
        {{ $students->links() }}
    </div>
</div>
@endsection