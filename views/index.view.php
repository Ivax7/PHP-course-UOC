<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información Personal</title>
    <style>
        header {
            background-color: gray;
            text-align: center;
            padding: 2em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Información Personal</h1>
    </header>

    <nav>
        <ul>
            <li><a href="about.view.php">About Page</a></li>
            <li><a href="contact.view.php">Contact Page</a></li>
        </ul>
    </nav>


    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <strong>Nombre:</strong> <?= htmlspecialchars($task->Nombre); ?><br>
            </li>
            <li>
                <strong>Fecha de Nacimiento:</strong> <?= htmlspecialchars($task->Fecha_nacimiento); ?><br>
            </li>
            <li>
                <strong>Estudios:</strong> <?= htmlspecialchars($task->Estudios); ?><br>
            </li>
            <li>
                <strong>Trabajo:</strong> <?= htmlspecialchars($task->Trabajo); ?><br>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
