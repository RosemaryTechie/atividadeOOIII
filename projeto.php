<?php

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #0f0202;
            text-align: left;
        }
        th {
            background-color: #670faf;
            color: white;
        }
        button {
            margin-top: 10px;
            padding: 5px 10px;
            background-color: #670faf;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #550b8a;
        }
    </style>
</head>
<body>

    <h1>Lista de Bebidas</h1>

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Tipo</th>
                <th>Preço</th>
                <th>Safra</th>
                <th>Sabor</th>
                <th>Retornável</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Vinho branco</td>
                <td><input type="text" placeholder="Ex: Vinho"></td>
                <td><input type="text" placeholder="Ex: R$ 89,00"></td>
                <td><input type="text" placeholder="Ex: 1972"></td>
                <td><input type="text" placeholder="Ex: N/A"></td>
                <td><input type="text" placeholder="Ex: N/A"></td>
                <td><button>Adicionar Vinho</button></td>
            </tr>
            <tr>
                <td>Suco de manga</td>
                <td><input type="text" placeholder="Ex: Suco"></td>
                <td><input type="text" placeholder="Ex: R$ 15,00"></td>
                <td><input type="text" placeholder="Ex: N/A"></td>
                <td><input type="text" placeholder="Ex: manga"></td>
                <td><input type="text" placeholder="Ex: N/A"></td>
                <td><button>Adicionar Suco</button></td>
            </tr>
            <tr>
                <td>Refrigerante Itubaina</td>
                <td><input type="text" placeholder="Ex: Refrigerante"></td>
                <td><input type="text" placeholder="Ex: R$ 6,00"></td>
                <td><input type="text" placeholder="Ex: N/A"></td>
                <td><input type="text" placeholder="Ex: N/A"></td>
                <td><input type="text" placeholder="Ex: Sim"></td>
                <td><button>Adicionar Refrigerante</button></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
