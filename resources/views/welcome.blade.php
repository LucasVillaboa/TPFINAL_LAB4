@extends('layouts.app')

@section('title', 'Bienvenido')

@section('content')
<div class="container py-5">
    <!-- Encabezado principal -->
    <h1 class="text-center mb-5 text-white bg-primary py-3 rounded shadow">Sistema de Gestión Escolar</h1>

    <!-- Primer fila de opciones -->
    <div class="row g-4">
        <!-- Estudiantes -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-secondary text-white rounded-top">
                    <h3 class="card-title fs-5 text-center">Estudiantes</h3>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('students.index') }}" class="btn btn-primary w-100 shadow">Gestionar Estudiantes</a>
                </div>
            </div>
        </div>

        <!-- Materias -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-success text-white rounded-top">
                    <h3 class="card-title fs-5 text-center">Materias</h3>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('subjects.index') }}" class="btn btn-success w-100 shadow">Gestionar Materias</a>
                </div>
            </div>
        </div>

        <!-- Cursos -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-info text-white rounded-top">
                    <h3 class="card-title fs-5 text-center">Cursos</h3>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('courses.index') }}" class="btn btn-info w-100 shadow">Gestionar Cursos</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Segunda fila de opciones -->
    <div class="row g-4 mt-4">
        <!-- Comisiones -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-warning text-dark rounded-top">
                    <h3 class="card-title fs-5 text-center">Comisiones</h3>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('commissions.index') }}" class="btn btn-warning w-100 shadow">Gestionar Comisiones</a>
                </div>
            </div>
        </div>

        <!-- Profesores -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-danger text-white rounded-top">
                    <h3 class="card-title fs-5 text-center">Profesores</h3>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('professors.index') }}" class="btn btn-danger w-100 shadow">Gestionar Profesores</a>
                </div>
            </div>
        </div>

        <!-- Inscripciones -->
        <div class="col-md-4">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-dark text-white rounded-top">
                    <h3 class="card-title fs-5 text-center">Inscripciones</h3>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('course_students.index') }}" class="btn btn-dark w-100 shadow">Gestionar Inscripciones</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Tercera fila de opciones -->
    <div class="row g-4 mt-4">
        <!-- Reporte -->
        <div class="col-md-4 mx-auto">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top">
                    <h3 class="card-title fs-5 text-center">Reporte</h3>
                </div>
                <div class="card-body text-center">
                    <a href="{{ route('reports.index') }}" class="btn btn-primary w-100 shadow">Gestionar Reportes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection