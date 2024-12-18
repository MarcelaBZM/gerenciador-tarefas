<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Gerenciador de Tarefas')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        background-image: url('{{ asset('images/background.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        height: 100vh;
        margin: 0;
        font-family: Arial, sans-serif;
        color: #5a4d4d; /* Cor de texto combinando com o tema rosa/bege */
    }

    .content {
        width: 100%;
        max-width: 800px; /* Define uma largura máxima */
        min-height: 60vh; /* Altura mínima reduzida para evitar ocupar a tela toda */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        background-color: rgba(255, 255, 255, 0.9); /* Fundo branco semi-transparente */
        padding: 30px;
        border-radius: 15px;
        margin: 50px auto; /* Centraliza horizontalmente com margem superior */
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para dar profundidade */
    }

    /* Personalização dos botões */
    .btn-primary {
        background-color: #d48f8f; /* Tom rosa */
        border-color: #d48f8f;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: #b87474; /* Tom rosa mais escuro */
        border-color: #b87474;
    }

    .btn-secondary {
        background-color: #e0c8b0; /* Tom bege */
        border-color: #e0c8b0;
        color: #fff;
    }

    .btn-secondary:hover {
        background-color: #c8ad96; /* Tom bege mais escuro */
        border-color: #c8ad96;
    }

    /* Estilização de cabeçalhos e links */
    h1, h2, h3 {
        color: #8b5e5e; /* Tom rosa escuro */
    }

    a {
        color: #d48f8f;
        text-decoration: none;
    }

    a:hover {
        color: #b87474;
        text-decoration: underline;
    }
    
</style>
</head>
<body>
    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
