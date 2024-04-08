
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">



    

    <title>Controle de Colaboradoes</title>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- header --}}
    <div class="container-fluid">
        <header class="border-bottom lh-1 py-3 bg-secondary">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-auto pt-1">
                    <img class="mx-5" src="{{ asset('storage/logotipo-empresa.png') }}" alt="Logotipo da Empresa" class="img-fluid" style="max-height: 4.5rem;"> <!-- Definindo um tamanho máximo para a altura da imagem -->
                </div>
                <div class="col-lg col-12 text-center"> 
                    <span class="text-body-emphasis display-4 fw-bold text-white">Controle de Colaboradores</span> <!-- Ajustado para telas menores -->            </div>
        </header>
    </div>
    

    <main class=" p-5">
        {{-- Adicionando cards --}}
        <section>
            <h1>{{ $title }}</h1>
            {{ $slot }}
        </section>
        
    </main>
    
    <div class="container-fluid ">
        <footer class="py-5 text-center text-white text-body-emphasis bg-secondary"> <!-- Alterada a classe para text-body-emphasis -->
            <p>Template de blog criado para Vinicius Franco Silva.</p> 
            <p> Linkedin: <a href="linkedin.com/in/vinicius-franco-silva-4292a420b" class="text-white"> linkedin.com/in/vinicius-franco-silva-4292a420b</a> </p>
            <p class="mb-0">
                <a href="#" class="text-white">Voltar ao topo</a> <!-- Ajustado o texto do link -->
            </p>
        </footer>
    </div>
    
</body>



</html>        