<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            color: #333;
        }
        table {
            margin: 0 auto;
            border-collapse: collapse;
            width: 60%;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
        }
    </style>
</head>
<body>
    <h1>Estos son tus datos:</h1>
    <table>

    
        <tr>
            <td>Nombre</td>
            <td><?php echo $_POST['nombre'] ?></td>
        </tr>
        <tr>
            <td>Apellidos</td>
            <td><?php echo $_POST['apellidos'] ?></td>
        </tr>
        <tr>
            <td>Ciudad</td>
            <td><?php echo $_POST['ciudad'] ?></td>
        </tr>
        <tr>
            <td>Código Postal</td>
            <td><?php echo $_POST['cpostal'] ?></td>
        </tr>
    </table>
</body>
</html>
