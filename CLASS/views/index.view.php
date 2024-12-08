<?php require('partials/head.php'); ?>


    <h1>Información Personal</h1>

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


<?php require('partials/footer.php'); ?>
