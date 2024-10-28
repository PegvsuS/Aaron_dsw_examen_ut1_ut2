<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>
<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
        </div>
    @endif
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Mensaje</th>
                    <th>Subrayado</th>
                    <th>Negrita</th> 
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr>
                    <td>{{ $message->text }} </td> 
                    <td>{{ $message->negrita }}</td>
                    <td>{{ $message->subrayado }}</td> 
                <td>
            
            
        </td>
        </tr>
    </tbody>
</table>
    </div>
</body>
</html>