<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de Funcionários</title>
    <style>
        body {
            font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", "Noto Sans", "Liberation Sans",
            Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<h1>Relatório de Funcionários</h1>
<table>
    <thead>
    <tr>
        <th>Categoria</th>
        <th>Quantidade</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Total de funcionários do sexo masculino</td>
        <td>{{ $totalMen }}</td>
    </tr>
    <tr>
        <td>Total de funcionários do sexo feminino</td>
        <td>{{ $totalWomen }}</td>
    </tr>
    <tr>
        <td>Média de idade dos funcionários</td>
        <td>{{ $averageAge }}</td>
    </tr>
    <tr>
        <td>Idade da funcionária mais nova</td>
        <td>{{ $youngestAge }}</td>
    </tr>
    <tr>
        <td>Idade da funcionária mais velha</td>
        <td>{{ $oldestAge }}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
