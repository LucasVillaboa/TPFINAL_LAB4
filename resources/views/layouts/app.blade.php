<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Gestión Escolar')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Fondo de toda la página */
        body {
            background-image: url('https://www.lanacion.com.ar/resizer/v2/credito-QS3KNYFVIFHPJLNBGX45PZCZSM.jpg?auth=50f38491ae3193337eeec020a127bcabf02e8cf5fade7ed15dd8923181e7d2a1&width=880&height=586&quality=70&smart=true'); /* URL de la imagen */
            background-size: cover; /* Asegura que la imagen cubra todo el fondo */
            background-position: center; /* Centra la imagen */
            background-repeat: no-repeat; /* Evita que la imagen se repita */
        }

        /* Contenedor principal */
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semi-transparente */
            border-radius: 10px; /* Bordes redondeados */
            padding: 20px; /* Espaciado interno */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra para destacar el contenedor */
        }
    </style>
</head>
<body>
    <!-- Contenedor principal centrado -->
    <div class="container mt-5 mb-5">
        <!-- Encabezado -->
        <header style="background-color: #ff7f50; color: #ffffff;" class="text-center py-3 rounded">
            <h1>Gestión Escolar</h1>
        </header>

        <!-- Contenido dentro del contenedor -->
        <div class="mt-4">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
