<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Mensaje</title>
    <link href="/css/estilos.css" rel="stylesheet"/>
</head>
<body>
    <h1>Editar Mensaje</h1>

    <form action="{{ route('message.actualizar', $message->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="message">Mensaje</label>
        <input type="text" name="message" id="message" value="{{ $message->message }}" required><br><br>

        <label for="negrita">Módulo:</label>
        <select name="negrita" id="negrita" required>
            <option value="">Selecciona</option>
            <option value="SI" {{ $message->negrita == 'SI' ? 'selected' : '' }}>SI</option>
            <option value="NO" {{ $message->negrita == 'NO' ? 'selected' : '' }}>NO</option>
        </select><br><br>

        <label for="subrayado">Módulo:</label>
        <select name="subrayado" id="subrayado" required>
            <option value="">Selecciona</option>
            <option value="SI" {{ $message->subrayado == 'SI' ? 'selected' : '' }}>SI</option>
            <option value="NO" {{ $message->subrayado == 'NO' ? 'selected' : '' }}>NO</option>
        </select><br><br>

        <button type="submit">Actualizar Duda</button>
    </form>

    <br>
    <a href="{{ route('messages') }}">Volver al listado</a>
</body>
</html>