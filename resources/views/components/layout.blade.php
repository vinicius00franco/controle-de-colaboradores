
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/estilos.scss" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Controle de Colaboradoes</title>
</head>
<body>

    <main class=" p-5">
        {{-- Adicionando cards --}}
        <div>
            <h1>{{ $title }}</h1>
            {{ $slot }}
        </div>
        
    </main>


</body>
</html>        