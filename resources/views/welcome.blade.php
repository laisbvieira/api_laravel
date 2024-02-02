

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API de funcionários - Carries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow">
                <div class="card-body">
                    <img src="{{ asset('images/carries-logo.png') }}" alt="Logo da Carries" class="img-fluid img-thumbnail">
                    <h1 class="display-4 text-center mb-4">API de funcionários</h1>
                    <p class="lead text-center">Aplicação incrível construída com Laravel.</p>
                    <div class="card-body text-center">
                        <a href="/api/employees" class="btn btn-primary m-2">Ver Funcionários</a>
                        <a href="/api/employees/report" class="btn btn-info m-2">Relatório</a>

                    </div>
                    <hr class="my-4">

                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
